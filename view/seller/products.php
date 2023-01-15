<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Товары</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-seller.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-markup.php"); ?>
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
                <div class="col-12 bg-silver p-5 py-4 rounded-4 m-auto d-flex justify-content-around"
                     style="box-shadow: 6px 6px 4px rgba(0, 0, 0, 0.51);">
                    <div class="w-20 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
                        <h6 class="fw-bolder my-2">Кол-во товаров</h6>
                        <h3 class="my-3">59</h3>
                    </div>

                    <div class="w-20 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
                        <h6 class="fw-bolder my-2">Товаров на сумму</h6>
                        <h3 class="my-3">367 362</h3>
                    </div>

                    <div class="w-20 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
                        <h6 class="fw-bolder my-2">Покупок сегодня</h6>
                        <h3 class="my-3">146</h3>
                    </div>

                    <div class="w-20 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
                        <h6 class="fw-bolder my-2">Сумма продаж</h6>
                        <h3 class="my-3">53 746</h3>
                    </div>
                </div>


                <div class="col-12 bg-silver rounded-4 m-auto mt-4 p-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <span class="text-white fw-bolder text-14 cursor">Товары</span>
                        <span class="text-white opacity-25 fw-light fw-bolder">|</span>

                        <div class="input-price-seller col-4">
                            <input class="px-5 text-white border-0 col-12" type="text" style="background: url('/res/img/search.svg') no-repeat left;background-position: 3% 100%; background-position-y: center; background-size: 5% 55%">
                        </div>

                        <span class="text-white opacity-25 fw-light fw-bolder">|</span>


                        <div class="col-3">
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

                        <div class="col-2 d-flex justify-content-center">
                            <button class="btn p-1 text-14 px-4  btn-bg-seller shadow_status rounded d-flex justify-content-center align-items-center lh-1 fs-5 text-white">создать</button>
                        </div>

                    </div>


                    <div class="col-12 d-flex justify-content-between align-items-center mt-3">
                        <table class="col-12">
                            <tr class="border-bottom border-secondary text-secondary">
                                <td class="col-1 lh-lg">ID товара</td>
                                <td class="col-3 lh-lg ">Наименование</td>
                                <td class="col-2 px-4">Категория</td>
                                <td class="col-1">Кол-во</td>
                                <td class="col-1 text-center">Цена</td>
                                <td class="col-1 text-center">Сумма</td>
                                <td class="col-1 text-center">Покупок</td>
                                <td class="col-2"></td>
                            </tr>

                            <tr class="border-bottom border-secondary text-white text-opacity-75">
                                <td class="col-1 lh-lg py-5">327657</td>
                                <td class="col-3 lh-sm text-14">Facebook [ПЗРД] USA фарм 30д. Интересы+,
                                    coockie, UA, 2fa, +2BM</td>
                                <td class="col-2 px-4">Facebook | Фарм</td>
                                <td class="col-1"> 100 шт.</td>
                                <td class="col-1 text-center">600р.</td>
                                <td class="col-1 text-center">6 000р.</td>
                                <td class="col-1 text-center">765</td>
                                <td class="col-2">
                                    <div class="col-12 m-auto status_In_Progress d-flex justify-content-center align-items-center  my-2">
                                        <button class="col-2  border-none p-3 btn_down"></button>
                                        <button data-bs-toggle="modal" data-bs-target="#upload_product" class="col-2  border-none p-3 btn_upload"></button>

                                        <a href="/view/seller/show-product.php">
                                            <button class="col-2  border-none p-3 btn_update"></button>
                                        </a>

                                        <button data-bs-toggle="modal" data-bs-target="#copy_product" class="col-2  border-none p-3 btn_copy"></button>
                                        <button data-bs-toggle="modal" data-bs-target="#delete_product" class="col-2  border-none p-3 btn_del"></button>
                                    </div>
                                </td>
                            </tr>

                            <tr class="border-bottom border-secondary text-white text-opacity-75">
                                <td class="col-1 lh-lg py-5">327657</td>
                                <td class="col-3 lh-sm text-14">Facebook [ПЗРД] USA фарм 30д. Интересы+,
                                    coockie, UA, 2fa, +2BM</td>
                                <td class="col-2 px-4">Facebook | Фарм</td>
                                <td class="col-1"> 100 шт.</td>
                                <td class="col-1 text-center">600р.</td>
                                <td class="col-1 text-center">6 000р.</td>
                                <td class="col-1 text-center">765</td>
                                <td class="col-2">
                                    <div class="col-12 m-auto status_In_Progress d-flex justify-content-center align-items-center  my-2">
                                        <button class="col-2  border-none p-3 btn_down"></button>
                                        <button data-bs-toggle="modal" data-bs-target="#upload_product" class="col-2  border-none p-3 btn_upload"></button>
                                        <a href="/view/seller/show-product.php">
                                            <button class="col-2  border-none p-3 btn_update"></button>
                                        </a>

                                        <button data-bs-toggle="modal" data-bs-target="#copy_product" class="col-2  border-none p-3 btn_copy"></button>
                                        <button data-bs-toggle="modal" data-bs-target="#delete_product" class="col-2  border-none p-3 btn_del"></button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <div class="overlay"></div>
    </div>
</div>

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