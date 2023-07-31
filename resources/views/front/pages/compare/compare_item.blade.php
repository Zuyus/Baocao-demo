<table class="table">
    <tbody>
    <tr>
        <td class="first-column">{{__('Product')}}</td>
        @foreach($compareList as $item)
            <td class="product-image-title">
                <div class="product-top">
                    <a href="single-product.html" class="image"><img src="{{asset(ProductImage().$item->products->Primary_Image)}}" alt="Compare Product"></a>
                </div>
                <div>
                    <a href="shop-grid-left-sidebar.html" class="category">{{__('Bag')}}</a>
                    <h5><a href="single-product.html" class="title">{{langConverter($item->products->en_Product_Name,$item->products->fr_Product_Name)}}</a></h5>
                </div>
            </td>
        @endforeach
    </tr>
    <tr>
        <td class="first-column">{{__('Description')}}</td>
        @foreach($compareList as $item)
            <td class="pro-desc">
                <p>{{langConverter($item->products->en_About,$item->products->fr_About)}}</p>
            </td>
        @endforeach
    </tr>
    <tr>
        <td class="first-column">{{__('Price')}}</td>
        @foreach($compareList as $item)
            <td class="pro-price">{{__('$')}}{{$item->products->Discount_Price}}</td>
        @endforeach
    </tr>
    <tr>
        <td class="first-column">{{__('Color')}}</td>
        @foreach($compareList as $item)
            <td class="pro-color">
                @foreach($item->products->colors as $item)
                    {{$item->Name}}
                @endforeach
            </td>
        @endforeach
    </tr>
    <tr>
        <td class="first-column">{{__('Stock')}}</td>
        @foreach($compareList as $item)
            @if($item->products->Quantity > 0)
                <td class="pro-stock">{{__('In Stock')}}</td>
            @else
                <td class="pro-stock">{{__('Not Available')}}</td>
            @endif
        @endforeach
    </tr>
    <tr>
        <td class="first-column">{{__('Add To Cart')}}</td>
        @foreach($compareList as $item)
            <td class="pro-addtocart"><a href="cart.html" class="primary-btn"><span>{{__('Add To Cart')}}</span></a></td>
        @endforeach
    </tr>
    <tr>
        <td class="first-column">{{__('Delete')}}</td>
        @foreach($compareList as $item)
            <td class="pro-remove"><button class="bg-transparent border-0 deleteCompareList" data-id="{{$item->id}}" title="Delete Item"><i class="fas fa-times"></i></button></td>
        @endforeach
    </tr>
    <tr>
        <td class="first-column">{{__('Rating')}}</td>
        @foreach($compareList as $item)
            <td class="pro-ratting">
                <ul class="product-review">
                    <li class="review-item active"><i class="flaticon-star"></i></li>
                    <li class="review-item"><i class="flaticon-star"></i></li>
                    <li class="review-item"><i class="flaticon-star"></i></li>
                    <li class="review-item"><i class="flaticon-star"></i></li>
                    <li class="review-item"><i class="flaticon-star"></i></li>
                </ul>
            </td>
        @endforeach
    </tr>
    </tbody>
</table>
