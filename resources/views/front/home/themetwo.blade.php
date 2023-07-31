<!-- hero-section-v2 area start here  -->
@if ($sliders->first())
    <div class="hero-section-v2">
        <div class="hero-section-wrap">
            <div class="signle-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-7">
                            <div class="hero-content">
                                <h1 class="hero-title">
                                    {{ langConverter($sliders->first()->en_Title, $sliders->first()->fr_Title) }}</h1>
                                <p class="hero-text">
                                    {{ langConverter($sliders->first()->en_Description, $sliders->first()->fr_Description) }}
                                </p>
                                <div class="hero-btn">
                                    <a href="{{ route('all.product') }}"
                                        class="secondary-btn">{{ langConverter($sliders->first()->en_Button_Text, $sliders->first()->fr_Button_Text) }}
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-5">
                            <div class="hero-banner-image text-center">
                                <img class="hero-image" src="{{ asset(BannerImage() . $banner->image) }}"
                                    alt="{{ langConverter($banner->en_title, $banner->fr_title) }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- hero-section-v2 area end here  -->

<!-- brads area start here  -->
<div class="brads-area-v2 section-top">
    <div class="container">
        <div class="brads-wrap">
            <div class="brads-slide">
                @foreach ($brands as $brand)
                    <div class="sigle-brad">
                        <img src="{{ asset(BrandImage() . $brand->BrandImage) }}"
                            alt="{{ langConverter($brand->en_BrandName, $brand->fr_BrandName) }}" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- brads area start here  -->

<!-- popular-categories-area v2 start here  -->
<div class="popular-categories-area-v2 section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="catagory-left">
                    <h2 class="catagory-title">
                        {{ langConverter(siteContentHomePage('many_goods')->en_Description_One, siteContentHomePage('many_goods')->fr_Description_One) }}
                    </h2>
                    <a href="{{ route('all.product') }}" class="primary-btn-v2">{{ __('View All Products') }} </a>
                </div>
            </div>
            <div class="col-lg-7">
                <ul class="catagory-list">
                    @foreach (Category_Des_Icon() as $item)
                        <li class="sigle-catagory">
                            <a class="catatory-link" href="{{ route('category.product', $item->id) }}">
                                {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}
                                <i class="icon flaticon-arrow-point-to-right"></i>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- popular-categories-area v2 end here  -->

