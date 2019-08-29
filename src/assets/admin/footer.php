</div>
</main>

<!--Alert Modal-->
<div class="alert-modal modal xs"
     data-modal="alert-modal"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Alert Modal"
     aria-hidden="true">

    <div class="modal-content panel text-center" role="document">
        <div class="panel-body pt-30">

            <div class="icon h1 text-red mb-20 animated delay-01 zoomIn"><i aria-hidden="true" class="icon-warning"></i></div>
            <!--<div class="h1 text-green mb-20 animation-1s delay-03 rotateIn"><i aria-hidden="true" class="icon-checks"></i></div>-->

            <h5 class="message light mb-20 animated delay-01 zoomIn">Silmək istədiyinizdən əminsiniz?</h5>

            <button class="btn bg-white border-0 text-gray animated delay-01 zoomIn" data-close="alert-modal">Ləğv et</button>

            <button class="btn bg-white border-0 text-red animated delay-01 zoomIn">Sil</button>

        </div>
    </div>

</div>

<!--Search Modal-->
<div class="search-modal modal"
     data-modal="full-search"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Search Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">
        <form action="">

            <div class="panel-header">
                <span class="panel-title">
                    <i aria-hidden="true" class="icon-search mr-10"></i>
                    Ətraflı axtarış
                </span>
            </div>

            <div class="panel-body pt-30">
                <div class="row as-7 xs-5 xxs-5">

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Daxilolma forması</label>
                        <select name="" id="" class="input select w-100p">
                            <option value="" selected>Seç</option>
                            <option value="">Mərkəzi orqanlardan</option>
                            <option value="">Məktublar</option>
                            <option value="">Vətəndaş müraciətləri</option>
                            <option value="">Sərəncamverici sənədlər</option>
                        </select>
                    </div>

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Qeydiyyat №</label>
                        <input type="text" class="input">
                    </div>

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Qeydiyyat tarixi</label>
                        <input type="text" class="input date range">
                    </div>

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Sənədin növü</label>
                        <select name="" id="" class="input select w-100p">
                            <option value="" selected>Seç</option>
                            <option value="">File type</option>
                            <option value="">File type</option>
                            <option value="">File type</option>
                            <option value="">File type</option>
                            <option value="">File type</option>
                        </select>
                    </div>

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Sənəd №</label>
                        <input type="text" class="input">
                    </div>

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Sənədin tarixi</label>
                        <input type="text" class="input date range">
                    </div>

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Sənədin statusu</label>
                        <select name="" id="" class="input select w-100p">
                            <option value="" selected>Seç</option>
                            <option value="">Baxılıb</option>
                            <option value="">Baxılmayıb</option>
                            <option value="">Dərkənar olunur</option>
                            <option value="">Digər</option>
                        </select>
                    </div>

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Kimə ünvanlanıb</label>
                        <select name="" id="" class="input select w-100p">
                            <option value="" selected>Seç</option>
                            <option value="">Ad Soyad Ata adı</option>
                            <option value="">Ad Soyad Ata adı</option>
                            <option value="">Ad Soyad Ata adı</option>
                            <option value="">Ad Soyad Ata adı</option>
                            <option value="">Ad Soyad Ata adı</option>
                            <option value="">Ad Soyad Ata adı</option>
                        </select>
                    </div>

                    <div class="col as-4 xxs-6 mb-15">
                        <label for="">Təşkilat</label>
                        <select name="" id="" class="input select w-100p">
                            <option value="" selected>Seç</option>
                            <option value="a">Organization name</option>
                            <option value="b">Organization name</option>
                            <option value="c">Organization name</option>
                            <option value="d">Organization name</option>
                            <option value="e">Organization name</option>
                            <option value="f">Organization name</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="panel-footer text-center">
                <button type="reset" class="btn bg-white text-gray border-0" data-close="full-search">Ləğv et</button>

                <button type="submit" class="btn bg-orange shadow border-0">
                    Axtar
                </button>
            </div>

        </form>
    </div>

</div>

