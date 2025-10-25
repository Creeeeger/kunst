(function () {
  var script = document.currentScript || (function () {
    var scripts = document.getElementsByTagName('script');
    return scripts[scripts.length - 1];
  })();

  if (!script) {
    return;
  }

  var scriptUrl = new URL(script.getAttribute('src'), window.location.href);
  var assetBase = new URL('./', scriptUrl);
  var rootUrl = new URL('../', assetBase);

  function normalizePath(pathname) {
    return pathname.replace(/index\.html$/, '').replace(/\/$/, '');
  }

  function buildNavigation() {
    var menuContainer = document.getElementById('site-menu');
    if (!menuContainer) {
      return;
    }

    var navItems = [
      { href: 'index.html', label: 'Startseite', className: 'sqrnavhome' },
      { href: 'ueber-uns/index.html', label: '\u00DCber mich' },
      { href: 'unsere-leistung/index.html', label: 'Meine Leistung' },
      { href: 'netzwerk/index.html', label: 'Netzwerk' },
      { href: 'kunst-als-kapitalanlage/index.html', label: 'Kapitalanlage' },
      { href: 'ausstellungen/index.html', label: 'Ausstellungen' },
      { href: 'kontakt-und-impressum/index.html', label: 'Kontakt' },
      { href: 'https://engl.haerle-kunstvermittlung.com/', label: '| Englisch |', external: true }
    ];

    var nav = document.createElement('nav');
    nav.className = 'sqrnav';

    var showLink = document.createElement('a');
    showLink.href = '#';
    showLink.className = 'sqrnavshow';
    showLink.textContent = 'Navigation \u00F6ffnen';
    nav.appendChild(showLink);

    var hideLink = document.createElement('a');
    hideLink.href = '#';
    hideLink.className = 'sqrnavhide';
    hideLink.textContent = 'Navigation schlie\u00DFen';
    nav.appendChild(hideLink);

    var list = document.createElement('ul');
    nav.appendChild(list);

    var currentPath = normalizePath(window.location.pathname);

    navItems.forEach(function (item) {
      var listItem = document.createElement('li');
      if (item.className) {
        listItem.className = item.className;
      }

      var linkUrl = item.external ? item.href : new URL(item.href, rootUrl).href;
      var link = document.createElement('a');
      link.href = linkUrl;
      var span = document.createElement('span');
      span.textContent = item.label;
      link.appendChild(span);
      listItem.appendChild(link);

      if (!item.external) {
        var targetPath = normalizePath(new URL(item.href, rootUrl).pathname);
        if (targetPath === currentPath) {
          listItem.className = (listItem.className ? listItem.className + ' ' : '') + 'sqrnavactive';
        }
      }

      list.appendChild(listItem);
    });

    menuContainer.replaceWith(nav);
  }

  function buildFooter() {
    var footerContainer = document.getElementById('site-footer');
    if (!footerContainer) {
      return;
    }

    var footer = document.createElement('footer');
    var linksWrapper = document.createElement('div');
    linksWrapper.className = 'sqrcommonlinks';

    var footerLinks = [
      { href: 'impressum.html', label: 'Impressum' },
      { href: 'cookies.html', label: 'Cookies' },
      { href: 'datenschutz.html', label: 'Datenschutz' },
      { href: 'haftungsausschluss.html', label: 'Haftungsausschluss' },
      { href: 'datenschutzformular.php', label: 'Datenschutzformular' }
    ];

    footerLinks.forEach(function (item) {
      var link = document.createElement('a');
      link.href = new URL(item.href, rootUrl).href;
      link.textContent = item.label;
      linksWrapper.appendChild(link);
    });

    footer.appendChild(linksWrapper);

    var footerText = document.createElement('div');
    footerText.className = 'sqrfootertext';
    footerText.textContent = '(c) H\u00E4rle 2025';
    footer.appendChild(footerText);

    footerContainer.replaceWith(footer);
  }

  buildNavigation();
  buildFooter();
})();
