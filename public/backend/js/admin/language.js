(function ($) {
    "use strict";

    // add more language field script

    let appendHtml = `
        <tr>
            <td>
                <input type="text" class="form-control" name="keys[]" value="">
            </td>
            <td><input type="text" class="form-control" name="values[]" value=""></td>
            <td>
                <div class="delete_language_field">
                <button class="btn btn-danger btn-sm"> <i class="fas fa-trash "></i></button>
            </div></td>
        </tr>`;
    $(document).on('click','#add_more_language',function(){
        $('.new-field').append(appendHtml);
    });

    $(document).on('click','.delete_language_field',function(){
        $(this).parent().parent().remove();
    });
})(jQuery);
