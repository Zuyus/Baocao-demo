(function ($) {
    "use strict";
    $(document).ready(function() {
        $('.ReplyComment').on('click',function(){
            let commentId = document.getElementById('comment_id');
            let ds=$(this).attr("data-comment");
            commentId.value = ds;
        })
    });
})(jQuery)
