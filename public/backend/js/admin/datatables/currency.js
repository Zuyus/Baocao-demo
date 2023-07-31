(function($) {
    "use strict";
    $(document).ready(function () {
        $('#CategoryTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'currency',
                    name: 'currency'
                },
                {
                    data: 'iso',
                    name: 'iso'
                },
                {
                    data: 'symbol',
                    name: 'symbol'
                },
                {
                    data: 'position',
                    name: 'position'
                },
                {
                    data: 'convert_from_usd',
                    name: 'convert_from_usd'
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
