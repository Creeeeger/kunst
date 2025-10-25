(function($) {
  'use strict';
  $.fn.sqrNav = function() {
    $(this).each(function() {

      var nav = $(this);
      var showNav = nav.find('.sqrnavshow');
      var hideNav = nav.find('.sqrnavhide');
      var allItems = nav.find('li:has(ul)');
      var lastitem;
      var doubleClickTimeout;
      var doubleclick = false;

      function handleClick(e) {

        if (lastitem === this && doubleclick) return;

        if (doubleClickTimeout !== undefined) window.clearTimeout(doubleClickTimeout);

        doubleclick = true;

        doubleClickTimeout = window.setTimeout(function() {
          doubleclick = false;
        }, 1000);

        if ($(this).parent().hasClass('sqrnavopen')) {
          $(this).parent('li').removeClass('sqrnavopen');
        } else {
          lastitem = this;
          allItems.removeClass('sqrnavopen');
          $(this).parents('li').addClass('sqrnavopen');
          $(this).parent('li').find('input').focus();
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
            if (doubleClickTimeout !== undefined) window.clearTimeout(doubleClickTimeout);
          }
        }
      }

      function handleShowNav(e) {
        nav.addClass('sqrnavopen');
        e.preventDefault();
      }

      function handleHideNav(e) {
        nav.removeClass('sqrnavopen');
        e.preventDefault();
      }

      allItems.addClass('sqrnavmore').children('a').on('click', handleClick);
      showNav.on('click', handleShowNav);
      hideNav.on('click', handleHideNav);
      $(document).on('click touchstart', handleClose);

    });

  };
})(jQuery);

$(document).ready(function() {
  $('.sqrnav').sqrNav();
});