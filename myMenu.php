<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-seller.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-markup.php"); ?>
    <title>CodePen - Pro Sidebar template</title>
</head>
<input type="hidden" class="keyMenu" value="menu_seller_dashboard">

<body translate="no" >
<div class="layout has-sidebar fixed-sidebar fixed-header">
    <aside id="sidebar" class="sidebar break-point-lg has-bg-image ">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/sidebar.php"); ?>
    </aside>
    <div id="overlay" class="overlay"></div>
    <div class="layout">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/header.php"); ?>

        <main class="content">
            <div class="col-12">
                <div class="col-12 d-flex justify-content-between">
                    <div class="w-48">
                        <div class="col-12 d-flex justify-content-between">
                            <div class="w-48 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
                                <h6 class="fw-bolder my-2">Едениц продано</h6>
                                <h3 class="my-3">37 812</h3>
                            </div>

                            <div class="w-48 bg-secondary-subtle p-3 px-4 rounded-4">
                                <h6 class="fw-bolder my-2">Кол-во покупок</h6>
                                <h3 class="my-3">3 219</h3>
                            </div>
                        </div>

                        <div class="col-12 d-flex mt-4 justify-content-between">
                            <div class="w-48 bg-secondary-subtle p-3 px-4 rounded-4">
                                <h6 class="fw-bolder my-2">Выручка</h6>
                                <h3 class="my-3">37 812</h3>
                            </div>

                            <div class="w-48 bg-success-subtle p-3 px-4 rounded-4  bg-opacity-50">
                                <h6 class="fw-bolder my-2">Доступно для вывода</h6>
                                <h3 class="my-3">3 219</h3>
                            </div>
                        </div>
                    </div>

                    <div class="w-48 bg-silver rounded-4">
                        <div class="col-12 d-flex justify-content-between align-items-center p-3">
                            <span class="text-white fw-bolder text-14">Выручка за неделю</span>
                            <span class="text-white opacity-25 fw-light fw-bolder">|</span>

                            <div class="d-flex align-items-center">
                                <img width="6" height="6" src="/res/img/sm-elipse.png">
                                <span class="text-white text-14 mx-1">Текущая $<span>58,211</span></span>
                            </div>

                            <div class="d-flex align-items-center">
                                <img width="6" height="6" src="/res/img/sm-elipse.png">
                                <span class="text-white text-14 mx-1">Предыдущая  $<span>68,768</span></span>
                            </div>

                            <div class="dropdown">
                        <span class="lh-1 text-white fs-6 fw-bolder cursor" id="dropdownMenuButton1"
                              data-bs-toggle="dropdown" aria-expanded="false">&bull;&bull;&bull;</span>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Выручка за неделю</a></li>
                                    <li><a class="dropdown-item" href="#">Выручка за месяц</a></li>
                                    <li><a class="dropdown-item" href="#">Выручка за год</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 d-flex justify-content-between">
                    <div class="col-9 bg-silver p-3 rounded-4">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <span class="text-white fw-bolder">Кол-во продаж по категориям</span>

                            <div class="dropdown">
                        <span class="text-white d-block fs-6 fw-bolder cursor" id="dropdownMenuButton1"
                              data-bs-toggle="dropdown" aria-expanded="false">&bull;&bull;&bull;</span>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Кол-во продаж по категориям</a></li>
                                    <li><a class="dropdown-item" href="#">Сумма продаж по товарам</a></li>
                                    <li><a class="dropdown-item" href="#">Сумма продаж по категориям</a></li>
                                    <li><a class="dropdown-item" href="#">Сумма продаж по категориям</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 d-flex justify-content-end">
                        <div class="col-11 bg-silver p-2 rounded-4">
                            <h6 class="text-center text-white my-3">Рейтинг шопа</h6>

                            <h6 class="text-white text-center text-48 my-2">5.0</h6>

                            <div class="col-12 d-flex justify-content-center">
                                <img src="/res/img/star.png">
                                <img src="/res/img/star.png">
                                <img src="/res/img/star.png">
                                <img src="/res/img/star.png">
                                <img src="/res/img/star.png">
                            </div>

                            <h6 class="text-white text-center fw-lighter my-1">Превосходно!</h6>

                            <h6 class="text-white text-center text-48 my-2 mt-4">2.7%</h6>
                            <h6 class="text-center text-white my-2 text-14">Процент возвратов товара</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 d-flex justify-content-between">
                    <div class="col-9 bg-silver p-3 rounded-4">
                        <div class="col-12 d-flex justify-content-between align-items-center">
                            <span class="text-white fw-bolder">Топ продаж по сумме</span>

                            <div class="dropdown">
                        <span class="text-white fs-6 fw-bolder cursor" id="dropdownMenuButton2"
                              data-bs-toggle="dropdown" aria-expanded="false">&bull;&bull;&bull;</span>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="#">Топ продаж по сумме</a></li>
                                    <li><a class="dropdown-item" href="#">Топ продаж по кол-ву</a></li>
                                </ul>
                            </div>
                        </div>

                        <table class="col-12 my-3">
                            <tr class="border-bottom border-secondary text-secondary">
                                <td class="col-7 lh-lg">Наименование</td>
                                <td class="col-1 text-center">Цена</td>
                                <td class="col-2 text-center">Кол-во</td>
                                <td class="col-2 text-center">Сумма</td>
                            </tr>

                            <tr class="text-white">
                                <td class="col-7 lh-lg text-14 td_seller">
                                    <a class="text-decoration-none text-white" href="">Facebook [ПЗРД] USA фарм 30д. Интересы+,
                                        coockie, UA, 2fa, +2BM</a>
                                </td>
                                <td class="col-1 text-center td_seller">$15</td>
                                <td class="col-2 text-center td_seller">8262</td>
                                <td class="col-2 text-center td_seller">$123 930</td>
                            </tr>

                            <tr class="text-white">
                                <td class="col-7 lh-lg text-14 td_seller">
                                    <a class="text-decoration-none text-white" href="">Facebook [ПЗРД] USA фарм 30д. Интересы+,
                                        coockie, UA, 2fa, +2BM</a>
                                </td>
                                <td class="col-1 text-center td_seller">$15</td>
                                <td class="col-2 text-center td_seller">8262</td>
                                <td class="col-2 text-center td_seller">$123 930</td>
                            </tr>

                            <tr class="text-white">
                                <td class="col-7 lh-lg text-14 td_seller">
                                    <a class="text-decoration-none text-white" href="">Facebook [ПЗРД] USA фарм 30д. Интересы+,
                                        coockie, UA, 2fa, +2BM</a>
                                </td>
                                <td class="col-1 text-center td_seller">$15</td>
                                <td class="col-2 text-center td_seller">8262</td>
                                <td class="col-2 text-center td_seller">$123 930</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-3 d-flex justify-content-end">
                        <div class="col-11 bg-silver p-2 rounded-4">

                        </div>
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

