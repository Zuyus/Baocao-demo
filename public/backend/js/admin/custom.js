(function ($) {
    "use strict";
    $('.putImage1').on('change', function () {
        var src = this;
        var target = document.getElementById('target1');
        target.style.width = '120px';
        target.style.height = '80px';
        target.style.marginTop='10px';
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#target1').attr('src', e.target.result);
        }
        reader.readAsDataURL(src.files[0]);
    });
    $('.putImage2').on('change', function () {
        var src = this;
        var target = document.getElementById('target2');
        target.style.width = '120px';
        target.style.height = '80px';
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#target2').attr('src', e.target.result);
        }
        reader.readAsDataURL(src.files[0]);
    });
    $('.putImage3').on('change', function () {
        var src = this;
        var target = document.getElementById('target3');
        target.style.width = '120px';
        target.style.height = '80px';
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#target3').attr('src', e.target.result);
        }
        reader.readAsDataURL(src.files[0]);
    });
    $('.putImage4').on('change', function () {
        var src = this;
        var target = document.getElementById('target4');
        target.style.width = '120px';
        target.style.height = '80px';
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#target4').attr('src', e.target.result);
        }
        reader.readAsDataURL(src.files[0]);
    });

    $('.putImage5').on('change', function () {
        var src = this;
        var target = document.getElementById('target5');
        target.style.width = '120px';
        target.style.height = '80px';
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#target5').attr('src', e.target.result);
        }
        reader.readAsDataURL(src.files[0]);
    });

    $(".tag_one").select2({
        placeholder: "Enter Feature Tag",
        allowClear: true,
        tags: true,
        tokenSeparators: [',']
    });
    $(document).on('click','.delete',function(){
        return confirm("Are You Sure To Delete This!");
    });
})(jQuery);
