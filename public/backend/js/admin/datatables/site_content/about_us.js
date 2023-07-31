(function($) {
    "use strict";
    $(document).ready(function () {
        $('#aboutUsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Location',
                    name: 'Location'
                },
                {
                    data: 'Image',
                    name: 'Image'
                },
                {
                    data: 'Title',
                    name: 'Title'
                },
                {
                    data: 'Description',
                    name: 'Description'
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