<!-- featured-products-area-v2 start here  -->
@if ($allsettings['featured_items'] == ACTIVE)
    <div class="featured-products-area-v2 section-bg-two section-top pb-100">
        <div class="container">
            <div class="section-header-two text-center">
                <h2 class="section-title">{{ __('Featured Products') }}</h2>
            </div>
            <div class="row">
                @foreach ($featured_products as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="{{ route('single.product', $product->en_Product_Slug) }}"><img
                                        class="product-thumbnal"
                                        src="{{ asset(ProductImage() . $product->Primary_Image) }}"
                                        alt="product" /></a>
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
                                        <a class="product-btn CompareList" data-id="{{ $product->id }}"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="product-btn MyWishList" data-id="{{ $product->id }}"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                @foreach ($product->product_tags as $pptf)
                                    <h4 class="product-catagory">{{ $pptf->tag }}</h4>
                                @endforeach
                                <input type="hidden" name="quantity" value="1" id="product_quantity">
                                <h3 class="product-name"><a class="product-link"
                                        href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a>
                                </h3>
                                <!-- This is server side code. User can not modify it. -->
                                {!! productReview($product->id) !!}
                                <div class="product-price">
                                    <span class="regular-price">
                                        {{ currencyConverter($product->Price) }}</span>
                                    <span class="price">
                                        {{ currencyConverter($product->Discount_Price) }}</span>
                                </div>
                                <a href="javascript:void(0)" title="{{ __('Add To Cart') }}" class="add-cart addCart"
                                    data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
<!-- featured-products-area-v2 end here -->

<!-- Spectial Offer ara start here  -->
@if (SpecialOffer()->status)
    <div class="spectial-offer-area section-top">
        <div class="container">
            <div class="spectial-offer-wrap">
                <img class="line-shape-one" src="{{ asset('frontend') }}/assets/images/line-shape-one.png"
                    alt="shape" />
                <img class="line-shape-two" src="{{ asset('frontend') }}/assets/images/line-shape-two.png"
                    alt="shape" />
                <div class="row">
                    <div class="col-lg-5">
                        <div class="offer-image">
                            <img class="thumbnail-image" src="{{ asset(offerImage() . SpecialOffer()->image) }}"
                                alt="offer-image" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="offer-info">
                            <h3 class="offet-text">{{ SpecialOffer()->en_title }}</h3>
                            <h2 class="offer-catagory">
                                <span class="color-text">{{ SpecialOffer()->category->en_Category_Name }}</span>
                                SALE
                            </h2>
                            <h3 class="offer">{{ SpecialOffer()->discount }}</h3>
                            <a href="{{ SpecialOffer()->url }}" class="primary-btn">Shop Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Spectial Offer ara end here  -->

<!-- Recommend product area start here  -->
<div class="recommend-product-area section">
    <div class="container">
        <div class="section-header-two text-center">
            <h2 class="section-title">{{ __('Trending Products') }}</h2>
            <!-- Tab panel nav list -->
            <div class="secendary-tabs mt-40 ">
                <ul class="nav nav-tabs tab-nav-list border-0" id="myTab" role="tablist">
                    @if ($allsettings['new_arrival'] == ACTIVE)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $allsettings['new_arrival'] == ACTIVE ? 'active' : '' }}"
                                id="NEWARRIVAL-tab" data-bs-toggle="tab" type="button" href="#NEWARRIVAL"
                                role="tab" aria-controls="NEWARRIVAL"
                                aria-selected="true">{{ __('NEW ARRIVAL') }}</a>
                        </li>
                    @endif

                    @if ($allsettings['best_selling'] == ACTIVE)
                        <li class="nav-item" role="presentation">
                            <a class="nav-link {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == ACTIVE ? 'active' : '' }}"
                                id="BESTSELLING-tab" data-bs-toggle="tab" href="#BESTSELLING" role="tab"
                                aria-controls="BESTSELLING" aria-selected="false">{{ __('BEST SELLING') }}</a>
                        </li>
                    @endif

                    @if ($allsettings['on_sale'] == ACTIVE)
                        <li class="nav-item" role="ONSELL">
                            <a class="nav-link  {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == ACTIVE ? 'active' : '' }}"
                                id="ONSELL-tab" data-bs-toggle="tab" href="#ONSELL" role="tab"
                                aria-controls="ONSELL" aria-selected="false">{{ __('ON SALE') }}</a>
                        </li>
                    @endif

                    @if ($allsettings['featured_items'] == ACTIVE)
                        <li class="nav-item" role="FEATUREDITEMS">
                            <a class="nav-link {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == INACTIVE && $allsettings['featured_items'] == ACTIVE ? 'active' : '' }}"
                                id="FEATUREDITEMS-tab" data-bs-toggle="tab" href="#FEATUREDITEMS" role="tab"
                                aria-controls="FEATUREDITEMS" aria-selected="false">{{ __('FEATURED ITEMS') }}</a>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- Tab panel nav list -->
        </div>
        <div class="tab-content" id="FeaturedProductsTabContent">
            @if ($allsettings['new_arrival'] == ACTIVE)
                <div class="tab-pane fade {{ $allsettings['new_arrival'] == ACTIVE ? 'show active' : '' }}"
                    id="NEWARRIVAL" role="tabpanel" aria-labelledby="NEWARRIVAL-tab">
                    <div class="recommend-product-slide owl-carousel owl-theme">
                        @foreach ($new_arrivals as $product)
                            <div class="single-grid-product-v2">
                                <div class="product-top">
                                    <a href="{{ route('single.product', $product->en_Product_Slug) }}"><img
                                            class="product-thumbnal"
                                            src="{{ asset(ProductImage() . $product->Primary_Image) }}"
                                            alt="{{ __('product') }}" /></a>
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
                                            <a class="product-btn CompareList"
                                                data-id="{{ $product->id }}"
                                                title="{{ __('Add To Compare') }}"><i
                                                    class="icon flaticon-bar-chart"></i></a>
                                        </li>
                                        <li class="single-product-btn">
                                            <a class="product-btn MyWishList"
                                                data-id="{{ $product->id }}"
                                                title="{{ __('Add To Wishlist') }}"><i
                                                    class="icon flaticon-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-info text-center">
                                    @foreach ($product->product_tags as $pptn)
                                        <h4 class="product-catagory">{{ $pptn->tag }}</h4>
                                    @endforeach
                                    <input type="hidden" name="quantity" value="1" id="product_quantity">
                                    <h3 class="product-name"><a class="product-link"
                                            href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a>
                                    </h3>
                                    <!-- This is server side code. User can not modify it. -->
                                    {!! productReview($product->id) !!}
                                    <div class="product-price">
                                        <span class="regular-price">
                                            {{ currencyConverter($product->Price) }}</span>
                                        <span class="price">
                                            {{ currencyConverter($product->Discount_Price) }}</span>
                                    </div>
                                    <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                        class="add-cart addCart"
                                        data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                            class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if ($allsettings['best_selling'] == ACTIVE)
                <div class="tab-pane fade {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == ACTIVE ? 'show active' : '' }}"
                    id="BESTSELLING" role="tabpanel" aria-labelledby="BESTSELLING-tab">
                    <div class="recommend-product-slide owl-carousel owl-theme ">

                        @foreach ($best_sellings as $product)
                            <div class="single-grid-product-v2">
                                <div class="product-top">
                                    <a href="{{ route('single.product', $product->en_Product_Slug) }}"><img
                                            class="product-thumbnal"
                                            src="{{ asset(ProductImage() . $product->Primary_Image) }}"
                                            alt="{{ __('product') }}" /></a>
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
                                            <a class="product-btn CompareList"
                                                data-id="{{ $product->id }}"
                                                title="{{ __('Add To Compare') }}"><i
                                                    class="icon flaticon-bar-chart"></i></a>
                                        </li>
                                        <li class="single-product-btn">
                                            <a class="product-btn MyWishList"
                                                data-id="{{ $product->id }}"
                                                title="{{ __('Add To Wishlist') }}"><i
                                                    class="icon flaticon-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-info text-center">
                                    @foreach ($product->product_tags as $pptb)
                                        <h4 class="product-catagory">{{ $pptb->tag }}</h4>
                                    @endforeach
                                    <input type="hidden" name="quantity" value="1" id="product_quantity">
                                    <h3 class="product-name"><a class="product-link"
                                            href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a>
                                    </h3>
                                    <!-- This is server side code. User can not modify it. -->
                                    {!! productReview($product->id) !!}
                                    <div class="product-price">
                                        <span class="regular-price">
                                            {{ currencyConverter($product->Price) }}</span>
                                        <span class="price">
                                            {{ currencyConverter($product->Discount_Price) }}</span>
                                    </div>
                                    <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                        class="add-cart addCart"
                                        data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                            class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            @endif
            @if ($allsettings['on_sale'] == ACTIVE)
                <div class="tab-pane fade {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == ACTIVE ? 'show active' : '' }}"
                    id="ONSELL" role="tabpanel" aria-labelledby="ONSELL-tab">
                    <div class="recommend-product-slide owl-carousel owl-theme">
                        @foreach ($on_sales as $product)
                            <div class="single-grid-product-v2">
                                <div class="product-top">
                                    <a href="{{ route('single.product', $product->en_Product_Slug) }}}"><img
                                            class="product-thumbnal"
                                            src="{{ asset(ProductImage() . $product->Primary_Image) }}"
                                            alt="product" /></a>
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
                                            <a class="product-btn CompareList"
                                                data-id="{{ $product->id }}" title="Add to compare"><i
                                                    class="icon flaticon-bar-chart"></i></a>
                                        </li>
                                        <li class="single-product-btn">
                                            <a class="product-btn MyWishList"
                                                data-id="{{ $product->id }}" title="Add to wishlist"><i
                                                    class="icon flaticon-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-info text-center">
                                    @foreach ($product->product_tags as $ppto)
                                        <h4 class="product-catagory">{{ $ppto->tag }}</h4>
                                    @endforeach
                                    <input type="hidden" name="quantity" value="1" id="product_quantity">
                                    <h3 class="product-name"><a class="product-link"
                                            href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a>
                                    </h3>
                                    <!-- This is server side code. User can not modify it. -->
                                    {!! productReview($product->id) !!}
                                    <div class="product-price">
                                        <span class="regular-price">
                                            {{ currencyConverter($product->Price) }}</span>
                                        <span class="price">
                                            {{ currencyConverter($product->Discount_Price) }}</span>
                                    </div>
                                    <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                        class="add-cart addCart"
                                        data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                            class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if ($allsettings['featured_items'] == ACTIVE)
                <div class="tab-pane fade {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == INACTIVE && $allsettings['featured_items'] == ACTIVE ? 'show active' : '' }}"
                    id="FEATUREDITEMS" role="tabpanel" aria-labelledby="FEATUREDITEMS-tab">
                    <div class="recommend-product-slide owl-carousel owl-theme ">
                        @foreach ($featured_products as $product)
                            <div class="single-grid-product-v2">
                                <div class="product-top">
                                    <a href="{{ route('single.product', $product->en_Product_Slug) }}"><img
                                            class="product-thumbnal"
                                            src="{{ asset(ProductImage() . $product->Primary_Image) }}"
                                            alt="product" /></a>
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
                                            <a class="product-btn CompareList"
                                                data-id="{{ $product->id }}" title="Add to compare"><i
                                                    class="icon flaticon-bar-chart"></i></a>
                                        </li>
                                        <li class="single-product-btn">
                                            <a class="product-btn MyWishList"
                                                data-id="{{ $product->id }}" title="Add to wishlist"><i
                                                    class="icon flaticon-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-info text-center">
                                    @foreach ($product->product_tags as $pptf)
                                        <h4 class="product-catagory">{{ $pptf->tag }}</h4>
                                    @endforeach
                                    <input type="hidden" name="quantity" value="1" id="product_quantity">
                                    <h3 class="product-name"><a class="product-link"
                                            href="{{ route('single.product', $product->en_Product_Slug) }}">{{ langConverter($product->en_Product_Name, $product->fr_Product_Name) }}</a>
                                    </h3>
                                    <!-- This is server side code. User can not modify it. -->
                                    {!! productReview($product->id) !!}
                                    <div class="product-price">
                                        <span class="regular-price">
                                            {{ currencyConverter($product->Price) }}</span>
                                        <span class="price">
                                            {{ currencyConverter($product->Discount_Price) }}</span>
                                    </div>
                                    <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                        class="add-cart addCart"
                                        data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                            class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- testimonial-area-v2 start here  -->
