(function($) {
    "use strict";
    $(document).ready(function () {
            $('#SliderTable').DataTable({
            processing: true,
            serverSide: true,
                ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Background_Image',
                    name: 'Background_Image'
                },
                {
                    data: 'Thumbnail',
                    name: 'Thumbnail'
                },
                {
                    data: 'Title',
                    name: 'Title'
                },
                {
                    data: 'Sub_Title',
                    name: 'Sub_Title'
                },
                {
                    data: 'Description',
                    name: 'Description'
                },
                {
                    data: 'Button_Text',
                    name: 'Button_Text'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ]
        });
    });
})(jQuery)
