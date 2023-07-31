(function($) {
    "use strict";
    $(document).ready(function () {
            $('#BlogTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: $('#table-url').data("url"),
                columns: [
                    {
                        data: 'Small_Image',
                        name: 'Small_Image'
                    },
                    {
                        data: 'Big_Image',
                        name: 'Big_Image'
                    },
                    {
                        data: 'Title',
                        name: 'Title'
                    },
                    {
                        data: 'Tags',
                        name: 'Tags'
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
