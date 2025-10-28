(function($) {
  'use strict';

  function createNamespace() {
    return '.sqrnav' + Math.random().toString(36).slice(2);
  }

  $.fn.sqrNav = function() {
    return $(this).each(function() {
      var nav = $(this);

      if (nav.data('sqrNavInitialized')) {
        var refreshFn = nav.data('sqrNavRefresh');
        if (typeof refreshFn === 'function') {
          refreshFn();
        }
        return;
      }

      var allItems = $();
      var lastitem;
      var doubleClickTimeout;
      var doubleclick = false;
      var observer;
      var namespace = createNamespace();

      function refreshItems() {
        nav.find('li.sqrnavmore').removeClass('sqrnavmore');
        allItems = nav.find('li:has(ul)');
        if (allItems.length) {
          allItems.addClass('sqrnavmore');
        }
      }

      function clearDoubleClickTimer() {
        if (doubleClickTimeout !== undefined) {
          window.clearTimeout(doubleClickTimeout);
          doubleClickTimeout = undefined;
        }
      }

      function handleClick(e) {
        if (lastitem === this && doubleclick) return;

        clearDoubleClickTimer();

        doubleclick = true;

        doubleClickTimeout = window.setTimeout(function() {
          doubleclick = false;
          doubleClickTimeout = undefined;
        }, 1000);

        var parent = $(this).parent('li');

        if (parent.hasClass('sqrnavopen')) {
          parent.removeClass('sqrnavopen');
        } else {
          lastitem = this;
          allItems.removeClass('sqrnavopen');
          parent.parents('li').addClass('sqrnavopen');
          parent.addClass('sqrnavopen');
          parent.find('input').first().trigger('focus');
        }

        e.preventDefault();
        e.stopPropagation();
      }

      function isMobile() {
        return nav.children('ul').children('li').css('float') === 'none';
      }

      function handleClose(e) {
        if (!isMobile()) {
          if ($(e.target).parents('.sqrnav').length === 0) {
            allItems.removeClass('sqrnavopen');
            nav.removeClass('sqrnavopen');
            lastitem = undefined;
            doubleclick = false;
            clearDoubleClickTimer();
          }
        }
      }

      function handleShowNav(e) {
        nav.addClass('sqrnavopen');
        e.preventDefault();
      }

      function handleHideNav(e) {
        nav.removeClass('sqrnavopen');
        allItems.removeClass('sqrnavopen');
        lastitem = undefined;
        doubleclick = false;
        clearDoubleClickTimer();
        e.preventDefault();
      }

      function handleNavLinkFollow(e) {
        if (!isMobile()) {
          return;
        }

        var parent = $(this).parent('li');

        if (parent.hasClass('sqrnavmore')) {
          return;
        }

        window.setTimeout(function() {
          nav.removeClass('sqrnavopen');
          allItems.removeClass('sqrnavopen');
          lastitem = undefined;
          doubleclick = false;
          clearDoubleClickTimer();
        }, 0);
      }

      nav.on('click' + namespace, '.sqrnavshow', handleShowNav);
      nav.on('click' + namespace, '.sqrnavhide', handleHideNav);
      nav.on('click' + namespace, 'li.sqrnavmore > a', handleClick);
      nav.on('click' + namespace, 'ul > li > a', handleNavLinkFollow);
      $(document).on('click' + namespace + ' touchstart' + namespace, handleClose);

      function startObserver() {
        if (!nav.length || !window.MutationObserver) {
          refreshItems();
          return;
        }

        observer = new window.MutationObserver(function() {
          refreshItems();
        });

        observer.observe(nav.get(0), { childList: true, subtree: true });
        refreshItems();
      }

      startObserver();

      nav.data('sqrNavInitialized', true);
      nav.data('sqrNavRefresh', refreshItems);
      nav.data('sqrNavObserver', observer);
    });
  };
})(jQuery);

$(function() {
  $('.sqrnav').sqrNav();
});
