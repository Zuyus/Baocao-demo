(function($) {
    "use strict";
    $(document).ready(function () {
        $('#CouponTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: $('#table-url').data("url"),
            columns: [
                {
                    data: 'CouponCode',
                    name: 'CouponCode'
                },
                {
                    data: 'Amount',
                    name: 'Amount'
                },
                {
                    data: 'Min_Expenses',
                    name: 'Min_Expenses'
                },
                {
                    data: 'ExpireDate',
                    name: 'ExpireDate'
                },
                {
                    data: 'Validity',
                    name: 'Validity'
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
