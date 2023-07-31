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
        $(".sortingFilter").on('click',function (){
            let filter=$(this).val();
            if(filter != 'stop') {
                window.location.href = filter;
            }
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
                url: $('#checkCategoryFilter').data("url"),
                method: "get",
                data: {
                    'checkCat': checkCat,
        },
            success: function (data) {
                $('#filterProduct').html(data);
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
                url: $('#checkBrandFilter').data("url"),
                method: "get",
                data: {
                    'checkBrand': checkBrand,
        },
            success: function (data) {
                $('#filterProduct').html(data);
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
                url: $('#checkColorFilter').data("url"),
                method: "get",
                data: {
                    'checkColor': checkColor,
                },
                success: function (data) {
                    $('#filterProduct').html(data);
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
                url: $('#checkSizeFilter').data("url"),
                method: "get",
                data: {
                    'checkSize': checkSize,
                },
                success: function (data) {
                    $('#filterProduct').html(data);
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
                        $('#filterProduct').html(data);
                    },
                    error:function(data){
                        $('#filterProduct').html(data);
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
                    url: $('#minMaxPriceFilter').data("url"),
                    type:'get',
                    data: {
                        min: min,
                        max: max,
                    },
                    success:function (data){
                        $('#filterProduct').html(data);
                    },
                    error:function(data){
                        $('#filterProduct').html(data);
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
                url: $('#checkCategoryFilter').data("url"),
                method: "get",
                data: {
                    'checkCat': checkCat,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProduct').html(data);
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
                    url: $('#minMaxPriceFilter').data("url"),
                    type:'get',
                    data: {
                        min: min,
                        max: max,
                    },
                    success:function (data){
                        $('#filterProduct').html(data);
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
                url: $('#checkColorFilter').data("url"),
                method: "get",
                data: {
                    'checkColor': checkColor,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProduct').html(data);
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
                url: $('#checkSizeFilter').data("url"),
                method: "get",
                data: {
                    'checkSize': checkSize,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProduct').html(data);
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
                url: $('#checkBrandFilter').data("url"),
                method: "get",
                data: {
                    'checkBrand': checkBrand,
                    '_token': "{{csrf_token()}}"
                },
                success: function (data) {
                    $('#filterProduct').html(data);
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
                        $('#filterProduct').html(data);
                    },
                    error:function(data){
                        $('#filterProduct').html(data);
                    }
                });
            }
        });

        //size value
        $('.activeSize').on('click',function (){
            $(this).addClass('active').siblings().removeClass('active');
            sizeid = $(this).attr("data-size");
        });


    });
})(jQuery)
