$(function() {
    activeMenu();

    status_menu_markup();
    $('#summernote').summernote();
});

function activeMenu() {
    $("."+$('.keyMenu').val()).removeClass("menu_seller").addClass("menu_seller_active");
}


//Кнопки редактирования платежных данных
function update_payment_details() {
    let data = $(".h6_payment_details").text();
    $('.payment_details').empty().append('<input value=" '+data+'" class="text-white input-price-seller my-4 px-3 col-12" type="text">');

    $('.button_payment_details').empty().append('<button onclick="save_payment_details()" class="btn btn-bg-seller my-5 px-3 text-white">сохранить</button><button onclick="cancellation_payment_details()" class="btn btn-danger my-5 mx-4 px-3 text-white">отмена</button>');
}

function save_payment_details() {
    $('.payment_details').empty().append('<h6 class="text-white my-4">USDT <span class="h6_payment_details">666vh654gcjtrhhc64cfhkjghjhvf65fhgvyt677877thjb</span></h6>');

    $('.button_payment_details').empty().append('<button onclick="update_payment_details()" class="btn btn-bg-seller my-5 px-3 text-white">изменить</button>');
}

function cancellation_payment_details() {
    $('.payment_details').empty().append('<h6 class="text-white my-4">USDT <span class="h6_payment_details">666vh654gcjtrhhc64cfhkjghjhvf65fhgvyt677877thjb</span></h6>');

    $('.button_payment_details').empty().append('<button onclick="update_payment_details()" class="btn btn-bg-seller my-5 px-3 text-white">изменить</button>');
}



function menu() {
    $('.span_market').addClass("d-none");
    $('.menu_seller').addClass("my-2")
}

function parametr_product() {
    $(".span_cr_red_product").removeClass("opacity-25").addClass(" opacity-25");
    $(this).removeClass("opacity-25");
    $(".update-product").removeClass("d-none").addClass("d-none");
    $("."+$(this).attr('data-block')).removeClass("d-none");
}