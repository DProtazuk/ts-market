<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Продажи</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-seller.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-markup.php"); ?>
</head>
<body>
<input type="hidden" class="keyMenu" value="menu_seller_sales">

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
                        <h6 class="fw-bolder my-2">Едениц продано</h6>
                        <h3 class="my-3">37 812</h3>
                    </div>

                    <div class="w-20 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
                        <h6 class="fw-bolder my-2">Покупок</h6>
                        <h3 class="my-3">146</h3>
                    </div>

                    <div class="w-20 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
                        <h6 class="fw-bolder my-2">Сумма продаж</h6>
                        <h3 class="my-3">53 746</h3>
                    </div>

                    <div class="w-20 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
                        <h6 class="fw-bolder my-2">Возвраты</h6>
                        <h3 class="my-3">15 </h3>
                    </div>
                </div>

                <div class="col-12 bg-silver rounded-4 m-auto mt-4 p-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <span class="text-white fw-bolder text-14 cursor">Продажи</span>
                        <span class="text-white opacity-25 fw-light fw-bolder">|</span>
                        <span class="text-white  opacity-50 fw-bolder text-14 cursor">Возвраты</span>

                        <div class="input-price-seller col-4">
                            <input class="px-5 text-white border-0 col-12" type="text" style="background: url('/res/img/search.svg') no-repeat left;background-position: 3% 100%; background-position-y: center;

                    background-size: 5% 55%">
                        </div>

                        <span class="text-white fw-bolder text-14 mx-4">Даты</span>
                        <input value="2023-01-01" type="date" class="border-0 fw-bolder text-white mx-1 input-price-seller p-1 px-3">

                        <input value="2023-01-10" type="date" class="border-0 fw-bolder text-white mx-1 input-price-seller p-1 px-3">
                    </div>

                    <div class="col-12 d-flex justify-content-between align-items-center mt-3">
                        <table class="col-12">
                            <tr class="border-bottom border-secondary text-secondary">
                                <td class="col-1 lh-lg">Ордер</td>
                                <td class="col-1 lh-lg">Дата</td>
                                <td class="col-4 p-4">Наименование</td>
                                <td class="col-2">Категория</td>
                                <td class="col-1 text-center">Кол-во</td>
                                <td class="col-1 text-center">Сумма</td>
                                <td class="col-3"></td>
                            </tr>

                            <tr class="border-bottom border-secondary text-white text-opacity-75">
                                <td class="col-1 lh-lg">24536236</td>
                                <td class="col-1 lh-lg">26.12.2023</td>
                                <td class="col-4 p-4">Facebook [ПЗРД] USA фарм 30д. Интересы+,
                                    coockie, UA, 2fa, +2BM</td>
                                <td class="col-2">Facebook | Фарм акканты</td>
                                <td class="col-1 text-center">100 шт.</td>
                                <td class="col-1 text-center">$600</td>
                                <td class="col-3">
                                    <div class="col-6 m-auto d-flex align-items-center">
                                        <div class="col-10 p-1 text-14 px-2 btn-bg-seller shadow_status rounded d-flex justify-content-center align-items-center lh-1">оплачено</div>
                                        <button class="mx-4 col-2 border-none p-3 btn_down"></button>
                                    </div>
                                </td>
                            </tr>

                            <tr class="border-bottom border-secondary text-white text-opacity-75">
                                <td class="col-1 lh-lg">24536236</td>
                                <td class="col-1 lh-lg">26.12.2023</td>
                                <td class="col-4 p-4">Facebook [ПЗРД] USA фарм 30д. Интересы+,
                                    coockie, UA, 2fa, +2BM</td>
                                <td class="col-2">Facebook | Фарм акканты</td>
                                <td class="col-1 text-center">4 шт.</td>
                                <td class="col-1 text-center">$15</td>
                                <td class="col-3">
                                    <div class="col-6 m-auto d-flex align-items-center">
                                        <div class="col-10 p-1 text-14 px-2 btn-dg-danger shadow_status rounded d-flex justify-content-center align-items-center lh-1">возврат</div>
                                        <button class="mx-4 col-2 border-none p-3 btn_down"></button>
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
<?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/murkup-js.php"); ?>
</body>
</html>