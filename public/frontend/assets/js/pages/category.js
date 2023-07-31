(function ($) {
    "use strict";
    $(document).ready(function() {
        $(".sortingFilter").on('click',function (){
            let filter=$(this).val();
            console.log(filter);
            $.ajax({
                url: $('#categoryWiseProductShow').data("url"),
                type:'get',
                data: {
                    filter: filter,
                },
                success:function (data){
                    $('#filterProduct').html(data);
                },
                error:function(data){
                    $('#filterProduct').html(data);
                }
            });
        });
    });
})(jQuery)
