(function($) {
  'use strict';
  $.fn.sqrAcc = function() {
    $(this).each(function() {
      var container = $(this);
      container.children('.sqracchead').on('click', function(e) {
        e.preventDefault();
        if (container.hasClass('sqraccopen')) {
          container.removeClass('sqraccopen');
        } else {
          container.addClass('sqraccopen');
          var content = container.find('.sqracccontainer');
          content.css({
            'transition': 'none',
            'opacity': '0'
          });
          content.height();
		  $(window).trigger('resize');
          content.css({
            'transition': 'opacity 1s',
            'opacity': '1'
          });
        }
      });
    });
  };

  $.fn.sqrTableReflow = function() {
    $(this).each(function() {
      var headers = $(this).find('thead').find('th');
	  if (headers.length>0) {
        $(this).find('tbody').find('td').each(function() {
          $(this).attr('data-header', headers.eq($(this).index()).text().trim());
        });
	  }
    });
  };

  $.fn.sqrTabs = function() {
    $(this).each(function() {
      var tabs = $(this).find('.sqrtabshead>ul>li');
      var container = $(this).find('.sqrtabscontainer>div');

      tabs.on('mousedown', function(e) {
        if (!$(this).hasClass('sqrtabactive')) {
          var index = $(this).index();
          container.removeClass('sqrtabactive');
          tabs.removeClass('sqrtabactive');
          tabs.eq(index).addClass('sqrtabactive');
          container.eq(index).addClass('sqrtabactive');
  	      $(window).trigger('resize');
          container.eq(index).css({
            'transition': 'none',
            'opacity': '0'
          });
          container.eq(index).height();
          container.eq(index).css({
            'transition': 'opacity 1s',
            'opacity': '1'
          });
        }
        e.preventDefault();
      });
    });

  };

  $.fn.sqrLightBox = function() {
    var backdrop;
    var lightboxImage;
    var caption;
    var siblings;
    var offset;
    var gonext;
    var goprev;
    var wait;
    var closer;
    var viewTimeout;
    var closeTimeout;
    var waitTimeout;
    var drag = false;
    var lastx = 0;
    var newx = 0;

    function close() {
      $(window).off('resize', position);
      $(window).off('keydown', handleKeyboard);

      $('.sqrlbbackdrop').css({
        'opacity': '0'
      });

      if (closeTimeout !== undefined) clearTimeout(closeTimeout);
      if (viewTimeout !== undefined) clearTimeout(viewTimeout);

      closeTimeout = setTimeout(function() {
        closeTimeout = undefined;
        $('.sqrlbbackdrop').css({
          'display': 'none'
        });
      }, 250);
    }

    function position() {
      var width = lightboxImage.data('width');
      var height = lightboxImage.data('height');
      var backWidth = backdrop.width();
      var backHeight = backdrop.height();

      var gutter = 96;

      if (backWidth < 768) gutter = 0;

      var ratio = width / height;

      if (width > backWidth - gutter) {
        width = Math.floor(backWidth - gutter);
        height = Math.floor(width / ratio);
      }
      if (height > backHeight - gutter) {
        height = Math.floor(backHeight - gutter);
        width = Math.floor(height * ratio);
      }

      var left = Math.floor((backWidth - width) / 2);
      var top = Math.floor((backHeight - height) / 2);

      lightboxImage.css({
        'width': width + 'px',
        'height': height + 'px',
        'left': left + 'px',
        'top': top + 'px'
      });

      gonext.css({
        'top': Math.floor(backHeight / 2 - 48) + 'px'
      });
      goprev.css({
        'top': Math.floor(backHeight / 2 - 48) + 'px'
      });

      if (gutter === 0) {
        caption.css('bottom', top + 'px');
      } else {
        caption.css('bottom', '0px');
      }

      setPrevNext();

    }

    function handleKeyboard(e) {
      if (e.keyCode == 27) close();
      if (e.keyCode == 39) handleNext();
      if (e.keyCode == 37) handlePrev();
    }

    function handleNext() {
      if (siblings.length === 0) return;
      if (offset >= siblings.length - 1) return;
      handleOffset(1, 20);
    }

    function handlePrev() {
      if (siblings.length === 0) return;
      if (offset === 0) return;
      handleOffset(-1, 20);
    }

    function handleOffset(direction, shift) {
      offset += direction;

      var image = new Image();

      $(image).load(function() {
        hideWait();

        if (viewTimeout !== undefined) clearTimeout(viewTimeout);

        viewTimeout = setTimeout(function() {

          viewTimeout = undefined;

          lightboxImage.css({
            'transition': 'none',
            'opacity': 0,
            'transform': 'translateX(' + direction * shift + 'px)'
          });

          lightboxImage.attr({
            'src': ''
          });

          lightboxImage.height();

          lightboxImage.attr({
            'src': image.src
          });
          lightboxImage.data({
            'width': image.width,
            'height': image.height
          });

          position();

          lightboxImage.height();
          lightboxImage.css({
            'transition': 'opacity 0.2s, transform 0.2s',
            'opacity': 1,
            'transform': 'none'
          });
          caption.css({
            'transition': 'opacity 0.2s',
            'opacity': 1
          });

          setTitle();

        }, 300);
      });

      lightboxImage.css({
        'transition': 'opacity 0.2s, transform 0.2s',
        'opacity': 1,
        'transform': 'none'
      });
      lightboxImage.height();
      lightboxImage.css({
        'opacity': 0,
        'transform': 'translateX(' + (direction * shift * -1) + 'px)'
      });

      startWait();
      image.src = siblings.eq(offset).attr('href');
    }

    function setTitle() {
      var title = siblings.eq(offset).attr('title') === undefined ? '' : siblings.eq(offset).attr('title');
      if (siblings.length > 1) {
        if (title !== '') title += ' ';
        title += '(' + (offset + 1) + '/' + siblings.length + ')';
      }
      caption.html(title);
    }

    function setPrevNext() {
      if (siblings.length > 0) {
        if (offset > 0) {
          goprev.css('display', 'block');
        } else {
          goprev.css('display', 'none');
        }
        if (offset < siblings.length - 1) {
          gonext.css('display', 'block');
        } else {
          gonext.css('display', 'none');
        }
      } else {
        goprev.css('display', 'none');
        gonext.css('display', 'none');
      }
    }

    function showWait() {
      waitTimeout = undefined;
      wait.css('opacity', 1);
    }

    function hideWait() {
      if (waitTimeout !== undefined) clearTimeout(waitTimeout);
      wait.css('opacity', 0);
    }

    function startWait() {
      if (waitTimeout === undefined) {
        waitTimeout = setTimeout(showWait, 300);
      }
    }

    function handleTouchEnd(e) {
      if (siblings.length === 0) return;
      handleEnd();
    }

    function handleTouchMove(e) {
      if (siblings.length === 0) return;
      if (e.originalEvent.touches.length == 1) {
        handleMove(e.originalEvent.touches[0].pageX);
        e.preventDefault();
      }
    }

    function handleTouchStart(e) {
      if (siblings.length === 0) return;
      if (e.originalEvent.touches.length == 1) {
        handleStart(e.originalEvent.touches[0].pageX);
        e.preventDefault();
      }
    }

    function handleMouseDown(e) {
      if (e.originalEvent.pointerType === 'touch') {
        handleStart(e.pageX);
      }
    }

    function handleMouseMove(e) {
      if (e.originalEvent.pointerType === 'touch') {
        handleMove(e.pageX);
        e.preventDefault();
      }
    }

    function handleMouseUp(e) {
      if (e.originalEvent.pointerType === 'touch') {
        handleEnd();
      }
    }


    function handleStart(x) {
      drag = true;
      lastx = x;
      newx = lastx;
    }

    function handleMove(x) {
      if (drag) {

        newx = x;

        var translate = lastx - newx;

        if (offset <= 0) {
          if (translate < 0) translate = 0;
        }
        if (offset >= siblings.length - 1) {
          if (translate > 0) translate = 0;
        }

        var opacity = 1 - Math.abs(translate) / 300;

        if (opacity < 0) opacity = 0;
        if (opacity > 1) opacity = 1;

        lightboxImage.css({
          'transition': 'none',
          'transform': 'translateX(' + (-translate) + 'px)',
          'opacity': opacity
        });

        caption.css({
          'transition': 'opacity 0.2s',
          'opacity': 0
        });

      }
    }

    function handleEnd() {
		
	  if (drag) {	
		  drag=false;
	  
		  var change = 0;

		  var translate = lastx - newx;

		  if (translate > 100 && offset < siblings.length - 1) {
			change = 1;
		  }
		  if (translate < -100 && offset > 0) {
			change = -1;
		  }

		  if (change !== 0) {
			handleOffset(change, Math.abs(translate * 2));
			caption.css({
			  'transition': 'opacity 0.2s',
			  'opacity': 0
			});
		  } else {
			lightboxImage.css({
			  'transition': 'opacity 0.2s, transform 0.2s',
			  'opacity': 1,
			  'transform': 'none'
			});
			caption.css({
			  'transition': 'opacity 0.2s',
			  'opacity': 1
			});
		  }
	  }

    }

    function showLightBox(e) {

      e.preventDefault();

      siblings = $(this).parents('.sqrlbgroup').find('a.sqrlblink');
      offset = siblings.index(this);

      if (backdrop === undefined) {
        backdrop = $('<div>', {
          class: 'sqrlbbackdrop'
        });
        wait = $('<div>', {
          class: 'sqrlbwait'
        });
        closer = $('<div>', {
          class: 'sqrlbclose'
        });
        gonext = $('<div>', {
          class: 'sqrlbnext'
        });
        goprev = $('<div>', {
          class: 'sqrlbprev'
        });
        caption = $('<div>', {
          class: 'sqrlbcaption'
        });
        lightboxImage = $('<img>');

        backdrop.append(wait);
        backdrop.append(closer);
        backdrop.append(gonext);
        backdrop.append(goprev);
        backdrop.append(caption);
        backdrop.append(lightboxImage);

        gonext.on('click', handleNext);
        goprev.on('click', handlePrev);
        closer.on('click', close);

        lightboxImage.on('touchstart', handleTouchStart);
        lightboxImage.on('touchend', handleTouchEnd);
        lightboxImage.on('touchmove', handleTouchMove);
        lightboxImage.on('pointerdown', handleMouseDown);
        lightboxImage.on('pointerup', handleMouseUp);
        lightboxImage.on('pointermove', handleMouseMove);

        $('body').append(backdrop);
      }

      $(window).on('resize', position);
      $(window).on('keydown', handleKeyboard);

      lightboxImage.css('display', 'none');
      goprev.css('display', 'none');
      gonext.css('display', 'none');
      backdrop.css({
        'display': 'block',
        'opacity': '0'
      });
      backdrop.height();
      backdrop.css({
        'opacity': '1'
      });

      var image = new Image();

      $(image).load(function() {
        lightboxImage.attr('src', image.src);
        lightboxImage.data({
          'width': image.width,
          'height': image.height
        });
        lightboxImage.css({
          'transition': 'none',
          'opacity': 0,
          'transform': 'scale(0.9)',
          'display': 'block'
        });
        lightboxImage.height();
        lightboxImage.css({
          'transition': 'opacity 0.2s, transform 0.2s',
          'opacity': 1,
          'transform': 'none'
        });
        caption.css({
          'opacity': 1
        });


        position();
        hideWait();
        setTitle();
      });

      startWait();
      image.src = $(this).attr('href');
    }

    $(this).each(function() {
      $(this).on('click', showLightBox);
    });

  };
  
  $.fn.sqrPicProtect = function () {
	  $(this).each(function() {
		$(this).on('contextmenu', 'img', function(e) {
			e.preventDefault();
		});
	  });
  };

  $.fn.sqrForm = function() {
    $(this).each(function() {
      var form = $(this);
      var fieldCaptchaCode = form.find('input[name="fgwcaptchacode"]');
      var fieldCaptchaId = form.find('input[name="fgwcaptchaid"]');
      var captchaImg = form.find('img');
      var captchaUrl = form.attr('data-captchaurl');
      var captchaOk = (captchaUrl === undefined);

      function handleCaptchaResponse(data) {
        if (data == 'ok') {
          captchaOk = true;
          form.submit();
        } else {
          var imgUrl = captchaImg.attr('src');
          imgUrl = imgUrl.substr(0, imgUrl.indexOf('=') + 1) + data;
          captchaImg.attr('src', imgUrl);
          fieldCaptchaId.val(data);
          fieldCaptchaCode.val('');
          fieldCaptchaCode.addClass('sqrformerr');
        }
      }

      function handleSubmit(e) {
        form.find('.sqrformerr').removeClass('sqrformerr');
        if (!captchaOk) {
          var captchaId = fieldCaptchaId.val();
          var captchaCode = fieldCaptchaCode.val();
          $.post({
            url: captchaUrl,
            data: {
              id: captchaId,
              code: captchaCode
            },
            success: handleCaptchaResponse
          });
          e.preventDefault();
        }

        form.find('input[required]').each(function() {
          if ($(this).attr('type') === 'checkbox') {
            if (!($(this).prop('checked'))) {
              $(this).parent('label').addClass('sqrformerr');
              e.preventDefault();
            }
          } else if ($(this).attr('type') === 'email') {
            if (!(/.*\@.*\..*/.test($(this).val()))) {
              $(this).addClass('sqrformerr');
              e.preventDefault();
            }
          } else {
            if ($(this).val() === '') {
              $(this).addClass('sqrformerr');
              e.preventDefault();
            }
          }
        });

        form.find('textarea[required]').each(function() {
          if ($(this).val() === '') {
            $(this).addClass('sqrformerr');
            e.preventDefault();
          }
        });
      }

      form.on('submit', handleSubmit);
    });
  };
})(jQuery);

$(document).ready(function() {
  $('.sqracc').sqrAcc();
  $('.sqrtablereflow').sqrTableReflow();
  $('.sqrtabs').sqrTabs();
  $('a.sqrlblink').sqrLightBox();
  $('form.sqrformcheck').sqrForm();
  $('.sqrpicprotect').sqrPicProtect();
});