<!--Document full detal-->
<div class="doc-full-detail-modal modal full"
     data-modal="doc-full-detail"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Search Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">

        <div class="panel-header">

            <!--<ul class="scrolling-menu justify tab-nav" role="tablist">
                <li role="presentation" class="active">
                    <span role="tab" class="menu-item p-20" data-target-tab="view-file">
                        Sənədə baxış
                    </span>
                </li>
                <li role="presentation">
                    <span role="tab" class="menu-item p-20" data-target-tab="instructions">
                        Dərkənar
                    </span>
                </li>
                <li role="presentation">
                    <span role="tab" class="menu-item p-20" data-target-tab="e-docs">
                        Electron sənədlər
                    </span>
                </li>
                <li role="presentation">
                    <span role="tab" class="menu-item p-20" data-target-tab="notes">
                        Qeydlər
                    </span>
                </li>
                <li role="presentation">
                    <span role="tab" class="menu-item p-20" data-target-tab="execution-information">
                        İcra haqqında məlumat
                    </span>
                </li>
                <li role="presentation">
                    <span role="tab" class="menu-item p-20" data-target-tab="send">
                        Adiyyatı üzrə göndərmək
                    </span>
                </li>
                <li role="presentation">
                    <span role="tab" class="menu-item p-20" data-target-tab="reply-doc">
                        Cavab yaz
                    </span>
                </li>
            </ul>-->

            <span class="panel-title float-left">
                <i aria-hidden="true" class="icon-file mr-10"></i>
                Sənədə ətraflı baxış
            </span>

            <span role="button"
                  aria-label="Bağla"
                  aria-hidden="true"
                  class="close fixed-close icon-close"
                  data-close="doc-full-detail"></span>
        </div>

        <div class="panel-body tab-content pt-30">
            <div class="table-responsive m-0">
                <table class="table bordered">
                    <thead>
                    <tr>
                        <th width="50%">
                            Meliorasiya və Su Təchizatı ASC Cəmiyyətinin Aparatı <br> Az 1000 Bakı şəhəri Ü.HAcibəyov küç, 80, Hökümət Evi
                        </th>
                        <th width="50%">
                            Sənədi işləyib: Esmira Bağırova Talıb, 29.05.2019 <br>
                            Çap olunub: 30.05.2019
                        </th>
                    </tr>
                    </thead>
                </table>

                <table class="table bordered">
                    <thead class="bg-gray">
                    <tr>
                        <th colspan="6">Ümumi əmrlərin qeydiuyyat vərəqəsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="bold">İmzalayan Şəxs:</td>
                        <td colspan="5">Əhməd Əhmədzadə Cuma (sədr)</td>
                    </tr>
                    <tr>
                        <td class="bold">Qeydiyyat №:</td>
                        <td>----</td>
                        <td class="bold">Qeydiyyat tarixi:</td>
                        <td>29.05.2019</td>
                        <td class="bold">Əsli haradadır:</td>
                        <td>İİİƏD</td>
                    </tr>
                    <tr>
                        <td class="bold">Ümumi qeyd:</td>
                        <td colspan="5">...</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table bordered">
                    <thead class="bg-gray">
                    <tr>
                        <th colspan="6">İcra Haqqında məlumat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="bold bg-gray">İcraya göndərilib</td>
                        <td>29.15.2019</td>
                        <td class="bold bg-gray">İcranın statusu</td>
                        <td>Vizalar toplanmayıb</td>
                    </tr>
                    <tr>
                        <td class="bold bg-gray">İcraçı</td>
                        <td>Esmira Bağırova Talıb, Baş mütəxəssis</td>
                        <td class="bold bg-gray">Adiyyatı üzrə göndərilib</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="bold bg-gray">İcra müddəti</td>
                        <td>29.15.2019</td>
                        <td class="bold bg-gray">İcra edilib</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="bold bg-gray">Məruzə edilib</td>
                        <td></td>
                        <td class="bold bg-gray" rowspan="2">İcranın qeydi</td>
                        <td rowspan="2"></td>
                    </tr>
                    <tr>
                        <td class="bold bg-gray">İcranı daxil edib</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="bold bg-gray">Vaxtı uzadıb</td>
                        <td></td>
                        <td class="bold bg-gray">Uzadılma səbəbi</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

                <table class="table bordered">
                    <thead class="bg-gray">
                    <tr>
                        <th colspan="6">Sənədlər</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <tr>
                        <th>Adı</th>
                        <th>Tarixi</th>
                        <th>Yükləyən</th>
                        <th>Versiya</th>
                        <th>Növü</th>
                        <th>Həcmi</th>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" download title="Şablon.pdf">
                                Şablon.pdf
                                <i aria-hidden="true" class="icon-load-download float-right" data-toggle="tooltip" title="Faylı yüklə"></i>
                            </a>
                        </td>
                        <td>29.05.2019</td>
                        <td>Esmira Bağırova Talıb</td>
                        <td>1</td>
                        <td>.PDF</td>
                        <td>70624</td>
                    </tr>
                    </tbody>
                </table>

                <table class="table bordered">
                    <thead class="bg-gray">
                    <tr>
                        <th colspan="7">Vizalar haqqında məlumat</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <tr>
                        <th>Fayl</th>
                        <th>Versiya</th>
                        <th>Qurup №</th>
                        <th>Təsdiqləyən şəxs</th>
                        <th>Status</th>
                        <th>Qeyd</th>
                        <th>Statusun tarixi</th>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" download title="Şablon.pdf">
                                Şablon.pdf
                                <i aria-hidden="true" class="icon-load-download float-right" data-toggle="tooltip" title="Faylı yüklə"></i>
                            </a>
                        </td>
                        <td>1</td>
                        <td>1</td>
                        <td>Esmira Bağırova Talıb</td>
                        <td>Razıyam</td>
                        <td>...</td>
                        <td>29.05.2019, 13:05</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" download title="Şablon.pdf">
                                Şablon.pdf
                                <i aria-hidden="true" class="icon-load-download float-right" data-toggle="tooltip" title="Faylı yüklə"></i>
                            </a>
                        </td>
                        <td>1</td>
                        <td>2</td>
                        <td>Esmira Bağırova Talıb</td>
                        <td>Razı deyiləm</td>
                        <td>Düzəlişə ehtiyac var</td>
                        <td>29.05.2019, 13:05</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer text-center">
            <button type="reset" class="btn bg-white border-0 text-gray" data-close="doc-full-detail">Bağla</button>
        </div>

    </div>

