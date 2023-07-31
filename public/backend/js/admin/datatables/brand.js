(function ($) {
    "use strict";
    $(document).ready(function () {
        $('#BrandTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'BrandName',
                    name: 'BrandName'
                },
                {
                    data: 'BrandSlug',
                    name: 'BrandSlug'
                },
                {
                    data: 'BrandImage',
                    name: 'BrandImage'
                },
                {
                    data: 'Status',
                    name: 'Status'
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
