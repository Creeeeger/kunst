(function () {
  function onReady(callback) {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', callback);
    } else {
      callback();
    }
  }

  function normaliseRootPath(value) {
    if (!value) {
      return './';
    }
    var trimmed = value.trim();
    if (!trimmed) {
      return './';
    }
    if (trimmed.slice(-1) !== '/') {
      trimmed += '/';
    }
    return trimmed;
  }

  function setRelativeLinks(container, selector, rootPathAttribute) {
    var rootPath = normaliseRootPath(document.body.getAttribute(rootPathAttribute));
    var links = container.querySelectorAll(selector);
    links.forEach(function (link) {
      var target = link.getAttribute('data-nav-href') || link.getAttribute('data-footer-href');
      if (!target) {
        return;
      }
      if (/^[a-z]+:\/\//i.test(target)) {
        link.setAttribute('href', target);
      } else {
        link.setAttribute('href', rootPath + target);
      }
    });
  }

  function applyActiveNavigation(navContainer) {
    var activeId = document.body.getAttribute('data-page');
    if (!activeId) {
      return;
    }
    var activeElement = navContainer.querySelector('[data-nav-item="' + activeId + '"]');
    if (!activeElement) {
      return;
    }
    navContainer.querySelectorAll('[data-nav-item]').forEach(function (item) {
      item.classList.remove('sqrnavactive');
    });
    activeElement.classList.add('sqrnavactive');
  }

  function injectFragment(selector, fragmentPath, afterLoad) {
    var container = document.querySelector(selector);
    if (!container) {
      return;
    }

    var rootPath = normaliseRootPath(document.body.getAttribute('data-root'));
    var requestPath = rootPath + 'fragments/' + fragmentPath;

    fetch(requestPath, { credentials: 'same-origin' })
      .then(function (response) {
        if (!response.ok) {
          throw new Error('HTTP ' + response.status + ' while loading ' + requestPath);
        }
        return response.text();
      })
      .then(function (markup) {
        container.innerHTML = markup;
        if (typeof afterLoad === 'function') {
          afterLoad(container);
        }
      })
      .catch(function (error) {
        console.error('Konnte Fragment nicht laden:', error);
      });
  }

  onReady(function () {
    injectFragment('nav.sqrnav', 'navigation.html', function (navContainer) {
      setRelativeLinks(navContainer, '[data-nav-href]', 'data-root');
      applyActiveNavigation(navContainer);
    });

    injectFragment('footer', 'footer.html', function (footerContainer) {
      setRelativeLinks(footerContainer, '[data-footer-href]', 'data-root');
    });
  });
})();