</div>

<!--instructions modal-->
<div class="instructions-modal modal lg"
     data-modal="instructions-modal"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Instructions Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">

        <div class="panel-header">
            <span class="panel-title float-left">
                <i aria-hidden="true" class="icon-file mr-10"></i>
                Dərkənar
            </span>

            <span role="button"
                  aria-label="Bağla"
                  aria-hidden="true"
                  class="close fixed-close icon-close"
                  data-close="instructions-modal"></span>
        </div>

        <div class="panel-body p-20 pt-10 pb-10 bg-gray">
            <button class="btn bg-blue dark shadow border-0" data-target-modal="new-instructions">
                <i aria-hidden="true" class="icon-plus mr-10"></i>
                Yeni dərkənar
            </button>
        </div>

        <div class="panel-body tab-content pt-30">
            <div class="table-responsive m-0">
                <table class="table bordered">
                    <thead>
                    <tr>
                        <th>Müəllif</th>
                        <th>Tarix</th>
                        <th>İcraçı</th>
                        <th>Məzmunu</th>
                        <th colspan="2">Əməliyyatlar</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">

                    <tr>
                        <td rowspan="3">Əhməd Əhmədzadə Cuma (Sədr)</td>

                        <td rowspan="3">29.05.2019</td>

                        <td>Elvin Abbasov Miribadət - (Əsas icraçı)</td>

                        <td rowspan="3">Xahiş edirəm baxasız.</td>

                        <td rowspan="3">
                            <span class="btn xs circle bg-blue shadow border-0" title="Redaktə et" data-toggle="tooltip" data-target-modal="new-instructions">
                                <i aria-hidden="true" class="icon-pen-5"></i>
                            </span>
                        </td>

                        <td rowspan="3">
                            <span class="btn xs circle bg-red shadow border-0" title="Sil" data-toggle="tooltip" data-target-modal="alert-modal">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </span>
                        </td>

                    </tr>

                    <tr>
                        <td>Elvin Abbasov Miribadət</td>
                    </tr>
                    <tr>
                        <td>Elvin Abbasov Miribadət</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel-footer text-center">
            <button type="reset" class="btn bg-white border-0 text-gray" data-close="instructions-modal">Bağla</button>
        </div>

    </div>

