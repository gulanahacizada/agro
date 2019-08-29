<?php include("header.php") ?>

<div class="panel shadow">

    <div class="panel-header p-20">
        <h1 class="panel-title">
            <i aria-hidden="true" class="icon-users mr-5"></i>
            İnsan Resursları
        </h1>
    </div>

    <div class="panel-body p-20 pt-10 pb-10 bg-gray">
        <div class="row as-5">

            <div class="col lg-1 md-2 sm-2 xs-4 xxs-4 ml-auto">
                <span class="btn bg-orange w-100p shadow border-0" data-target-modal="new-hr">
                    <i aria-hidden="true" class="icon-plus mr-10"></i>
                    Yeni
                </span>
            </div>

            <div class="col lg-2 md-2 sm-2 xs-4 xxs-4">
                <button class="btn bg-white w-100p shadow border-0 active" data-target-collapse="full-search" aria-expanded="true">
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

        <div class="panel-body bg-gray">
            <form class="row as-7 xs-5 xxs-5">

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-establishment-type">İdarə tipi</label>
                    <select name="" id="add-s-establishment-type" class="input border-0 shadow">
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                    </select>
                </div>
                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-establishment-name">İdarə adı</label>
                    <select name="" id="add-s-establishment-name" class="input border-0 shadow">
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                    </select>
                </div>
                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-name">Adı</label>
                    <input type="text" class="input border-0 shadow" id="add-s-name">
                </div>
                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-surname">Soyadı</label>
                    <input type="text" class="input border-0 shadow" id="add-s-surname">
                </div>
                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-fathers-name">Ata adı</label>
                    <input type="text" class="input border-0 shadow" id="add-s-fathers-name">
                </div>

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-birth-from">Təvəllüd</label>

                    <input type="text" class="input date range border-0 shadow" id="add-s-birth-fron">
                </div>
                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-position">Vəzifə</label>
                    <select name="" id="add-s-position" class="input border-0 shadow">
                        <option value="">Option</option>
                        <option value="">Option</option>
                        <option value="">Option</option>
                    </select>
                </div>
                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-situation">Mövqe</label>
                    <select name="" id="add-s-situation" class="input border-0 shadow">
                        <option value="">Ştat</option>
                        <option value="">Ştatdankənar</option>
                    </select>
                </div>
                <div class="col lg-2 md-3 sm-4 xs-6 xxs-12 mb-15">
                    <label for="add-s-vtf-level-from">VTF üzrə dərəcə</label>
                    <div class="input-group">
                        <input type="number" class="input border-0 shadow" id="add-s-vtf-level-from">
                        <span class="input-group-addon bg-white border-0">-</span>
                        <input type="number" class="input border-0 shadow" id="add-s-vtf-level-to">
                    </div>
                </div>
                <div class="col lg-2 md-3 sm-4 xs-6 xxs-12 mb-15">
                    <label for="add-s-salary-from">Əmək haqqı</label>
                    <div class="input-group">
                        <input type="number" class="input border-0 shadow" id="add-s-salary-from">
                        <span class="input-group-addon bg-white border-0">-</span>
                        <input type="number" class="input border-0 shadow" id="add-s-salary-to">
                    </div>
                </div>

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-sex">Cinsiyət</label>
                    <select name="" id="add-s-sex" class="input border-0 shadow">
                        <option value="">Kişi</option>
                        <option value="">Qadın</option>
                    </select>
                </div>

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-marital-status">Ailə vəziyyəti</label>
                    <select name="" id="add-s-marital-status" class="input border-0 shadow">
                        <option value="">Evli</option>
                        <option value="">Subay</option>
                    </select>
                </div>

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-ability-to-work">Əmək qabiliyyəti</label>
                    <select name="" id="add-s-ability-to-work" class="input border-0 shadow">
                        <option value="">Əmək qabiliyyətli</option>
                        <option value="">I Qrup</option>
                        <option value="">II Qrup</option>
                        <option value="">III Qrup</option>
                    </select>
                </div>

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-education">Təhsil</label>
                    <select name="" id="add-s-education" class="input border-0 shadow">
                        <option value="">İbtidai təhsil</option>
                        <option value="">Ümumi orta təhsil</option>
                        <option value="">Tam orta təhsil</option>
                        <option value="">İlk peşə təhsili</option>
                        <option value="">Orta peşə təhsili</option>
                        <option value="">Ali təhsil-Bakalavr</option>
                        <option value="">Ali təhsil-Magistratura</option>
                        <option value="">Ali təhsil-Doktorantura</option>
                    </select>
                </div>

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-profession">İxtisas</label>
                    <input type="text" class="input border-0 shadow" id="add-s-profession">
                </div>

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-school-name">Təhsil m. adı</label>
                    <input name="" id="add-s-school-name" class="input border-0 shadow">
                </div>

                <div class="col lg-2 md-3 sm-4 xs-6 xxs-6 mb-15">
                    <label for="add-s-lang">Dil və kompyuter</label>
                    <select name="" id="add-s-lang" class="input border-0 shadow">
                        <option value="">Rus-əla</option>
                        <option value="">Rus-orta</option>
                        <option value="">İngilis-əla</option>
                        <option value="">İngilis-orta</option>
                    </select>
                </div>

                <div class="col lg-2 md-3 sm-4 sm-3 xs-6 xxs-6 mb-15">
                    <label for="add-s-reg-group">Qeydiyyat qrupu</label>
                    <select name="" id="add-s-reg-group" class="input border-0 shadow">
                        <option value="">I (18-35)</option>
                        <option value="">II (35-45)</option>
                        <option value="">III (45-50)</option>
                    </select>
                </div>

                <div class="col lg-2 md-3 sm-4 sm-3 xs-6 xxs-6 mb-15">
                    <label for="add-s-membership">Heyət</label>
                    <select name="" id="add-s-membership" class="input border-0 shadow">
                        <option value="">Komandirlər</option>
                        <option value="">Çavuşlar</option>
                        <option value="">Əsgərlər</option>
                    </select>
                </div>

                <div class="col lg-2 md-3 sm-4 sm-3 xs-6 xxs-6 mb-15">
                    <label for="add-s-military-rank">Hərbi rütbə</label>
                    <select name="" id="add-s-military-rank" class="input border-0 shadow">
                        <option value="">option</option>
                        <option value="">option</option>
                        <option value="">option</option>
                    </select>
                </div>

                <div class="col lg-2 md-3 sm-4 sm-3 xs-6 xxs-6 mb-15">
                    <label for="add-s-fit-for-military">Hərbi xidmtə yyararlılıq</label>
                    <select name="" id="add-s-fit-for-military" class="input border-0 shadow">
                        <option value="">Yararlı<option>
                        <option value="">Yararsız</option>
                    </select>
                </div>

                <div class="col lg-2 as-3 sm-4 sm-3 xs-6 xxs-6">
                    <label class="hide-sm"> </label>
                    <button type="submit" class="btn bg-green w-100p border-0 shadow">Axtar <i aria-hidden="true" class="icon-search ml-5"></i></button>
                </div>

            </form>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table bordered hovered text-center">

            <thead>
            <tr>
                <th rowspan="2">№</th>
                <th rowspan="2" width="50%">Ad, soyad, ata adı</th>
                <th rowspan="2">Təvəllüd</th>
                <th rowspan="2" class="no-wrap">Tabel №</th>
                <th colspan="3">VTF üzrə</th>
                <th rowspan="2">Ətraflı</th>
            </tr>
            <tr class="text-center bold">
                <td>Dərəcə</td>
                <td>Vəzifə</td>
                <td class="no-wrap">Əmək haqqı</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td class="text-center">1</td>
                <td>
                    <span class="d-block text-left bold font-16">
                        Adam Smith
                    </span>
                </td>
                <td>
                    01.01.1970
                </td>
                <td class="no-wrap">
                    Tabel No
                </td>
                <td class="no-wrap">
                    Dərəcə
                </td>
                <td>
                    Vəzifə
                </td>
                <td>
                    1500
                </td>
                <td class="text-center no-wrap">

                    <button class="btn xs circle bg-white border-0 shadow" data-toggle="tooltip" title="Ətraflı bax" data-target-modal="new-hr">
                        <i aria-hidden="true" class="icon-eye"></i>
                    </button>

                    <button class="btn xs circle bg-orange border-0 shadow" data-toggle="tooltip" title="Redaktə et" data-target-modal="edit-hr">
                        <i aria-hidden="true" class="icon-pen-5"></i>
                    </button>

                </td>
            </tr>
            </tbody>

        </table>
    </div>

