$(document).ready(function () {

    /*====================================================================================================================*/
    /* Variables */
    /*====================================================================================================================*/

    var $body = $('body');
    var url = window.location;

    /*====================================================================================================================*/
    /* Header Right Side */
    /*====================================================================================================================*/

    $('.main-header .right-col a').filter(function () {
        return this.href == url;
    }).parent().addClass('current-page');

    /*====================================================================================================================*/
    /* Nav Toggle */
    /*====================================================================================================================*/

    $('.nav-toggle').on('click', function () {
        if ($body.hasClass('nav-shown')){overlay_hide();}
        else {overlay_show();}
        $body.toggleClass('nav-shown');
    });

    $('*').click(function (e) {
        if (!$(e.target).is('.nav-toggle')
            && !$(e.target).is('.nav-toggle *')
            && !$(e.target).is('.main_side_menu')
            && !$(e.target).is('.main_side_menu *')) {
            $body.removeClass('nav-shown');
        }
    });

    /*====================================================================================================================*/
    /* Nav Menu */
    /*====================================================================================================================*/

    var $nav_menu = $('.nav-menu');
    var $menu_toggle = $('.menu-toggle', $nav_menu);
    var $sub_menu = $('.sub_menu', $nav_menu);

    $('.nav-menu ul li a').filter(function () {return this.href == url;})
        .addClass('current-page')
        .parent('li').parent('ul')
        .slideDown().prev('a').addClass('active');

    $menu_toggle.each(function () {
        var $this = $(this);

        $this.on('click', function () {
            if ($this.hasClass('active')) {
                $this.removeClass('active').next($sub_menu).slideUp();
            } else {
                /* Accordion Menu */
                if($nav_menu.hasClass('accordion-menu')){
                    $menu_toggle.removeClass('active').next($sub_menu).slideUp();
                }
                $this.addClass('active').next($sub_menu).slideDown();
            }
        });

        if ($this.hasClass('active')) {
            $this.next($sub_menu).slideDown();
        }
    });

    /*====================================================================================================================*/
    /* Media modal */
    /*====================================================================================================================*/

    $('.media-side-toggle').on('click', function () {
        $('.media-modal').addClass('side-shown');
        $('.overlay').addClass('shown');
    });

    $('.folder-list .folder').on('click', function () {
        $('.media-modal').removeClass('side-shown');
        $('.overlay').removeClass('shown');
    });

    $('.media-search-toggle, .image-search .btn[type="reset"]').on('click', function () {
        $('.image-search').toggleClass('shown');
    });

    /*====================================================================================================================*/
    /* Overlay */
    /*====================================================================================================================*/

    var overlay = $('<div class="overlay tr-3s" role="presentation"></div>');

    $body.append(overlay);

    overlay.on('click', function () {
        overlay_hide();
    });

    function overlay_show() {
        $body.addClass('overlay-shown');
    }

    function overlay_hide() {
        $body.removeClass('overlay-shown');
    }

    /*====================================================================================================================*/
    /* Select Tab */
    /*====================================================================================================================*/

    /*$('.select-tab').change(function () {

        var select = $(this),
            selectID = select.attr('id'),
            selectTabContent = select.attr('aria-labelledby="' + selectID + '"'),
            selectTabPanel = $('.tab-panel', selectTabContent),
            selectValue = select.find("option:selected").val();

        selectTabPanel.removeClass('active');
        $('[data-tab="' + selectValue + '"]').addClass('active')

    })*/

    /*====================================================================================================================*/
    /*====================================================================================================================*/
    /*====================================================================================================================*/
    /*====================================================================================================================*/
    /*====================================================================================================================*/
    /*====================================================================================================================*/
    /*====================================================================================================================*/
    /*====================================================================================================================*/

});
