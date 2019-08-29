<!DOCTYPE html>
<html lang="az">

<head>

    <title>AgroBirja - Admin</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, width=device-width">

    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#2d71e2"/>

    <meta name="msapplication-TileImage" content="/assets/images/favicon.png">
    <meta name="msapplication-TileColor" content="#34344e"/>
    <meta name="msapplication-navbutton-color" content="#34344e"/>
    <meta name="theme-color" content="#34344e"/>

    <meta name="robots" content="noodp, noydir, noindex, nofollow, noarchive"/>

    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/styles/app.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--    <link rel="stylesheet" href="assets/css/froala/froala_editor.min.css">-->
    <link rel="stylesheet" href="assets/styles/plugins/froala/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/froala_style.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/table.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/image_manager.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/image.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/video.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/quick_insert.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/code_view.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/colors.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/char_counter.min.css">
    <link rel="stylesheet" href="assets/styles/plugins/froala/codemirror.min.css">

    <!--<link rel="stylesheet" href="assets/css/froala/emoticons.css">-->
    <!--<link rel="stylesheet" href="assets/css/froala/line_breaker.css">-->
    <!--<link rel="stylesheet" href="assets/css/froala/fullscreen.css">-->
    <!--<link rel="stylesheet" href="assets/css/froala/file.css">-->


</head>

<body class="bg-gray scroll">

<!--Min Header-->
<header class="main-header panel d-table tr-3s w-100p">
    <div class="d-row">

        <!--Nav Toggle-->
        <div class="d-cell hide-xl hide-lg border-right">
            <span class="nav-toggle float-left" aria-controls="sidebar-menu">
                <i aria-hidden="true"></i>
            </span>
        </div>

        <!--Logo-->
        <div class="d-cell v-align-top w-100p">
            <a href="index.php" class="logo text-center" title="Ana panel">
                <span class="thin"><b>Agro</b>Birja</span>
            </a>
        </div>

        <!--Right Col-->
        <div class="d-cell v-align-top">
            <div class="d-table">
                <ul class="d-row right-col type-none m-0 p-0">

                    <li class="d-cell no-wrap drop notifications">

                        <span class="drop-toggle" title="Bildirişlər">
                            <i aria-hidden="true" class="icon-bell"></i>
                            <span class="badge bg-orange animation-1s zoomIn infinite">2</span>
                        </span>

                        <div class="drop-menu static right animated fadeInUp" role="menu">

                            <div class="menu-header">
                                <span>Yeni bildirişlər</span>
                            </div>

                            <div class="menu-body scroll">
                                <a href="notify-info.php" class="menu-item" title="Bildiriş">
                                    <span class="d-block mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    <small class="text-gray">1 gün əvvəl</small>
                                </a>
                                <a href="notify-info.php" class="menu-item seen" title="Bildiriş">
                                    <span class="d-block mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    <small class="text-gray">1 gün əvvəl</small>
                                </a>
                                <a href="notify-info.php" class="menu-item seen" title="Bildiriş">
                                    <span class="d-block mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    <small class="text-gray">1 gün əvvəl</small>
                                </a>
                                <a href="notify-info.php" class="menu-item seen" title="Bildiriş">
                                    <span class="d-block mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    <small class="text-gray">1 gün əvvəl</small>
                                </a>
                                <a href="notify-info.php" class="menu-item seen" title="Bildiriş">
                                    <span class="d-block mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                    <small class="text-gray">1 gün əvvəl</small>
                                </a>
                            </div>

                            <div class="menu-footer"><a href="notifications.php" title="Bütün bildirişləri gör"><small>Bütün bildirişləri gör</small></a></div>

                        </div>

                    </li>

                    <!--<li class="d-cell drop no-wrap">

                        <span class="drop-toggle" title="Əlavə et">
                            <i aria-hidden="true" class="icon-plus"></i>
                            <span class="ml-5 hide-xs hide-xxs">Əlavə et</span>
                        </span>

                        <div class="drop-menu right animated fadeInUp" role="menu">
                            <ul class="menu-body" role="menu">
                                <li role="presentation">
                                    <a href="#" class="menu-item" title="Add item">
                                        <i aria-hidden="true" class="icon-plus mr-15"></i>
                                        Add item
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>-->

                    <li class="d-cell no-wrap">
                        <a href="http://vac.agrobirja.az/" rel="external" title="Sayta get">
                            <i aria-hidden="true" class="icon-eye"></i>
                            <span class="ml-5 hide-xs hide-xxs">Sayta get</span>
                        </a>
                    </li>

                    <li class="d-cell no-wrap">
                        <a href="login.php" title="Çıxış">
                            <i aria-hidden="true" class="icon-power"></i>
                            <span class="ml-5 hide-xs hide-xxs">Çıxış</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</header>

