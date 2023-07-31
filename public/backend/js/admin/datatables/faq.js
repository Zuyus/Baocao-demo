(function($) {
    "use strict";
    $(document).ready(function () {
        $('#CustomerServiceTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'question',
                    name: 'question'
                },

                {
                    data: 'answer',
                    name: 'answer'
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
