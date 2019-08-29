<?php include("header.php") ?>

<div class="panel">

    <div class="panel-header p-20">
        <h1 class="panel-title bold">
            <i aria-hidden="true" class="icon-file mr-10"></i>
            Daxil olan sənədlər

            <span class="badge bg-orange ml-10">10</span>
        </h1>
    </div>

    <div class="panel-body p-20 pt-10 pb-0 bg-gray">
        <div class="row as-5">

            <div class="col lg-3 md-5 sm-5 xs-12 xxs-12 mb-10">
                <label for="categories" class="m-0 shadow w-100p">
                    <select name="" id="categories" class="input select w-100p border-0">
                        <option value="all" selected>Masamdakı sənədlər</option>
                        <option value="">Mərkəzi orqanlardan</option>
                        <option value="">Strukturlardan</option>
                        <option value="">Məktublar</option>
                        <option value="">Vətandaş müraciətləri</option>
                        <option value="">Sərəncamverici sənədlər</option>
                    </select>
                </label>
            </div>

            <div class="col lg-3 md-5 sm-5 xs-9 xxs-8 mb-10">
                <label for="quick-filter" class="m-0 shadow w-100p">
                    <select name="" id="quick-filter" class="input select w-100p border-0">
                        <option value="all" selected>Hamısı</option>
                        <option value="">Qeydiyyata alınmış sənədlər</option>
                        <option value="">Qeydiyyata alınmamış sənədlər</option>
                        <option value="">Oxunmamış sənədlər</option>
                        <option value="">İcra müddətinə 10 gün qalmış sənədlər</option>
                        <option value="">İcra müddətinə 5 gün qalmış sənədlər</option>
                        <option value="">Vaxtından əvvəl icra olunmuş sənədlər</option>
                        <option value="">İcrada olan sənədlər</option>
                        <option value="">Vaxtı ötmüş sənədlər</option>
                        <option value="">İstifadəçiyə imzaya gələn sənədlər</option>
                        <option value="">İstifadəçiyə icraya ünvanlanan sənədlər</option>
                        <option value="">İstifadəçiyə icraya nəzarətlə ünvanlanan sənədlər</option>
                        <option value="">İstifadəçiyə nəzarətlə ünvanlanan sənədlər</option>
                        <option value="">Nəzarətlə daxil olan sənədlər</option>
                    </select>
                </label>
            </div>

            <div class="col lg-1 md-2 sm-2 xs-3 xxs-4 mb-10">
                <label for="filter-years" class="m-0 shadow w-100p">
                    <select name="" id="filter-years" class="input select w-100p border-0">
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                    </select>
                </label>
            </div>

            <div class="col lg-1 md-2 sm-2 xs-4 xxs-4 lg-ml-auto">
                <a href="add-product.php" class="btn bg-orange w-100p shadow border-0">
                    <i aria-hidden="true" class="icon-plus mr-10"></i>
                    Yeni
                </a>
            </div>

            <div class="col lg-2 md-2 sm-2 xs-4 xxs-4">
                <button class="btn bg-white w-100p shadow border-0" data-target-collapse="full-search">
                    <i aria-hidden="true" class="icon-search mr-10"></i>
                    Axtarış
                </button>
            </div>

            <div class="col lg-1 md-2 sm-2 xs-4 xxs-4">
                <button class="btn bg-white w-100p shadow border-0">
                    <i aria-hidden="true" class="icon-file-excel mr-10"></i>
                    Excel
                </button>
            </div>

            <div class="col as-12 mb-10 show-md show-sm"></div>

        </div>
    </div>

    <div class="collapse-content border-top" data-collapse="full-search">
        <div class="panel-header border-bottom">
            <i aria-hidden="true" class="icon-search mr-15"></i>
            <span class="bold">Ətraflı axtarış</span>
        </div>
        <div class="panel-body p-20 pb-0 bg-gray">
            <form class="row as-7 xs-5 xxs-5">

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Daxilolma forması</label>
                    <select name="" id="" class="input select border-0 shadow w-100p">
                        <option value="" selected>Seç</option>
                        <option value="">Mərkəzi orqanlardan</option>
                        <option value="">Məktublar</option>
                        <option value="">Vətəndaş müraciətləri</option>
                        <option value="">Sərəncamverici sənədlər</option>
                    </select>
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Qeydiyyat №</label>
                    <input type="text" class="input border-0 shadow">
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Qeydiyyat tarixi</label>
                    <input type="text" class="input date range border-0 shadow">
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Sənədin növü</label>
                    <select name="" id="" class="input select border-0 shadow  w-100p">
                        <option value="" selected>Seç</option>
                        <option value="">File type</option>
                        <option value="">File type</option>
                        <option value="">File type</option>
                        <option value="">File type</option>
                        <option value="">File type</option>
                    </select>
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Sənəd №</label>
                    <input type="text" class="input border-0 shadow">
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Sənədin tarixi</label>
                    <input type="text" class="input date range border-0 shadow">
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Sənədin statusu</label>
                    <select name="" id="" class="input select border-0 shadow w-100p">
                        <option value="" selected>Seç</option>
                        <option value="">Baxılıb</option>
                        <option value="">Baxılmayıb</option>
                        <option value="">Dərkənar olunur</option>
                        <option value="">Digər</option>
                    </select>
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Kimə ünvanlanıb</label>
                    <select name="" id="" class="input select border-0 shadow w-100p">
                        <option value="" selected>Seç</option>
                        <option value="">Ad Soyad Ata adı</option>
                        <option value="">Ad Soyad Ata adı</option>
                        <option value="">Ad Soyad Ata adı</option>
                        <option value="">Ad Soyad Ata adı</option>
                        <option value="">Ad Soyad Ata adı</option>
                        <option value="">Ad Soyad Ata adı</option>
                    </select>
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label for="">Təşkilat</label>
                    <select name="" id="" class="input select border-0 shadow w-100p">
                        <option value="" selected>Seç</option>
                        <option value="a">Organization name</option>
                        <option value="b">Organization name</option>
                        <option value="c">Organization name</option>
                        <option value="d">Organization name</option>
                        <option value="e">Organization name</option>
                        <option value="f">Organization name</option>
                    </select>
                </div>

                <div class="col as-3 xxs-6 mb-15">
                    <label> </label>
                    <button class="btn bg-green border-0 shadow w-100p">Axtar</button>
                </div>

            </form>
        </div>
    </div>

    <div class="panel-body table-responsive m-0 p-0 border-0 o-auto">
        <table class="table bordered hovered data-table">
            <thead class="no-wrap">
            <tr>
                <th>№</th>
                <th>Bölmə</th>
                <th>Status</th>
                <th>Qeydiyyat №</th>
                <th>Tarix</th>
                <th>İcra müddəti</th>
                <th>Sənəd №</th>
                <th>Sənədin tarixi</th>
                <th>Kimə ünvanlanıb</th>
                <th colspan="5">Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody class="text-center">
            <tr>
                <td>1</td>
                <td>Vətəndaş müraciətləri</td>
                <td>
                    <span class="badge bg-main" data-toggle="tooltip" title="Sənəd yenidir və hələ baxılmayıb.">
                        Daxil olub
                    </span>
                </td>
                <td>1/2-01</td>
                <td>29.05.2019</td>
                <td>
                    <span class="d-block">15 gün</span>
                </td>
                <td>656456</td>
                <td>29.05.2019</td>
                <td>Elvin Abbasov Miribadət, sədr</td>
                <td>
                    <span role="button"
                          aria-label="Bax" title="Bax"
                          data-toggle="tooltip"
                          data-target-modal="doc-full-detail"
                          class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <span role="button"
                          aria-label="Dərkənar" title="Dərkənar"
                          data-toggle="tooltip"
                          data-target-modal="instructions-modal"
                          class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-list-circle"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <a href="add-reply.php"
                       aria-label="Cavab yaz" title="Cavab yaz"
                       data-toggle="tooltip"
                       class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-pen-5"></i>
                    </a>
                </td>
                <td>
                    <span role="button"
                          aria-label="Elektron sənədlər" title="Elektron sənədlər"
                          data-toggle="tooltip"
                          data-target-modal="e-docs-modal"
                          class="btn xs circle bg-green dark dark shadow border-0">
                        <i aria-hidden="true" class="icon-file"></i>
                    </span>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mərkəzi orqanlardan</td>
                <td>
                    <span class="badge bg-green" data-toggle="tooltip" title="Sənəd tam icra olunub">
                        İcra olunub
                    </span>
                </td>
                <td>1/2-02</td>
                <td>30.05.2019</td>
                <td>
                    <span class="d-block">15 gün</span>
                </td>
                <td>165425</td>
                <td>30.05.2019</td>
                <td>Elvin Abbasov Miribadət, sədr</td>
                <td>
                    <span role="button"
                          aria-label="Bax" title="Bax"
                          data-toggle="tooltip"
                          data-target-modal="doc-full-detail"
                          class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <span role="button"
                          aria-label="Dərkənar" title="Dərkənar"
                          data-toggle="tooltip"
                          data-target-modal="instructions-modal"
                          class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-list-circle"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <a href="add-reply.php"
                       aria-label="Cavab yaz" title="Cavab yaz"
                       data-toggle="tooltip"
                       class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-pen-5"></i>
                    </a>
                </td>
                <td>
                    <span role="button"
                          aria-label="Elektron sənədlər" title="Elektron sənədlər"
                          data-toggle="tooltip"
                          data-target-modal="e-docs-modal"
                          class="btn xs circle bg-green dark dark shadow border-0">
                        <i aria-hidden="true" class="icon-file"></i>
                    </span>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Məktublar</td>
                <td>
                    <span class="badge bg-main" data-toggle="tooltip" title="Sənəd yenidir və hələ baxılmayıb.">
                        Daxil olub
                    </span>
                </td>
                <td>1/2-01</td>
                <td>29.05.2019</td>
                <td>
                    <span class="d-block">15 gün</span>
                    <span class="badge bg-red" data-toggle="tooltip" title="Sənəd Müdriyyət tərəfindən daxili nəzarətə götürülüb.">
                        Nəzarətdə
                    </span>
                </td>
                <td>656456</td>
                <td>29.05.2019</td>
                <td>Elvin Abbasov Miribadət, sədr</td>
                <td>
                    <span role="button"
                          aria-label="Bax" title="Bax"
                          data-toggle="tooltip"
                          data-target-modal="doc-full-detail"
                          class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <span role="button"
                          aria-label="Dərkənar" title="Dərkənar"
                          data-toggle="tooltip"
                          data-target-modal="instructions-modal"
                          class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-list-circle"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <a href="add-reply.php"
                       aria-label="Cavab yaz" title="Cavab yaz"
                       data-toggle="tooltip"
                       class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-pen-5"></i>
                    </a>
                </td>
                <td>
                    <span role="button"
                          aria-label="Elektron sənədlər" title="Elektron sənədlər"
                          data-toggle="tooltip"
                          data-target-modal="e-docs-modal"
                          class="btn xs circle bg-green dark dark shadow border-0">
                        <i aria-hidden="true" class="icon-file"></i>
                    </span>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Strukturlardan</td>
                <td>
                    <span class="badge bg-main" data-toggle="tooltip" title="Sənəd yenidir və hələ baxılmayıb.">
                        Daxil olub
                    </span>
                </td>
                <td>1/2-01</td>
                <td>29.05.2019</td>
                <td>
                    <span class="d-block">20 gün</span>

                    <span class="badge bg-special" data-toggle="tooltip" title="İcra müddətinə son 10 gün qalıb!">
                        son 10 gün
                    </span>
                </td>
                <td>656456</td>
                <td>29.05.2019</td>
                <td>Elvin Abbasov Miribadət, sədr</td>
                <td>
                    <span role="button"
                          aria-label="Bax" title="Bax"
                          data-toggle="tooltip"
                          data-target-modal="doc-full-detail"
                          class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <span role="button"
                          aria-label="Dərkənar" title="Dərkənar"
                          data-toggle="tooltip"
                          data-target-modal="instructions-modal"
                          class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-list-circle"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <a href="add-reply.php"
                       aria-label="Cavab yaz" title="Cavab yaz"
                       data-toggle="tooltip"
                       class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-pen-5"></i>
                    </a>
                </td>
                <td>
                    <span role="button"
                          aria-label="Elektron sənədlər" title="Elektron sənədlər"
                          data-toggle="tooltip"
                          data-target-modal="e-docs-modal"
                          class="btn xs circle bg-green dark dark shadow border-0">
                        <i aria-hidden="true" class="icon-file"></i>
                    </span>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Sərəncamverici sənədlər</td>
                <td>
                    <span class="badge bg-main" data-toggle="tooltip" title="Sənəd yenidir və hələ baxılmayıb.">
                        Daxil olub
                    </span>
                </td>
                <td>1/2-01</td>
                <td>29.05.2019</td>
                <td>
                    <span class="d-block">20 gün</span>

                    <span class="badge bg-blue" data-toggle="tooltip" title="İcra müddətinə son 5 gün qalıb!">
                        son 5 gün
                    </span>
                </td>
                <td>656456</td>
                <td>29.05.2019</td>
                <td>Elvin Abbasov Miribadət, sədr</td>
                <td>
                    <span role="button"
                          aria-label="Bax" title="Bax"
                          data-toggle="tooltip"
                          data-target-modal="doc-full-detail"
                          class="btn xs circle bg-white shadow border-0">
                        <i aria-hidden="true" class="icon-eye"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <span role="button"
                          aria-label="Dərkənar" title="Dərkənar"
                          data-toggle="tooltip"
                          data-target-modal="instructions-modal"
                          class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-list-circle"></i>
                    </span>
                </td>
                <td class="no-wrap">
                    <a href="add-reply.php"
                       aria-label="Cavab yaz" title="Cavab yaz"
                       data-toggle="tooltip"
                       class="btn xs circle bg-blue dark shadow border-0">
                        <i aria-hidden="true" class="icon-pen-5"></i>
                    </a>
                </td>
                <td>
                    <span role="button"
                          aria-label="Elektron sənədlər" title="Elektron sənədlər"
                          data-toggle="tooltip"
                          data-target-modal="e-docs-modal"
                          class="btn xs circle bg-green dark dark shadow border-0">
                        <i aria-hidden="true" class="icon-file"></i>
                    </span>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</div>

<?php include("footer.php") ?>
