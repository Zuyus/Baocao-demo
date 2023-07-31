(function ($) {
    "use strict";
    $(document).on('click', '.qty_increment_cart', function () {
        let id = ($(this).attr("data-id"));
        let $this = $(this);
        let quantity = $this.parent().find('.qty_value').val();
        $.ajax({
            method: "GET",
            url: $('#CartDecrementFromSession').data("url"),
            data: {
                id: id,
                quantity: quantity,
            },
            success: function (data) {

                // let currsym = currencySymbol();
                $('.totalCountItem').html(data[0]);
                $('.totalAmount').html(currencyPrice(data[1]));
                let Img = $('#productImgAsset').data('url');
                let obj = data[2];
                let bodyData = '';
                let bodyArray = [];
                let i = 1;
                Object.keys(obj).forEach(function (key) {
                    bodyData = '<div class="product-item cart-product-item"><div class="single-grid-product"><div class="product-top"><a href="single-product.html"><img class="product-thumbnal" src="' + Img + '/' + obj[key]['options']['image'] + '" alt="cart"></a></div><div class="product-info"><div class="product-name-part"><h3 class="product-name"><a class="product-link" href="single-product.html">' + obj[key]['name'] + '</a></h3><div class="cart-quantity input-group"><div class="increase-btn dec qtybutton btn qty_decrease" data-id="' + obj[key]['rowId'] + '">-</div><input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton" id="qty_value" value="' + obj[key]['qty'] + '" readonly /><div class="increase-btn inc qtybutton btn qty_increase" data-id="' + obj[key]['rowId'] + '">+</div></div><button class="cart-remove-btn deleteItem" data-id="' + obj[key]['rowId'] + '">Remove</button></div><div class="product-price"><span class="regular-price">' +  currencyPrice(obj[key]['weight'] * obj[key]['qty']) + '</span><span class="price">' +  currencyPrice(obj[key]['price'] * obj[key]['qty']) + '</span></div></div></div></div>';
                    bodyArray.push(bodyData);
                });
                $("#bodyData").html(bodyArray);
                let Toast = Swal.mixin({
                    toast: true,
                    position: 'bottom-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: 'Cart Quantity Decrement'
                })

            }
        });
    });
    $(document).ready(function () {



    });
})(jQuery)
