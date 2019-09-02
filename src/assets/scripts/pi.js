$(document).ready(function () {

    const $body = $('body');

    function body_overflow_hidden() {
        $body.css('overflow', 'hidden');
    }

    function body_overflow_auto() {
        $body.css('overflow', '');
    }

    /*================================================================================================================*/
    /* Drop menu */
    /*================================================================================================================*/

    $('.drop').each(function () {

        const $drop = $(this);
        const $toggle = $('.drop-toggle', $drop);
        const $menu = $drop.find('.drop-menu');

        $toggle.on('click', function () {
            if ($drop.hasClass('open')) {
                $drop.removeClass('open');
                $toggle.attr('aria-expanded', 'false');
            }
            else {
                $('.drop').removeClass('open');
                $drop.addClass('open');
                $toggle.attr('aria-expanded', 'true');
            }
        });

        if ($drop.hasClass('select')) {

            if ($('.menu-item', $menu).hasClass('selected')) {
                $toggle.html($('.selected .abbr', $drop).clone());
            }

            $('.menu-item', $menu).on('click', function () {

                $menu.find('.menu-item').removeClass('selected');
                $(this).addClass('selected');
                $toggle.html($('.abbr', $(this)).clone());

                if ($drop.hasClass('no-href')) {
                    return false;
                }

            });

        }

    });

    $('*').click(function (e) {
        if (!$(e.target).is('.drop')
            && !$(e.target).is('.drop .static')
            && !$(e.target).is('.drop .static *')
            && !$(e.target).is('.drop .drop-toggle')
            && !$(e.target).is('.drop .drop-toggle *')) {
            $('.drop').removeClass('open');
            $('.drop-toggle').attr('aria-expanded', 'false');
        }
    });

    /*================================================================================================================*/
    // Accordion
    /*================================================================================================================*/

    $(".accordion").each(function () {

        const $accordion = $(this);
        const $panel = $('.accordion-panel', $accordion);
        const $title = $('.accordion-title', $accordion);
        const $content = $('.accordion-content', $accordion);

        $('.accordion-panel:not(.active) .accordion-content').hide();

        if($title.parent().hasClass('active')){
            $title.attr('aria-expanded', 'true')
        }

        $title.click(function () {

            const $attr = $(this).attr('data-target-accordion');

            if ($(this).parent().hasClass('active')) {

                $(this).parent().removeClass('active');

                $('[data-accordion="' + $attr + '"]').stop().slideUp(300);

                $(this).attr('aria-expanded', 'false');
            }
            else {

                $panel.removeClass('active');

                $(this).parent().addClass('active');

                $content.stop().slideUp(300);

                $('[data-accordion="' + $attr + '"]').stop().slideDown(300);

                $title.attr('aria-expanded', 'false');

                $(this).attr('aria-expanded', 'true');

            }

            return false;

        });

    });

    /*================================================================================================================*/
    // Collapse
    /*================================================================================================================*/

    $('[data-target-collapse]').each(function () {

        const $toggle = $(this);
        const $collapse = $toggle.data('target-collapse');

        $toggle.on('click', function () {

            $toggle.toggleClass('active');
            $('[data-collapse="' + $collapse + '"]').stop().slideToggle();

            activeCollase()

        });

        function activeCollase() {
            if ($toggle.hasClass('active')) {
                $toggle.attr('aria-expanded', 'true');
                $('[data-collapse="' + $toggle + '"]').slideDown();
            }else {
                $toggle.attr('aria-expanded', 'false');
                $('[data-collapse="' + $toggle + '"]').slideUp();
            }
        }activeCollase()

    });

    /*================================================================================================================*/
    // Tab
    /*================================================================================================================*/

    $('[data-target-tab]').each(function () {

        const $this = $(this);
        const $target = $this.data('target-tab');

        if ($this.data('trigger')) {
            $this.hover(function () {
                tab();
            });
        }
        else {
            $this.click(function () {
                tab();
            });
        }

        function tab() {

            var $targetTab = $('[data-target-tab="' + $target + '"]');
            var $tab = $('[data-tab="' + $target + '"]');

            $targetTab.attr('aria-expanded', true)
                .attr('aria-selected', true)
                .parent('li').addClass('active')
                .siblings().removeClass('active')
                .find('[data-target-tab]')
                .attr('aria-selected', false)
                .attr('aria-expanded', false);

            $tab.addClass('active').siblings('.tab-panel').removeClass('active')
        }

    });

    /*================================================================================================================*/
    // Rating stars
    /*================================================================================================================*/

    $(".rating-stars").each(function () {
        const width = $(this).data('width');
        const span = $('<span aria-hidden="true"></span>');
        $(this).append(span);
        span.css('width', width +'%');
    });

    /*================================================================================================================*/
    // Scroll To Target
    /*================================================================================================================*/

    $('.scroll-to').each(function () {

        var $target = $(this),
            $offsetTop, lastId,
            menuItems = $('.scroll-to'),
            scrollItems = menuItems.map(function(){
                var item = $($(this).attr("href"));
                if (item.length) { return item; }
            });


        if ($target.data('as-ot')) {
            $offsetTop = $target.data('as-ot');
        }
        if ($(window).width() >= 1200) {
            if ($target.data('lg-ot')) {
                $offsetTop = $target.data('lg-ot');
            }
        }
        if ($(window).width() < 1200 && $(window).width() > 991) {
            if ($target.data('md-ot')) {
                $offsetTop = $target.data('md-ot');
            }
        }
        if ($(window).width() < 992 && $(window).width() > 767) {
            if ($target.data('sm-ot')) {
                $offsetTop = $target.data('sm-ot');
            }
        }
        if ($(window).width() < 768) {
            if ($target.data('xs-ot')) {
                $offsetTop = $target.data('xs-ot');
            }
        }

        $target.bind('click', function (event) {

            $('html, body').stop().animate({scrollTop: $($target.attr('href')).offset().top - $offsetTop}, 500);

            event.preventDefault();

        });

        $(window).scroll(function(){

            var fromTop = $(this).scrollTop()+ $offsetTop;

            var cur = scrollItems.map(function(){
                if ($(this).offset().top < fromTop + 1)
                    return this;
            });

            cur = cur[cur.length-1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href='#"+id+"']").parent().addClass("active");
            }
        });

    });

    /*================================================================================================================*/
    // target = _blank
    /*================================================================================================================*/

    function target_blank() {
        $("a[rel*='external']").attr("target", "_blank");
    }target_blank();

    /*================================================================================================================*/
    // Image Error
    /*================================================================================================================*/

    $('img').on('error', function () {
        $(this).addClass('image-error')
    });

    /*================================================================================================================*/
    // Scrolling Menu
    /*================================================================================================================*/

    const pageUrl = window.location;
    const path = window.location.pathname;
    const page = path.split("/").pop();

    $('.scrolling-menu').each(function () {

        const $scrollingMenu = $(this);

        $scrollingMenu.find('li a').filter(function () {
            return this.href == pageUrl;
        }).parent().addClass('active');

        $scrollingMenu.not('.no-line').append($('<li class="line" role="presentation"></li>'));

        function animateScrollLeft(elem, value, duration) {
            const start = +new Date,
                currentValue = elem.scrollLeft;

            (function (a, b) {
                return function _animate() {
                    const now = +new Date - start,
                        progress = now / duration,
                        result = (a - b) * progress + b;

                    elem.scrollLeft = progress < 1 ? result : a;

                    if (progress < 1) {
                        setTimeout(_animate, 10);
                    }
                };
            })(value, currentValue)();
        }

        function scrollToActive() {
            const elem = $scrollingMenu.find('li.active')[0],
                parent = elem.parentElement,
                line = $scrollingMenu.find('.line')[0];

            animateScrollLeft(parent, elem.offsetLeft - parent.offsetWidth / 2 + elem.offsetWidth / 2, 0);

            line.style.left = elem.offsetLeft + 'px';
            line.style.width = elem.offsetWidth + 'px';

            document.removeEventListener('DOMContentLoaded', scrollToActive);
        }

        scrollToActive();

        document.addEventListener('DOMContentLoaded', scrollToActive);
        document.addEventListener('mouseover', scrollToActive);
        window.addEventListener('resize', scrollToActive);

        document.addEventListener('click', function (e) {
            var button = e.target,
                scrollingMenu = button.parentElement;

            if ($(scrollingMenu)) {
                if (!$(scrollingMenu).hasClass('scrolling-menu')) {
                    scrollingMenu = scrollingMenu.parentElement;

                    if (!$(scrollingMenu).hasClass('scrolling-menu')) {
                        scrollingMenu = scrollingMenu.parentElement;

                        button = button.parentElement;

                        if (!$(scrollingMenu).hasClass('scrolling-menu')) {
                            return;
                        }
                    }
                }
            }

            button = button.parentElement;

            const active = scrollingMenu.querySelector('.active'),
                line = scrollingMenu.querySelector('.line');

            if (active) {
                active.classList.remove('active');
            }

            button.classList.add('active');

            animateScrollLeft(scrollingMenu, button.offsetLeft - scrollingMenu.offsetWidth / 2 + button.offsetWidth / 2, 200);

            line.style.left = button.offsetLeft + 'px';
            line.style.width = button.offsetWidth + 'px';

            if ($scrollingMenu.hasClass('no-url')) {
                e.preventDefault();
            }
        });

    });

    /*================================================================================================================*/
    /*================================================================================================================*/

});

