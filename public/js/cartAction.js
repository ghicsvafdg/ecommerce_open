$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var _token = $('input[name="_token"]').val();
var user = $("input[name=userid]").val();

load_product(_token);

// load product in cart
function load_product(_token) {
    $.ajax({
        url: "/showproductincart",
        method: "GET",
        data: { user: user, _token: _token },
        success: function(data) {
            $('#product_data').html(data);
        }
    });
}

// add product in cart
function cartAdd(product_code) {
    var product = product_code;
    $.ajax({
        url: '/addtocart',
        data: {
            user: user,
            product: product
        },
        type: "POST",
        success: function(data) {
            load_product(_token)
            alert(data.success);
        },
        error: function() {}
    });
}