<?php include("header.php") ?>

<div class="panel mb-15">

    <div class="row justify-content-center">

        <div class="col lg-1 md-2 sm-2 xs-3 xxs-4 p-10 bg-gray">
            <div class="thumb responsive pb-in-100">
                <img src="../assets/images/notify-icon.gif" alt="Account Name" width="150" height="150">
            </div>
        </div>

        <div class="col lg-11 md-10 sm-10 xs-9 xxs-12 p-20 d-flex-center">
            <h1 class="title h3 bold mb-0">TimeSoft</h1>
        </div>

    </div>

    <ul class="scrolling-menu justify tab-nav border-top border-bottom" role="tablist">

        <li role="presentation" class="active">
            <span class="menu-item p-40 pt-15 pb-15 border-right" role="tab" data-target-tab="chat-room">
                <i aria-hidden="true" class="icon-envelope p-5"></i>
                <span class="ml-5 hide-xs hide-xxs">Yazışmalar</span>
                <sup class="badge bg-orange">5</sup>
            </span>
        </li>

        <li role="presentation">
            <span class="menu-item p-40 pt-15 pb-15 border-right" role="tab" data-target-tab="about">
                <i aria-hidden="true" class="icon-info-circle-thin p-5"></i>
                <span class="ml-5 hide-xs hide-xxs">Ümumi məlumatlar</span>
            </span>
        </li>

        <li role="presentation" class="hide-lg hide-md">
            <span class="menu-item p-40 pt-15 pb-15 border-right" role="tab" data-target-tab="bounces">
                <i aria-hidden="true" class="icon-percent-bonus p-5"></i>
                <span class="ml-5 hide-xs hide-xxs">Bonuslar</span>
            </span>
        </li>

        <li role="presentation">
            <span class="menu-item p-40 pt-15 pb-15 border-right" role="tab" data-target-tab="persons">
                <i aria-hidden="true" class="icon-users p-5"></i>
                <span class="ml-5 hide-xs hide-xxs">İşçilər</span>
            </span>
        </li>

        <li role="presentation">
            <span class="menu-item p-40 pt-15 pb-15 border-right" role="tab" data-target-tab="rents">
                <i aria-hidden="true" class="icon-money-metal-2 p-5"></i>
                <span class="ml-5 hide-xs hide-xxs">Aylıq ödənişlər</span>
            </span>
        </li>

    </ul>

</div>