</div>

<!--instructions modal-->
<div class="new-instructions-modal modal lg"
     data-modal="new-instructions"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="New Instructions Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">
        <form action="">

            <div class="panel-header">
                <span class="panel-title float-left">
                    <i aria-hidden="true" class="icon-file mr-10"></i>
                    Yeni dərkənar
                </span>

                <span role="button"
                      aria-label="Bağla"
                      aria-hidden="true"
                      class="close fixed-close icon-close"
                      data-close="new-instructions"></span>
            </div>

            <div class="panel-body tab-content pt-30">
                <div class="row as-10">

                    <div class="col as-5 xs-12 xxs-12 mb-15">
                        <label for="">Departamentlər</label>

                        <div class="clear mb-10">
                            <select name="" id="" class="input select border-0 shadow"></select>
                        </div>

                        <label for="">İçşilər</label>
                        <select multiple class="input crossover-box scroll border-0 shadow" id="items" style="height: 275px;"></select>
                    </div>


                    <div class="col as-7 xs-12 xxs-12 mb-15">

                        <div class="row as-10 mb-15">

                            <div class="col as-3 xs-12 xxs-12 d-flex-center pt-10 pb-10">
                                <div class="row as-5 justify-content-center">

                                    <div class="col as-6 xs-3 xxs-3">
                                        <button type="button" class="btn bg-blue dark shadow border-0 crossover-btn w-100p" id="crossover-btn-add">
                                            <i aria-hidden="true" class="icon-arrow-right"></i>
                                        </button>
                                    </div>

                                    <div class="col as-6 xs-3 xxs-3">
                                        <button type="button" class="btn bg-gray dark shadow border-0 crossover-btn w-100p" id="crossover-btn-remove">
                                            <i aria-hidden="true" class="icon-arrow-left"></i>
                                        </button>
                                    </div>

                                </div>
                            </div>

                            <div class="col as-9 xs-12 xxs-12">
                                <label for="selected">Əsas İcraçı</label>
                                <select multiple class="input crossover-box scroll  border-0 shadow" id="main-selected"></select>
                            </div>

                        </div>

                        <div class="row as-10 mb-15">

                            <div class="col as-3 xs-12 xxs-12 d-flex-center pt-10 pb-10">
                                <div class="row as-5 justify-content-center">

                                    <div class="col as-6 xs-3 xxs-3 mb-10">
                                        <button type="button" class="btn bg-blue dark shadow border-0 crossover-btn w-100p" id="crossover-btn-add">
                                            <i aria-hidden="true" class="icon-arrow-right"></i>
                                        </button>
                                    </div>
                                    <!--<div class="col as-6 xs-3 xxs-3 mb-10">
                                        <button type="button" class="btn bg-blue dark shadow border-0 crossover-btn w-100p" id="crossover-btn-add-all">
                                            <i aria-hidden="true" class="icon-arrow-double-right"></i>
                                        </button>
                                    </div>-->
                                    <div class="col as-6 xs-3 xxs-3 mb-10">
                                        <button type="button" class="btn bg-gray dark shadow border-0 crossover-btn w-100p" id="crossover-btn-remove">
                                            <i aria-hidden="true" class="icon-arrow-left"></i>
                                        </button>
                                    </div>
                                    <!--<div class="col as-6 xs-3 xxs-3 mb-10">
                                        <button type="button" class="btn bg-gray dark shadow border-0 crossover-btn w-100p" id="crossover-btn-remove-all">
                                            <i aria-hidden="true" class="icon-arrow-double-left"></i>
                                        </button>
                                    </div>-->

                                </div>
                            </div>

                            <div class="col as-9 xs-12 xxs-12">
                                <label for="selected">Digər İcraçılar</label>
                                <select multiple class="input crossover-box scroll border-0 shadow" id="selected" style="height: 225px"></select>
                            </div>

                        </div>
                    </div>

                    <div class="col as-5 xs-6 xxs-12 mb-15">
                        <label for="instructions-note">Qeyd</label>
                        <textarea name="" id="instructions-note" class="input no-resize border-0 shadow" cols="30" rows="7"></textarea>
                    </div>

                    <div class="col as-7 xs-6 xxs-12 mb-15 ml-auto">
                        <div class="row as-10">

                            <div class="col as-9 xs-12 xxs-12 ml-auto">

                                <div class="ckbox clear mb-15">
                                    <input type="checkbox" class="switch" id="internal-control">
                                    <label for="internal-control">Daxili nəzarətə götürülsün</label>
                                </div>

                                <div class="row as-7 xs-5 xxs-5">
                                    <div class="col as-6 mb-15">
                                        <label for="instructions-date">Tarix</label>
                                        <input type="text" class="input date time border-0 shadow" id="instructions-date">
                                    </div>
                                    <div class="col as-6 mb-15">
                                        <label for="instructions-deadline">İcra müddəti</label>
                                        <input type="number" min="1" placeholder="0" class="input border-0 shadow" id="instructions-deadline" disabled>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="panel-footer text-center">
                <button type="reset" class="btn bg-white border-0 text-gray" data-close="new-instructions">Bağla</button>
                <button type="submit" class="btn bg-green shadow border-0">Yadda saxla</button>
            </div>

        </form>
    </div>

