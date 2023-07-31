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
})(jQuery);
