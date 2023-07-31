(function ($) {
    "use strict";
    $(document).ready(function() {
        let sizeid;
        let _token= $('meta[name="csrf-token"]').attr('content');

        let checkCat=[];
        let checkBrand=[];
        let checkColor=[];
        let checkSize=[];

        //For Desktop
        //Categories
        $(".sortingFilter").on('click',function (){
            let filter=$(this).val();
            if(filter != 'stop') {
                window.location.href = filter;
            }
            // $.ajax({
            //     url: $('#leftSideShortingUrl').data("url"),
            //     type:'get',
            //     data: {
            //         filter: filter,
            //     },
            //     success:function (data){
            //         $('#filterProductleftsidebar').html(data);
            //     },
            //     error:function(data){
            //         $('#filterProductleftsidebar').html(data);
            //     }
            // });
        });
        //checkbox category
        $('.CheckCategory').on('click',function (){
            $('.CheckCategory').each(function (){
                if($(this).is(":checked")){
                    name=$(this).val();
                    if(checkCat.includes(name)){
                        return;
                    }else{
                        checkCat.push(name)
                    }
                }else{
                    name=$(this).val();
                    checkCat=checkCat.filter(item =>item  !== name)
                }
            });
            $.ajax({
                url: $('#leftCheckCategoryFilter').data("url"),
                method: "get",
                data: {
                    'checkCat': checkCat,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProductleftsidebar').html(data);
                }

            });
        });
        //checkbox brand
        $('.CheckBrand').on('click',function (){
            $('.CheckBrand').each(function (){
                if($(this).is(":checked")){
                    name=$(this).val();
                    if(checkBrand.includes(name)){
                        return;
                    }else{
                        checkBrand.push(name)
                    }
                }else{
                    name=$(this).val();
                    checkBrand=checkBrand.filter(item =>item  !== name)
                }
            });
            $.ajax({
                url: $('#leftSideCheckBrandFilter').data("url"),
                method: "get",
                data: {
                    'checkBrand': checkBrand,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProductleftsidebar').html(data);
                }
            });
        });
        //checkbox color
        $('.checkColor').on('click',function (){
            $('.checkColor').each(function (){
                if($(this).is(":checked")){
                    name=$(this).val();
                    if(checkColor.includes(name)){
                        return;
                    }else{
                        checkColor.push(name)
                    }
                }else{
                    name=$(this).val();
                    checkColor=checkColor.filter(item =>item  !== name)
                }
            });
            $.ajax({
                url: $('#leftSideCheckColorFilter').data("url"),
                method: "get",
                data: {
                    'checkColor': checkColor,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProductleftsidebar').html(data);
                }
            });
        });
        //checkbox Size
        $('.checkSize').on('click',function (){
            $('.checkSize').each(function (){
                if($(this).is(":checked")){
                    name=$(this).val();
                    if(checkSize.includes(name)){
                        return;
                    }else{
                        checkSize.push(name)
                    }
                }else{
                    name=$(this).val();
                    checkSize=checkSize.filter(item =>item  !== name)
                }
            });
            $.ajax({
                url: $('#leftSideCheckSizeFilter').data("url"),
                method: "get",
                data: {
                    'checkSize': checkSize,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProductleftsidebar').html(data);
                }
            });
        });
        //search product
        $('.searchWidget').on('click',function (){
            {
                let search = $('#searchwidget').val();
                $.ajax({
                    url: $('#searchWidgetFilter').data("url"),
                    type:'get',
                    data: {
                        search: search,
                    },
                    success:function (data){
                        $('#filterProductleftsidebar').html(data);
                    },
                    error:function(data){
                        $('#filterProductleftsidebar').html(data);
                    }
                });
            }
        });
        //price filtering
        $('.PriceSubmit').on('click',function (){
            {
                let min = $('#minPrice').val();
                let max = $('#maxPrice').val();
                console.log(min);
                console.log(max);
                $.ajax({
                    url: $('#leftSideMinMaxPriceFilter').data("url"),
                    type:'get',
                    data: {
                        min: min,
                        max: max,
                    },
                    success:function (data){
                        $('#filterProductleftsidebar').html(data);
                    },
                    error:function(data){
                        $('#filterProductleftsidebar').html(data);
                    }
                });
            }
        });

        //For Mobile
        //category
        $('.CheckCategoryMobile').on('click',function (){
            $('.CheckCategoryMobile').each(function (){
                if($(this).is(":checked")){
                    name=$(this).val();
                    if(checkCat.includes(name)){
                        return;
                    }else{
                        checkCat.push(name)
                    }
                }else{
                    name=$(this).val();
                    checkCat=checkCat.filter(item =>item  !== name)
                }
            });
            $.ajax({
                url: $('#leftCheckCategoryFilter').data("url"),
                method: "get",
                data: {
                    'checkCat': checkCat,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProductleftsidebar').html(data);
                }

            });
        });
        //price filtering
        $('.PriceSubmitMobile').on('click',function (){
            {
                let min = $('#minPriceMobile').val();
                let max = $('#maxPriceMobile').val();
                console.log(min);
                console.log(max);
                $.ajax({
                    url: $('#compareListDelete').data("url"),
                    type:'get',
                    data: {
                        min: min,
                        max: max,
                    },
                    success:function (data){
                        $('#filterProductleftsidebar').html(data);
                    },
                    error:function(data){
                        $('#filterProduct').html(data);
                    }
                });
            }
        });
        //check color
        $('.checkColorMobile').on('click',function (){
            $('.checkColorMobile').each(function (){
                if($(this).is(":checked")){
                    name=$(this).val();
                    if(checkColor.includes(name)){
                        return;
                    }else{
                        checkColor.push(name)
                    }
                }else{
                    name=$(this).val();
                    checkColor=checkColor.filter(item =>item  !== name)
                }
            });
            $.ajax({
                url: $('#leftSideCheckColorFilter').data("url"),
                method: "get",
                data: {
                    'checkColor': checkColor,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProductleftsidebar').html(data);
                }
            });
        });
        //check size
        $('.checkSizeMobile').on('click',function (){
            $('.checkSizeMobile').each(function (){
                if($(this).is(":checked")){
                    name=$(this).val();
                    if(checkSize.includes(name)){
                        return;
                    }else{
                        checkSize.push(name)
                    }
                }else{
                    name=$(this).val();
                    checkSize=checkSize.filter(item =>item  !== name)
                }
            });
            $.ajax({
                url: $('#leftSideCheckSizeFilter').data("url"),
                method: "get",
                data: {
                    'checkSize': checkSize,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProductleftsidebar').html(data);
                }
            });
        });
        //CheckBrandMobile
        $('.CheckBrandMobile').on('click',function (){
            $('.CheckBrandMobile').each(function (){
                if($(this).is(":checked")){
                    name=$(this).val();
                    if(checkBrand.includes(name)){
                        return;
                    }else{
                        checkBrand.push(name)
                    }
                }else{
                    name=$(this).val();
                    checkBrand=checkBrand.filter(item =>item  !== name)
                }
            });
            $.ajax({
                url: $('#leftSideCheckBrandFilter').data("url"),
                method: "get",
                data: {
                    'checkBrand': checkBrand,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProductleftsidebar').html(data);
                }
            });
        });
        //search product mobile
        $('.searchWidgetMobile').on('click',function (){
            {
                let search = $('#searchWidgetMobile').val();
                $.ajax({
                    url: $('#searchWidgetFilter').data("url"),
                    type:'get',
                    data: {
                        search: search,
                    },
                    success:function (data){
                        $('#filterProductleftsidebar').html(data);
                    },
                    error:function(data){
                        $('#filterProductleftsidebar').html(data);
                    }
                });
            }
        });


        //size value
        $('.activeSize').on('click',function (){
            $(this).addClass('active').siblings().removeClass('active');
            sizeid = $(this).attr("data-size");
        });
        //add to cart
        $('.addCart').on('click',function (){

            var $this = $(this);
            let product_id = $(this).attr("data-id");
            let quantity = $('#product_quantity').val();
            let colorSelector = document.querySelector('input[name="productColor"]:checked');

            let color;
            let size;

            if (colorSelector) {
                color = colorSelector.value
            } else {
                color = null;
            }
            if (sizeid) {
                size = sizeid
            } else {
                size = null;
            }
            $.ajax({
                url: $('#AddToCartIntoSession').data('url'),
                method: "POST",
                data:{
                    product_id:product_id,
                    quantity:quantity,
                    color_id:color,
                    size_id:size,
                    _token: _token,
                },
                success:function (data){
                    console.log(data);
                    $('.totalCountItem').html(data[0]);
                    $('.totalAmount').html(data[1]);

                    let Img = $('#productImgAsset').data('url');
                    let productData = data[2];
                    let bodyData = '';
                    let i = 1;
                    $.each(productData, function (index, row) {
                        bodyData = '<div class="product-item cart-product-item"><div class="single-grid-product"><div class="product-top"><a href="single-product.html"><img class="product-thumbnal" src="' + Img + '/' + row.options.image + '" alt="cart"></a></div><div class="product-info"><div class="product-name-part"><h3 class="product-name"><a class="product-link" href="single-product.html">' + row.name + '</a></h3><div class="cart-quantity input-group"><div class="increase-btn dec qtybutton btn qty_decrease" data-id="' + row.rowId + '">-</div><input class="qty-input cart-plus-minus-box qty_value" type="text" name="qtybutton" id="qty_value" value="' + row.qty + '" readonly /><div class="increase-btn inc qtybutton btn qty_increase" data-id="' + row.rowId + '">+</div></div><button class="cart-remove-btn deleteItem" data-id="' + row.rowId + '">Remove</button></div><div class="product-price"><span class="regular-price">$' + row.weight + '</span><span class="price">$' + row.price * row.qty + '</span></div></div></div></div>';
                    });
                    $("#bodyData").append(bodyData);

                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'bottom-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    })
                    Toast.fire({
                        icon: 'success',
                        title: 'Product Cart Successfully'
                    })
                }
            });
        });
    });
})(jQuery)