</div>

<!--instructions modal-->
<div class="e-docs-modal modal lg"
     data-modal="e-docs-modal"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="E-docs Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">

        <div class="panel-header">
            <span class="panel-title float-left">
                <i aria-hidden="true" class="icon-file mr-10"></i>
                Elektron sənədlər
            </span>

            <span role="button"
                  aria-label="Bağla"
                  aria-hidden="true"
                  class="close fixed-close icon-close"
                  data-close="e-docs-modal"></span>
        </div>

        <div class="panel-body p-20 pt-10 pb-10 bg-gray">
            <span class="btn btn-file bg-blue dark shadow border-0">
                <i aria-hidden="true" class="icon-load-upload mr-10"></i>
                Əsas sənəd yüklə
                <input type="file">
            </span>
            <span class="btn btn-file bg-blue shadow border-0">
                <i aria-hidden="true" class="icon-load-upload mr-10"></i>
                Qoşma sənəd yüklə
                <input type="file">
            </span>
            <span class="btn bg-orange shadow border-0" data-target-modal="verify-modal">
                <i aria-hidden="true" class="icon-hand-shake mr-10"></i>
                Razılaşdırma sxemi
            </span>
        </div>

        <div class="panel-body tab-content pt-30">
            <div class="table-responsive m-0">
                <table class="table bordered hovered">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Əsas sənəd</th>
                        <th>Status</th>
                        <th>Adı</th>
                        <th>Tarix</th>
                        <th>Versiyası</th>
                        <th>Yükləyən</th>
                        <th colspan="3">Əməliyyatlar</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    <tr>
                        <td rowspan="3" class="bg-white">1</td>
                        <td rowspan="3" class="bold">Əsas</td>
                        <td>status</td>
                        <td>hesabat.pdf</td>
                        <td>29.05.2019, 16:35</td>
                        <td>1</td>
                        <td>Abbasov Elvin</td>
                        <td>
                            <a href="#" download class="btn xs circle bg-green shadow border-0" aria-label="Cizaha yüklə" title="Cihaza yüklə" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-load-download"></i>
                            </a>
                        </td>
                        <td>
                    <span class="btn xs circle bg-blue shadow border-0" aria-label="Yeni versiya yüklə" title="Yeni versiya yüklə" data-toggle="tooltip">
                        <i aria-hidden="true" class="icon-load-upload"></i>
                    </span>
                        </td>
                        <td>
                            <a href="#" class="btn xs circle bg-red shadow border-0" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>status</td>
                        <td>hesabat.pdf</td>
                        <td>29.05.2019, 18:20</td>
                        <td>2</td>
                        <td>Abbasov Elvin</td>
                        <td>
                            <a href="#" download class="btn xs circle bg-green shadow border-0" aria-label="Cizaha yüklə" title="Cihaza yüklə" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-load-download"></i>
                            </a>
                        </td>
                        <td>
                    <span class="btn xs circle bg-blue shadow border-0" aria-label="Yeni versiya yüklə" title="Yeni versiya yüklə" data-toggle="tooltip">
                        <i aria-hidden="true" class="icon-load-upload"></i>
                    </span>
                        </td>
                        <td>
                            <a href="#" class="btn xs circle bg-red shadow border-0" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>status</td>
                        <td>hesabat.pdf</td>
                        <td>29.05.2019, 18:20</td>
                        <td>3</td>
                        <td>Abbasov Elvin</td>
                        <td>
                            <a href="#" download class="btn xs circle bg-green shadow border-0" aria-label="Cizaha yüklə" title="Cihaza yüklə" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-load-download"></i>
                            </a>
                        </td>
                        <td>
                    <span class="btn xs circle bg-blue shadow border-0" aria-label="Yeni versiya yüklə" title="Yeni versiya yüklə" data-toggle="tooltip">
                        <i aria-hidden="true" class="icon-load-upload"></i>
                    </span>
                        </td>
                        <td>
                            <a href="#" class="btn xs circle bg-red shadow border-0" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="1" class="bg-white">2</td>
                        <td rowspan="1" class="bold">Qoşma</td>
                        <td>status</td>
                        <td>hesabat.pdf</td>
                        <td>29.05.2019, 16:35</td>
                        <td>1</td>
                        <td>Abbasov Elvin</td>
                        <td>
                            <a href="#" download class="btn xs circle bg-green shadow border-0" aria-label="Cizaha yüklə" title="Cihaza yüklə" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-load-download"></i>
                            </a>
                        </td>
                        <td>
                    <span class="btn xs circle bg-blue shadow border-0" aria-label="Yeni versiya yüklə" title="Yeni versiya yüklə" data-toggle="tooltip">
                        <i aria-hidden="true" class="icon-load-upload"></i>
                    </span>
                        </td>
                        <td>
                            <a href="#" class="btn xs circle bg-red shadow border-0" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel-footer text-center">
            <button type="reset" class="btn bg-white border-0 text-gray" data-close="e-docs-modal">Bağla</button>
        </div>

    </div>

