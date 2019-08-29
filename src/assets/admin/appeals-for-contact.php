<?php include("header.php") ?>

<div class="panel">

    <div class="panel-header p-20">
        <h1 class="panel-title bold">
            <i aria-hidden="true" class="icon-envelope mr-10"></i>
            Əlaqə müraciətləri
        </h1>
    </div>

    <div class="p-20 pt-10 pb-10 bg-gray">
        <div class="row as-5">

            <div class="col xl-1 lg-2 md-2 sm-2 xs-2">
                <label for="per-page" class="m-0 shadow w-100p">
                    <select name="" id="per-page" class="input select w-100p border-0">
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </label>
            </div>

            <div class="col xl-2 lg-3 md-3 sm-4 xs-4">
                <label for="types" class="m-0 shadow w-100p">
                    <select name="" id="types" class="input select w-100p border-0">
                        <option value="all" selected>Bütün müraciətlər</option>
                        <option value="">Baxılmış müraciətlər</option>
                        <option value="">Baxılmamış müraciətlər</option>
                    </select>
                </label>
            </div>

            <div class="col xl-3 lg-4 md-4 sm-6 xs-6 ml-auto">
                <div class="input-group shadow">
                    <input type="search" class="input border-0 radius-0" placeholder="Axtar...">
                    <button class="btn bg-white border-0 radius-0" aria-label="Axtar">
                        <i aria-hidden="true" class="icon-search v-align-middle"></i>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="panel-body table-responsive m-0 p-0 border-0 o-auto">
        <table class="table bordered hovered">
            <thead class="no-wrap">
            <tr>
                <th>№</th>
                <th>Data title</th>
                <th>Data title</th>
                <th>Data title</th>
                <th>Data title</th>
                <th >Bax</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>
                    <a href="appeal-detail.php"
                       rel="external"
                       aria-label="Bax" title="Bax"
                       data-toggle="tooltip"
                       class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye v-align-middle"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>Data</td>
                <td>
                    <a href="appeal-detail.php"
                       rel="external"
                       aria-label="Bax" title="Bax"
                       data-toggle="tooltip"
                       class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye v-align-middle"></i>
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
