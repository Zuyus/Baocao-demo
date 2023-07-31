(function ($) {
    "use strict";

    let sizeid;
    var $loading = $('#loadingDiv').hide();
    $('.MyWishList').on('click', function () {
        let product_id = $(this).attr("data-id");
        $.ajax({
            url: $('#productWishlistUrl').data('url'),
            method: 'get',
            data: {
                product_id: product_id,
            },
            success: function (data) {
                if (data.status === 0) {
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
                        icon: 'warning',
                        title: data.message
                    })
                }
                else if (data.status === 1) {
                    $('.wishListCuntFromController').html(data.wishlist_count + " Items");
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
                        title: data.message
                    })
                }
                else {
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
                        icon: 'error',
                        title: 'Something went wrong!'
                    })
                }
            },
        });
    });

    $('.CompareList').on('click', function () {
        let product_id = $(this).attr("data-id");
        $.ajax({
            url: $('#AddToCompareItemUrl').data('url'),
            method: 'get',
            data: {
                product_id: product_id,
            },
            success: function (data) {
                if (data.status === 0) {
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
                        icon: 'warning',
                        title: data.message
                    })
                }
                else if (data.status === 1) {
                    $('.CompareCuntFromController').html(data.compare_count + " Items");
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
                        title: data.message
                    })
                }
                else {
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
                        icon: 'error',
                        title: 'Something went wrong!'
                    })
                }
            },
        });
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
                    _token: $('meta[name="csrf-token"]').attr('content'),
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
                        bodyData = '<div class="product-item cart-product-item"><div class="single-grid-product"><div class="product-top"><a href="#"><img class="product-thumbnal" src="' + Img + '/' + obj[key]['options']['image'] + '" alt="cart"></a></div><div class="product-info"><div class="product-name-part"><h3 class="product-name"><a class="product-link" href="#">' + obj[key]['name'] + '</a></h3><div class="cart-quantity input-group"><div class="increase-btn dec qtybutton btn qty_decrease" data-id="' + obj[key]['rowId'] + '">-</div><input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton" id="qty_value" value="' + obj[key]['qty'] + '" readonly /><div class="increase-btn inc qtybutton btn qty_increase" data-id="' + obj[key]['rowId'] + '">+</div></div><button class="cart-remove-btn deleteItem" data-id="' + obj[key]['rowId'] + '">Remove</button></div><div class="product-price"><span class="regular-price mr-0">' + currencyPrice(obj[key]['weight'] * obj[key]['qty']) + '</span><span class="price">' + currencyPrice(obj[key]['price'] * obj[key]['qty']) + '</span></div></div></div></div>';
                        bodyArray.push(bodyData);
                    });
                    $("#bodyData").html(bodyArray);

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
                        title: 'Product Added to Cart Successfully'
                    })
                }
            });

        })
    });

    function currencyPrice(price) {
        let result = 0;
        $.ajax({
            url: $('#currency-price-url').data('url'),
            method: 'POST',
            async: false,
            data: {
                price: price,
                _token: $('meta[name="csrf-token"]').attr('content'),

            },
            success: function (data) {
                result = data;
            },
        });
        return result;
    }
    function currencySymbol() {
        let result = 0;
        $.ajax({
            url: $('#currency-symbol-url').data('url'),
            method: 'GET',
            async: false,
            success: function (data) {
                result = data;
            },
        });
        return result;
    }
    //cart decrease
    $(document).on('click', '.qty_decrease', function () {
        let id = ($(this).attr("data-id"));
        let $this = $(this);
        let quantity = $this.parent().find('.qty_value').val();
        if (quantity > 1) {
            $.ajax({
                method: "GET",
                url: $('#CartDecrementFromSession').data("url"),
                data: {
                    id: id,
                    quantity: quantity,
                },
                success: (data) => {
                    // let currsym = currencySymbol();
                    $(this).closest('tr').find('.SubTotalAmount').html(currencyPrice(data[3]));
                    $('.totalCountItem').html(data[0]);
                    $('.totalAmount').html(currencyPrice(data[1]));
                    let Img = $('#productImgAsset').data('url');
                    let obj = data[2];
                    let bodyData = '';
                    let bodyArray = [];
                    let i = 1;
                    Object.keys(obj).forEach(function (key) {
                        bodyData = '<div class="product-item cart-product-item"><div class="single-grid-product"><div class="product-top"><a href="#"><img class="product-thumbnal" src="' + Img + '/' + obj[key]['options']['image'] + '" alt="cart"></a></div><div class="product-info"><div class="product-name-part"><h3 class="product-name"><a class="product-link" href="#">' + obj[key]['name'] + '</a></h3><div class="cart-quantity input-group"><div class="increase-btn dec qtybutton btn qty_decrease" data-id="' + obj[key]['rowId'] + '">-</div><input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton" id="qty_value" value="' + obj[key]['qty'] + '" readonly /><div class="increase-btn inc qtybutton btn qty_increase" data-id="' + obj[key]['rowId'] + '">+</div></div><button class="cart-remove-btn deleteItem" data-id="' + obj[key]['rowId'] + '">Remove</button></div><div class="product-price"><span class="regular-price mr-0">' + currencyPrice(obj[key]['weight'] * obj[key]['qty']) + '</span><span class="price">' + currencyPrice(obj[key]['price'] * obj[key]['qty']) + '</span></div></div></div></div>';
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
        } else {
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
                icon: 'error',
                title: 'Please Click Remove Button'
            })
        }
    });
    //cart increase
    $(document).on('click', '.qty_increase', function () {
        let id = ($(this).attr("data-id"));
        let $this = $(this);
        let quantity2 = $this.parent().find('.qty_value').val();
        $.ajax({
            method: "GET",
            url: $('#CartIncrementFromSession').data("url"),
            data: {
                id: id,
                quantity: quantity2,
            },
            success: (data) => {
                // let currsym = currencySymbol();
                $(this).closest('tr').find('.SubTotalAmount').html(currencyPrice(data[3]));
                $('.totalCountItem').html(data[0]);
                $('.totalAmount').html(currencyPrice(data[1]));
                let Img = $('#productImgAsset').data('url');
                let obj = data[2];
                let bodyData = '';
                let bodyArray = [];
                let i = 1;
                Object.keys(obj).forEach(function (key) {
                    bodyData = '<div class="product-item cart-product-item"><div class="single-grid-product"><div class="product-top"><a href="#"><img class="product-thumbnal" src="' + Img + '/' + obj[key]['options']['image'] + '" alt="cart"></a></div><div class="product-info"><div class="product-name-part"><h3 class="product-name"><a class="product-link" href="#">' + obj[key]['name'] + '</a></h3><div class="cart-quantity input-group"><div class="increase-btn dec qtybutton btn qty_decrease" data-id="' + obj[key]['rowId'] + '">-</div><input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton" id="qty_value" value="' + obj[key]['qty'] + '" readonly /><div class="increase-btn inc qtybutton btn qty_increase" data-id="' + obj[key]['rowId'] + '">+</div></div><button class="cart-remove-btn deleteItem" data-id="' + obj[key]['rowId'] + '">Remove</button></div><div class="product-price"><span class="regular-price mr-0">' + currencyPrice(obj[key]['weight'] * obj[key]['qty']) + '</span><span class="price">' + currencyPrice(obj[key]['price'] * obj[key]['qty']) + '</span></div></div></div></div>';
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
                    title: 'Cart Quantity Increment'
                })

            }
        });
    });

    $(document).on('click', '.deleteItem', function () {
        let id = ($(this).attr("data-id"));
        $.ajax({
            method: "GET",
            url: $('#CartDeleteFromSession').data("url"),
            data: {
                id: id,
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
                    bodyData = '<div class="product-item cart-product-item"><div class="single-grid-product"><div class="product-top"><a href="#"><img class="product-thumbnal" src="' + Img + '/' + obj[key]['options']['image'] + '" alt="cart"></a></div><div class="product-info"><div class="product-name-part"><h3 class="product-name"><a class="product-link" href="#">' + obj[key]['name'] + '</a></h3><div class="cart-quantity input-group"><div class="increase-btn dec qtybutton btn qty_decrease" data-id="' + obj[key]['rowId'] + '">-</div><input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton" id="qty_value" value="' + obj[key]['qty'] + '" readonly /><div class="increase-btn inc qtybutton btn qty_increase" data-id="' + obj[key]['rowId'] + '">+</div></div><button class="cart-remove-btn deleteItem" data-id="' + obj[key]['rowId'] + '">Remove</button></div><div class="product-price"><span class="regular-price mr-0">' + currencyPrice(obj[key]['weight'] * obj[key]['qty']) + '</span><span class="price">' + currencyPrice(obj[key]['price'] * obj[key]['qty']) + '</span></div></div></div></div>';
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
                    title: 'Cart Product Removed'
                })
            }
        });
    });

    $(document).on('click', '.deleteItemCart', function () {
        let id = ($(this).attr("data-id"));
        $.ajax({
            method: "GET",
            url: $('#CartDeleteFromSession').data("url"),
            data: {
                id: id,
            },
            success: function (data) {
                window.location.reload()
            }
        });
    });
})(jQuery)
