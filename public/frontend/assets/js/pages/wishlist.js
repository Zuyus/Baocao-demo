(function ($) {
    "use strict";
    let _token = $('meta[name="csrf-token"]').attr('content')
    let sizeid;

    $(document).ready(function () {

        $('.deleteWishlist').on('click', function () {
            let id = ($(this).attr("data-id"));
            $.ajax({
                method: "GET",
                url: $('#deleteWishListUrl').data("url"),
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

            var totalAmount = $('.totalAmount');

            $this.each(function () {
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
                        $('.totalCountItem').html(data[0]);
                        $('.totalAmount').html(data[1]);
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

            })
        });
    });
})(jQuery)