<div class="tab-content row as-7">

    <div class="tab-panel col as-12 md-9 active" role="tabpanel" data-tab="chat-room">
        <div class="panel h-100p">
            <div class="panel-header">
                <h4 class="panel-title bold">Time Tower ilə yazışmalar</h4>
            </div>

            <div class="panel-header bg-gray pb-0">
                <div class="row as-7 xs-5 xxs-5">

                    <div class="col as-4 xs-6 xxs-12 mb-15">
                        <label for="">Mövzular</label>
                        <select name="" id="" class="input select border-0 shadow">
                            <option value="">Bütün mövzular</option>
                            <option value="">Theme title</option>
                            <option value="">Theme title</option>
                            <option value="">Theme title</option>
                            <option value="">Theme title</option>
                            <option value="">Theme title</option>
                            <option value="">Theme title</option>
                            <option value="">Theme title</option>
                        </select>
                    </div>

                    <div class="col as-4 xs-6 xxs-12 mb-15">
                        <label for="date-range">Tarix aralığı</label>
                        <div class="input-group shadow">
                            <label class="input-group-addon border-0 mb-0 bg-white" for="date-range">
                                <i aria-hidden="true" class="icon-calendar-8"></i>
                            </label>
                            <input id="date-range" class="input daterange border-0" type="text">
                        </div>
                    </div>

                    <div class="col as-4 xs-6 xxs-12 mb-15" data-target-modal="apply-office">
                        <label class="hide-xs hide-xxs"> </label>
                        <button class="btn bg-orange w-100p border-0 shadow">
                            <i aria-hidden="true" class="icon-plus mr-10"></i>
                            Yeni yazışma
                        </button>
                    </div>

                </div>
            </div>


            <div class="table-responsive border-0 m-0">
                <table class="table bordered data-table text-center">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Ofis</th>
                        <th width="50%">Mövzu başlığı</th>
                        <th>Növü</th>
                        <th>Göndərən</th>
                        <th class="no-wrap">Göndərilmə tarixi</th>
                        <th>Bax</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>TimeSoft</td>
                        <td class="no-wrap">
                            <span class="line-clamp line-1 bold text-left" title="File name">Lorem ipsum dolor sit amet</span>
                        </td>
                        <td>Müraciət</td>
                        <td class="no-wrap">Elvin Abbasov</td>
                        <td class="text-center no-wrap">
                            20.11.2018, 02:43
                        </td>
                        <td>
                            <button class="btn xs circle bg-blue border-0 shadow" data-toggle="tooltip" title="Bax" aria-label="Bax" data-target-modal="apply-detail">
                                <i aria-hidden="true" class="icon-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>TimeSoft</td>
                        <td class="no-wrap">
                            <span class="line-clamp line-1 bold text-left" title="File name">Lorem ipsum dolor sit amet</span>
                        </td>
                        <td>Müraciət</td>
                        <td class="no-wrap">Elvin Abbasov</td>
                        <td class="text-center no-wrap">
                            20.11.2018, 02:43
                        </td>
                        <td>
                            <button class="btn xs circle bg-blue border-0 shadow" data-toggle="tooltip" title="Bax" aria-label="Bax" data-target-modal="apply-detail">
                                <i aria-hidden="true" class="icon-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>TimeSoft</td>
                        <td class="no-wrap">
                            <span class="line-clamp line-1 bold text-left" title="File name">Lorem ipsum dolor sit amet</span>
                        </td>
                        <td>Müraciət</td>
                        <td class="no-wrap">Elvin Abbasov</td>
                        <td class="text-center no-wrap">
                            20.11.2018, 02:43
                        </td>
                        <td>
                            <button class="btn xs circle bg-blue border-0 shadow" data-toggle="tooltip" title="Bax" aria-label="Bax" data-target-modal="apply-detail">
                                <i aria-hidden="true" class="icon-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>TimeSoft</td>
                        <td class="no-wrap">
                            <span class="line-clamp line-1 bold text-left" title="File name">Lorem ipsum dolor sit amet</span>
                        </td>
                        <td>Müraciət</td>
                        <td class="no-wrap">Elvin Abbasov</td>
                        <td class="text-center no-wrap">
                            20.11.2018, 02:43
                        </td>
                        <td>
                            <button class="btn xs circle bg-blue border-0 shadow" data-toggle="tooltip" title="Bax" aria-label="Bax" data-target-modal="apply-detail">
                                <i aria-hidden="true" class="icon-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>TimeSoft</td>
                        <td class="no-wrap">
                            <span class="line-clamp line-1 bold text-left" title="File name">Lorem ipsum dolor sit amet</span>
                        </td>
                        <td>Müraciət</td>
                        <td class="no-wrap">Elvin Abbasov</td>
                        <td class="text-center no-wrap">
                            20.11.2018, 02:43
                        </td>
                        <td>
                            <button class="btn xs circle bg-blue border-0 shadow" data-toggle="tooltip" title="Bax" aria-label="Bax" data-target-modal="apply-detail">
                                <i aria-hidden="true" class="icon-eye"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="tab-panel col as-12 md-9" role="tabpanel" data-tab="about">
        <div class="panel h-100p">
            <div class="row">

                <div class="col as-6 xs-12 xxs-12">
                    <div class="panel-header">
                        <h4 class="panel-title bold">Ümumi məlumatlar</h4>
                    </div>

                    <div class="panel-body">
                        <p class="mb-10 light"><b>Yerləşdiyi mərtəbə:</b> 5</p>
                        <p class="mb-10 light"><b>İşçi sayı:</b> 10 nəfər</p>
                        <p class="mb-10 light"><b>Ərazisi:</b> 150 m<sup>2</sup></p>

                        <p class="mt-10 font-16 light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus architecto atque aut commodi culpa delectus doloremque eius esse, et eveniet ex
                            ipsum labore magnam molestiae obcaecati quisquam repellendus saepe soluta?</p>
                    </div>
                </div>

                <div class="col as-6 xs-12 xxs-12">
                    <div class="panel-header">
                        <h4 class="panel-title bold">Əlaqə məlumatları</h4>
                    </div>

                    <div class="panel-body">
                        <p>
                            <b class="d-block mb-5">Müdür</b>
                            <a href="tel:(+99477) 777 77 77">
                                <i aria-hidden="true" class="icon-phone text-blue mr-5"></i>
                                (+99477) 777 77 77
                            </a>
                        </p>
                        <p>
                            <b class="d-block mb-5">Qəbul şöbəsi</b>
                            <a href="tel:(+99477) 777 77 77">
                                <i aria-hidden="true" class="icon-phone text-blue mr-5"></i>
                                (+99477) 777 77 77
                            </a>
                        </p>
                        <p>
                            <b class="d-block mb-5">E-poçt</b>
                            <a href="mailto:info@office.com">
                                <i aria-hidden="true" class="icon-envelope text-blue mr-5"></i>
                                info@office.com
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col as-12">
                    <div class="panel-header bg-gray">
                        <h4 class="panel-title bold">Çertiyoj</h4>
                    </div>

                    <div class="panel-body">
                        <img src="assets/images/office.png" alt="" style="width:100%; height: auto">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="tab-panel col as-12 md-9" role="tabpanel" data-tab="persons">
        <div class="panel">

            <div class="panel-header">
                <h4 class="panel-title bold">İşçilər</h4>
            </div>

            <div class="table-responsive border-0 m-0">
                <table class="table bordered hovered text-center">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Adı, Soyadı, Ata adı</th>
                        <th>Vəzifə</th>
                        <th>E-poçt</th>
                        <th>Telefon</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td>
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Rəcəbov Əlisavə Rəcəb oğlu</td>
                        <td>Müdür müavini</td>
                        <td>recebov.elisefa@gmail.com</td>
                        <td>(+994 77) 777 77 77</td>
                        <td class="no-wrap">
                            <button class="btn xs circle bg-blue border-0 shadow mr-5" aria-label="Redaktə et" title="Redaktə et" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-user-edit"></i>
                            </button>
                            <button class="btn xs circle bg-red border-0 shadow" aria-label="Sil" title="Sil" data-toggle="tooltip">
                                <i aria-hidden="true" class="icon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="tab-panel col as-12 md-9" role="tabpanel" data-tab="rents">
        <div class="panel">

            <div class="panel-header">
                <h4 class="panel-title bold">Aylıq ödənişlər 2019</h4>
            </div>

            <div class="table-responsive border-0 m-0">
                <table class="table bordered hovered text-center">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Aylar</th>
                        <th>Məbləğ</th>
                        <th>Status</th>
                        <th>Gecikmə</th>
                        <th>Cərimə</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Yanvar</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-check-circle-thin-1 text-green mr-5"></i> Ödənilib</td>
                        <td>0 Gün</td>
                        <td>0 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Fevral</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-orange mr-5"></i> Gecikir</td>
                        <td>1 Gün</td>
                        <td>20 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mart</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Aprel</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>May</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>İyun</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>İyul</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Avqust</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Sentyabr</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Oktyabr</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Noyabr</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Dekabr</td>
                        <td>500 <i aria-hidden="true" class="icon-currency-azn"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                        <td><i aria-hidden="true" class="icon-minus text-gray"></i></td>
                    </tr>
                    <tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="tab-panel col as-12 md-3 d-md-block" role="tabpanel" data-tab="bounces">

        <div class="panel h-100p">
            <div class="panel-header">
                <span class="panel-title  bold">Bonuslar</span>
            </div>
            <table class="table bordered hovered">
                <tbody>
                <tr>
                    <td class="bold no-wrap">Görüş otağı</td>
                    <td>5 saat</td>
                </tr>
                <tr>
                    <td class="bold no-wrap">Restoran</td>
                    <td>50 Manat</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<div class="apply-detail-modal modal"
     data-modal="apply-detail"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Apply Detail Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">

        <div class="panel-header">
            <h4 class="panel-title float-left">Müraciət</h4>
            <span role="button" aria-label="Bağla" aria-hidden="true" class="close fixed-close icon-close" data-close="apply-detail"></span>
        </div>

        <div class="panel-body">
            <table class="table bordered hovered">
                <tbody>
                <tr>
                    <td class="bold no-wrap">Ofis</td>
                    <td class="w-100p">TimeSoft</td>
                </tr>
                <tr>
                    <td class="bold no-wrap">Göndərən</td>
                    <td class="w-100p">Elvin Abbasov</td>
                </tr>
                <tr>
                    <td class="bold no-wrap">Göndərilmə tarixi</td>
                    <td class="w-100p">20.11.2018, 02:43</td>
                </tr>
                <tr>
                    <td class="bold no-wrap">Növü</td>
                    <td class="w-100p">Şikayət</td>
                </tr>
                <tr>
                    <td class="bold no-wrap">Mövzu başlığı</td>
                    <td class="w-100p">Lorem ipsum dolor sit amet</td>
                </tr>
                <tr>
                    <td class="bold no-wrap">Qeyd</td>
                    <td class="w-100p">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Ad animi asperiores assumenda eligendi explicabo id, inventore iure maxime molestiae
                        mollitia nam odit placeat praesentium quaerat quo sed veniam voluptatem voluptatibus?</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="panel-footer text-center">
            <button type="button" class="btn bg-gray border-0 radius-20" data-close="apply-detail">Bağla</button>
        </div>

    </div>

