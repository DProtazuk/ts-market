<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Товар 327657</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-seller.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-markup.php"); ?>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
<input type="hidden" class="keyMenu" value="menu_seller_products">
<?php include($_SERVER['DOCUMENT_ROOT'] . "/view/seller/modal-product.php"); ?>

<div class="layout has-sidebar fixed-sidebar fixed-header">
    <aside id="sidebar" class="sidebar break-point-lg has-bg-image ">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/sidebar.php"); ?>
    </aside>
    <div id="overlay" class="overlay"></div>
    <div class="layout">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/header.php"); ?>

        <main class="content">
            <div class="col-12">
                <div class="col-11 d-flex justify-content-between m-auto mt-4">
                    <div class="col-3">
                        <div class="col-11 big-shadow bg-silver rounded-4 p-3 py-4 d-flex flex-column align-items-center">
                            <div class="bg-transparent col-12 my-5 d-flex">
                                <svg class="col-8 m-auto" viewBox="0 0 152 147" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M151.827 73.4999C151.827 32.9028 117.843 0 75.9133 0C33.9832 0 0 32.9028 0 73.4999C0 110.193 27.7558 140.597 64.0519 146.11V94.746H44.7768V73.4999H64.0519V57.307C64.0519 38.8888 75.3797 28.7109 92.7269 28.7109C101.03 28.7109 109.718 30.1464 109.718 30.1464V48.2343H100.14C90.7104 48.2343 87.7748 53.9048 87.7748 59.7187V73.4999H108.829L105.463 94.746H87.7748V146.11C124.071 140.597 151.827 110.193 151.827 73.4999Z" fill="#1877F2"/>
                                    <path d="M105.462 94.7463L108.827 73.5002H87.7733V59.719C87.7733 53.9051 90.709 48.2346 100.139 48.2346H109.717V30.1467C109.717 30.1467 101.028 28.7112 92.7254 28.7112C75.3783 28.7112 64.0504 38.8891 64.0504 57.3072V73.5002H44.7754V94.7463H64.0504V146.11C67.9201 146.699 71.879 147 75.9119 147C79.9448 147 83.9037 146.699 87.7733 146.11V94.7463H105.462Z" fill="white"/>
                                </svg>

                            </div>
                        </div>
                    </div>

                    <div class="col-9 big-shadow bg-silver rounded-4 p-4 py-5">
                        <div class="d-flex col-11 m-auto justify-content-between align-items-center">
                            <h6 class="text-white fw-bolder d-block">Наименование</h6>
                            <input type="text" class="col-9 text-white border-0 input-price-seller px-3">
                        </div>

                        <div class="d-flex col-11 m-auto justify-content-between align-items-center mt-3">
                            <h6 class="text-white fw-bolder d-block">Обложка</h6>
                            <input type="text" class="col-9 text-white border-0 input-price-seller px-3">
                        </div>

                        <div class="d-flex col-11 m-auto justify-content-between align-items-center mt-3">
                            <h6 class="text-white fw-bolder d-block">Глобальная категория</h6>

                            <div class="select input-price-seller w-75">
                                <input class="select__input" type="hidden" name="">
                                <div class="select__head p-1 text-white px-2">Выбрать категорию</div>
                                <ul class="select__list p-1 bg-opacity-50" style="display: none;">
                                    <li class="select__item p-1">Стилизация select CSS</li>
                                    <li class="select__item p-1">Стилизация select CSS</li>
                                    <li class="select__item p-1">Стилизация select CSS</li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex col-11 m-auto justify-content-between align-items-center mt-3">
                            <h6 class="text-white fw-bolder d-block">Категория</h6>

                            <div class="select input-price-seller w-75">
                                <input class="select__input" type="hidden" name="">
                                <div class="select__head p-1 text-white px-2">Выбрать категорию</div>
                                <ul class="select__list p-1 bg-opacity-50" style="display: none;">
                                    <li class="select__item p-1">Стилизация select </li>
                                    <li class="select__item p-1">Стилизация select CSS</li>
                                    <li class="select__item p-1">Стилизация select CSS</li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex col-11 m-auto justify-content-between align-items-center mt-3">
                            <h6 class="text-white fw-bolder d-block">Цена</h6>
                            <input type="text" class="col-9 text-white border-0 input-price-seller px-3">
                        </div>
                    </div>
                </div>

                <div class="col-11 bg-silver rounded-4 m-auto mt-4 p-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="col-6 d-flex">
                            <span data-block="update-product-1" onclick="parametr_product.call(this)" class="span_cr_red_product d-block text-white fw-bolder text-14 cursor">Описание товара</span>

                            <span class="d-block mx-4 text-white opacity-25 fw-light fw-bolder">|</span>

                            <span data-block="update-product-2" onclick="parametr_product.call(this)" class="span_cr_red_product d-block text-white fw-bolder text-14 opacity-25 cursor">Параметры товара</span>

                            <span class="d-block mx-4 text-white opacity-25 fw-light fw-bolder">|</span>

                            <span data-block="update-product-3" onclick="parametr_product.call(this)" class="span_cr_red_product d-block text-white fw-bolder text-14 opacity-25 cursor">Добавить товары</span>
                        </div>

                        <div class="col-2 d-flex justify-content-center">
                            <button class="btn p-1 text-14 px-4  btn-bg-seller shadow_status rounded d-flex justify-content-center align-items-center lh-1 fs-6 text-white">сохранить</button>
                        </div>
                    </div>

                    <hr class="border-bottom my-5">

                    <div class="col-12 bg-black bg-opacity-25 p-4 rounded">
                        <div class="col-12 rounded bg-silver shadow">
                            <div class="update-product update-product-1 col-12">
                                <div id="summernote"></div>
                            </div>

                            <div class="update-product d-none update-product-2 col-12">
                                22222222222
                            </div>

                            <div class="update-product d-none update-product-3 col-12">
                                3333333333333
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="overlay"></div>
    </div>
</div>

<script>
    $('#summernote').summernote({
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>

<script>
    jQuery(($) => {
        $('.select').on('click', '.select__head', function () {
            if ($(this).hasClass('open')) {
                $(this).removeClass('open');
                $(this).next().fadeOut();
            } else {
                $('.select__head').removeClass('open');
                $('.select__list').fadeOut();
                $(this).addClass('open');
                $(this).next().fadeIn();
            }
        });

        $('.select').on('click', '.select__item', function () {
            $('.select__head').removeClass('open');
            $(this).parent().fadeOut();
            $(this).parent().prev().text($(this).text());
            $(this).parent().prev().prev().val($(this).text());
        });

        $(document).click(function (e) {
            if (!$(e.target).closest('.select').length) {
                $('.select__head').removeClass('open');
                $('.select__list').fadeOut();
            }
        });
    });
</script>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/murkup-js.php"); ?>
</body>
</html>