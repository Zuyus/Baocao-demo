(function($) {
    "use strict";
    $(document).ready(function () {
        $('#AdvertiseTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Image_One',
                    name: 'Image_One'
                },
                {
                    data: 'Image_Two',
                    name: 'Image_Two'
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
