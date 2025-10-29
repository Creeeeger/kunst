(function() {
  'use strict';

  const LAYOUT_CONFIG = {
    en: {
      navShow: 'Open navigation',
      navHide: 'Close navigation',
      home: { id: 'home', label: 'Home' },
      navItems: [
        { id: 'about-us', href: 'about-us/index.html', label: 'About me' },
        { id: 'my-services', href: 'my-services/index.html', label: 'My services' },
        { id: 'network', href: 'network/index.html', label: 'About my network' },
        { id: 'art-as-investment', href: 'art-as-investment/index.html', label: 'Art as an investment' },
        { id: 'exhibitions', href: 'exhibitions/index.html', label: 'Exhibitions (museums)' },
        { id: 'contact-and-legal-notice', href: 'contact-and-legal-notice/index.html', label: 'Contact and legal notice' }
      ],
      footerLinks: [
        { href: 'imprint/index.html', label: 'Imprint' },
        { href: 'cookies/index.html', label: 'Cookies' },
        { href: 'privacy/index.html', label: 'Privacy' },
        { href: 'disclaimer/index.html', label: 'Disclaimer' },
        { href: 'privacy-form/index.php', label: 'Privacy form' }
      ],
      quickLinksBase: ['home', 'about-us', 'my-services', 'network', 'art-as-investment', 'exhibitions', 'contact-and-legal-notice'],
      quickLinksLabels: {
        home: 'HOME',
        'about-us': 'About me',
        'my-services': 'My services',
        network: 'About my network',
        'art-as-investment': 'Art as an investment',
        exhibitions: 'Exhibitions (museums)',
        'contact-and-legal-notice': 'Contact and legal notice',
        'current-artists': 'Current artists',
        downloads: 'Downloads'
      },
      quickLinksPaths: {
        'current-artists': 'current-artists/index.html',
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
        { href: 'impressum/index.html', label: 'Impressum' },
        { href: 'cookies/index.html', label: 'Cookies' },
        { href: 'datenschutz/index.html', label: 'Datenschutz' },
        { href: 'haftungsausschluss/index.html', label: 'Haftungsausschluss' },
        { href: 'datenschutzformular/index.php', label: 'Datenschutzformular' }
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

  const SEO_CONFIG = {
    en: {
      settings: {
        siteName: 'Dagmar Härle Art Advisory',
        locale: 'en_GB',
        alternateLocale: 'de_DE'
      },
      pages: {
        home: {
          title: 'Dagmar Härle Art Advisory – Tailored fine art mediation & consulting',
          description: 'Dagmar Härle Art Advisory offers bespoke mediation for high-value art, uniting collections with cultural partners through trusted expertise and an international network.',
          keywords: 'Art advisory, art mediation, art consulting, Dagmar Härle'
        },
        'about-us': {
          title: 'About Dagmar Härle – Art advisor with a strong international network',
          description: 'Learn more about art advisor Dagmar Härle and her decades of experience mediating meaningful encounters with outstanding works of art worldwide.',
          keywords: 'Dagmar Härle, art advisor, art mediation, art consulting'
        },
        'my-services': {
          title: 'Services – Personal art mediation & consulting by Dagmar Härle',
          description: 'Discover the services offered by Dagmar Härle Art Advisory: valuations, curatorial concepts, and bespoke mediation for significant art collections.',
          keywords: 'Art consulting services, art valuation, art mediation, bespoke art concepts'
        },
        network: {
          title: 'Network – Trusted partners of Dagmar Härle Art Advisory',
          description: 'Meet the trusted network of museums, galleries, experts, and collectors that collaborate with Dagmar Härle Art Advisory on cultural projects.',
          keywords: 'Art network, art galleries, museum partners, art mediation'
        },
        'art-as-investment': {
          title: 'Art as an investment – Strategic guidance by Dagmar Härle',
          description: 'Strategic guidance on how to position art collections for long-term value with the expertise of Dagmar Härle Art Advisory.',
          keywords: 'Art investment, art strategy, art portfolio, art consulting'
        },
        exhibitions: {
          title: 'Exhibitions – Museum collaborations curated with Dagmar Härle',
          description: 'Highlights of museum exhibitions and collaborations curated and supported by Dagmar Härle Art Advisory.',
          keywords: 'Art exhibitions, museum collaborations, curated art shows'
        },
        'contact-and-legal-notice': {
          title: 'Contact & legal notice – Dagmar Härle Art Advisory',
          description: 'Contact Dagmar Härle Art Advisory – address, email, legal notice, and imprint information in English.',
          keywords: 'Art advisory contact, Dagmar Härle contact, legal notice'
        },
        'current-artists': {
          title: 'Current artists – Artistic positions mediated by Dagmar Härle',
          description: 'Explore outstanding artists presented and mediated by Dagmar Härle Art Advisory.',
          keywords: 'Current artists, art portfolio, art mediation'
        },
        downloads: {
          title: 'Downloads – Resources from Dagmar Härle Art Advisory',
          description: 'Downloads from Dagmar Härle Art Advisory including forms, brochures, and key information for clients.',
          keywords: 'Art advisory downloads, art forms, art resources'
        },
        cookies: {
          title: 'Cookies – Dagmar Härle Art Advisory',
          description: 'Cookie information for the Dagmar Härle Art Advisory website.',
          keywords: 'Cookie policy, website cookies'
        },
        privacy: {
          title: 'Privacy policy – Dagmar Härle Art Advisory',
          description: 'Privacy policy of Dagmar Härle Art Advisory explaining how personal data is protected.',
          keywords: 'Privacy policy, data protection, art advisory privacy'
        },
        'privacy-form': {
          title: 'Privacy request form – Dagmar Härle Art Advisory',
          description: 'Online privacy request form for Dagmar Härle Art Advisory clients and partners.',
          keywords: 'Privacy form, data request form'
        },
        disclaimer: {
          title: 'Disclaimer – Dagmar Härle Art Advisory',
          description: 'Disclaimer for the Dagmar Härle Art Advisory website.',
          keywords: 'Disclaimer, legal notice'
        },
        imprint: {
          title: 'Imprint – Dagmar Härle Art Advisory',
          description: 'Imprint of Dagmar Härle Art Advisory – legal information and company details.',
          keywords: 'Imprint, company information, legal disclosure'
        },
        'thank-you': {
          title: 'Thank you – Dagmar Härle Art Advisory',
          description: 'Thank you for contacting Dagmar Härle Art Advisory. We will be in touch shortly.',
          keywords: 'Thank you, contact confirmation'
        }
      }
    },
    de: {
      settings: {
        siteName: 'Dagmar Härle Kunstvermittlung',
        locale: 'de_DE',
        alternateLocale: 'en_GB'
      },
      pages: {
        home: {
          title: 'Dagmar Härle Kunstvermittlung – Individuelle Kunstvermittlung & Beratung',
          description: 'Dagmar Härle Kunstvermittlung begleitet Sie persönlich bei der Vermittlung hochwertiger Kunst – diskret, zuverlässig und mit einem starken internationalen Netzwerk.',
          keywords: 'Kunstvermittlung, Kunstberatung, Kunstexpertin, Dagmar Härle'
        },
        'ueber-uns': {
          title: 'Über Dagmar Härle – Ihre Kunstvermittlerin mit internationalem Netzwerk',
          description: 'Erfahren Sie mehr über Dagmar Härle, Ihre Expertin für Kunstvermittlung, die inspirierende Begegnungen mit bedeutenden Kunstwerken ermöglicht.',
          keywords: 'Dagmar Härle, Kunstvermittlerin, Kunstberatung'
        },
        'unsere-leistung': {
          title: 'Leistungen – Individuelle Kunstberatung & Vermittlung von Dagmar Härle',
          description: 'Entdecken Sie die Leistungen von Dagmar Härle – von der Kunstbewertung über kuratorische Konzepte bis zur Vermittlung maßgeschneiderter Kunstprojekte.',
          keywords: 'Kunstberatung Leistungen, Kunstbewertung, Kunstvermittlung'
        },
        netzwerk: {
          title: 'Netzwerk – Verlässliche Partner der Dagmar Härle Kunstvermittlung',
          description: 'Lernen Sie das exklusive Netzwerk von Dagmar Härle kennen – vertrauensvolle Partner für Museen, Galerien, Gutachter und Kunstsammlerinnen.',
          keywords: 'Kunst Netzwerk, Kunstpartner, Galerien, Museen'
        },
        'kunst-als-kapitalanlage': {
          title: 'Kunst als Kapitalanlage – Strategien von Dagmar Härle',
          description: 'Wie Sie Kunstwerke als werthaltige Kapitalanlage nutzen: Strategische Begleitung von Dagmar Härle für Sammlerinnen und Sammler.',
          keywords: 'Kunst Kapitalanlage, Kunst Investment, Kunststrategie'
        },
        ausstellungen: {
          title: 'Ausstellungen – Museale Projekte mit Dagmar Härle',
          description: 'Aktuelle und vergangene Ausstellungen, die Dagmar Härle mitgestaltet hat – Einblicke in museale Projekte und Künstlerkontakte.',
          keywords: 'Kunstausstellungen, Museen, Kunstprojekte'
        },
        'kontakt-und-impressum': {
          title: 'Kontakt & Impressum – Dagmar Härle Kunstvermittlung',
          description: 'Kontaktieren Sie Dagmar Härle Kunstvermittlung in Freiberg am Neckar – alle Kontaktdaten und Impressum auf einen Blick.',
          keywords: 'Kontakt Kunstvermittlung, Dagmar Härle Kontakt, Impressum'
        },
        'aktuelle-kuenstler': {
          title: 'Aktuelle Künstler – Portfolio der Dagmar Härle Kunstvermittlung',
          description: 'Aktuelle Künstler im Portfolio von Dagmar Härle Kunstvermittlung – ausgewählte Werke etablierter und aufstrebender Positionen für inspirierende Vermittlungsprojekte.',
          keywords: 'Aktuelle Künstler, Kunstportfolio, Kunstvermittlung'
        },
        downloads: {
          title: 'Downloads – Informationen der Dagmar Härle Kunstvermittlung',
          description: 'Praktische Downloads der Dagmar Härle Kunstvermittlung – Formulare, Informationen und weiterführende Unterlagen.',
          keywords: 'Downloads, Formulare, Kunstinformationen'
        },
        cookies: {
          title: 'Cookies – Dagmar Härle Kunstvermittlung',
          description: 'Informationen zu Cookies der Website der Dagmar Härle Kunstvermittlung.',
          keywords: 'Cookie-Richtlinie, Website Cookies'
        },
        datenschutz: {
          title: 'Datenschutz – Dagmar Härle Kunstvermittlung',
          description: 'Datenschutzerklärung der Dagmar Härle Kunstvermittlung – Schutz Ihrer personenbezogenen Daten.',
          keywords: 'Datenschutz, Datenschutzrichtlinie, personenbezogene Daten'
        },
        datenschutzformular: {
          title: 'Datenschutzformular – Dagmar Härle Kunstvermittlung',
          description: 'Online-Formular zur Ausübung Ihrer Datenschutzrechte bei der Dagmar Härle Kunstvermittlung.',
          keywords: 'Datenschutzformular, Auskunftsantrag'
        },
        haftungsausschluss: {
          title: 'Haftungsausschluss – Dagmar Härle Kunstvermittlung',
          description: 'Haftungsausschluss der Dagmar Härle Kunstvermittlung – rechtliche Hinweise zur Nutzung der Website.',
          keywords: 'Haftungsausschluss, rechtliche Hinweise'
        },
        impressum: {
          title: 'Impressum – Dagmar Härle Kunstvermittlung',
          description: 'Impressum der Dagmar Härle Kunstvermittlung – Angaben nach §5 TMG.',
          keywords: 'Impressum, Anbieterkennzeichnung'
        },
        'vielen-dank': {
          title: 'Vielen Dank – Dagmar Härle Kunstvermittlung',
          description: 'Vielen Dank für Ihre Nachricht an Dagmar Härle Kunstvermittlung. Wir melden uns in Kürze.',
          keywords: 'Vielen Dank, Kontaktbestätigung'
        }
      }
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

  function resolveUrl(url, base) {
    try {
      return new URL(url, base || window.location.href).toString();
    } catch (error) {
      var anchor = document.createElement('a');
      anchor.href = url;
      return anchor.href;
    }
  }

  function updateMeta(name, content) {
    if (!content) return;
    var meta = document.querySelector('meta[name="' + name + '"]');
    if (!meta) {
      meta = document.createElement('meta');
      meta.setAttribute('name', name);
      document.head.appendChild(meta);
    }
    meta.setAttribute('content', content);
  }

  function updatePropertyMeta(property, content) {
    if (!content) return;
    var meta = document.querySelector('meta[property="' + property + '"]');
    if (!meta) {
      meta = document.createElement('meta');
      meta.setAttribute('property', property);
      document.head.appendChild(meta);
    }
    meta.setAttribute('content', content);
  }

  function ensureLink(rel, hreflang, href) {
    if (!href) return;
    var selector = 'link[rel="' + rel + '"]' + (hreflang ? '[hreflang="' + hreflang + '"]' : '');
    var link = document.querySelector(selector);
    if (!link) {
      link = document.createElement('link');
      link.rel = rel;
      if (hreflang) {
        link.setAttribute('hreflang', hreflang);
      }
      document.head.appendChild(link);
    }
    link.setAttribute('href', href);
  }

  function ensureStructuredData(lang, canonicalUrl) {
    var existing = document.querySelector('script[data-structured="seo"]');
    if (existing) return;

    var data = {
      '@context': 'https://schema.org',
      '@type': 'ProfessionalService',
      name: lang === 'de' ? 'Dagmar Härle Kunstvermittlung' : 'Dagmar Härle Art Advisory',
      url: canonicalUrl,
      image: resolveUrl('/shared/images/dagmar_haerle.jpg'),
      telephone: '+49-172-7314160',
      email: lang === 'de' ? 'kontakt@haerle-kunstvermittlung.com' : 'contact@haerle-kunstvermittlung.com',
      address: {
        '@type': 'PostalAddress',
        streetAddress: 'Grünlandstr. 1',
        postalCode: '71691',
        addressLocality: 'Freiberg am Neckar',
        addressCountry: 'DE'
      },
      areaServed: lang === 'de' ? ['Deutschland', 'International'] : ['Germany', 'International'],
      inLanguage: lang
    };

    var script = document.createElement('script');
    script.type = 'application/ld+json';
    script.setAttribute('data-structured', 'seo');
    script.textContent = JSON.stringify(data);
    document.body.appendChild(script);
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

    const seoConfig = SEO_CONFIG[lang];
    const pageSeo = seoConfig && seoConfig.pages && (seoConfig.pages[context.pageId] || seoConfig.pages.default);
    const canonical = document.querySelector('link[rel="canonical"]');
    var canonicalHref = canonical ? canonical.getAttribute('href') : '';
    if (canonicalHref) {
      const absoluteCanonical = resolveUrl(canonicalHref);
      canonical.setAttribute('href', absoluteCanonical);
      if (seoConfig && seoConfig.settings) {
        updatePropertyMeta('og:url', absoluteCanonical);
      }
      ensureLink('alternate', lang, absoluteCanonical);
      ensureLink('alternate', 'x-default', resolveUrl('/index.html'));
      if (context.languageSwitch) {
        const otherLang = lang === 'de' ? 'en' : 'de';
        ensureLink('alternate', otherLang, resolveUrl(context.languageSwitch));
      }
      ensureStructuredData(lang, absoluteCanonical);
    }

    if (seoConfig && seoConfig.settings) {
      updatePropertyMeta('og:site_name', seoConfig.settings.siteName);
      updatePropertyMeta('og:locale', seoConfig.settings.locale);
      if (seoConfig.settings.alternateLocale) {
        updatePropertyMeta('og:locale:alternate', seoConfig.settings.alternateLocale);
      }
    }

    if (pageSeo) {
      if (pageSeo.title) {
        document.title = pageSeo.title;
        updatePropertyMeta('og:title', pageSeo.title);
        updateMeta('twitter:title', pageSeo.title);
      }
      if (pageSeo.description) {
        updateMeta('description', pageSeo.description);
        updatePropertyMeta('og:description', pageSeo.description);
        updateMeta('twitter:description', pageSeo.description);
      }
      if (pageSeo.keywords) {
        updateMeta('keywords', pageSeo.keywords);
      }
    }

    updatePropertyMeta('og:type', 'website');
    updateMeta('twitter:card', 'summary');
  });
})();
