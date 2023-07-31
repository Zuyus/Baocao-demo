(function($) {
    "use strict";
    $(document).ready(function () {
        $('#GeneralSettingsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Title',
                    name: 'Title'
                },
                {
                    data: 'MetaAuthor',
                    name: 'MetaAuthor'
                },
                {
                    data: 'MetaDescription',
                    name: 'MetaDescription'
                },
                {
                    data: 'MetaKeywords',
                    name: 'MetaKeywords'
                },
                {
                    data: 'Logo',
                    name: 'Logo'
                },
                {
                    data: 'Favicon',
                    name: 'Favicon'
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
