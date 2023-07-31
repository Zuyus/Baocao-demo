(function ($) {
    "use strict";
    let _token = $('meta[name="csrf-token"]').attr('content');
    $(".subscribe_btn").on('click', function (e) {
        e.preventDefault();
        let subscribe = $('#subscribe').val();
        console.log(subscribe);
        $.ajax({
            url: $('#SubscribeStore').data("url"),
            type: 'post',
            data: {
                subscribe: subscribe,
                _token: _token,
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
                    title: 'Subscribe Successfully'
                })
            },
            error: function (data) {
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
                Toast.fire({ icon: 'error', title: data.responseJSON.errors.subscribe })
            }
        });
    });
})(jQuery)