</div>

<!--Verify modal-->
<div class="verify-modal modal xs"
     data-modal="verify-modal"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Verify Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">
        <form action="">

            <div class="panel-header">
                <span class="panel-title float-left">
                    <i aria-hidden="true" class="icon-hand-shake mr-10"></i>
                    Viza
                </span>

                <span role="button"
                      aria-label="Bağla"
                      aria-hidden="true"
                      class="close fixed-close icon-close"
                      data-close="verify-modal"></span>
            </div>

            <div class="panel-body tab-content pt-30">
                <div class="row as-10">

                    <div class="col as-6 mb-30">
                        <input type="radio" class="ckbox" id="agree" name="aggrement">
                        <label for="agree">Razıyam</label>
                    </div>

                    <div class="col as-6 mb-30">
                        <input type="radio" class="ckbox" id="i-do-not-agree" name="aggrement">
                        <label for="i-do-not-agree">Razı deyiləm</label>
                    </div>

                </div>

                <label for="aggrement-note">Qeyd</label>
                <textarea name="" id="aggrement-note" class="input no-resize" cols="30" rows="5"></textarea>
            </div>

            <div class="panel-footer text-center">
                <!--<button type="reset" class="btn bg-white border-0 text-gray" data-close="instructions-modal">Bağla</button>-->
                <button type="submit" class="btn bg-green shadow border-0">Yadda saxla</button>
            </div>

        </form>
    </div>

</div>

<!--Verify modal-->
<div class="agreement-scheme-modal modal xs"
     data-modal="agreement-scheme-modal"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Agreement Scheme Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">
        <form action="">

            <div class="panel-header">
                <span class="panel-title float-left">
                    <i aria-hidden="true" class="icon-hand-shake mr-10"></i>
                    Razılaşdırma sxemi
                </span>

                <span role="button"
                      aria-label="Bağla"
                      aria-hidden="true"
                      class="close fixed-close icon-close"
                      data-close="agreement-scheme-modal"></span>
            </div>

            <div class="panel-body tab-content pt-30">
                <table class="table bordered hovered">
                    <thead>
                    <tr>
                        <th width="80%">Dərkənar olunanlar</th>
                        <th>Ardıcıllıq</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Ad Soyad Ata adı</td>
                        <td>
                            <input type="number" value="1" min="1" class="input">
                        </td>
                    </tr>
                    <tr>
                        <td>Ad Soyad Ata adı</td>
                        <td>
                            <input type="number" value="1" min="1" class="input">
                        </td>
                    </tr>
                    <tr>
                        <td>Ad Soyad Ata adı</td>
                        <td>
                            <input type="number" value="1" min="1" class="input">
                        </td>
                    </tr>
                    <tr>
                        <td>Ad Soyad Ata adı</td>
                        <td>
                            <input type="number" value="1" min="1" class="input">
                        </td>
                    </tr>
                    <tr>
                        <td>Ad Soyad Ata adı</td>
                        <td>
                            <input type="number" value="1" min="1" class="input">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="panel-footer text-center">
                <button type="reset" class="btn bg-white border-0 text-gray" data-close="agreement-scheme-modal">Bağla</button>
                <button type="submit" class="btn bg-green shadow border-0">Yadda saxla</button>
            </div>

        </form>
    </div>

