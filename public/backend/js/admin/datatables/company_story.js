(function($) {
    "use strict";
    $(document).ready(function () {
        $('#CompanyStoryTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Year',
                    name: 'Year'
                },
                {
                    data: 'en_Description',
                    name: 'en_Description'
                },
                {
                    data: 'fr_Description',
                    name: 'fr_Description'
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
