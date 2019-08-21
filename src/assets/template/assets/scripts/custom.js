$(document).ready(function () {

  
    $('.nav-toggle').on('click', function () {
        body.toggleClass('nav-shown');
    });

    /*================================================================================================================*/
    // Back To Top
    /*================================================================================================================*/

    const $backToTop = $(".back-top");

    $backToTop.hide();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $backToTop.fadeIn();
        } else {
            $backToTop.fadeOut();
        }
    });

    $backToTop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });


});
