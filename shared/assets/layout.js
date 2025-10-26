(function() {
  'use strict';

  const LAYOUT_CONFIG = {
    en: {
      navShow: 'Open navigation',
      navHide: 'Close navigation',
      home: { id: 'home', label: '>' },
      navItems: [
        { id: 'ueber-uns', href: 'ueber-uns/index.html', label: 'About me' },
        { id: 'unsere-leistung', href: 'unsere-leistung/index.html', label: 'My services' },
        { id: 'netzwerk', href: 'netzwerk/index.html', label: 'About my network' },
        { id: 'kunst-als-kapitalanlage', href: 'kunst-als-kapitalanlage/index.html', label: 'Art as an investment' },
        { id: 'ausstellungen', href: 'ausstellungen/index.html', label: 'Exhibitions (museums)' },
        { id: 'kontakt-und-impressum', href: 'kontakt-und-impressum/index.html', label: 'Contact and legal notice' }
      ],
      footerLinks: [
        { href: 'imprint.html', label: 'Imprint' },
        { href: 'cookies.html', label: 'Cookies' },
        { href: 'privacy.html', label: 'Privacy' },
        { href: 'disclaimer.html', label: 'Disclaimer' },
        { href: 'privacy-form.php', label: 'Privacy form' }
      ],
      quickLinksBase: ['home', 'ueber-uns', 'unsere-leistung', 'netzwerk', 'kunst-als-kapitalanlage', 'ausstellungen', 'kontakt-und-impressum'],
      quickLinksLabels: {
        home: 'HOME',
        'ueber-uns': 'About me',
        'unsere-leistung': 'My services',
        netzwerk: 'About my network',
        'kunst-als-kapitalanlage': 'Art as an investment',
        ausstellungen: 'Exhibitions (museums)',
        'kontakt-und-impressum': 'Contact and legal notice',
        'aktuelle-kuenstler': 'Current artists',
        downloads: 'Downloads'
      },
      quickLinksPaths: {
        'aktuelle-kuenstler': 'aktuelle-kuenstler/index.html',
        downloads: 'downloads/index.html'
      },
      languageSwitchLabel: '| German |'
    },
    de: {
      navShow: 'Navigation öffnen',
      navHide: 'Navigation schließen',
      home: { id: 'home', label: 'Startseite' },
      navItems: [
        { id: 'ueber-uns', href: 'ueber-uns/index.html', label: 'Über mich' },
        { id: 'unsere-leistung', href: 'unsere-leistung/index.html', label: 'Meine Leistung' },
        { id: 'netzwerk', href: 'netzwerk/index.html', label: 'Netzwerk' },
        { id: 'kunst-als-kapitalanlage', href: 'kunst-als-kapitalanlage/index.html', label: 'Kapitalanlage' },
        { id: 'ausstellungen', href: 'ausstellungen/index.html', label: 'Ausstellungen' },
        { id: 'kontakt-und-impressum', href: 'kontakt-und-impressum/index.html', label: 'Kontakt' }
      ],
      footerLinks: [
        { href: 'impressum.html', label: 'Impressum' },
        { href: 'cookies.html', label: 'Cookies' },
        { href: 'datenschutz.html', label: 'Datenschutz' },
        { href: 'haftungsausschluss.html', label: 'Haftungsausschluss' },
        { href: 'datenschutzformular.php', label: 'Datenschutzformular' }
      ],
      quickLinksBase: ['home', 'ueber-uns', 'unsere-leistung', 'netzwerk', 'kunst-als-kapitalanlage', 'ausstellungen', 'kontakt-und-impressum'],
      quickLinksLabels: {
        home: 'HOME',
        'ueber-uns': 'Über mich',
        'unsere-leistung': 'Meine Leistung',
        netzwerk: 'Über mein Netzwerk',
        'kunst-als-kapitalanlage': 'Kunst als Kapitalanlage',
        ausstellungen: 'Ausstellungen (Museen)',
        'kontakt-und-impressum': 'Kontakt und Impressum',
        'aktuelle-kuenstler': 'Aktuelle Künstler',
        downloads: 'Downloads'
      },
      quickLinksPaths: {
        'aktuelle-kuenstler': 'aktuelle-kuenstler/index.html',
        downloads: 'downloads/index.html'
      },
      languageSwitchLabel: '| Englisch |'
    }
  };

  function makeHref(rootPath, target) {
    if (!target) {
      return '#';
    }

    if (/^(?:[a-z]+:)?\/\//i.test(target) || target.startsWith('mailto:') || target.startsWith('tel:') || target.startsWith('#')) {
      return target;
    }

    if (target.startsWith('./') || target.startsWith('../')) {
      return target;
    }

    const root = rootPath === '' ? '.' : rootPath;

    if (root === '.' || root === './') {
      return target.startsWith('./') ? target : './' + target;
    }

    return root.replace(/\/$/, '') + '/' + target;
  }

  function buildNav(element, config, context) {
    if (!element) return;

    element.innerHTML = '';
    element.classList.add('sqrnav');

    const showLink = document.createElement('a');
    showLink.href = '#';
    showLink.className = 'sqrnavshow';
    showLink.textContent = config.navShow;

    const hideLink = document.createElement('a');
    hideLink.href = '#';
    hideLink.className = 'sqrnavhide';
    hideLink.textContent = config.navHide;

    const list = document.createElement('ul');

    const homeItem = document.createElement('li');
    homeItem.className = 'sqrnavhome';
    if (context.pageId === 'home') {
      homeItem.classList.add('sqrnavactive');
    }

    const homeLink = document.createElement('a');
    homeLink.href = makeHref(context.rootPath, 'index.html');
    const homeSpan = document.createElement('span');
    homeSpan.textContent = config.home.label;
    homeLink.appendChild(homeSpan);
    homeItem.appendChild(homeLink);
    list.appendChild(homeItem);

    config.navItems.forEach(function(item) {
      const li = document.createElement('li');
      if (item.id === context.pageId) {
        li.classList.add('sqrnavactive');
      }
      const link = document.createElement('a');
      link.href = makeHref(context.rootPath, item.href);
      const span = document.createElement('span');
      span.textContent = item.label;
      link.appendChild(span);
      li.appendChild(link);
      list.appendChild(li);
    });

    if (context.languageSwitch) {
      const li = document.createElement('li');
      const link = document.createElement('a');
      link.href = context.languageSwitch;
      const span = document.createElement('span');
      span.textContent = config.languageSwitchLabel;
      link.appendChild(span);
      li.appendChild(link);
      list.appendChild(li);
    }

    element.appendChild(showLink);
    element.appendChild(hideLink);
    element.appendChild(list);
  }

  function buildFooter(element, config, context) {
    if (!element) return;

    element.innerHTML = '';

    const linksContainer = document.createElement('div');
    linksContainer.className = 'sqrcommonlinks';

    config.footerLinks.forEach(function(linkDef) {
      const link = document.createElement('a');
      link.href = makeHref(context.rootPath, linkDef.href);
      link.textContent = linkDef.label;
      linksContainer.appendChild(link);
    });

    const footerText = document.createElement('div');
    footerText.className = 'sqrfootertext';
    footerText.textContent = '(c) Härle 2025';

    element.appendChild(linksContainer);
    element.appendChild(footerText);
  }

  function buildQuickLinks(elements, config, context) {
    elements.forEach(function(element) {
      const extras = element.dataset.extraLinks ? element.dataset.extraLinks.split(',').map(function(value) {
        return value.trim();
      }).filter(Boolean).map(function(entry) {
        const parts = entry.split('@');
        const extra = { id: (parts[0] || '').trim() };
        if (parts[1]) {
          const positionParts = parts[1].split('=');
          const type = (positionParts[0] || '').trim();
          const target = (positionParts[1] || '').trim();
          if (type === 'before' && target) {
            extra.before = target;
          } else if (type === 'after' && target) {
            extra.after = target;
          }
        }
        return extra;
      }) : [];

      const items = config.quickLinksBase ? config.quickLinksBase.slice() : [];
      const uniqueExtras = extras.filter(function(extra) {
        return extra.id;
      });

      uniqueExtras.forEach(function(extra) {
        const id = extra.id;
        const existingIndex = items.indexOf(id);
        if (existingIndex !== -1) {
          items.splice(existingIndex, 1);
        }

        var insertIndex = items.length;
        if (extra.before) {
          const beforeIndex = items.indexOf(extra.before);
          if (beforeIndex !== -1) {
            insertIndex = beforeIndex;
          }
        } else if (extra.after) {
          const afterIndex = items.indexOf(extra.after);
          if (afterIndex !== -1) {
            insertIndex = afterIndex + 1;
          }
        }

        items.splice(insertIndex, 0, id);
      });
      if (!items.length && !context.languageSwitch) {
        element.textContent = '';
        return;
      }

      element.innerHTML = '';
      element.classList.add('sqrquicklinks');

      element.appendChild(document.createTextNode('| '));

      const links = [];

      const seen = {};

      items.forEach(function(id) {
        if (seen[id]) return;
        seen[id] = true;
        const label = config.quickLinksLabels[id];
        if (!label) return;
        const link = document.createElement('a');
        link.className = 'link';
        link.title = '';
        const href = id === 'home' ? 'index.html' : findNavHref(config, id);
        link.href = makeHref(context.rootPath, href);
        link.textContent = label;
        links.push(link);
      });

      if (context.languageSwitch) {
        const link = document.createElement('a');
        link.className = 'link';
        link.title = '';
        link.href = context.languageSwitch;
        link.textContent = config.languageSwitchLabel.replace(/\|/g, '').trim();
        link.dataset.languageSwitch = 'true';
        links.push(link);
      }

      links.forEach(function(link, index) {
        if (index > 0) {
          element.appendChild(document.createTextNode(' | '));
        }
        element.appendChild(link);
      });

      element.appendChild(document.createTextNode(' |'));
    });
  }

  function findNavHref(config, id) {
    if (id === 'home') return 'index.html';
    const item = config.navItems.find(function(entry) {
      return entry.id === id;
    });
    if (item) {
      return item.href;
    }

    if (config.quickLinksPaths && config.quickLinksPaths[id]) {
      return config.quickLinksPaths[id];
    }

    return id;
  }

  document.addEventListener('DOMContentLoaded', function() {
    const body = document.body;
    const lang = body.dataset.lang;
    const config = LAYOUT_CONFIG[lang];
    if (!config) {
      return;
    }

    const context = {
      rootPath: (body.dataset.root || '.').replace(/\/$/, ''),
      pageId: body.dataset.page || 'home',
      languageSwitch: body.dataset.langSwitch || ''
    };

    const navElement = document.querySelector('[data-layout="nav"]');
    buildNav(navElement, config, context);

    const footerElement = document.querySelector('[data-layout="footer"]');
    buildFooter(footerElement, config, context);

    const quickLinkElements = Array.prototype.slice.call(document.querySelectorAll('[data-layout="quick-links"]'));
    buildQuickLinks(quickLinkElements, config, context);
  });
})();
