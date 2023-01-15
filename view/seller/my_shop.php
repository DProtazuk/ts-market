<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой шоп</title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-seller.php"); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/link/link-markup.php"); ?>
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>

<input type="hidden" class="keyMenu" value="menu_seller_my_shop">

<div class="layout has-sidebar fixed-sidebar fixed-header">
    <aside id="sidebar" class="sidebar break-point-lg has-bg-image ">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/sidebar.php"); ?>
    </aside>
    <div id="overlay" class="overlay"></div>
    <div class="layout">
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/header.php"); ?>

        <main class="content">
            <div class="col-12">
                <div class="col-12 bg-silver rounded-2 p-5 m-auto d-flex justify-content-around" style="background: linear-gradient(270deg, #7E5195 1.21%, #47A38E 100%);">
                    <br><br><br><br><br><br>
                </div>

                <div class="col-12 d-flex justify-content-between m-auto mt-4">
                    <div class="col-3">
                        <div class="col-11 big-shadow bg-silver rounded-4 p-3 py-4 d-flex flex-column align-items-center">
                            <div class="bg-transparent">
                                <svg width="131" height="131" viewBox="0 0 131 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="65.5" cy="65.5" r="65.5" fill="url(#paint0_linear_0_1)"/>
                                    <path d="M39.8374 71H38.3232L41.7255 61.5455H43.3736L46.7759 71H45.2617L42.5888 63.2628H42.5149L39.8374 71ZM40.0913 67.2976H45.0032V68.4979H40.0913V67.2976ZM48.0305 71V63.9091H50.9711C51.7713 63.9091 52.4053 64.0799 52.8731 64.4215C53.3409 64.7601 53.5748 65.2202 53.5748 65.8018C53.5748 66.2173 53.4425 66.5466 53.1778 66.7898C52.9131 67.0329 52.5623 67.196 52.1253 67.2791C52.4423 67.3161 52.7331 67.4115 52.9978 67.5653C53.2625 67.7161 53.4748 67.9193 53.6349 68.1747C53.798 68.4302 53.8795 68.7348 53.8795 69.0888C53.8795 69.4643 53.7826 69.7966 53.5887 70.0859C53.3948 70.3722 53.1132 70.5968 52.7439 70.7599C52.3776 70.92 51.936 71 51.4189 71H48.0305ZM49.3277 69.8459H51.4189C51.7606 69.8459 52.0283 69.7643 52.2222 69.6012C52.4161 69.4381 52.5131 69.2165 52.5131 68.9364C52.5131 68.6071 52.4161 68.3486 52.2222 68.1609C52.0283 67.9701 51.7606 67.8746 51.4189 67.8746H49.3277V69.8459ZM49.3277 66.8636H50.985C51.2435 66.8636 51.4651 66.8267 51.6498 66.7528C51.8375 66.679 51.9806 66.5743 52.0791 66.4389C52.1807 66.3004 52.2314 66.1373 52.2314 65.9496C52.2314 65.6757 52.1191 65.4618 51.8944 65.3079C51.6698 65.154 51.362 65.0771 50.9711 65.0771H49.3277V66.8636ZM57.4573 71.157C57.008 71.157 56.6017 71.0739 56.2385 70.9077C55.8754 70.7384 55.5876 70.4937 55.3753 70.1737C55.166 69.8536 55.0613 69.4612 55.0613 68.9964C55.0613 68.5964 55.1383 68.267 55.2922 68.0085C55.4461 67.75 55.6538 67.5453 55.9154 67.3945C56.177 67.2437 56.4694 67.1299 56.7925 67.0529C57.1157 66.976 57.445 66.9175 57.7805 66.8775C58.2052 66.8282 58.5499 66.7882 58.8145 66.7575C59.0792 66.7236 59.2716 66.6697 59.3916 66.5959C59.5116 66.522 59.5716 66.402 59.5716 66.2358V66.2035C59.5716 65.8003 59.4578 65.4879 59.23 65.2663C59.0054 65.0447 58.6699 64.9339 58.2236 64.9339C57.7589 64.9339 57.3927 65.037 57.1249 65.2433C56.8602 65.4464 56.6771 65.6726 56.5756 65.9219L55.2783 65.6264C55.4322 65.1955 55.6569 64.8478 55.9523 64.5831C56.2509 64.3153 56.594 64.1214 56.9818 64.0014C57.3696 63.8783 57.7774 63.8168 58.2052 63.8168C58.4883 63.8168 58.7884 63.8506 59.1054 63.9183C59.4255 63.983 59.724 64.103 60.001 64.2784C60.281 64.4538 60.5103 64.7047 60.6888 65.0309C60.8673 65.354 60.9566 65.7741 60.9566 66.2912V71H59.6086V70.0305H59.5532C59.4639 70.209 59.33 70.3845 59.1515 70.5568C58.973 70.7292 58.7438 70.8723 58.4637 70.9862C58.1836 71.1 57.8482 71.157 57.4573 71.157ZM57.7574 70.049C58.139 70.049 58.4652 69.9736 58.7361 69.8228C59.01 69.672 59.2177 69.475 59.3593 69.2319C59.5039 68.9857 59.5763 68.7225 59.5763 68.4425V67.5284C59.527 67.5777 59.4316 67.6238 59.29 67.6669C59.1515 67.7069 58.993 67.7423 58.8145 67.7731C58.636 67.8008 58.4622 67.8269 58.2929 67.8516C58.1236 67.8731 57.982 67.8916 57.8682 67.907C57.6004 67.9408 57.3557 67.9978 57.1341 68.0778C56.9156 68.1578 56.7402 68.2732 56.6079 68.424C56.4786 68.5717 56.414 68.7687 56.414 69.0149C56.414 69.3565 56.5402 69.6151 56.7925 69.7905C57.0449 69.9628 57.3665 70.049 57.7574 70.049ZM66.2355 63.9091H67.5882V69.8043H70.0395V63.9091H71.3921V69.8043H73.8435V63.9091H75.1961V71H66.2355V63.9091ZM80.0261 71.1431C79.3613 71.1431 78.7812 70.9908 78.2857 70.6861C77.7902 70.3814 77.4055 69.9551 77.1316 69.4073C76.8577 68.8595 76.7207 68.2193 76.7207 67.4869C76.7207 66.7513 76.8577 66.1081 77.1316 65.5572C77.4055 65.0063 77.7902 64.5785 78.2857 64.2738C78.7812 63.9691 79.3613 63.8168 80.0261 63.8168C80.6909 63.8168 81.271 63.9691 81.7665 64.2738C82.262 64.5785 82.6467 65.0063 82.9206 65.5572C83.1945 66.1081 83.3315 66.7513 83.3315 67.4869C83.3315 68.2193 83.1945 68.8595 82.9206 69.4073C82.6467 69.9551 82.262 70.3814 81.7665 70.6861C81.271 70.9908 80.6909 71.1431 80.0261 71.1431ZM80.0307 69.9844C80.4616 69.9844 80.8186 69.8705 81.1017 69.6428C81.3849 69.415 81.5942 69.1119 81.7296 68.7333C81.8681 68.3548 81.9373 67.9377 81.9373 67.4822C81.9373 67.0298 81.8681 66.6143 81.7296 66.2358C81.5942 65.8542 81.3849 65.5479 81.1017 65.3171C80.8186 65.0863 80.4616 64.9709 80.0307 64.9709C79.5968 64.9709 79.2367 65.0863 78.9505 65.3171C78.6673 65.5479 78.4565 65.8542 78.318 66.2358C78.1826 66.6143 78.1149 67.0298 78.1149 67.4822C78.1149 67.9377 78.1826 68.3548 78.318 68.7333C78.4565 69.1119 78.6673 69.415 78.9505 69.6428C79.2367 69.8705 79.5968 69.9844 80.0307 69.9844ZM84.8722 71V63.9091H90.6567V71H89.3041V65.1001H86.2156V71H84.8722ZM94.5657 71.157C94.1164 71.157 93.7101 71.0739 93.3469 70.9077C92.9838 70.7384 92.696 70.4937 92.4837 70.1737C92.2744 69.8536 92.1697 69.4612 92.1697 68.9964C92.1697 68.5964 92.2467 68.267 92.4006 68.0085C92.5545 67.75 92.7622 67.5453 93.0238 67.3945C93.2854 67.2437 93.5778 67.1299 93.9009 67.0529C94.2241 66.976 94.5534 66.9175 94.8888 66.8775C95.3136 66.8282 95.6583 66.7882 95.9229 66.7575C96.1876 66.7236 96.38 66.6697 96.5 66.5959C96.62 66.522 96.68 66.402 96.68 66.2358V66.2035C96.68 65.8003 96.5662 65.4879 96.3384 65.2663C96.1138 65.0447 95.7783 64.9339 95.332 64.9339C94.8673 64.9339 94.5011 65.037 94.2333 65.2433C93.9686 65.4464 93.7855 65.6726 93.6839 65.9219L92.3867 65.6264C92.5406 65.1955 92.7653 64.8478 93.0607 64.5831C93.3593 64.3153 93.7024 64.1214 94.0902 64.0014C94.478 63.8783 94.8858 63.8168 95.3136 63.8168C95.5967 63.8168 95.8968 63.8506 96.2138 63.9183C96.5339 63.983 96.8324 64.103 97.1094 64.2784C97.3894 64.4538 97.6187 64.7047 97.7972 65.0309C97.9757 65.354 98.065 65.7741 98.065 66.2912V71H96.717V70.0305H96.6616C96.5723 70.209 96.4384 70.3845 96.2599 70.5568C96.0814 70.7292 95.8522 70.8723 95.5721 70.9862C95.292 71.1 94.9566 71.157 94.5657 71.157ZM94.8658 70.049C95.2474 70.049 95.5736 69.9736 95.8445 69.8228C96.1184 69.672 96.3261 69.475 96.4677 69.2319C96.6123 68.9857 96.6847 68.7225 96.6847 68.4425V67.5284C96.6354 67.5777 96.54 67.6238 96.3984 67.6669C96.2599 67.7069 96.1014 67.7423 95.9229 67.7731C95.7444 67.8008 95.5705 67.8269 95.4013 67.8516C95.232 67.8731 95.0904 67.8916 94.9766 67.907C94.7088 67.9408 94.4641 67.9978 94.2425 68.0778C94.024 68.1578 93.8486 68.2732 93.7163 68.424C93.587 68.5717 93.5224 68.7687 93.5224 69.0149C93.5224 69.3565 93.6486 69.6151 93.9009 69.7905C94.1533 69.9628 94.4749 70.049 94.8658 70.049Z" fill="white"/>
                                    <path d="M87.2285 70.1019L89.7368 55.9126H74.0456V46.7087C74.0456 42.8259 76.2335 39.0388 83.2616 39.0388H90.3999V26.9587C90.3999 26.9587 83.9244 26 77.7363 26C64.8078 26 56.3654 32.7974 56.3654 45.0981V55.9126H42V70.1019H56.3654V104.406C59.2494 104.799 62.1998 105 65.2055 105C68.2111 105 71.1616 104.799 74.0456 104.406V70.1019H87.2285Z" fill="white" fill-opacity="0.1"/>
                                    <defs>
                                        <linearGradient id="paint0_linear_0_1" x1="6.91666e-08" y1="70.2927" x2="131" y2="68.6951" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#47A38E"/>
                                            <stop offset="1" stop-color="#7E5195"/>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>

                            <p class="fs-6 text-light fw-light mt-2 fw-bolder lh-1">Название шопа</p>
                            <p class="text-light fw-light text-14 lh-1">Рейтинг <span class="fs-6">10.0</span></p>
                            <div class="d-flex justify-content-center">
                                <img src="/res/img/star.png">
                                <img src="/res/img/star.png">
                                <img src="/res/img/star.png">
                                <img src="/res/img/star.png">
                                <img src="/res/img/star.png">
                            </div>
                        </div>
                    </div>

                    <div class="col-9 big-shadow bg-silver rounded-4 p-4 py-5">
                        <div class="d-flex col-11 m-auto justify-content-between align-items-center">
                            <h6 class="text-white fw-bolder d-block">Название</h6>
                            <input type="text" class="col-9 text-white border-0 input-price-seller px-3">
                        </div>

                        <div class="d-flex col-11 m-auto justify-content-between align-items-center mt-3">
                            <h6 class="text-white fw-bolder d-block">Заголовок</h6>
                            <input type="text" class="col-9 text-white border-0 input-price-seller px-3">
                        </div>

                        <div class="d-flex col-11 m-auto justify-content-between align-items-center mt-3">
                            <h6 class="text-white fw-bolder d-block">Обложка</h6>
                            <input type="text" class="col-9 text-white border-0 input-price-seller px-3">
                        </div>

                        <div class="d-flex col-11 m-auto justify-content-between align-items-center mt-3">
                            <h6 class="text-white fw-bolder d-block">Логотип</h6>
                            <input type="text" class="col-9 text-white border-0 input-price-seller px-3">
                        </div>
                    </div>
                </div>

                <div class="col-12 bg-silver rounded-4 m-auto mt-4 p-4">
                    <div class="col-12 d-flex justify-content-between align-items-center">
                        <div class="col-4 d-flex">
                            <span class="d-block text-white fw-bolder text-14 cursor">Описание товара</span>
                            <span class="d-block mx-4 text-white opacity-25 fw-light fw-bolder">|</span>
                            <span class="d-block text-white fw-bolder text-14 opacity-25 cursor">Нижнее описание</span>
                        </div>

                        <div class="col-2 d-flex justify-content-center">
                            <button class="btn p-1 text-14 px-4  btn-bg-seller shadow_status rounded d-flex justify-content-center align-items-center lh-1 fs-6 text-white">сохранить</button>
                        </div>
                    </div>

                    <hr class="border-bottom my-5">

                    <div class="col-12 bg-black bg-opacity-25 p-4 rounded">
                        <div class="col-12 rounded bg-silver shadow">
                            <div id="summernote"></div>
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

<?php include($_SERVER['DOCUMENT_ROOT'] . "/layout/markup/murkup-js.php"); ?>
</body>
</html>


<style>
    .note-modal-backdrop {
        position: relative !important;
    }
</style>