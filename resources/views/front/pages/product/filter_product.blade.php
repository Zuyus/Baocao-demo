<div class="product-list">
    <div class="row">
        @foreach($filters as $product)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-grid-product">
                    <div class="product-top">
                        <a href="{{route('single.product',$product->en_Product_Slug)}}"><img class="product-thumbnal" src="{{asset(ProductImage().$product->Primary_Image)}}" alt="{{__('product')}}" /></a>
                        <div class="product-flags">
                            @if($product->ItemTag)
                                <span class="product-flag sale">{{$product->ItemTag}}</span>
                            @endif
                            @if($product->Discount )
                                <span class="product-flag discount">{{ __('-')}}{{currencyConverter($product->Discount)}}</span>
                            @endif
                        </div>
                        <ul class="prdouct-btn-wrapper">
                            <li class="single-product-btn">
                                <a class="product-btn CompareList" data-id="{{$product->id}}" title="{{__('Add To Compare')}}"><i class="icon flaticon-bar-chart"></i></a>
                            </li>
                            <li class="single-product-btn">
                                <a class="product-btn MyWishList" data-id="{{$product->id}}" title="{{__('Add To Wishlist')}}"><i class="icon flaticon-like"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="product-info text-center">
                        @foreach($product->product_tags as $ppt)
                            <h4 class="product-catagory">{{$ppt->tag}}</h4>
                        @endforeach
                        <input type="hidden" name="quantity" value="1" id="product_quantity">
                        <h3 class="product-name"><a class="product-link" href="{{route('single.product',$product->en_Product_Slug)}}">{{langConverter($product->en_Product_Name,$product->fr_Product_Name)}}</a></h3>
                            <!-- This is server side code. User can not modify it. -->
                            {!!  productReview($product->id) !!}
                        <div class="product-price">
                            <span class="regular-price">{{currencyConverter($product->Price)}}</span>
                            <span class="price">{{currencyConverter($product->Discount_Price)}}</span>
                        </div>
                        <a href="javascript:void(0)" title="{{__('Add To Cart')}}" class="add-cart addCart" data-id="{{$product->id}}">{{__('Add To Cart')}} <i class="icon fas fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="{{asset('frontend/assets/js/common.js')}}"></script>
