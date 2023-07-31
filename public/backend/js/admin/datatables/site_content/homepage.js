(function ($) {
    "use strict";
    $(document).ready(function () {
        $('#homePageTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Location',
                    name: 'Location'
                },
                {
                    data: 'Title',
                    name: 'Title'
                },
                {
                    data: 'Description_One',
                    name: 'Description_One'
                },
                {
                    data: 'Description_Two',
                    name: 'Description_Two'
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
