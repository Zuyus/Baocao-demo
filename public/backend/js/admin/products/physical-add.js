(function ($) {
    "use strict";

    $(".tag_one").select2({ placeholder: "Select One" });
    $(".tag_two").select2({ placeholder: "Select One" });

    $('#discount').on('keyup', function () {
        discount_price()
    })

    $('#price').on('keyup', function () {
        discount_price()
    })

    function discount_price() {
        var price = $('#price').val();
        var discount = $('#discount').val();
        var discount_price = (price * (100 - discount)) / 100;
        $('#discount_price').val(discount_price);
    }
    discount_price()

    $('#en-product-name').on('keyup', function () {
        let $this = $(this);
        let str = $this.val().toLowerCase().replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '-').replace(/ /g, '-');
        $('#en-product-slug').val(str);
    })

    $('#fr-product-name').on('keyup', function () {
        let $this = $(this);
        let str = $this.val().toLowerCase().replace(/[0-9`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '-').replace(/ /g, '-');
        $('#fr-product-slug').val(str);
    })
})(jQuery)
