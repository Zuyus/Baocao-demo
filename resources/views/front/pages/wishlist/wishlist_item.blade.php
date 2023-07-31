<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">{{__('Image')}}</th>
        <th scope="col">{{__('Product Name')}}</th>
        <th scope="col">{{__('Price')}}</th>
        <th scope="col">{{__('Action')}}</th>
        <th scope="col">{{__('Remove')}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($wishlist as $item)
        <tr>
            <td>
                <div class="product-image">
                    <a href="single-product.html"><img class="product-thumbnal" src="{{asset(ProductImage().$item->products->Primary_Image)}}" alt="product" /></a>
                    <div class="product-flags">

                        @if($item->products->ItemTag)
                            <span class="product-flag sale">{{$item->products->ItemTag}}</span>
                        @endif
                        @if($item->products->Discount )
                            <span class="product-flag discount">{{ __('-')}}{{$item->products->Discount}}</span>
                        @endif
                    </div>
                </div>
            </td>
            <td>
                <div class="product-info text-center">
                    <h3 class="product-name"><a class="product-link" href="single-product.html">{{$item->products->en_Product_Name}}</a></h3>
                    <ul class="product-review">
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item active"><i class="flaticon-star"></i></li>
                        <li class="review-item"><i class="flaticon-star"></i></li>
                        <li class="review-item"><i class="flaticon-star"></i></li>
                    </ul>
                    <div class="variable-single-item color-switch">
                        <div class="product-variable-color">

                            @foreach($item->products->colors as $color)
                                <label>
                                    <input type="hidden" name="colorId" value="{{$color->id}}">
                                    <input name="productColor" class="color-select" type="radio" value="{{$color->id}}">
                                    <span style="background:{{$color->ColorCode}};"></span>
                                </label>
                            @endforeach

                        </div>
                    </div>
                </div>
            </td>
            <td>
                <div class="product-price text-center">
                    <span class="regular-price">${{$item->products->Price}}</span>
                    <span class="price">${{$item->products->Discount_Price}}</span>
                </div>
            </td>
            <td>
                <div class="action-area">
                    <a href="javascript:void(0)" title="{{__('Add To Cart')}}" class="add-cart action-btn">{{__('Add To Cart')}} <i class="icon fas fa-plus-circle"></i></a>
                    <a class="buy-btn action-btn mt-15" href="javascript:void(0)">{{__('Buy Now')}}</a>
                </div>
            </td>
            <td><button class="delet-btn deleteWishlist" data-id="{{$item->id}}" title="Delete Item"><img src="{{asset('frontend/assets/images/close.svg')}}" alt="close" /></button></td>
        </tr>
    @endforeach
    </tbody>
</table>