<!--Left Side Menu-->
<aside class="main_side_menu bg-main shadow light tr-3s" id="sidebar-menu">

    <div class="side-header text-center shadow">
        <div class="d-block clear" title="Elvin Abbasov">
            <div class="w-70 thumb circle responsive pb-in-100 float-center mb-10 shadow">
                <img src="assets/images/avatar.png" alt="Elvin Abbasov" width="80" height="80">
            </div>
            <span class="user-name line-clamp line-1 text-white bold text-uppercase">Elvin Abbasov</span>
            <small class="user-status text-white mt-5">Status</small>
        </div>
    </div>

    <nav class="nav-menu accordion-menu pt-10">
        <ul class="nav_menu-list type-none m-0 p-0" role="menubar">

            <li role="presentation" class="nav_menu-list-item">
                <a href="index.php" title="Ana panel" role="menuitem" class="menu-item">
                    <i aria-hidden="true" class="icon-monitor"></i>
                    Ana panel
                </a>
            </li>

            <li role="separator" class="mt-10 mb-10 pb-10 pt-10 small text-uppercase">Əsas Admin</li>

            <li role="presentation" class="nav_menu-list-item">
                <a href="partners.php" title="Üzvlər" role="menuitem" class="menu-item">
                    <i aria-hidden="true" class="icon-list-square"></i>
                    Üzvlər
                </a>
            </li>

            <li role="presentation" class="nav_menu-list-item">
                <a href="news.php" title="Xəbərlər" role="menuitem" class="menu-item">
                    <i aria-hidden="true" class="icon-newspaper-3"></i>
                    Xəbərlər
                </a>
            </li>

            <li role="presentation" class="nav_menu-list-item">
                <a href="agronomist.php" title="Aqronomlar" role="menuitem" class="menu-item">
                    <i aria-hidden="true" class="icon-users"></i>
                    Aqronomlar
                </a>
            </li>

            <li role="separator" class="mb-10 pb-10"></li>

            <li role="presentation" class="nav_menu-list-item">

                <a href="javascript:void(0)" title="Müraciətlər" role="button" class="menu-toggle">
                    <i aria-hidden="true" class="icon-envelope"></i>
                    <span class="icon-arrow-down tr-3s float-right"></span>
                    Müraciətlər
                </a>

                <ul class="sub_menu type-none m-0 pl-0 pt-10 pb-10" role="menu">
                    <li role="presentation" class="sub_menu-item">
                        <a href="appeals-for-registration.php" title="Üzvlük müraciəti" role="menuitem" class="menu-item">
                            Üzvlük müraciətləri
                        </a>
                    </li>
                    <li role="presentation" class="sub_menu-item">
                        <a href="appeals-for-contact.php" title="Əlaqə müraciəti" role="menuitem" class="menu-item">
                            Əlaqə müraciətləri
                        </a>
                    </li>
                </ul>

            </li>

            <li role="presentation" class="nav_menu-list-item">

                <a href="javascript:void(0)" title="Statik səhifələr" role="button" class="menu-toggle">
                    <i aria-hidden="true" class="icon-file"></i>
                    <span class="icon-arrow-down tr-3s float-right"></span>
                    Statik səhifələr
                </a>

                <ul class="sub_menu type-none m-0 pl-0 pt-10 pb-10" role="menu">
                    <li role="presentation" class="sub_menu-item">
                        <a href="about.php" title="Haqqımızda" role="menuitem" class="menu-item">
                            Haqqımızda
                        </a>
                    </li>
                    <li role="presentation" class="sub_menu-item">
                        <a href="terms-of-use.php" title="İstifadə qaydaları" role="menuitem" class="menu-item">
                            İstifadə qaydaları
                        </a>
                    </li>
                </ul>

            </li>

            <li role="separator" class="mb-10 pb-10"></li>

            <li role="presentation" class="nav_menu-list-item">

                <a href="javascript:void(0)" title="Parametrlər" role="button" class="menu-toggle">
                    <i aria-hidden="true" class="icon-cogs"></i>
                    <span class="icon-arrow-down tr-3s float-right"></span>
                    Parametrlər
                </a>

                <ul class="sub_menu type-none m-0 pl-0 pt-10 pb-10" role="menu">
                    <li role="presentation" class="sub_menu-item">
                        <a href="settings.php" title="Əsas parametrlər" role="menuitem" class="menu-item">
                            Əsas parametrlər
                        </a>
                    </li>
                    <li role="presentation" class="sub_menu-item">
                        <a href="admins.php" title="Adminlər" role="menuitem" class="menu-item">
                            Adminlər
                        </a>
                    </li>
                </ul>

            </li>

            <li role="separator" class="mt-10 mb-10 pb-10 pt-10 small text-uppercase">Fiziki / Fərdi şəxs</li>

            <li role="presentation" class="nav_menu-list-item">
                <a href="#" title="Şirkət bilgiləri" role="menuitem" class="menu-item">
                    <i aria-hidden="true" class="icon-info-circle-thin"></i>
                    Şirkət bilgiləri
                </a>
            </li>

            <li role="separator" class="mb-10 pb-10"></li>

            <li role="presentation" class="nav_menu-list-item">

                <a href="javascript:void(0)" title="Məhsullar" role="button" class="menu-toggle">
                    <i aria-hidden="true" class="icon-list-circle"></i>
                    <span class="icon-arrow-down tr-3s float-right"></span>
                    Məhsullar
                </a>

                <ul class="sub_menu type-none m-0 pl-0 pt-10 pb-10" role="menu">
                    <li role="presentation" class="sub_menu-item">
                        <a href="products.php" title="Satışda olan məhsullar" role="menuitem" class="menu-item">
                            Satışda olan məhsullar
                        </a>
                    </li>
                    <li role="presentation" class="sub_menu-item">
                        <a href="#" title="Alınan məhsullar" role="menuitem" class="menu-item">
                            Alınan məhsullar
                        </a>
                    </li>
                </ul>

            </li>

            <li role="presentation" class="nav_menu-list-item">

                <a href="javascript:void(0)" title="Təkliflər" role="button" class="menu-toggle">
                    <i aria-hidden="true" class="icon-hand-shake"></i>
                    <span class="icon-arrow-down tr-3s float-right"></span>
                    Təkliflər
                </a>

                <ul class="sub_menu type-none m-0 pl-0 pt-10 pb-10" role="menu">
                    <li role="presentation" class="sub_menu-item">
                        <a href="#" title="Gələn təkliflər" role="menuitem" class="menu-item">
                            Gələn təkliflər
                        </a>
                    </li>
                    <li role="presentation" class="sub_menu-item">
                        <a href="#" title="Göndərilən təkliflər" role="menuitem" class="menu-item">
                            Göndərilən təkliflər
                        </a>
                    </li>
                </ul>

            </li>

        </ul>
    </nav>

</aside>

<!--Main Container-->
<main class="main-container clear">
    <div class="p-20">


