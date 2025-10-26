"use strict";

(function($) {
    $.fn.sqrTallinnSlider = function() {
        var header = $('header');
        var container = $('#headercontainer');
        var bullets = $('#headersliderbullets').children('a');
        var images = new Array();
        var offset = 0;
        var mainEyecatcher = container.children('img').eq(0);
        var secEyecatcher;
        var autoProgress = parseInt(header.attr('data-autoprogress'), 10);
        var autoProgessTimer = null;
        var parallax = header.attr('data-parallax') === '1';

        function performAutoProgress() {
            offset++;

            if (offset > bullets.length - 1) {
                offset = 0;
            }

            setOffset(false);
        }

        function start() {
            if (autoProgress > 0) {
                if (autoProgessTimer !== null) {
                    stop();
                }
                autoProgessTimer = window.setTimeout(performAutoProgress, autoProgress * 1000);
            }
        }

        function stop() {
            if (autoProgessTimer !== null) {
                window.clearTimeout(autoProgessTimer);
                autoProgessTimer = null;
            }
        }

        function sizeHeader() {
            var fullHeight = Math.floor(header.width() / 16 * 9 );

            header.css('height', fullHeight + 'px');
            container.css('height', fullHeight + 'px');
        }

        function setOffset(loading) {
            var url = bullets.eq(offset).attr('href');

            bullets.removeClass('active').eq(offset).addClass('active');
            
            if (typeof secEyecatcher === 'undefined') {
                secEyecatcher = $('<img>', {
                    class: 'headerslidersecin'
                });
                mainEyecatcher.after(secEyecatcher);
            }

            var image = new Image();

            mainEyecatcher.removeClass('headerslidersec headerslidersecout');
            mainEyecatcher.addClass('headersliderpri');
            secEyecatcher.removeClass('headersliderpri headerslidersecout');
            secEyecatcher.addClass('headerslidersec');

            secEyecatcher[0].offsetHeight;
            mainEyecatcher[0].offsetHeight;

            if (loading) header.addClass('loading');

            $(image).on('load', function() {
                secEyecatcher.attr('src', url);
                secEyecatcher[0].offsetHeight;
                secEyecatcher.addClass('headerslidersecout');

                var swap = mainEyecatcher;
                mainEyecatcher = secEyecatcher;
                secEyecatcher = swap;
                start();
                header.removeClass('loading');
                
                $(image).off('load');
            });
            $(image).attr('src', url);
        }

        if (bullets.length > 0) {
            bullets.eq(0).addClass('active');

            bullets.bind('click', function(e) {
                stop();
                e.preventDefault();
                offset = $(this).index();
                setOffset(true);
            });

            $(window).load(start);

            $('#headersliderbullets>div').css({
                'width': bullets.length * 20 + 'px'
            });

        }

        if (header.length > 0) {
            sizeHeader();
            sizeHeader();
            $(window).on('resize', sizeHeader);
        }
    }
})(jQuery);

$(document).ready(function() {
    $('header').sqrTallinnSlider();
});