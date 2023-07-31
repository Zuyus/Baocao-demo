(function($) {
    "use strict";
    $(document).ready(function () {
        $('#ContactUsTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'Name',
                    name: 'Name'
                },
                {
                    data: 'Email',
                    name: 'Email'
                },
                {
                    data: 'ContactNumber',
                    name: 'ContactNumber'
                },
                {
                    data: 'Message',
                    name: 'Message'
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