</div>

<div class="new-hr-modal modal lg"
     data-modal="new-hr"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-hidden="true">

    <form class="modal-content panel">

        <div class="panel-header">

            <h4 class="panel-title float-left">Yeni insan resursu əlavə edin</h4>

            <span role="button" class="close float-right" aria-label="Bağla" data-close="new-hr">
                <i aria-hidden="true" class="icon-close"></i>
            </span>

        </div>

        <div class="panel-body bg-gray">
            <div class="row as-5">
                <div class="col as-4 xs-6 xxs-12">
                    <select name="" id="add--new-hr" class="select select-tab border-0 shadow">
                        <option value="add-main-info">Əsas Məlumatlar</option>
                        <option value="add-address">Ünvan</option>
                        <option value="add-contacts">Əlaqə</option>
                        <option value="add-education">Təhsil</option>
                        <option value="add-knowledge">Dil bilgisi</option>
                        <option value="add-military-service">Hərbi xidmət</option>
                        <option value="add-family">Ailə üzvləri</option>
                        <option value="add-vtf">VTF üzrə</option>
                        <option value="add-authorization">Səlahiyyətlər</option>
                        <option value="add-reprimand">Tənbeh</option>
                        <option value="add-party">Təşkilat</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="tab-content pt-20 pl-20 pr-20" aria-labelledby="add-new-hr" role="tablist">

            <div class="tab-panel active" role="tabpanel" data-tab="add-main-info">
                <div class="row as-7">

                    <div class="col as-4 xxs-12 mb-15">
                        <label for="add-first-name">Adı<sup class="text-red">*</sup></label>
                        <input type="text" id="add-first-name" class="input border-0 shadow">
                    </div>

                    <div class="col as-4 xxs-12 mb-15">
                        <label for="add-second-name">Soyadı<sup class="text-red">*</sup></label>
                        <input type="text" id="add-second-name" class="input border-0 shadow">
                    </div>

                    <div class="col as-4 xxs-12 mb-15">
                        <label for="add-father-name">Ata adı<sup class="text-red">*</sup></label>
                        <input type="text" id="add-father-name" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-sex">Cinsiyyəti<sup class="text-red">*</sup></label>
                        <select name="" id="add-sex" class="input border-0 shadow">
                            <option value="male">Kişi</option>
                            <option value="female">Qadın</option>
                        </select>
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-birthday">Təvəllüdü<sup class="text-red">*</sup></label>
                        <input type="text" id="add-birthday" class="input date time border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-marital-status">Ailə vəziyyəti<sup class="text-red">*</sup></label>
                        <select name="" id="add-marital-status" class="input border-0 shadow">
                            <option value="married">Evli</option>
                            <option value="unmarried">Subay</option>
                        </select>
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-citizenship">Vətəndaşlığı<sup class="text-red">*</sup></label>
                        <select name="" id="add-citizenship" class="input border-0 shadow">
                            <option value="">Azərbaycanlı</option>
                            <option value="">Digər</option>
                            <option value="">Digər</option>
                            <option value="">Digər</option>
                        </select>
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-fin-code">Fin kod<sup class="text-red">*</sup></label>
                        <input type="text" id="add-fin-code" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-ssn">SSN<sup class="text-red">*</sup></label>
                        <input type="text" id="add-ssn" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-account-no">Hesab №<sup class="text-red">*</sup></label>
                        <input type="text" id="add-account-no" class="input border-0 shadow">
                    </div>

                </div>
            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-address">
                <h5 class="h6 bold p-10 bg-gray">Qeydiyyatda olduğu</h5>

                <div class="row as-7">

                    <div class="col xxs-6 mb-15">
                        <label for="add-registered-country">Ölkə<sup class="text-red">*</sup></label>
                        <select id="add-registered-country" class="input border-0 shadow">
                            <option value="">Azərbaycan</option>
                            <option value="">Rusiya</option>
                            <option value="">Türkiyə</option>
                            <option value="">İtalya</option>
                            <option value="">Fransa</option>
                        </select>
                    </div>

                    <div class="col xxs-6 mb-15">
                        <label for="add-registered-city">Şəhər<sup class="text-red">*</sup></label>
                        <input type="text" id="add-registered-city" class="input border-0 shadow">
                    </div>

                    <div class="col xxs-5 mb-15">
                        <label for="add-registered-village">Kənd<sup class="text-red">*</sup></label>
                        <input type="text" id="add-registered-village" class="input border-0 shadow">
                    </div>

                    <div class="col xxs-5 mb-15">
                        <label for="add-registered-street">Küçə<sup class="text-red">*</sup></label>
                        <input type="text" id="add-registered-street" class="input border-0 shadow">
                    </div>

                    <div class="col as-1 xxs-2 mb-15">
                        <label for="add-registered-home">Ev<sup class="text-red">*</sup></label>
                        <input type="text" id="add-registered-home" class="input border-0 shadow">
                    </div>

                </div>

                <h5 class="h6 bold p-10 bg-gray">Yaşadığı</h5>

                <div class="row as-7">

                    <div class="col xxs-6 mb-15">
                        <label for="add-residence-country">Ölkə<sup class="text-red">*</sup></label>
                        <select id="add-residence-country" class="input border-0 shadow">
                            <option value="">Azərbaycan</option>
                            <option value="">Rusiya</option>
                            <option value="">Türkiyə</option>
                            <option value="">İtalya</option>
                            <option value="">Fransa</option>
                        </select>
                    </div>

                    <div class="col xxs-6 mb-15">
                        <label for="add-residence-city">Şəhər<sup class="text-red">*</sup></label>
                        <input type="text" id="add-residence-city" class="input border-0 shadow">
                    </div>

                    <div class="col xxs-5 mb-15">
                        <label for="add-residence-village">Kənd<sup class="text-red">*</sup></label>
                        <input type="text" id="add-residence-village" class="input border-0 shadow">
                    </div>

                    <div class="col xxs-5 mb-15">
                        <label for="add-residence-street">Küçə<sup class="text-red">*</sup></label>
                        <input type="text" id="add-residence-street" class="input border-0 shadow">
                    </div>

                    <div class="col as-1 xxs-2 mb-15">
                        <label for="add-residence-home">Ev<sup class="text-red">*</sup></label>
                        <input type="text" id="add-residence-home" class="input border-0 shadow">
                    </div>

                </div>
            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-contacts">

                <div class="row as-7">
                    <div class="col as-8 xxs-12">
                        <div class="row as-7">
                            <div class="col as-6 xxs-12 mb-15">
                                <label for="add-tel">Telefon 1<sup class="text-red">*</sup></label>
                                <input type="tel" id="add-tel" class="input border-0 shadow">
                            </div>
                            <div class="col as-6 xxs-12 mb-15">
                                <label for="add-tel-2">Telefon 2</label>
                                <input type="tel" id="add-tel-2" class="input border-0 shadow">
                            </div>
                        </div>
                    </div>
                    <div class="col as-4 xxs-12 mb-15">
                        <label for="add-email">E-poçt</label>
                        <input type="email" id="add-email" class="input border-0 shadow">
                    </div>
                </div>

            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-education">

                <div class="row as-7">
                    <div class="col as-3 xxs-12 mb-15">
                        <label for="add-education">Təhsili<sup class="text-red">*</sup></label>
                        <select name="" id="add-education" class="input border-0 shadow">
                            <option value="">Orta təhsil</option>
                            <option value="">Tam orta təhsil</option>
                            <option value="">Orta ixtisas təhsili</option>
                            <option value="">Ali təhsil</option>
                        </select>
                    </div>
                    <div class="col as-3 xxs-12 mb-15">
                        <label for="add-school-name">Təhsil müəssisəsinin adı<sup class="text-red">*</sup></label>
                        <input type="text" id="add-school-name" class="input border-0 shadow">
                    </div>
                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-edu-start-year">Daxil olduğu il<sup class="text-red">*</sup></label>
                        <input type="number" id="add-edu-start-year" class="input border-0 shadow">
                    </div>
                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-edu-end-year">Bitirdiyi il<sup class="text-red">*</sup></label>
                        <input type="number" id="add-edu-end-year" class="input border-0 shadow">
                    </div>
                </div>

            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-knowledge">

                <div class="row as-7">

                    <div class="col as-6 xxs-12 mb-10">
                        <label for="add-language">Dil bilgisi</label>
                        <div class="input-group shadow mb-5">
                            <select name="" id="" class="input border-0">
                                <option value="">Azərbaycan dili</option>
                                <option value="">Rus dili</option>
                                <option value="">İngilis dili</option>
                                <option value="">Türk dili</option>
                                <option value="">Fransiz dili</option>
                                <option value="">İspan dili</option>
                                <option value="">Ərəb dili</option>
                                <option value="">Fars dili</option>
                            </select>

                            <select name="" id="" class="btn border-0">
                                <option value="">Əla</option>
                                <option value="">Yaxşı</option>
                                <option value="">Orta</option>
                                <option value="">Pis</option>
                            </select>

                            <span class="input-group-btn">
                                <span class="btn bg-white border-0">
                                    <i aria-hidden="true" class="icon-minus"></i>
                                </span>
                            </span>
                        </div>
                        <div class="input-group shadow mb-5">
                            <select name="" id="" class="input border-0">
                                <option value="">Azərbaycan dili</option>
                                <option value="">Rus dili</option>
                                <option value="">İngilis dili</option>
                                <option value="">Türk dili</option>
                                <option value="">Fransiz dili</option>
                                <option value="">İspan dili</option>
                                <option value="">Ərəb dili</option>
                                <option value="">Fars dili</option>
                            </select>

                            <select name="" id="" class="btn border-0">
                                <option value="">Əla</option>
                                <option value="">Yaxşı</option>
                                <option value="">Orta</option>
                                <option value="">Pis</option>
                            </select>

                            <span class="input-group-btn">
                                <span class="btn bg-white border-0">
                                    <i aria-hidden="true" class="icon-minus"></i>
                                </span>
                            </span>
                        </div>

                        <button type="button" class="btn xs bg-white border-0 shadow">Əlavə et</button>

                    </div>

                    <div class="col as-6 xxs-12 mb-10">
                        <label for="add-computer">Komputer bilgisi</label>

                        <div class="input-group shadow mb-5">

                            <input type="text" class="input border-0">

                            <select name="" id="" class="btn border-0">
                                <option value="">Əla</option>
                                <option value="">Yaxşı</option>
                                <option value="">Orta</option>
                                <option value="">Pis</option>
                            </select>

                            <span class="input-group-btn">
                                <span class="btn bg-white border-0">
                                    <i aria-hidden="true" class="icon-minus"></i>
                                </span>
                            </span>
                        </div>
                        <div class="input-group shadow mb-5">

                            <input type="text" class="input border-0">

                            <select name="" id="" class="btn border-0">
                                <option value="">Əla</option>
                                <option value="">Yaxşı</option>
                                <option value="">Orta</option>
                                <option value="">Pis</option>
                            </select>

                            <span class="input-group-btn shadow">
                                <span class="btn bg-white border-0">
                                    <i aria-hidden="true" class="icon-minus"></i>
                                </span>
                            </span>
                        </div>

                        <button type="button" class="btn xs bg-white border-0 shadow">Əlavə et</button>

                    </div>

                </div>

            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-military-service">

                <div class="row as-7">
                    <div class="col as-12 md-3 sm-4 mb-15">
                        <label>Xidmət tarixi</label>
                        <div class="input-group">
                            <input type="date" class="input border-0 shadow">
                            <span class="input-group-addon border-0">-</span>
                            <input type="date" class="input border-0 shadow">
                        </div>
                    </div>
                    <div class="col as-3 sm-4 xs-6 xxs-6 mb-15">
                        <label>Qeydiyyat qrupu</label>
                        <select name="" id="" class="input border-0 shadow">
                            <option value="">I (18-35)</option>
                            <option value="">II (35-45)</option>
                            <option value="">III (45-50)</option>
                        </select>
                    </div>
                    <div class="col as-3 sm-4 xs-6 xxs-6 mb-15">
                        <label>Heyət</label>
                        <select name="" id="" class="input border-0 shadow">
                            <option value="">Komandirlər</option>
                            <option value="">Çavuşlar</option>
                            <option value="">Əşgərlər</option>
                        </select>
                    </div>
                    <div class="col as-3 sm-4 xs-6 xxs-6 mb-15">
                        <label>Hərbi rütbə</label>
                        <input type="text" class="input border-0 shadow">
                    </div>
                    <div class="col as-3 sm-4 xs-6 xxs-6 mb-15">
                        <label>Hərbi uçot ixtisası</label>
                        <input type="text" class="input border-0 shadow">
                    </div>
                    <div class="col as-3 sm-4 xs-6 xxs-6 mb-15">
                        <label>Hərbi xidmətə yararlılıq</label>
                        <select name="" id="" class="input border-0 shadow">
                            <option value="">Yararlı</option>
                            <option value="">Yararsız</option>
                        </select>
                    </div>
                    <div class="col as-3 sm-4 xs-6 xxs-6 mb-15">
                        <label>Qeydiyyat</label>
                        <select name="" id="" class="input border-0 shadow">
                            <option value="">Option</option>
                            <option value="">Option</option>
                            <option value="">Option</option>
                            <option value="">Option</option>
                            <option value="">Option</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-family">

                <div class="bg-gray p-15 pb-0 mb-15">
                    <div class="row as-5">

                        <div class="col xxs-12 mb-15">
                            <label for="add-kinship-name-1">Adı</label>
                            <input type="text" id="add-kinship-name-1" class="input border-0 shadow">
                        </div>

                        <div class="col xxs-6 mb-15">
                            <label for="add-kinship-second-name-1">Soyadı</label>
                            <input type="text" id="add-kinship-second-name-1" class="input border-0 shadow">
                        </div>

                        <div class="col xxs-6 mb-15">
                            <label for="add-kinship-father-name-1">Ata adı</label>
                            <input type="text" id="add-kinship-father-name-1" class="input border-0 shadow">
                        </div>

                        <div class="col as-2 xxs-6 mb-15">
                            <label for="add-kinship-birthday-1">Təvəllüdü</label>
                            <input type="date" id="add-kinship-birthday-1" class="input border-0 shadow">
                        </div>

                        <div class="col as-2 xxs-6 mb-15">
                            <label for="add-kinship-1">Qohumluq dərəcəsi</label>
                            <select name="" id="add-kinship-1" class="input border-0 shadow">
                                <option value="">Ata</option>
                                <option value="">Ana</option>
                                <option value="">Həyat yoldaşı</option>
                                <option value="">Oğul</option>
                                <option value="">Qız</option>
                            </select>
                        </div>

                    </div>
                </div>

                <div class="bg-gray p-15 pb-0 mb-15">
                    <div class="row as-5">

                        <div class="col xxs-12 mb-15">
                            <label for="add-kinship-name-2">Adı</label>
                            <input type="text" id="add-kinship-name-2" class="input border-0 shadow">
                        </div>

                        <div class="col xxs-6 mb-15">
                            <label for="add-kinship-second-name-2">Soyadı</label>
                            <input type="text" id="add-kinship-second-name-2" class="input border-0 shadow">
                        </div>

                        <div class="col xxs-6 mb-15">
                            <label for="add-kinship-father-name-2">Ata adı</label>
                            <input type="text" id="add-kinship-father-name-2" class="input border-0 shadow">
                        </div>

                        <div class="col as-2 xxs-6 mb-15">
                            <label for="add-kinship-birthday-2">Təvəllüdü</label>
                            <input type="date" id="add-kinship-birthday-2" class="input border-0 shadow">
                        </div>

                        <div class="col as-2 xxs-6 mb-15">
                            <label for="add-kinship-2">Qohumluq dərəcəsi</label>
                            <select name="" id="add-kinship-2" class="input border-0 shadow">
                                <option value="">Ata</option>
                                <option value="">Ana</option>
                                <option value="">Həyat yoldaşı</option>
                                <option value="">Oğul</option>
                                <option value="">Qız</option>
                            </select>
                        </div>

                    </div>
                </div>

                <button type="button" class="btn xs bg-orange mb-15">Əlavə et</button>

            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-vtf">

                <div class="row as-7">

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-level">Dərəcə<sup class="text-red">*</sup></label>
                        <input type="text" id="add-level" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-job">Vəzifə<sup class="text-red">*</sup></label>
                        <select name="" id="add-job" class="input border-0 shadow">
                            <option value="">Vəzifə</option>
                            <option value="">Vəzifə</option>
                            <option value="">Vəzifə</option>
                            <option value="">Vəzifə</option>
                        </select>
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-salary">Əməkhaqqı<sup class="text-red">*</sup></label>
                        <input type="number" id="add-salary" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-other-salary">Əlavə Əməkhaqqı<sup class="text-red">*</sup></label>
                        <input type="number" id="add-other-salary" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-work-experience">Ümumi iş stajı<sup class="text-red">*</sup></label>
                        <input type="text" id="add-work-experience" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-work-start-date">İşə daxil olduğu tarix<sup class="text-red">*</sup></label>
                        <input type="date" id="add-work-start-date" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-work-order">Əmr<sup class="text-red">*</sup></label>
                        <input type="text" id="add-work-order" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-work-status">Hal hazırda</label>
                        <select name="" id="add-work-status" class="input border-0 shadow">
                            <option value="">İşləyir</option>
                            <option value="">Xitam verilmişdir</option>
                        </select>
                    </div>

                </div>

                <div class="bg-gray p-10 mb-15">
                    <div class="panel p-10">
                        <div class="row as-7">

                            <div class="col as-6 xs-12 xxs-12 mb-15">
                                <label for="add-status-item-no">Maddə №</label>
                                <select name="" id="add-status-item-no" class="input border-0 shadow">
                                    <option value="">option</option>
                                    <option value="">option</option>
                                    <option value="">option</option>
                                    <option value="">option</option>
                                </select>
                            </div>

                            <div class="col as-6 xs-12 xxs-12 mb-15">
                                <label for="add-">Səbəb</label>
                                <select name="" id="" class="input border-0 shadow">
                                    <option value="">option</option>
                                    <option value="">option</option>
                                    <option value="">option</option>
                                    <option value="">option</option>
                                </select>
                            </div>

                            <div class="col as-3 xxs-6 mb-15">
                                <label for="add-">Əmr</label>
                                <select name="" id="" class="input border-0 shadow">
                                    <option value="">option</option>
                                    <option value="">option</option>
                                    <option value="">option</option>
                                    <option value="">option</option>
                                </select>
                            </div>

                            <div class="col as-3 xxs-6 mb-15">
                                <label for="add-">Tarix</label>
                                <input type="date" class="input border-0 shadow">
                            </div>

                            <div class="col as-6 xs-12 xxs-12 mb-15">
                                <label for="add-note">Qeyd</label>
                                <input type="text" id="add-note" class="input border-0 shadow">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray p-10 mb-15">
                    <div class="panel table-responsive">
                        <table class="table hovered text-center no-wrap">
                            <thead>
                            <tr>
                                <td>Yabvar</td>
                                <td>Fevral</td>
                                <td>Mart</td>
                                <td>Aprel</td>
                                <td>May</td>
                                <td>İyun</td>
                                <td>İyul</td>
                                <td>Avqust</td>
                                <td>Sentyabr</td>
                                <td>Oktyabr</td>
                                <td>Noyabr</td>
                                <td>Dekabr</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>800 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>800 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>900 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>900 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>900 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>900 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>1000 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>1000 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>1000 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>1000 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>1200 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                                <td>1200 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-authorization">
                <div class="row as-5">

                    <div class="col md-4 sm-6 xs-6 xxs-12 mb-15">

                        <strong class="d-block mb-10">Bölmə adı</strong>

                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-1">
                            <label for="add-authorization-1">Səlahiyyət</label>
                        </div>
                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-2">
                            <label for="add-authorization-2">Səlahiyyət</label>
                        </div>
                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-3">
                            <label for="add-authorization-3">Səlahiyyət</label>
                        </div>
                    </div>

                    <div class="col md-4 sm-6 xs-6 xxs-12 mb-15">

                        <strong class="d-block mb-10">Bölmə adı</strong>

                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-1">
                            <label for="add-authorization-1">Səlahiyyət</label>
                        </div>
                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-2">
                            <label for="add-authorization-2">Səlahiyyət</label>
                        </div>
                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-3">
                            <label for="add-authorization-3">Səlahiyyət</label>
                        </div>
                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-4">
                            <label for="add-authorization-4">Səlahiyyət</label>
                        </div>
                    </div>

                    <div class="col md-4 sm-6 xs-6 xxs-12 mb-15">

                        <strong class="d-block mb-10">Bölmə adı</strong>

                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-1">
                            <label for="add-authorization-1">Səlahiyyət</label>
                        </div>
                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-2">
                            <label for="add-authorization-2">Səlahiyyət</label>
                        </div>
                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-3">
                            <label for="add-authorization-3">Səlahiyyət</label>
                        </div>
                        <div class="ckbox">
                            <input type="checkbox" id="add-authorization-4">
                            <label for="add-authorization-4">Səlahiyyət</label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-reprimand">

                <div class="row as-7">

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-reprimand">Tənbeh</label>
                        <select name="" id="add-reprimand" class="input border-0 shadow">
                            <option value="">Option</option>
                            <option value="">Option</option>
                            <option value="">Option</option>
                            <option value="">Option</option>
                        </select>
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-document">Sənəd</label>
                        <select name="" id="add-document" class="input border-0 shadow">
                            <option value="">Option</option>
                            <option value="">Option</option>
                            <option value="">Option</option>
                            <option value="">Option</option>
                        </select>
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-reprimand-no">Nömrəsi</label>
                        <input type="number" id="add-reprimand-no" class="input border-0 shadow">
                    </div>

                    <div class="col as-3 xxs-6 mb-15">
                        <label for="add-reprimand-date">Tarixi</label>
                        <input type="date" id="add-reprimand-date" class="input border-0 shadow">
                    </div>

                    <div class="col as-6 xs-12 xxs-12 mb-15">
                        <label for="add-item-no">Maddə №</label>
                        <select name="" id="add-item-no" class="input border-0 shadow">
                            <option value="">option</option>
                            <option value="">option</option>
                            <option value="">option</option>
                            <option value="">option</option>
                        </select>
                    </div>

                    <div class="col as-6 xs-12 xxs-12 mb-15">
                        <label for="add-reason">Səbəb</label>
                        <input type="text" id="add-reason" class="input border-0 shadow">
                    </div>

                    <div class="col as-12 mb-15">
                        <label for="add-note">Qeyd</label>
                        <input type="text" id="add-note" class="input border-0 shadow">
                    </div>

                    <div class="col as-12">
                        <div class="table-responsive">
                            <table class="table bordered hovered">
                                <thead>
                                <tr>
                                    <th>Tənbeh</th>
                                    <th>Sənəd</th>
                                    <th>Nömrəsi</th>
                                    <th>Tarixi</th>
                                    <th>Maddə №</th>
                                    <th>Səbəb</th>
                                    <th>Qeyd</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody class="text-center">
                                <tr>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>
                                        <button type="button" class="btn xs circle bg-red" data-toggle="tooltip" data-placement="left" title="Ləğv et" aria-label="Ləğv et">
                                            <i aria-hidden="true" class="icon-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="line-through">
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>data</td>
                                    <td>Ləğv edilib</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

            <div class="tab-panel" role="tabpanel" data-tab="add-party">

                <div class="clear mb-15">
                    <label for="add--party">Təşkilat</label>
                    <select id="add--party" class="input select" multiple="multiple">
                        <option disabled>Seç</option>
                        <option value="" selected>YAP</option>
                        <option value="">YAP</option>
                        <option value="">YAP</option>
                    </select>
                </div>

                <div class="clear mb-15">
                    <label for="add--other-info">Digər</label>
                    <textarea id="add--other-info" class="input no-resize" cols="30" rows="4"></textarea>
                </div>

            </div>

        </div>

        <div class="panel-footer text-center">

            <button type="button" class="btn bg-white border-0 shadow" data-close="new-hr">Bağla</button>

            <button type="submit" class="btn bg-green border-0 shadow">Yadda saxla</button>

        </div>

    </form>

</div>

<?php include("footer.php") ?>
