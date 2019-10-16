<?php include ('header.php') ?>

<div class="panel relative shadow-big">
    <div class="container as-10 xl-15 lg-15">
        <div class="panel-header pl-0 pr-0">
            <nav aria-label="Breadcrumb navbar">
                <ol class="breadcrumb" aria-label="Breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a [routerLink]="['/']" title="AgroBirja.az - Ana səhifə" itemprop="item">
                            <span itemprop="name">AgroBirja.az</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span title="Aqronomist name" itemprop="item" itemscope itemtype="https://schema.org/Thing" id="/agronomist/agronomist-name">
                            <span itemprop="name">Aqronomist name</span>
                        </span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </nav>
        </div>

        <div class="panel-header pl-0 pr-0 border-0">
            <h1 class="m-0 bold text-main text-uppercase">
                Aqronomist name
            </h1>
        </div>
    </div>
</div>

<div class="account-page container as-10 xl-15 lg-15 pt-20 pb-20">

    <div class="account-header shadow-big text-center clear pt-40 pb-40 ripple-effect light-ripple">
        <div class="thumb responsive pb-in-100 w-160 radius-50p float-center mb-30 shadow-big bg-white">
            <img src="https://as2.ftcdn.net/jpg/02/52/60/65/500_F_252606582_EKvvMadAdtVh3lPMLAd8W8pfdvtViVJn.jpg" alt="User Name" width="120" height="120" class="p-7 radius-50p">
        </div>
        <h2 class="account-name h4 bold mb-0 text-white text-uppercase">Aqronomist Name</h2>
    </div>

    <ul class="account-menu scrolling-menu center bg-white shadow-big font-16 mb-15" role="menu">
        <li role="presentation" class="active">
            <a href="#" title="Məqalələri" role="menuitem" class="menu-item ripple-effect">
                <i aria-hidden="true" class="icon-library v-align-middle mr-10"></i>
                <span class="v-align-middle">Məqalələri</span>
            </a>
        </li>
        <li role="presentation">
            <a href="#" title="Haqqında" role="menuitem" class="menu-item ripple-effect">
                <i aria-hidden="true" class="icon-info-circle-thin v-align-middle mr-10"></i>
                <span class="v-align-middle">Haqqında</span>
            </a>
        </li>
    </ul>

    <div class="account-body">
        <div class="bg-white shadow-big p-40 clear mb-30">

            <h3 class="bold m-0 text-main text-uppercase float-left mt-3">Məqalələr</h3>

            <a href="#" class="btn bg-white border-0 shadow-big radius-20 float-right" title="Yeni məqalə">
                <i aria-hidden="true" class="icon-plus v-align-middle"></i>
                <span class="hide-xs v-align-middle ml-10">Yeni məqalə</span>
            </a>

        </div>

        <div class="row as-15 sm-5 xs-5">

            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>
            <div class="col as-4 md-6 sm-6 xs-12 mb-30">
                <div class="item news-item bg-white shadow-big h-100p">
                    <a href="news-read.php" title="Title" class="d-block clear">
                        <div class="thumb hover scale responsive pb-in-65">
                            <img data-src="assets/images/eagro.jpg" alt="title" width="" height="">
                        </div>
                        <div class="info tr-3s border-top">

                    <span class="date-time d-block text-gray light mb-10">
                        <i aria-hidden="true" class="icon-calendar-8 text-special mr-10"></i>
                        18.08.2019
                    </span>

                            <span class="title text-black font-16 bold line-clamp line-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </span>

                        </div>
                    </a>
                </div>
            </div>

        </div>

        <div class="table-responsive o-auto border-0 bg-white shadow-big mb-30">
            <table class="table custom-table bg-gray">

                <thead class="bg-white">
                <tr>
                    <th>№</th>
                    <th>Başılq</th>
                    <th>Baxış sayı</th>
                    <th>Tarix</th>
                    <th>Bax</th>
                    <th></th>
                </tr>
                </thead>

                <tbody class="no-wrap">

                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td>1</td>

                    <td>
                        <span class="bold text-left line-clamp line-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    </td>

                    <td>65465</td>

                    <td>2019-03-27 15:40</td>

                    <td class="text-right">
                        <a href="news-read.php"
                           aria-label="Yazıya bax"
                           title="Yazıya bax" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Redaktə et"
                           title="Redaktə et" data-toggle="tooltip"
                           class="btn bg-blue xs circle border-0 shadow-big">
                            <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                        </a>
                    </td>

                </tr>

                </tbody>

            </table>
        </div>

        <nav class="pagination-nav bg-white p-15 shadow-big" aria-label="Səhifələmə naviqatoru" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <ul class="page-numbers m-0 p-0" role="menubar">
                <li role="presentation" class="first float-left hide-xs">
                    <a href="#" role="button" rel="prev" class="btn tr-3s disabled legitRipple" title="Əvvəlki səhifə">
                        <span>Əvvəlki</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" rel="start" role="menuitem" class="active" aria-current="true" aria-posinset="1" data-pagenum="1" title="Səhifə 1" itemprop="url">
                        <span itemprop="name">1</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="menuitem" aria-current="true" aria-posinset="2" data-pagenum="2" title="Səhifə 2" itemprop="url">
                        <span itemprop="name">2</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="menuitem" aria-current="true" aria-posinset="3" data-pagenum="3" title="Səhifə 3" itemprop="url">
                        <span itemprop="name">3</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="menuitem" aria-current="true" aria-posinset="4" data-pagenum="4" title="Səhifə 4" itemprop="url">
                        <span itemprop="name">4</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="menuitem" aria-current="true" aria-posinset="5" data-pagenum="5" title="Səhifə 5" itemprop="url">
                        <span itemprop="name">5</span>
                    </a>
                </li>
                <li role="separator" aria-hidden="true">…</li>
                <li role="presentation">
                    <a href="#" role="menuitem" aria-current="true" aria-posinset="10" data-pagenum="10" title="Səhifə 10" itemprop="url">
                        <span itemprop="name">10</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="menuitem" aria-current="true" aria-posinset="11" data-pagenum="11" title="Səhifə 11" itemprop="url">
                        <span itemprop="name">11</span>
                    </a>
                </li>
                <li role="presentation" class="last float-right hide-xs">
                    <a href="#" role="button" rel="next" class="btn tr-3s legitRipple" title="Sonrakı səhifə">
                        <span>Sonrakı</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

    <div class="account-body bg-white shadow-big p-40">

        <div class="pb-20 mb-40 border-bottom clear">
            <h3 class="bold m-0 text-main text-uppercase float-left mt-3 mb-3">Aqronom haqqında</h3>

            <a href="#" class="btn bg-white border-0 shadow-big radius-20 float-right" title="Hesab parametrləri">
                <i aria-hidden="true" class="icon-cogs v-align-middle"></i>
                <span class="hide-xs v-align-middle ml-10">Hesab parametrləri</span>
            </a>
        </div>

        <div class="row as-10">

            <div class="col as-12 lg-8">
                <h4 class="h5 bold">Haqqında</h4>

                <div class="font-16 light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum optio perspiciatis possimus sint
                        tenetur. Dignissimos dolorum explicabo, fugit laudantium libero molestiae natus porro possimus
                        quaerat rem repellendus sapiente sequi totam! Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Architecto at debitis deserunt doloremque error est eum facere in magnam
                        nesciunt, obcaecati officiis optio perspiciatis provident quaerat rerum sed totam unde.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum optio perspiciatis possimus sint
                        tenetur. Dignissimos dolorum explicabo, fugit laudantium libero molestiae natus porro possimus
                        quaerat rem repellendus sapiente sequi totam! Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Architecto at debitis deserunt doloremque error est eum facere in magnam
                        nesciunt, obcaecati officiis optio perspiciatis provident quaerat rerum sed totam unde.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum optio perspiciatis possimus sint
                        tenetur. Dignissimos dolorum explicabo, fugit laudantium libero molestiae natus porro possimus
                        quaerat rem repellendus sapiente sequi totam! Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Architecto at debitis deserunt doloremque error est eum facere in magnam
                        nesciunt, obcaecati officiis optio perspiciatis provident quaerat rerum sed totam unde.</p>
                </div>
            </div>

            <div class="col as-12 lg-4">
                <div class="bg-gray p-10">
                    <div class="bg-white pt-15 pl-15 pr-15">
                        <h4 class="h5 bold">Əlaqə məlumatları</h4>

                        <table class="account-requisition w-100p">
                            <tbody>
                            <tr>
                                <td class="pb-15 pt-15 border-top bold v-align-top">Telefon:</td>
                                <td class="pb-15 pt-15 border-top">
                                    <a href="tel:+(994 77) 777 77 77" title="+(994 77) 777 77 77" class="d-block bold">+(994 77) 777 77 77</a>
                                    <a href="tel:+(994 77) 777 77 77" title="+(994 77) 777 77 77" class="d-block bold">+(994 77) 777 77 77</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-15 pt-15 border-top bold v-align-top pt-5">E-mail:</td>
                                <td class="pb-15 pt-15 border-top">
                                    <a href="mailto:info@gmail.com" title="info@gmail.com" class="d-block bold">info@gmail.com</a>
                                    <a href="mailto:info@gmail.com" title="info@gmail.com" class="d-block bold">info@gmail.com</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-15 pt-15 border-top bold v-align-top pt-5">Sayt:</td>
                                <td class="pb-15 pt-15 border-top">
                                    <a href="http://www.exapmle.com" title="Sayta keçid" rel="external noopener noreferrer nofollow" class="d-block bold">
                                        Sayta keçid
                                        <sup><i aria-hidden="true" class="icon-external-link ml-10"></i></sup>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-15 pt-15 border-top bold v-align-top pt-5">Sosial şəbəkələr:</td>
                                <td class="pb-15 pt-15 border-top">
                                    <a href="#" title="Facebook" rel="external noopener noreferrer" data-toggle="tooltip" class="social-link btn xs circle bg-fb border-0 shadow-big ml-2 mr-2">
                                        <i aria-hidden="true" class="icon-social-facebook v-align-middle"></i>
                                    </a>
                                    <a href="#" title="Twitter" rel="external noopener noreferrer" data-toggle="tooltip" class="social-link btn xs circle bg-tw border-0 shadow-big ml-2 mr-2">
                                        <i aria-hidden="true" class="icon-social-twitter v-align-middle"></i>
                                    </a>
                                    <a href="#" title="Linkedin" rel="external noopener noreferrer" data-toggle="tooltip" class="social-link btn xs circle bg-ln border-0 shadow-big ml-2 mr-2">
                                        <i aria-hidden="true" class="icon-social-linkedin v-align-middle"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="account-body bg-white shadow-big p-40">

        <div class="pb-20 mb-40 border-bottom clear">
            <h3 class="bold m-0 text-main text-uppercase float-left mt-3 mb-3">Hesab parametrləri</h3>

            <div class="clear float-right">

                <a href="#" class="btn bg-white border-0 shadow-big radius-20 float-left" title="Geri">
                    <i aria-hidden="true" class="icon-arrow-left v-align-middle"></i>
                    <span class="hide-xs v-align-middle ml-10">Geri</span>
                </a>

                <ul class="form-lang type-none mb-0 p-0 clear float-left" role="tablist">
                    <li role="presentation" class="float-left ml-10">
                        <span role="button" class="btn circle border-0 shadow-big bg-green">AZ</span>
                    </li>
                    <li role="presentation" class="float-left ml-10">
                        <span role="button" class="btn circle border-0 shadow-big">EN</span>
                    </li>
                    <li role="presentation" class="float-left ml-10">
                        <span role="button" class="btn circle border-0 shadow-big">RU</span>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="account-sub-menu scrolling-menu center bg-white shadow-big font-16 mb-40 pt-5 pb-5 radius-40" role="tablist">
            <li role="presentation" class="active">
                <span title="İstifadəçi məlumatları" role="tab" class="menu-item radius-30 ripple-effect" data-target-tab="agronomist-detail">
                    <i aria-hidden="true" class="icon-user-key v-align-middle mr-10"></i>
                    <span class="v-align-middle">İstifadəçi məlumatları</span>
                </span>
            </li>
            <li role="presentation">
                <span title="Aqronom haqqında" role="tab" class="menu-item radius-30 ripple-effect" data-target-tab="about">
                    <i aria-hidden="true" class="icon-info-circle-thin v-align-middle mr-10"></i>
                    <span class="v-align-middle">Aqronom haqqında</span>
                </span>
            </li>
        </ul>

        <form action class="settings-form tab-content">

            <div class="tab-panel mb-40 active" role="tabpanel" data-tab="agronomist-detail">
                <div class="row as-10 justify-content-center">
                    <div class="col as-12 xl-8">
                        <div class="row as-10">

                            <div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="full-name" class="pl-10">Ad, Soyad, Ata adı <sup class="text-red">*</sup></label>
                                <input type="text" id="full-name" class="input border-0 radius-20 shadow-big">
                            </div>

                            <div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="email" class="pl-10">E-poçt <sup class="text-red">*</sup></label>
                                <input type="email" id="email" class="input border-0 radius-20 shadow-big">
                            </div>

                            <div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="tel" class="pl-10">Telefon <sup class="text-red">*</sup></label>
                                <input type="tel" id="tel" class="input border-0 radius-20 shadow-big">
                            </div>

                            <div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="" class="pl-10">Field Label</label>
                                <select id="" class="input select border-0 radius-20 shadow-big">
                                    <option value="">Seç</option>
                                    <option value="">Product Name</option>
                                    <option value="">Product Name</option>
                                    <option value="">Product Name</option>
                                </select>
                            </div>

                            <div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="" class="pl-10">Field Label</label>
                                <input type="number" min="0" max="" id="" class="input border-0 radius-20 shadow-big">
                            </div>

                            <div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="" class="pl-10">Field Label</label>
                                <input id="" class="input datepicker-here border-0 radius-20 shadow-big" type="text" data-language="az" data-auto-close="true" data-position="bottom left">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-panel mb-40" role="tabpanel" data-tab="about">
                <div class="row as-20">

                    <div class="col as-12 xl-8">
                        <label for="about-me" class="pl-10">Şirkət haqqında ətraflı məlumat</label>
                        <textarea name id="about-me" cols="30" rows="19" class="input no-resize border-0 radius-20 shadow-big" placeholder="Ətraflı məlumat qeyd edin"></textarea>
                    </div>

                    <div class="col as-12 xl-4">
                        <div class="row as-10">

                            <div class="col as-4 xl-12 sm-6 xs-12 mb-10 pb-10">
                                <label for="email" class="pl-10">E-poçt <sup class="text-red">*</sup></label>
                                <div class="input-group radius-20 shadow-big">
                                    <input type="email" id="email" class="input border-0 radius-20">
                                    <button type="button" class="btn border-0 radius-20" aria-label="Artır">
                                        <i aria-hidden="true" class="icon-plus v-align-middle text-gray"></i>
                                    </button>
                                </div>
                            </div>

                            <!--<div class="col as-4 xl-12 sm-6 xs-12 mb-10 pb-10">
                                <label for="email-2" class="pl-10">E-poçt (2)</label>
                                <div class="input-group radius-20 shadow-big">
                                    <input type="email" id="email-2" class="input border-0 radius-20">
                                    <button type="button" class="btn border-0 radius-20" aria-label="Azalt">
                                        <i aria-hidden="true" class="icon-minus v-align-middle text-gray"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col as-4 xl-12 sm-6 xs-12 mb-10 pb-10">
                                <label for="email-3" class="pl-10">E-poçt (3)</label>
                                <div class="input-group radius-20 shadow-big">
                                    <input type="email" id="email-3" class="input border-0 radius-20">
                                    <button type="button" class="btn border-0 radius-20" aria-label="Azalt">
                                        <i aria-hidden="true" class="icon-minus v-align-middle text-gray"></i>
                                    </button>
                                </div>
                            </div>-->

                            <div class="col as-4 xl-12 sm-6 xs-12 mb-10 pb-10">
                                <label for="tel" class="pl-10">Telefon <sup class="text-red">*</sup></label>
                                <div class="input-group radius-20 shadow-big">
                                    <input type="tel" id="tel" class="input border-0 radius-20">
                                    <button type="button" class="btn border-0 radius-20" aria-label="Artır">
                                        <i aria-hidden="true" class="icon-plus v-align-middle text-gray"></i>
                                    </button>
                                </div>
                            </div>

                            <!--<div class="col as-4 xl-12 sm-6 xs-12 mb-10 pb-10">
                                <label for="tel-2" class="pl-10">Telefon</label>
                                <div class="input-group radius-20 shadow-big">
                                    <input type="tel" id="tel-2" class="input border-0 radius-20">
                                    <button type="button" class="btn border-0 radius-20" aria-label="Azalt">
                                        <i aria-hidden="true" class="icon-minus v-align-middle text-gray"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col as-4 xl-12 sm-6 xs-12 mb-10 pb-10">
                                <label for="tel-3" class="pl-10">Telefon</label>
                                <div class="input-group radius-20 shadow-big">
                                    <input type="tel" id="tel-3" class="input border-0 radius-20">
                                    <button type="button" class="btn border-0 radius-20" aria-label="Azalt">
                                        <i aria-hidden="true" class="icon-minus v-align-middle text-gray"></i>
                                    </button>
                                </div>
                            </div>-->

                            <div class="col as-4 xl-12 sm-6 xs-12">
                                <label for="site" class="pl-10">Sayt</label>
                                <input type="url" id="site" class="input border-0 radius-20 shadow-big">
                            </div>

                            <!--<div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="" class="pl-10">Field Label</label>
                                <select id="" class="input select border-0 radius-20 shadow-big">
                                    <option value="">Seç</option>
                                    <option value="">Product Name</option>
                                    <option value="">Product Name</option>
                                    <option value="">Product Name</option>
                                </select>
                            </div>

                            <div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="" class="pl-10">Field Label</label>
                                <input type="number" min="0" max="" id="" class="input border-0 radius-20 shadow-big">
                            </div>

                            <div class="col as-4 sm-6 xs-12 mb-10 pb-10">
                                <label for="" class="pl-10">Field Label</label>
                                <input id="" class="input datepicker-here border-0 radius-20 shadow-big" type="text" data-language="az" data-auto-close="true" data-position="bottom left">
                            </div>-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-panel mb-40" role="tabpanel" data-tab="branches"></div>

            <div class="tab-panel mb-40" role="tabpanel" data-tab="requisitions"></div>

            <div class="tab-panel mb-40" role="tabpanel" data-tab="contact-details"></div>

            <div class="clear radius-30 shadow-big p-5">
                <button type="submit" class="btn lg bg-green border-0 radius-30 shadow-big float-right">
                    Yadda saxla
                </button>
            </div>

        </form>

    </div>

    <div class="account-body bg-white shadow-big p-40">

        <div class="pb-20 mb-40 border-bottom clear">

            <h3 class="bold m-0 text-main text-uppercase float-left mt-3 mb-3">Yeni məqalə</h3>

            <div class="clear float-right">

                <a href="#" class="btn bg-white border-0 shadow-big radius-20 float-left" title="Geri">
                    <i aria-hidden="true" class="icon-arrow-left v-align-middle"></i>
                    <span class="hide-xs v-align-middle ml-10">Geri</span>
                </a>

                <ul class="form-lang type-none mb-0 p-0 clear float-left" role="tablist">
                    <li role="presentation" class="float-left ml-10">
                        <span role="button" class="btn circle border-0 shadow-big bg-green">AZ</span>
                    </li>
                    <li role="presentation" class="float-left ml-10">
                        <span role="button" class="btn circle border-0 shadow-big">EN</span>
                    </li>
                    <li role="presentation" class="float-left ml-10">
                        <span role="button" class="btn circle border-0 shadow-big">RU</span>
                    </li>
                </ul>
            </div>

        </div>

        <form action="">

            <div class="clear mb-10 pb-10">
                <label for="article-title" class="pl-10">Məqalə başlığı</label>
                <input type="text" id="article-title" class="input border-0 radius-20 shadow-big">
            </div>

            <div class="clear mb-10 pb-10">
                <label for="description" class="pl-10">Məhsul haqqında</label>
                <textarea name id="description" cols="30" rows="20" class="input no-resize border-0 radius-20 shadow-big" placeholder="Ətraflı məlumat qeyd edin"></textarea>
            </div>

            <div class="clear radius-30 shadow-big p-5 mt-20">
                <button type="submit" class="btn lg bg-green border-0 radius-30 shadow-big float-right">
                    Yadda saxla
                </button>
            </div>

        </form>

    </div>

</div>

<?php include ('footer.php') ?>
