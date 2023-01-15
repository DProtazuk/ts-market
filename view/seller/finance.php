<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Финансы</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-seller.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-markup.php"); ?>
</head>
<body>
<input type="hidden" class="keyMenu" value="menu_seller_finance">

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
                                <h6 class="fw-bolder my-2">Общая выручка</h6>
                                <h3 class="my-3">37 812</h3>
                            </div>

                            <div class="w-48 bg-secondary-subtle p-3 px-4 rounded-4">
                                <h6 class="fw-bolder my-2">Общее кол-во покупок</h6>
                                <h3 class="my-3">3 219</h3>
                            </div>
                        </div>

                        <div class="col-12 d-flex mt-4 justify-content-between">
                            <div class="w-48 bg-secondary-subtle p-3 px-4 rounded-4">
                                <h6 class="fw-bolder my-2">Общая сумма на вывод</h6>
                                <h3 class="my-3">37 812</h3>
                            </div>

                            <div class="w-48 bg-success-subtle p-3 px-4 rounded-4 bg-opacity-50">
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

                <div class="col-12 d-flex justify-content-between mt-4">
                    <div class="w-48 bg-silver rounded-4 px-3">
                        <h6 class="my-1 text-white border-bottom border-secondary py-3">Платежные данные</h6>

                        <div class="payment_details">
                            <h6 class="text-white my-4">USDT <span class="h6_payment_details">666vh654gcjtrhhc64cfhkjghjhvf65fhgvyt677877thjb</span>
                            </h6>
                        </div>

                        <div class="button_payment_details">
                            <button onclick="update_payment_details()" class="btn btn-bg-seller my-5 px-3 text-white">изменить
                            </button>
                            <!--                    <button onclick="save_payment_details()" class="btn btn-bg-seller my-5 px-3 text-white">сохранить</button>-->
                            <!--                    <button onclick="cancellation_payment_details()" class="btn btn-danger my-5 mx-4 px-3 text-white">отмена</button>-->
                        </div>
                    </div>

                    <div class="w-48 bg-silver rounded-4 px-3">
                        <h6 class="my-1 text-white border-bottom border-secondary py-3">Оформить заявку на вывод средств</h6>

                        <h6 class="text-white my-4">Доступная сумма - $<span>12 434</span></h6>

                        <div class="d-flex my-4">
                            <h6 class="text-white ">Впишите сумму</h6>
                            <input type="number" class="text-white border-0 mx-5 input-price-seller px-3">
                        </div>

                        <button class="btn btn-bg-seller my-3 px-3 text-white">оформить</button>
                    </div>
                </div>

                <div class="col-12 bg-silver mt-4 p-3 rounded-4">
                    <div class="col-12 d-flex justify-content-between">
                        <div class="col-8 text-white d-flex align-items-center">
                            <span>Ордера на вывод средств</span>
                            <span class="mx-3 text-secondary">|</span>
                            <span>Даты</span>

                            <input value="2023-01-01" type="date" class="fw-bolder border-0 text-white mx-3 input-price-seller px-2">

                            <input value="2023-01-10" type="date" class="text-white border-0 mx-3 input-price-seller px-2">
                        </div>

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
                            <td class="col-1 lh-lg">id</td>
                            <td class="col-2 lh-lg">Дата</td>
                            <td class="col-5">Платежные данные</td>
                            <td class="col-2 text-center">Сумма</td>
                            <td class="col-2 text-center">Исполнение</td>
                        </tr>

                        <tr class="text-white">
                            <td class="col-1 lh-lg">196874</td>
                            <td class="col-2 lh-lg">12.12.2022</td>
                            <td class="col-5">USDT 666vh654gcjtrhhc64cfhkjghjhvf65fhgvyt677877thjb</td>
                            <td class="col-2 text-center">$123 930</td>
                            <td class="col-2 text-center">
                                <div class="col-7 m-auto status_Competed d-flex  align-items-center  my-2">
                                    <div class="elipse_status_Competed p-1 mx-2"></div>
                                    <span>Competed</span>
                                </div>
                            </td>
                        </tr>

                        <tr class="text-white">
                            <td class="col-1 lh-lg">196874</td>
                            <td class="col-2 lh-lg">12.12.2022</td>
                            <td class="col-5">USDT 666vh654gcjtrhhc64cfhkjghjhvf65fhgvyt677877thjb</td>
                            <td class="col-2 text-center">$123 930</td>
                            <td class="col-2 text-center">
                                <div class="col-7 m-auto status_In_Progress d-flex align-items-center  my-2">
                                    <div class="elipse_status_In_Progress p-1 mx-2"></div>
                                    <span>In Progress</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
        <div class="overlay"></div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/murkup-js.php"); ?>

</body>
</body>
</html>