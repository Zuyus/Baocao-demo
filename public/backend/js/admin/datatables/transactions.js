(function($) {
    "use strict";
    $(document).ready(function () {
        $('#AdvertiseTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'user_email',
                    name: 'user_email'
                },
                {
                    data: 'txn',
                    name: 'txn'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'Payment_Method',
                    name: 'Payment_Method'
                },
                {
                    data: 'GrandTotal',
                    name: 'GrandTotal'
                }
            ]
        });
    });
})(jQuery)