(function () {
    'use strict';

    /*================================================================================================================*/
    // Modal
    /*================================================================================================================*/

    document.addEventListener('click', openModal);
    function openModal(e) {
        var button = e.target,
            modal  = button.dataset['targetModal'];

        if (!modal) {
            button = button.parentNode;

            if (button) {
                modal = button.dataset['targetModal'];

                if (!modal) {
                    return;
                }
            } else {
                return;
            }
        }

        e.preventDefault();

        var target       = document.querySelector('[data-modal=' + modal + ']'),
            modalContent = target.querySelector('.modal-content'),
            body         = document.body;

        modalContent.classList.add('animated');
        modalContent.classList.add(target.dataset['openAnimation']);

        setTimeout(function () {
            target.classList.add('open');
            body  .classList.add('o-hidden');

            setTimeout(function () {
                modalContent.classList.remove(target.dataset['openAnimation']);
            }, 500);
        }, 200);

        function _closeModal(e) {
            var type   = e.type,
                select = e.target;

            if (type === 'keyup' && e.keyCode !== 27 || type === 'click' && select.dataset['close'] !== modal) {
                return;
            }

            modalContent.classList.add(target.dataset['closeAnimation']);

            setTimeout(function () {
                target.classList.remove('open');
                body  .classList.remove('o-hidden');

                modalContent.classList.remove(target.dataset['closeAnimation']);
            }, 200);

            document.removeEventListener('click', _closeModal);
            document.removeEventListener('keyup', _closeModal);
        }

        document.addEventListener('click', _closeModal);

        e.preventDefault();
    }

})();