</div>

<!--Main Footer-->
<footer class="main-footer panel pt-10 pb-10 pl-20 pr-30 clear">
    <span class="btn xs border-0 no-shadow text-gray">v 1.3.1</span>

    <a href="#" class="btn xs border-0 float-right" data-toggle="tooltip" title="Bu sayt TimeSoft tərəfindən kodlanıb və dizayn edilib">
        <b>Created: TimeSoft</b>
    </a>
</footer>

<!--#################################################################################################################-->
<!--JavaScripts-->
<!--#################################################################################################################-->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<!--Crossover Select-->
<!--<script type="text/javascript" src="assets/scripts/crossover-select.js"></script>-->


<script type="text/javascript" src="assets/scripts/select2.min.js"></script>

<!--Data Table-->
<script type="text/javascript" src="assets/scripts/datatables.min.js"></script>

<!--Moment JS-->
<script type="text/javascript" src="assets/scripts/moment.min.js"></script>
<script type="text/javascript" src="assets/scripts/fullcalendar.min.js"></script>
<script type="text/javascript" src="assets/scripts/calendar-az.js"></script>

<!--Date Range Picker-->
<script type="text/javascript" src="assets/scripts/daterangepicker.js"></script>

<!--Date Picker-->
<script type="text/javascript" src="assets/scripts/datepicker.min.js"></script>
<script type="text/javascript" src="assets/scripts/datepicker-az.js"></script>

<!--Special Scripts-->
<script type="text/javascript" src="assets/scripts/pi.js"></script>
<script type="text/javascript" src="assets/scripts/app.js"></script>
<script type="text/javascript" src="assets/scripts/custom.js"></script>

<!--Tooltip-->
<script type="text/javascript" src="assets/scripts/popper.min.js"></script>
<script type="text/javascript" src="assets/scripts/tooltip.min.js"></script>

<!--Autosize-->
<script type="text/javascript" src="assets/scripts/autosize.min.js"></script>

<!--Froala Editor-->
<script type="text/javascript" src="assets/scripts/froala/froala_editor.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/az.js"></script>
<script type="text/javascript" src="assets/scripts/froala/image.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/image_manager.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/table.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/align.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/lists.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/link.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/url.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/char_counter.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/entities.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/file.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/paragraph_format.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/quote.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/inline_style.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/line_breaker.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/code_view.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/code_beautifier.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/draggable.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/colors.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/font_size.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/video.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/quick_insert.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/emoticons.min.js"></script>

<script type="text/javascript" src="assets/scripts/froala/codemirror.min.js"></script>
<script type="text/javascript" src="assets/scripts/froala/xml.min.js"></script>

<!--<script type="text/javascript" src="assets/js/fullscreen.min.js"></script>-->
<!--<script type="text/javascript" src="assets/js/font_family.min.js"></script>-->
<!--<script type="text/javascript" src="assets/js/paragraph_style.min.js"></script>-->
<!--<script type="text/javascript" src="assets/js/save.min.js"></script>-->

<!--Nestable-->
<!--<script type="text/javascript" src="assets/scripts/nestable.js"></script>-->

<!--Full Calendar-->
<!--<script type="text/javascript" src="assets/scripts/fullcalendar.min.js"></script>
<script type="text/javascript" src="assets/scripts/calendar-az.js"></script>-->


</body>
</html>