<div class="testimonial-area-v2 section section-bg-two">
    <div class="container">
        <div class="section-header-two text-center">
            <h2 class="section-title">What People Are <br /> Saying About Ourself</h2>
        </div>
        <div class="testimonial-slide-two">
            @foreach ($testimonial as $test)
                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <img class="testimonial-image" src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}"
                            alt="{{ $test->Name }}" />
                    </div>
                    <div class="testimonial-body">
                        <p class="testimonial-content">
                            {{ langConverter($test->en_Description, $test->fr_Description) }} </p>
                        <h3 class="testimonial-title"> {{ $test->Name }} </h3>

                        <ul class="testimonial-review">
                            {!! reviewStar($test->star) !!}
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- testimonial-area-v2 end here  -->

<!-- image-gallery-area-v2 start here  -->
<x-frontend.image-gallery></x-frontend.image-gallery>
<!-- image-gallery-area-v2 end here  -->

<!-- blog-area-v2 start here  -->
<div class="blog-area-v2 section-top section-bg-two pb-100">
    <div class="container">
        <div class="blog-area-top">
            <div class="row align-items-center justify-content-between">

                <div class="col-lg-5">
                    <div class="blog-top-left">
                        <h2 class="blog-left-title">
                            {{ langConverter(siteContentHomePage('blogspot')->en_Title, siteContentHomePage('blogspot')->fr_Title) }}
                        </h2>
                        <p class="blog-left-subtitle">
                            {{ langConverter(siteContentHomePage('blogspot')->en_Description_One, siteContentHomePage('blogspot')->fr_Description_One) }}
                        </p>
                        <a href="{{ route('blog') }}" class="primary-btn-v2">View All Articles</a>
                    </div>
                </div>
                @if ($blogs->first())
                    @php
                        $blog = $blogs->first();
                    @endphp
                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="single-grid-blog-v2">
                            <div class="blog-info">
                                <a href="{{ route('blog.details', $blog->id) }}" class="blog-category">
                                    @foreach ($blog->tags as $Item)
                                        @foreach ($Item->Tag as $n)
                                            {{ $n }}
                                        @endforeach
                                    @endforeach
                                </a>
                                <h5 class="blog-date">{{ date('M d, Y', strtotime($blog->created_at)) }}</h5>
                                <h3 class="blog-title">
                                    <a class="blog-link" href="{{ route('blog.details', $blog->id) }}">
                                        {{ langConverter($blog->en_Title, $blog->fr_Title) }}
                                    </a>
                                </h3>
                                <a class="blog-btn" href="{{ route('blog.details', $blog->id) }}">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach ($blogs->skip(1)->take(3) as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-grid-blog-v2">
                        <div class="blog-info">
                            <a href="{{ route('blog.details', $blog->id) }}" class="blog-category">
                                @foreach ($blog->tags as $Item)
                                    @foreach ($Item->Tag as $n)
                                        {{ $n }}
                                    @endforeach
                                @endforeach
                            </a>
                            <h5 class="blog-date">{{ date('M d, Y', strtotime($blog->created_at)) }}</h5>
                            <h3 class="blog-title">
                                <a class="blog-link" href="{{ route('blog.details', $blog->id) }}">
                                    {{ langConverter($blog->en_Title, $blog->fr_Title) }}
                                </a>
                            </h3>
                            <a class="blog-btn" href="{{ route('blog.details', $blog->id) }}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- blog-area-v2 end here  -->
