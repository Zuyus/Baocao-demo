(function ($) {
    "use strict";
    $(".tag_one").select2({ placeholder: "Select One", });
    $(".tag_two").select2({ placeholder: "Select One", });

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

    $('#digital-type').on('change', function () {
        let type = this.value;
        if (type == 'file') {
            $('#select-type').html(`<div class="form-group"><label for="digital-file">File</label><input type="file" class="form-control" name="digital_file" id="digital-file"></div>`)
        }
        if (type == 'link') {
            $('#select-type').html(`<div class="form-group"><label for="digital-link">Link</label><input type="text" class="form-control" name="digital_link" id="digital-link"></div>`)
        }
    })

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