</div>

<div class="apply-modal modal xs"
     data-modal="apply-office"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1"
     aria-label="Apply Modal"
     aria-hidden="true">

    <div class="modal-content panel" role="document">
        <form action="">

            <div class="panel-header">
                <h4 class="panel-title">Müraciət formu</h4>
            </div>

            <div class="panel-body">
                <div class="mb-15">
                    <label for="apply-type">Müraciət növü</label>
                    <select name="" id="apply-type" class="input select border-0 shadow">
                        <option value="">Seç</option>
                        <option value="">Müraciət növü</option>
                        <option value="">Müraciət növü</option>
                    </select>
                </div>

                <div class="mb-15">
                    <label for="apply-title">Müraciət Başlığı</label>
                    <input type="text" id="apply-title" class="input border-0 shadow">
                </div>

                <label for="apply-note">Qeyd</label>
                <textarea name="" id="apply-note" class="input no-resize border-0 shadow" cols="30" rows="4"></textarea>
            </div>

            <div class="panel-footer text-center">
                <button type="button" class="btn bg-gray border-0 radius-20" data-close="apply-office">Ləğv et</button>
                <button type="submit" class="btn bg-green border-0 radius-20 shadow">Göndər</button>
            </div>

        </form>
    </div>

</div>

<?php include("footer.php") ?>
