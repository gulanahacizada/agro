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
            <button type="reset" class="btn bg-gray border-0 radius-20 shadow-big pl-40 pr-40" data-close="registration">
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
                <button type="reset" class="btn bg-gray border-0 radius-20 shadow-big pl-40 pr-40" data-close="registration">Bağla</button>
            </div>

        </div>

        <div class="tab-panel" role="tabpanel" data-tab="fr-registration">

            <div class="login-wrap d-flex-center text-center pl-40 pr-40 pt-100 ripple-effect light-ripple">
                <span class="h3 text-center text-uppercase thin text-white mb-100 d-block">Fiziki şəxs qeydiyyatı</span>
            </div>

            <div class="clear p-40">
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

                    <div class="col as-4 xs-6">
                        <button type="submit" class="btn bg-main border-0 radius-20 shadow-big w-100p light-ripple">Qeydiyyatı tamamla</button>
                    </div>

                </div>
            </div>

            <div class="panel-footer pl-40 pr-40">
                <button type="reset" class="btn bg-gray border-0 radius-20 shadow-big" data-target-tab="reg-types">
                    <i aria-hidden="true" class="icon-arrow-left mr-"></i>
                    Geri
                </button>
                <button type="reset" class="btn bg-gray border-0 radius-20 shadow-big float-right" data-close="registration">
                    Bağla
                </button>
            </div>

        </div>

        <div class="tab-panel" role="tabpanel" data-tab="hr-registration">

            <div class="login-wrap d-flex-center text-center pl-40 pr-40 pt-100 ripple-effect light-ripple">
                <span class="h3 text-center text-uppercase thin text-white mb-100 d-block">Hüquqi şəxs qeydiyyatı</span>
            </div>

            <div class="clear p-40">
                <div class="row as-10 justify-content-center">

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

                    <div class="col as-4 xs-6">
                        <button type="submit" class="btn bg-main border-0 radius-20 shadow-big w-100p light-ripple">Qeydiyyatı tamamla</button>
                    </div>

                </div>
            </div>

            <div class="panel-footer pl-40 pr-40">
                <button type="reset" class="btn bg-gray border-0 radius-20 shadow-big" data-target-tab="reg-types">
                    <i aria-hidden="true" class="icon-arrow-left mr-"></i>
                    Geri
                </button>
                <button type="reset" class="btn bg-gray border-0 radius-20 shadow-big float-right" data-close="registration">
                    Bağla
                </button>
            </div>

        </div>

    </div>

</div>

<div class="overlay tr-3s" role="presentation"></div>

<!-- Scripts -->
<!--<script src="asset/scripts/lazyload.min.js"></script>
<script src="asset/scripts/owl.carousel.min.js"></script>
<script src="asset/scripts/pi.js"></script>
<script src="asset/scripts/ripple.min.js"></script>-->
<!-- <script src="assets/scripts/popper.min.js"></script>
<script src="assets/scripts/tooltip.min.js"></script> -->
<!-- <script defer src="assets/scripts/autosize.min.js"></script> -->

<!--Carousels-->
<!--<script>

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

</script>-->

</body>
</html>
