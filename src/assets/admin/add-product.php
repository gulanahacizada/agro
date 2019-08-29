<?php include("header.php") ?>

<form class="panel">

    <div class="panel-header p-20">
        <h1 class="panel-title bold float-left">
            <i aria-hidden="true" class="icon-plus mr-10"></i>
            Yeni məhsul əlavə et
        </h1>

        <select name="" id="" class="border-0 pointer float-right">
            <option value="az">AZ</option>
            <option value="en">EN</option>
            <option value="ru">RU</option>
        </select>
    </div>

    <div class="pt-20 pl-20 pr-20 bg-gray">
        <div class="row as-10 xs-5">

            <div class="col as-3 xs-12 mb-20">
                <label for="title">Məhsulun adı</label>
                <input type="text" id="title" class="input border-0 shadow">
            </div>

            <div class="col as-3 xs-12 mb-20">
                <label for="category">Kateqoriya <sup class="text-red">*</sup></label>
                <select name="" id="category" class="input select shadow border-0 w-100p">
                    <option>Seç</option>
                    <option value="">Category name</option>
                </select>
            </div>

            <div class="col as-3 xs-12 mb-20">
                <label for="sub-category">Alt kateqoriya <sup class="text-red">*</sup></label>
                <select name="" id="sub-category" class="input select shadow border-0 w-100p">
                    <option>Seç</option>
                    <option value="">Category name</option>
                </select>
            </div>

            <div class="col as-3 xs-12 mb-20">
                <label for="type">Növ <sup class="text-red">*</sup></label>
                <select name="" id="type" class="input select shadow border-0 w-100p">
                    <option>Seç</option>
                    <option value="">type name</option>
                </select>
            </div>

            <div class="col as-3 xs-12 mb-20">
                <label for="calibre">Kalibr <sup class="text-red">*</sup></label>
                <select name="" id="calibre" class="input select shadow border-0 w-100p">
                    <option>Seç</option>
                    <option value="">Calibre name</option>
                </select>
            </div>

            <div class="col as-3 xs-12 mb-20">
                <label for="size">Həcm</label>
                <div class="input-group shadow">
                    <input type="number" id="size" class="input border-0" placeholder="0.0">
                    <select name="" id="calibre" class="btn select border-0">
                        <option value="">Ton</option>
                        <option value="">Kilo</option>
                        <option value="">Litr</option>
                        <option value="">Metr</option>
                        <option value="">Santımetr</option>
                    </select>
                </div>
            </div>

            <div class="col as-3 xs-12 mb-20">
                <label for="price">Qiymət</label>
                <div class="input-group shadow">
                    <input type="number" id="price" class="input border-0" placeholder="0.00">
                    <select name="" id="currency" class="btn select border-0">
                        <option value="">AZN</option>
                        <option value="">USD</option>
                        <option value="">EUR</option>
                    </select>
                </div>
            </div>

            <div class="col as-3 xs-12 mb-20">
                <label for="harvesting">Yığım tarixi</label>
                <input type="text" id="harvesting" class="input border-0 shadow">
            </div>

            <div class="col as-12 xl-6 mb-20">
                <label for="description">Məhsulun qısa açıqlaması</label>
                <div class="shadow">
                    <textarea name="" id="description" cols="30" rows="13" class="basic-editor input no-resize"></textarea>
                </div>
            </div>

            <div class="col as-12 xl-6 mb-20">
                <label for="image">Məhsul görüntüləri</label>
                <span class="btn btn-file bg-white border-0 shadow w-100p">
                    <i aria-hidden="true" class="icon-folder mr-10"></i>
                    Şəkil seç
                    <input type="file">
                </span>
                <div class="thumb-row row as-5">

                    <div class="col mt-10">
                        <div class="thumb-preview thumb contain shadow">
                            <span role="button" class="close icon-close" aria-label="Ləğv et"></span>
                            <img src="assets/images/avatar.png" class="p-5">
                        </div>
                    </div>
                    <div class="col mt-10">
                        <div class="thumb-preview thumb contain shadow">
                            <span role="button" class="close icon-close" aria-label="Ləğv et"></span>
                            <img src="assets/images/avatar.png" class="p-5">
                        </div>
                    </div>
                    <div class="col mt-10">
                        <div class="thumb-preview thumb contain shadow">
                            <span role="button" class="close icon-close" aria-label="Ləğv et"></span>
                            <img src="assets/images/avatar.png" class="p-5">
                        </div>
                    </div>
                    <div class="col mt-10">
                        <div class="thumb-preview thumb contain shadow">
                            <span role="button" class="close icon-close" aria-label="Ləğv et"></span>
                            <img src="assets/images/avatar.png" class="p-5">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="panel-footer">
        <a href="central-authorities.php" class="btn bg-red border-0 shadow" title="Sil">
            <i aria-hidden="true" class="icon-trash mr-10"></i>
            Sil
        </a>
        <button type="submit" class="btn bg-green shadow border-0 float-right" title="Yadda saxla">
            Yadda saxla
        </button>
    </div>

</form>

<?php include("footer.php") ?>
