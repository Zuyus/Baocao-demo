(function ($) {
    "use strict";
    let _token = $('meta[name="csrf-token"]').attr('content')
    let sizeid;

    $(document).ready(function () {
        $('.deleteCompareList').on('click', function () {
            let id = ($(this).attr("data-id"));
            $.ajax({
                method: "GET",
                url: $('#deleteCompareListUrl').data("url"),
                data: {
                    id: id,
                },
                success: function (data) {
                    const Toast = Swal.mixin({
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
                        title: 'Deleted Successfully'
                    })
                    window.location.reload();
                }
            });
        });
    });

    //size value
    $('.activeSize').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
        sizeid = $(this).attr("data-size");
    });
    //add to cart
    $('.addCart').on('click', function () {

        var $this = $(this);
        let product_id = $(this).attr("data-id");
        let quantity = $('#product_quantity').val();
        let colorSelector = document.querySelector('input[name="productColor"]:checked');

        let color;
        let size;

        if (colorSelector) {
            color = colorSelector.value
        } else {
            color = null;
        }
        if (sizeid) {
            size = sizeid
        } else {
            size = null;
        }

        $.ajax({
            url: $('#AddToCartIntoSession').data('url'),
            method: "POST",
            data: {
                product_id: product_id,
                quantity: quantity,
                color_id: color,
                size_id: size,
                _token: _token,
            },
            success: function (data) {
                console.log(data);
                $('.totalCountItem').html(data[0]);
                $('.totalAmount').html(data[1]);
                let Img = $('#productImgAsset').data('url');
                let productData = data[2];
                let bodyData = '';
                let i = 1;
                $.each(productData, function (index, row) {
                    bodyData = '<div class="product-item cart-product-item"><div class="single-grid-product"><div class="product-top"><a href="single-product.html"><img class="product-thumbnal" src="' + Img + '/' + row.options.image + '" alt="cart"></a></div><div class="product-info"><div class="product-name-part"><h3 class="product-name"><a class="product-link" href="single-product.html">' + row.name + '</a></h3><div class="cart-quantity input-group"><div class="increase-btn dec qtybutton btn qty_decrease" data-id="' + row.rowId + '">-</div><input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton" id="qty_value" value="' + row.qty + '" readonly /><div class="increase-btn inc qtybutton btn qty_increase" data-id="' + row.rowId + '">+</div></div><button class="cart-remove-btn deleteItem" data-id="' + row.rowId + '">Remove</button></div><div class="product-price"><span class="regular-price">$' + row.weight + '</span><span class="price">$' + row.price * row.qty + '</span></div></div></div></div>';
                });
                $("#bodyData").append(bodyData);
                const Toast = Swal.mixin({
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
                    title: 'Product Cart Successfully'
                })
            }
        });
    });
})(jQuery)
