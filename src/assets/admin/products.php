<?php include("header.php") ?>

<div class="panel">

    <div class="panel-header p-20">
        <h1 class="panel-title bold">
            <i aria-hidden="true" class="icon-list-circle mr-10"></i>
            Məhsullar
        </h1>
    </div>

    <div class="panel-body p-20 pt-10 pb-0 bg-gray">
        <div class="row as-5">

            <div class="col xl-2 lg-3 md-3 sm-6 xs-6 mb-10">
                <label for="categories" class="m-0 shadow w-100p">
                    <select name="" id="categories" class="input select w-100p border-0">
                        <option value="all" selected>Bütün kateqoriyalar</option>
                        <option value="">Category Name</option>
                    </select>
                </label>
            </div>

            <div class="col xl-2 lg-3 md-3 sm-6 xs-6 mb-10">
                <label for="types" class="m-0 shadow w-100p">
                    <select name="" id="types" class="input select w-100p border-0">
                        <option value="all" selected>Bütün növlər</option>
                        <option value="">Type Name</option>
                    </select>
                </label>
            </div>

            <div class="col xl-3 lg-4 md-4 sm-9 xs-9 ml-auto">
                <div class="input-group shadow">
                    <input type="search" class="input border-0 radius-0" placeholder="Axtar...">
                    <button class="btn bg-white border-0 radius-0" aria-label="Axtar">
                        <i aria-hidden="true" class="icon-search v-align-middle"></i>
                    </button>
                </div>
            </div>

            <div class="col xl-1 lg-2 md-2 sm-3 xs-3">
                <a href="add-product.php" class="btn bg-orange w-100p shadow border-0">
                    <i aria-hidden="true" class="icon-plus mr-10"></i>
                    Yeni
                </a>
            </div>

        </div>
    </div>

    <div class="panel-body table-responsive m-0 p-0 border-0 o-auto">
        <table class="table bordered hovered">
            <thead class="no-wrap">
            <tr>
                <th>№</th>
                <th>Məhsul</th>
                <th>Kateqoriya</th>
                <th>Növ</th>
                <th>Qiymət</th>
                <th>Həcm</th>
                <th>Qalıq</th>
                <th>Tarix</th>
                <th colspan="2">Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>Alma</td>
                <td>Bağ bitkiləri</td>
                <td>Simerinko</td>
                <td>
                    <span class="text-green bold">2000 <i aria-hidden="true" class="icon-currency-azn small"></i> / ton</span>
                </td>
                <td>
                    <span class="text-red bold">2000 ton</span>
                </td>
                <td>
                    <span class="text-orange bold">1000 ton</span>
                </td>
                <td>29.05.2019</td>
                <td>
                    <a href="#"
                       rel="external"
                       aria-label="Bax" title="Bax"
                       data-toggle="tooltip"
                       class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                    </a>
                </td>
                <td class="no-wrap">
                    <a href="add-product.php"
                       aria-label="Redaktə et" title="Redaktə et"
                       data-toggle="tooltip"
                       class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Alma</td>
                <td>Bağ bitkiləri</td>
                <td>Simerinko</td>
                <td>
                    <span class="text-green bold">2000 <i aria-hidden="true" class="icon-currency-azn small"></i> / ton</span>
                </td>
                <td>
                    <span class="text-red bold">2000 ton</span>
                </td>
                <td>
                    <span class="text-orange bold">1000 ton</span>
                </td>
                <td>29.05.2019</td>
                <td>
                    <a href="#"
                       rel="external"
                       aria-label="Bax" title="Bax"
                       data-toggle="tooltip"
                       class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                    </a>
                </td>
                <td class="no-wrap">
                    <a href="add-product.php"
                       aria-label="Redaktə et" title="Redaktə et"
                       data-toggle="tooltip"
                       class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Alma</td>
                <td>Bağ bitkiləri</td>
                <td>Simerinko</td>
                <td>
                    <span class="text-green bold">2000 <i aria-hidden="true" class="icon-currency-azn small"></i> / ton</span>
                </td>
                <td>
                    <span class="text-red bold">2000 ton</span>
                </td>
                <td>
                    <span class="text-orange bold">1000 ton</span>
                </td>
                <td>29.05.2019</td>
                <td>
                    <a href="#"
                       rel="external"
                       aria-label="Bax" title="Bax"
                       data-toggle="tooltip"
                       class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                    </a>
                </td>
                <td class="no-wrap">
                    <a href="add-product.php"
                       aria-label="Redaktə et" title="Redaktə et"
                       data-toggle="tooltip"
                       class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-pen-5 v-align-middle"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="panel-footer">
        <nav class="pagination-nav" aria-label="Səhifələmə naviqatoru" itemscope itemtype="https://schema.org/SiteNavigationElement">
            <ul class="page-numbers m-0 p-0" role="toolbar">
                <li role="presentation" class="first float-left hide-xs">
                    <a href="#" role="button" rel="prev" class="btn tr-3s disabled" title="Əvvəlki səhifə">
                        <span>Əvvəlki</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" rel="start" role="button" class="active" aria-current="true" aria-posinset="1" data-pagenum="1" title="Səhifə 1" itemprop="url">
                        <span itemprop="name">1</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="button" aria-current="false" aria-posinset="2" data-pagenum="2" title="Səhifə 2" itemprop="url">
                        <span itemprop="name">2</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="button" aria-current="false" aria-posinset="3" data-pagenum="3" title="Səhifə 3" itemprop="url">
                        <span itemprop="name">3</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="button" aria-current="false" aria-posinset="4" data-pagenum="4" title="Səhifə 4" itemprop="url">
                        <span itemprop="name">4</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="button" aria-current="false" aria-posinset="5" data-pagenum="5" title="Səhifə 5" itemprop="url">
                        <span itemprop="name">5</span>
                    </a>
                </li>
                <li role="separator" aria-hidden="true">…</li>
                <li role="presentation">
                    <a href="#" role="button" aria-current="false" aria-posinset="10" data-pagenum="10" title="Səhifə 10" itemprop="url">
                        <span itemprop="name">10</span>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#" role="button" aria-current="false" aria-posinset="11" data-pagenum="11" title="Səhifə 11" itemprop="url">
                        <span itemprop="name">11</span>
                    </a>
                </li>
                <li role="presentation" class="last float-right hide-xs">
                    <a href="#" role="button" rel="next" class="btn tr-3s" title="Sonrakı səhifə">
                        <span>Sonrakı</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</div>

<?php include("footer.php") ?>
