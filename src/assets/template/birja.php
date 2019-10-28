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
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="/birja.php" title="Birja" itemprop="item">
                            <span itemprop="name">Birja</span>
                        </a>
                        <meta itemprop="position" content="2">
                    </li>
                    <li aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span title="Product Name" itemprop="item" itemscope itemtype="https://schema.org/Thing" id="/birja">
                            <span itemprop="name">Product Name</span>
                        </span>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>
            </nav>
        </div>

        <div class="panel-header pl-0 pr-0 border-0">
            <h1 class="m-0 bold text-main text-uppercase">
                Agro Birja
            </h1>
        </div>
    </div>
</div>

<div class="container as-10 xl-15 lg-15 pt-20 pb-20">
    <div class="shadow-big">

        <div class="pt-20 pl-20 pr-20 bg-gray">
            <div class="row as-5">
                <div class="col md-6 sm-6 xs-6 mb-20">
                    <select name="" id="companies" class="input select border-0 radius-20 shadow-big">
                        <option value="all-companies">Bütün şirkətlər</option>
                        <option value="company-name">Company name</option>
                        <option value="company-name">Company name</option>
                        <option value="company-name">Company name</option>
                        <option value="company-name">Company name</option>
                    </select>
                </div>
                <div class="col md-6 sm-6 xs-6 mb-20">
                    <select name="" id="products" class="input select border-0 radius-20 shadow-big">
                        <option value="all-products">Bütün məhsullar</option>
                        <option value="product-name">Product name</option>
                        <option value="product-name">Product name</option>
                        <option value="product-name">Product name</option>
                        <option value="product-name">Product name</option>
                    </select>
                </div>
                <div class="col md-6 sm-6 xs-6 mb-20">
                    <select name="" id="types" class="input select border-0 radius-20 shadow-big">
                        <option value="all-types">Bütün məhsul növləri</option>
                        <option value="product-name">Product type</option>
                        <option value="product-name">Product type</option>
                        <option value="product-name">Product type</option>
                        <option value="product-name">Product type</option>
                    </select>
                </div>
                <div class="col md-6 sm-6 xs-6 mb-20">
                    <input id="" class="input datepicker-here border-0 radius-20 shadow-big" type="text" data-language="az" data-auto-close="true" data-position="bottom left">
                </div>
                <div class="col xl-1 lg-2 md-2 sm-3 xs-4 mb-20">
                    <button type="reset" class="btn bg-orange w-100p border-0 radius-20 shadow-big">Sıfırla</button>
                </div>
            </div>
        </div>

        <div class="table-responsive border-0 o-auto">
            <table class="table custom-table bg-gray">

                <thead class="bg-white">
                <tr>
                    <th colspan="2">Satıcı</th>
                    <th>Məhsul</th>
                    <th>Növ</th>
                    <th>Qiymət</th>
                    <th>Həcm</th>
                    <th>Satış</th>
                    <th>Tarix</th>
                    <th><i aria-hidden="true" class="icon-ellipsis-h-circle"></i></th>
                </tr>
                </thead>

                <tbody class="no-wrap">

                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>
                <tr>

                    <td class="pr-0">
                        <div class="thumb responsive pb-in-100 radius-50p w-30 border">
                            <img src="assets/images/ulu.png" alt="MARS-FK LTD MMM" width="30" height="30">
                        </div>
                    </td>

                    <td width="30%">
                        <span class="bold pointer text-main">MARS-FK LTD MMM</span>
                    </td>
                    <td>Nar</td>

                    <td>Gülöyşə</td>

                    <td>
                    <span class="p-5 pl-7 pr-7 bg-gray radius-4 text-green bold">
                        2000
                        <i aria-hidden="true" class="icon-currency-azn small"></i>
                        / ton
                    </span>
                    </td>

                    <td><span class="text-special bold">2000 Ton</span></td>
                    <td>
                        <div class="progress radius-5 w-100">
                            <div class="progress-bar radius-5 bg-main text-right" role="progressbar" style="width: 70%">70%</div>
                        </div>
                    </td>

                    <td>
                        <span class="text-gray">2019-03-27 15:40</span>
                    </td>

                    <td class="text-right">
                        <a href="product.php"
                           aria-label="Ətraflı məlumat"
                           title="Ətraflı məlumat" data-toggle="tooltip"
                           class="btn xs circle border-0 shadow-big text-green">
                            <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                        </a>
                    </td>

                </tr>

                </tbody>

            </table>
        </div>

    </div>
</div>

<?php include ('footer.php') ?>
