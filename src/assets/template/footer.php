</div>

<footer class="main-footer bg-main" style="height:400px"></footer>

<div class="fixed-buttons" hidden>
    <span class="button back-top pointer icon-arrow-up shadow ripple-effect mt-10"
          role="button"
          data-toggle="tooltip"
          data-placement="left"
          title="Yuxarı qayıt"
          aria-hidden="true"
          aria-label="Yuxarı qayıt">
    </span>
</div>

<!--<div class="modal lg product-detail-modal"
     data-modal="product-detail"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Product Detail Modal">

    <div class="modal-content panel">

        <div class="panel-header">
            <span class="panel-title bold">
                <i aria-hidden="true" class="icon-info-circle-thin mr-20"></i>
                Məhsul haqqında
            </span>
            <span role="button" class="close fixed-close icon-close" data-close="product-detail" aria-label="Bağla"></span>
        </div>

        <div class="panel-body p-40">

            <div class="row as-15 sm-10 xs-10 justify-content-center mb-40">

                <div class="col as-4 sm-6 xs-8 pb-10">
                    <div class="thumb responsive pb-in-100 shadow-big">
                        <img data-src="assets/images/ulu.png" alt="Product name" width="400" height="400">
                    </div>
                </div>

                <div class="col as-12 lg-8 pt-10">

                    <h2 class="title bold h3 text-main mb-20">Product Name</h2>

                    <p class="description font-16 light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut et iste libero
                        magnam nihil quia, tenetur totam vero. Expedita hic iste itaque nihil nobis obcaecati,
                        perspiciatis repellat voluptatem. Deserunt, neque?</p>

                    <table class="table mb-20">
                        <tbody>
                        <tr>
                            <td class="bold">Şirkət:</td>
                            <td>
                                <a href="company-detail.php" title="MARS-FK LTD MMM" class="bold">MARS-FK LTD MMM</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Məhsul:</td>
                            <td>Nar</td>
                        </tr>
                        <tr>
                            <td class="bold">Növü</td>
                            <td>Göyçə</td>
                        </tr>
                        <tr>
                            <td class="bold">Kalibri:</td>
                            <td>Big Bang</td>
                        </tr>
                        <tr>
                            <td class="bold">Miqdarı</td>
                            <td>100 ton</td>
                        </tr>
                        </tbody>
                    </table>

                    <div class="bg-gray p-10">
                        <div class="panel-header bg-white">
                            <span class="panel-title bold text-main">Təklif ver</span>
                        </div>
                        <div class="bg-white p-20">
                            <form action="" class="row as-10">
                                <div class="col as-4 xs-12 mb-20">
                                    <label for="offer-amount">Tələb olunan miqdarı</label>
                                    <div class="input-group radius-20 shadow-big">
                                        <input type="number" id="offer-amount" class="input border-0 radius-20 shadow-big" placeholder="0" value="100" max="100">
                                        <span class="input-group-addon border-0">Ton</span>
                                    </div>
                                </div>
                                <div class="col as-4 xs-12 mb-20">
                                    <label for="offer-price">Təklif edilən qiymət</label>
                                    <div class="input-group radius-20 shadow-big">
                                        <input type="number" id="offer-price" class="input border-0 radius-20 shadow-big" placeholder="0">
                                        <span class="input-group-addon border-0">AZN / ton</span>
                                    </div>
                                </div>
                                <div class="col as-4 xs-12 mb-20">
                                    <label>Ümumi qiymət</label>
                                    <div class="input-group radius-20 shadow-big">
                                        <input type="number" class="input border-0 radius-20 shadow-big" value="22.500" placeholder="0.00" readonly>
                                        <span class="input-group-addon border-0">AZN</span>
                                    </div>
                                </div>
                                <div class="col as-12 mb-20">
                                    <label for="offer-note">Əlavə qeyd</label>
                                    <textarea id="offer-note" class="input no-resize border-0 radius-20 shadow-big" cols="30" rows="4" placeholder="Qeyd yazın"></textarea>
                                </div>
                                <div class="col as-12">
                                    <button class="btn bg-special border-0 radius-20 shadow-big">Təklifi göndər</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <div class="clear p-20 shadow-big">
                <canvas id="product-chart"</canvas>
            </div>

        </div>

        <div class="panel-footer text-center">
            <button type="reset" class="btn bg-gray border-0 radius-20 shadow-big pl-40 pr-40" data-close="product-detail">
                Bağla
            </button>
        </div>

    </div>

</div>-->

