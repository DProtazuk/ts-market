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
                <div class="col-12 bg-silver p-5 py-4 rounded-4 m-auto d-flex justify-content-around" style="box-shadow: 6px 6px 4px rgba(0, 0, 0, 0.51);">
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
            </div>
        </main>
        <div class="overlay"></div>
    </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/murkup-js.php"); ?>
</body>
</html>