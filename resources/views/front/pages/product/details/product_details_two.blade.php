<!-- breadcrumb area start here  -->
<div class="breadcrumb-area-v2">
    <div class="container">
        <div class="breadcrumb-wrap text-center">
            <ul class="breadcrumb-pages">
                <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a>
                </li>
                <li class="page-item">{{ __('Product Single Page') }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- breadcrumb area end here  -->

<!-- product-single-area start here  -->
<div class="product-single-area-v2 section-top">
    <div class="container">
        <div class="product-single-details">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <div class="product-single-left">
                        <div class="product-slier-big-image">
                            <div class="product-priview-slide-v2">

                                <div class="single-slide">
                                    <img class="slide-image"
                                        src="{{ asset(ProductImage() . $products->Primary_Image) }}"
                                        alt="{{ __('product') }}" />
                                </div>
                                @if ($products->Image4)
                                    <div class="single-slide">
                                        <img class="slide-image" src="{{ asset(ProductImage() . $products->Image4) }}"
                                            alt="{{ __('product') }}" />
                                    </div>
                                @endif
                                @if ($products->Image3)
                                    <div class="single-slide">
                                        <img class="slide-image" src="{{ asset(ProductImage() . $products->Image3) }}"
                                            alt="{{ __('product') }}" />
                                    </div>
                                @endif
                                @if ($products->Image5)
                                    <div class="single-slide">
                                        <img class="slide-image" src="{{ asset(ProductImage() . $products->Image5) }}"
                                            alt="{{ __('product') }}" />
                                    </div>
                                @endif
                                @if ($products->Image2)
                                    <div class="single-slide">
                                        <img class="slide-image" src="{{ asset(ProductImage() . $products->Image2) }}"
                                            alt="{{ __('product') }}" />
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="product-thumbnail-image">
                            <ul class="product-thumb-silide-v2">

                                <li class="single-item">
                                    <img class="single-item-image"
                                        src="{{ asset(ProductImage() . $products->Primary_Image) }}"
                                        alt="{{ __('product') }}" />
                                </li>
                                @if ($products->Image4)
                                    <li class="single-item">
                                        <img class="single-item-image"
                                            src="{{ asset(ProductImage() . $products->Image4) }}"
                                            alt="{{ __('product') }}" />
                                    </li>
                                @endif
                                @if ($products->Image3)
                                    <li class="single-item">
                                        <img class="single-item-image"
                                            src="{{ asset(ProductImage() . $products->Image3) }}"
                                            alt="{{ __('product') }}" />
                                    </li>
                                @endif
                                @if ($products->Image5)
                                    <li class="single-item">
                                        <img class="single-item-image"
                                            src="{{ asset(ProductImage() . $products->Image5) }}"
                                            alt="{{ __('product') }}" />
                                    </li>
                                @endif
                                @if ($products->Image2)
                                    <li class="single-item">
                                        <img class="single-item-image"
                                            src="{{ asset(ProductImage() . $products->Image2) }}"
                                            alt="{{ __('product') }}" />
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="product-single-right">
                        <div class="product-info">
                            <div class="product-info-top">
                                @foreach ($products->product_tags as $ppt)
                                    <h4 class="product-catagory">{{ $ppt->tag }}</h4>
                                @endforeach
                                <ul class="product-review">
                                    <!-- This is server side code. User can not modify it. -->
                                    {!! productReview($products->id) !!}
                                </ul>
                            </div>
                            <h3 class="product-name">
                                {{ langConverter($products->en_Product_Name, $products->fr_Product_Name) }}</h3>
                            </h3>
                            <p class="note-text">{!! langConverter($products->en_About, $products->fr_About) !!}
                            </p>
                            <div class="product-price">
                                @if (currencyConverter($products->Discount_Price) == currencyConverter($products->Price))
                                    <span class="price">{{ currencyConverter($products->Discount_Price) }}</span>
                                @else
                                    <span class="price">{{ currencyConverter($products->Discount_Price) }}</span>
                                    <span class="regular-price">{{ currencyConverter($products->Price) }}</span>
                                @endif
                            </div>

                            <div class="product-color-area">
                                <h4 class="size-title">{{ __('Type:') }} {{ productTypeText($products->id) }}
                                </h4>

                                <h4 class="color-title">COLOR</h4>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        @foreach ($products->colors as $color)
                                            <label>
                                                <input type="hidden" name="colorId" value="{{ $color->id }}">
                                                <input name="productColor" class="color-select" type="radio"
                                                    value="{{ $color->id }}">
                                                <span style="background:{{ $color->ColorCode }};"></span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="product-size-area">
                                <h4 class="size-title">SIZE</h4>
                                <ul class="size-switch">
                                    @foreach ($products->sizes as $item)
                                        <input type="hidden" class="sizeValue" name="productSize"
                                            value="{{ $item->id }}">
                                        <li class="single-size activeSize" data-size="{{ $item->id }}">
                                            {{ $item->Size }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="prdouct-btn-wrapper d-flex align-items-center">
                                <div class="cart-plus-minus">
                                    <div class="dec qtybutton btn">-</div>
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                        id="product_quantity" value="1" readonly />
                                    <div class="inc qtybutton btn">{{ __('+') }}</div>
                                </div>
                                <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                    class="add-cart addCart" data-id="{{ $products->id }}">{{ __('Add To Cart') }}
                                    <i class="icon fas fa-plus-circle"></i></a>
                            </div>
                            <div class="product-bottom-button d-flex">
                                <a href="javascript:void(0)" class="primary-btn buyNow"
                                    data-id="{{ $products->id }}">{{ __('Buy Now') }}</a>

                                <a class="product-btn MyWishList" data-id="{{ $products->id }}"
                                    title="{{ __('Add To Wishlist') }}"><i class="icon flaticon-like"></i></a>
                                <a class="product-btn CompareList" data-id="{{ $products->id }}"
                                    title="{{ __('Add To Compare') }}"><i class="icon flaticon-bar-chart"></i></a>
                            </div>
                        </div>

                        <div class="product-right-bottom">
                            <ul class="features">
                                <li class="single-feature">
                                    <img class="icon"
                                        src="{{ asset('frontend/assets/images/delivery-van-icon.svg') }}"
                                        alt="icon" /><strong
                                        class="feature-title">{{ __('Estimated Delivery:') }}</strong><span
                                        class="feature-text">{{ allsetting()['estimating_delivery'] }}</span>
                                </li>
                                <li class="single-feature">
                                    <img class="icon"
                                        src="{{ asset('frontend/assets/images/shipping-return.svg') }}"
                                        alt="icon" /><strong
                                        class="feature-title">{{ __('Shipping Charge:') }}</strong><span
                                        class="feature-text">{{ __('On all orders over') }}
                                        {{ currencyConverter(allsetting()['shipping_charge']) }}</span>
                                </li>
                            </ul>

                            @if ($allsettings['news_letter_status'] == '1')
                                <div class="guarantee-checkout-area">
                                    <h3 class="guarantee-title">{{ $allsettings['news_letter_title'] }}</h3>
                                    <img src="{{ asset(IMG_FOOTER_PATH . $allsettings['news_letter_img']) }}"
                                        alt="payment-method-image" />
                                </div>
                            @endif

                            <div class="share-area d-flex align-items-center mt-30">
                                <h3 class="share-title">{{ __('SHARE:') }}</h3>
                                <ul class="social-media a2a_kit">
                                    <li class="media-item">
                                        <a class="media-link facebook a2a_button_facebook"
                                            href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="media-item">
                                        <a class="media-link twitter a2a_button_twitter" href="javascript:void(0)"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="media-item">
                                        <a class="media-link linkedin a2a_button_linkedin"
                                            href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="media-item">
                                        <a class="media-link pinterest a2a_button_pinterest"
                                            href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                </ul>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="product-bottom-info mt-50">
            <div class="nav-tabs-menu">
                <ul class="nav nav-tabs" id="ProductTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="Description-tab" data-bs-toggle="tab"
                            data-bs-target="#Description" type="button" role="tab" aria-controls="Description"
                            aria-selected="true">
                            {{ __('Description') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews"
                            type="button" role="tab" aria-controls="Reviews" aria-selected="false">
                            {{ __('Reviews') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Shipping-Return-tab" data-bs-toggle="tab"
                            data-bs-target="#Shipping-Return" type="button" role="tab"
                            aria-controls="Shipping-Return" aria-selected="false">
                            {{ __('Shipping & Return') }}</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="Additional-Information-tab" data-bs-toggle="tab"
                            data-bs-target="#Additional-Information" type="button" role="tab"
                            aria-controls="Additional-Information" aria-selected="false">
                            {{ __('Additional Information') }}</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="ProductTabContent">
                <div class="tab-pane fade show active" id="Description" role="tabpanel"
                    aria-labelledby="Description-tab">
                    <div class="product-description">
                        {!! langConverter($products->en_Description, $products->fr_Description) !!}
                    </div>
                </div>

                <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                    <div class="product-reviews">
                        <div class="review-top">
                            <div class="review-top-left">
                                <h3 class="review-title">Customer Reviews </h3>
                                <div class="review-start-point">
                                    <ul class="review-list">
                                        <!-- This is server side code. User can not modify it. -->
                                        {!! productReview($products->id) !!}
                                    </ul>
                                    <span class="review-count">{{ productReviewerNumber($products->id) }}
                                        {{ __('Reviews') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="reviews-list">
                            <h3 class="review-title">Customer Reviews </h3>
                            @forelse($products->product_reviews as $review)
                                <div class="single-review">
                                    <div class="reviewer">
                                        <div class="reviewer-wrap">
                                            <img class="reviewer-image"
                                                src="{{ isset($review->user->image) ? asset(AdminProfilePicture() . $review->user->image) : Avatar::create($review->user->name)->toBase64() }}"
                                                alt="reviewer-image" />
                                            <div class="reviewer-info">
                                                <h4 class="reviewer-name">{{ $review->user->name }}</h4>
                                                <h4 class="review-meta"><span
                                                        class="time">{{ \Carbon\Carbon::parse($review->created_at)->format('jS M Y') }}
                                                    </span>
                                                </h4>
                                            </div>

                                        </div>
                                        <ul class="review-list">
                                            <!-- This is server side code. User can not modify it. -->
                                            {!! reviewRating($review->id) !!}
                                        </ul>
                                    </div>
                                    <p class="review-text">{{ $review->feedback }}</p>
                                </div>
                            @empty
                                <h1>{{ __('No Review Yet!') }}</h1>
                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Shipping-Return" role="tabpanel"
                    aria-labelledby="Shipping-Return-tab">
                    <div class="shipping-return-area">
                        {!! langConverter($products->en_ShippingReturn, $products->fr_ShippingReturn) !!}
                    </div>
                </div>
                <div class="tab-pane fade" id="Additional-Information" role="tabpanel"
                    aria-labelledby="Additional-Information-tab">
                    {!! langConverter($products->en_AdditionalInformation, $products->fr_AdditionalInformation) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-single-area end here  -->

<!-- featured-products-area-v2 start here  -->
<div class="featured-products-area-v2 section-top pb-100">
    <div class="container">
        <div class="section-header-two text-center">
            <h2 class="section-title">Releted Products</h2>
        </div>
        <div class="row">
            @forelse($similar_product as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="{{ route('single.product', $product->en_Product_Slug) }}"><img
                                    class="product-thumbnal"
                                    src="{{ asset(ProductImage() . $product->Primary_Image) }}" alt="product" /></a>
                            <div class="product-flags">
                                @if ($product->ItemTag)
                                    <span class="product-flag sale">{{ $product->ItemTag }}</span>
                                @endif
                                @if ($product->Discount)
                                    <span
                                        class="product-flag discount">{{ __('-') }}{{ $product->Discount }}</span>
                                @endif
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn MyWishList" data-id="{{ $products->id }}"
                                        href="javascript:void(0)" title="{{ __('Add To Compare') }}"><i
                                            class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn CompareList" data-id="{{ $products->id }}"
                                        href="javascript:void(0)" title="{{ __('Add To Wishlist') }}"><i
                                            class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>


                        <div class="product-info text-center">
                            @foreach ($product->product_tags as $ppt)
                                <h4 class="product-catagory">{{ $ppt->tag }}</h4>
                            @endforeach
                            <h3 class="product-name"><a class="product-link"
                                    href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a>
                            </h3>
                            <!-- This is server side code. User can not modify it. -->
                            {!! productReview($product->id) !!}
                            <div class="product-price">
                                <span class="regular-price">{{ currencyConverter($product->Price) }}</span>
                                <span class="price">{{ currencyConverter($product->Discount_Price) }}</span>
                            </div>
                            <a href="javascript:void(0)" title="{{ __('Add To Cart') }}" class="add-cart addCart"
                                data-id="{{ $products->id }}">{{ __('Add To Cart') }} <i
                                    class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
            @empty
                <h1>{{ __('No related product found!') }}</h1>
            @endforelse

        </div>
    </div>
</div>
<!-- featured-products-area-v2 end here  -->