<div class="modal login-modal"
     data-modal="login"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Login Modal">

    <form class="modal-content panel">

        <span role="button" class="close fixed-close icon-close" data-close="login" aria-label="Bağla"></span>

        <div class="login-wrap d-flex-center text-center pl-40 pr-40 pt-100 ripple-effect light-ripple">
            <span class="h3 text-center text-uppercase thin text-white mb-100 d-block">Hesabınıza daxil olun</span>
        </div>

        <div class="clear p-40">
            <div class="row as-10 justify-content-center">

                <div class="col as-6 xs-12 mb-20">
                    <label for="u-name" class="pl-10">İstifadəçi adı <sup class="text-red">*</sup></label>
                    <input type="text" id="u-name" class="input border-0 radius-20 shadow-big">
                </div>

                <div class="col as-6 xs-12 mb-20">
                    <label for="u-pass" class="pl-10">Şifrə <sup class="text-red">*</sup></label>
                    <input type="password" id="u-pass" class="input border-0 radius-20 shadow-big" placeholder="*****">
                </div>

                <div class="col as-3 xs-6">
                    <button type="submit" class="btn bg-main border-0 radius-20 shadow-big w-100p light-ripple">Daxil ol</button>
                </div>

            </div>
        </div>

        <div class="panel-footer text-center">
            <button type="reset" class="btn bg-gray border-0 radius-20 shadow-big pl-40 pr-40" data-close="login">
                Bağla
            </button>
        </div>

    </form>

</div>

<div class="modal registration-modal"
     data-modal="registration"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Login Modal">

    <div class="modal-content tab-content panel">

        <span role="button" class="close fixed-close icon-close" data-close="registration" aria-label="Bağla"></span>

        <div class="tab-panel active" role="tabpanel" data-tab="reg-types">

            <div class="login-wrap d-flex-center text-center pl-40 pr-40 pt-60 pb-30 ripple-effect light-ripple">

                <span class="h3 text-center text-uppercase thin text-white mb-60 d-block">Yeni hesab yaradın</span>

                <div class="reg-types row as-10">

                    <div class="col as-6 xs-12 mb-30">
                        <button class="btn lg border-0 shadow-big w-100p tr-3s" data-target-tab="fr-registration">Fiziki şəxs olaraq</button>
                    </div>

                    <div class="col as-6 xs-12 mb-30">
                        <button class="btn lg border-0 shadow-big w-100p tr-3s" data-target-tab="hr-registration">Hüquqi şəxs olaraq</button>
                    </div>

                </div>

            </div>

            <div class="panel-footer text-center">
                <button type="reset" class="btn bg-white border-0 radius-20 shadow-big pl-40 pr-40" data-close="registration">Bağla</button>
            </div>

        </div>

        <div class="tab-panel" role="tabpanel" data-tab="fr-registration">

            <div class="login-wrap d-flex-center text-center pl-40 pr-40 pt-100 ripple-effect light-ripple">
                <span class="h3 text-center text-uppercase thin text-white mb-100 d-block">Fiziki şəxs qeydiyyatı</span>
            </div>

            <div class="clear pt-40 pl-40 pr-40 pb-20">
                <div class="row as-10 justify-content-center">

                    <div class="col as-6 xs-12 mb-20">
                        <label for="fr-name" class="pl-10">Ad, Soyad, Ata adı <sup class="text-red">*</sup></label>
                        <input type="text" id="fr-full-name" class="input border-0 radius-20 shadow-big">
                    </div>

                    <div class="col as-6 xs-12 mb-20">
                        <label for="fr-email" class="pl-10">E-poçt ünvanı <sup class="text-red">*</sup></label>
                        <input type="email" id="fr-email" class="input border-0 radius-20 shadow-big">
                    </div>

                    <div class="col as-6 xs-12 mb-20">
                        <label for="fr-pass" class="pl-10">Şifrə <sup class="text-red">*</sup></label>
                        <input type="password" id="u-pass" class="input border-0 radius-20 shadow-big" placeholder="*****">
                    </div>

                    <div class="col as-6 xs-12 mb-20">
                        <label for="fr-pass-again" class="pl-10">Şifrənin təkrarı <sup class="text-red">*</sup></label>
                        <input type="password" id="u-pass-again" class="input border-0 radius-20 shadow-big" placeholder="*****">
                    </div>

                </div>
            </div>

            <div class="panel-footer pl-40 pr-40 text-center">
                <button type="reset" class="btn bg-white border-0 radius-20 shadow-big float-left" data-target-tab="reg-types">
                    <i aria-hidden="true" class="icon-arrow-left mr-"></i>
                    Geri
                </button>

                <button type="submit" class="btn bg-main border-0 radius-20 shadow-big light-ripple">Qeydiyyatı tamamla</button>

                <button type="reset" class="btn bg-white border-0 radius-20 shadow-big float-right" data-close="registration">
                    Bağla
                </button>
            </div>

        </div>

        <div class="tab-panel" role="tabpanel" data-tab="hr-registration">

            <div class="login-wrap d-flex-center text-center pl-40 pr-40 pt-100 ripple-effect light-ripple">
                <span class="h3 text-center text-uppercase thin text-white mb-100 d-block">Hüquqi şəxs qeydiyyatı</span>
            </div>

            <div class="clear pt-40 pl-40 pr-40 pb-20">
                <div class="row as-10">

                    <div class="col as-6 xs-12 mb-20">
                        <label for="hr-name" class="pl-10">Ad, Soyad, Ata adı <sup class="text-red">*</sup></label>
                        <input type="text" id="hr-full-name" class="input border-0 radius-20 shadow-big">
                    </div>

                    <div class="col as-6 xs-12 mb-20">
                        <label for="hr-email" class="pl-10">E-poçt ünvanı <sup class="text-red">*</sup></label>
                        <input type="email" id="hr-email" class="input border-0 radius-20 shadow-big">
                    </div>

                    <div class="col as-6 xs-12 mb-20">
                        <label for="hr-pass" class="pl-10">Şifrə <sup class="text-red">*</sup></label>
                        <input type="password" id="hr-pass" class="input border-0 radius-20 shadow-big" placeholder="*****">
                    </div>

                    <div class="col as-6 xs-12 mb-20">
                        <label for="hr-pass-again" class="pl-10">Şifrənin təkrarı <sup class="text-red">*</sup></label>
                        <input type="password" id="uhrpass-again" class="input border-0 radius-20 shadow-big" placeholder="*****">
                    </div>

                    <div class="col as-6 mb-20">
                        <div class="row as-10">
                            <div class="col">
                                <input type="checkbox" class="ckbox" id="purchaser">
                                <label for="purchaser">Alıcı</label>
                            </div>
                            <div class="col">
                                <input type="checkbox" class="ckbox" id="seller">
                                <label for="seller">Satıcı</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="panel-footer pl-40 pr-40 text-center">
                <button type="reset" class="btn bg-white border-0 radius-20 shadow-big float-left" data-target-tab="reg-types">
                    <i aria-hidden="true" class="icon-arrow-left mr-"></i>
                    Geri
                </button>

                <button type="submit" class="btn bg-main border-0 radius-20 shadow-big light-ripple">Qeydiyyatı tamamla</button>

                <button type="reset" class="btn bg-white border-0 radius-20 shadow-big float-right" data-close="registration">
                    Bağla
                </button>
            </div>

        </div>

    </div>

