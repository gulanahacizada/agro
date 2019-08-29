<?php include ('header.php') ?>
<div class="container as-10 xl-15 lg-15 pt-20 pb-20">
    <div class="panel shadow-big">

        <div class="panel-header">
            <nav aria-label="Breadcrumb navbar">
                <ol class="breadcrumb" aria-label="Breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="/" title="AgroBirja.az - Ana səhifə" itemprop="item">
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
                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="/company.php" title="Company Name" itemprop="item">
                            <span itemprop="name">Company Name</span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                    <li aria-current="page" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span title="Product Name" itemprop="item" itemscope itemtype="https://schema.org/Thing" id="/products/product-name">
                            <span itemprop="name">Product Name</span>
                        </span>
                        <meta itemprop="position" content="4">
                    </li>
                </ol>
            </nav>
        </div>

        <div class="panel-body p-40">

            <div class="row as-15 sm-10 xs-10 justify-content-center mb-40">

                <div class="col as-5 sm-6 xs-12 pb-10">
                    <div class="fotorama shadow-big"
                         data-wow-duration="1s"
                         data-width="1920"
                         data-ratio="300/200"
                         data-maxheight="400px"
                         data-nav="thumbs"
                         data-thumbheight="50"
                         data-thumbwidth="80"
                         data-fit="cover"
                         data-allowfullscreen="true">

                        <!--Əsas Şəkil-->
                        <img src="assets/images/ulu.png" alt="Product name" width="480" height="310">

                        <!--Digər şəkillər-->
                        <a href="assets/images/ulu.png" data-thumb="assets/images/ulu.png"></a>
                        <a href="assets/images/ulu.png" data-thumb="assets/images/ulu.png"></a>
                        <a href="assets/images/ulu.png" data-thumb="assets/images/ulu.png"></a>

                    </div>
                </div>

                <div class="col as-12 lg-7 pt-10">

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

    </div>
</div>
<?php include ('footer.php') ?>