</div>

<div class="overlay tr-3s" role="presentation"></div>

<!-- Scripts -->
<script src="../../assets/scripts/lazyload.min.js"></script>
<script src="../../assets/scripts/owl.carousel.min.js"></script>
<script src="../../assets/scripts/pi.js"></script>
<script src="../../assets/scripts/fotorama.js"></script>
<script src="../../assets/scripts/ripple.min.js"></script>
<script src="../../assets/scripts/popper.min.js"></script>
<script src="../../assets/scripts/tooltip.min.js"></script>
<script src="../../assets/scripts/autosize.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
    var ctx = document.getElementById('product-chart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                label: 'Qiymət statistikası',
                fill: false,
                borderColor: 'rgb(255, 99, 132)',
                data: [0, 10, 5, 2, 20, 30, 45]
            }]
        },

        // Configuration options go here
        options: {}
    });
</script>

<!--[if IE]>
<script defer src="assets/scripts/html5shiv.min.js"></script>
<script defer src="assets/scripts/respond.min.js"></script>
<![endif]-->

<!--Carousels-->
<script>

    /*================================================================================================================*/
    // Widgets Carousel
    /*================================================================================================================*/

    const widget1 = $('.widget-1');

    widget1.owlCarousel({
        margin: 15,
        items: 2,
        singleItem: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        lazyLoad: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 2,
                margin: 0
            },
            575: {
                items: 3,
                margin: 0
            },
            992: {
                items: 1
            }
        }
    });

    /*================================================================================================================*/
    // Members Carousel
    /*================================================================================================================*/

    const members = $('.members-carousel');

    members.owlCarousel({
        margin: 15,
        items: 2,
        singleItem: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        lazyLoad: true,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 2,
                margin: 10,
            },
            575: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    });

    /*================================================================================================================*/
    // Members Carousel
    /*================================================================================================================*/

    const newsCarousel = $('.news-carousel');

    newsCarousel.owlCarousel({
        margin: 15,
        singleItem: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        lazyLoad: true,
        dots: false,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            575: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });

</script>

<!--Static scripts-->
<script>
    const body = $('body');
    const pageUrl = window.location;

    $('header nav li a').filter(function () {
        return this.href == pageUrl;
    }).parent('li').addClass('active');

    $('.nav-toggle').on('click', function () {
        body.toggleClass('nav-shown');
    });

    $('*').click(function (e) {

        if (!$(e.target).is('.nav-toggle')
            && !$(e.target).is('.nav-toggle *')
            && !$(e.target).is('.main-nav')
            && !$(e.target).is('.main-nav *')) {
            body.removeClass('nav-shown');
        }

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

</script>

</body>
</html>
