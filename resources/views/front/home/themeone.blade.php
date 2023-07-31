<!-- hero-section area start here  -->
<div class="hero-section">
    <div class="hero-slider">
        @foreach ($sliders as $slider)
            <div class="signle-slide"
                style="background-image: url('{{ asset(SliderImage() . $slider->Background_Image) }}');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">
                                    {{ langConverter($slider->en_Sub_Title, $slider->fr_Sub_Title) }}</h2>
                                <h1 class="slider-title">
                                    {{ langConverter($slider->en_Title, $slider->fr_Title) }}
                                </h1>
                                <p class="slider-text">
                                    {{ langConverter($slider->en_Description, $slider->fr_Description) }}</p>
                                <div class="slider-btn">
                                    <a href="{{ route('all.product') }}"
                                        class="secondary-btn">{{ langConverter($slider->en_Button_Text, $slider->fr_Button_Text) }}
                                        <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="{{ asset(SliderImage() . $slider->Thumbnail) }}"
                                    alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- hero-section area end here  -->

<!-- brads area start here  -->
<div class="brads-area">
    <div class="container">
        <div class="brads-slide">
            @foreach ($brands as $brand)
                <div class="sigle-brad">
                    <img src="{{ asset(BrandImage() . $brand->BrandImage) }}" alt="brad image" />
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- brads area start here  -->

<!-- Popular Categories area start here  -->
<div class="popular-categories-area section-bg section-top pb-100">
    <div class="container">
        <div class="section-header-area">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="sub-title">
                        {{ langConverter(siteContentHomePage('many_goods')->en_Title, siteContentHomePage('many_goods')->fr_Title) }}
                    </h3>
                    <h2 class="section-title">
                        {{ langConverter(siteContentHomePage('many_goods')->en_Description_One, siteContentHomePage('many_goods')->fr_Description_One) }}
                    </h2>
                </div>
                <div class="col-md-6 align-self-end text-md-end">
                    <a href="{{ route('all.product') }}" class="primary-btn">{{ __('View All Products') }}</a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach (Category_Des_Icon() as $item)
                <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="{{ route('category.product', $item->id) }}">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                <i class="{{ $item->Category_Icon }}"></i>
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">
                                    {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</h3>
                                <h4 class="categorie-subtitle">
                                    {{ langConverter($item->en_Description, $item->fr_Description) }}</h4>
                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Popular Categories area end here  -->

<!-- Featured Products area start here  -->
<div class="featured-productss-area section-top pb-100">
    <div class="container">
        <div class="section-header-area">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="sub-title">
                        {{ langConverter(siteContentHomePage('products')->en_Title, siteContentHomePage('products')->fr_Title) }}
                    </h3>
                    <h2 class="section-title">
                        {{ langConverter(siteContentHomePage('products')->en_Description_One, siteContentHomePage('products')->fr_Description_One) }}
                    </h2>
                </div>
                <div class="col-md-6 align-self-end text-md-end">
                    <a href="{{ route('all.product') }}" class="see-btn">{{ __('See All') }}</a>
                </div>
            </div>
        </div>
        <div class="row">
           
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
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
                                    <a class="product-btn CompareList" data-id="{{ $product->id }}"
                                        title="{{ __('Add To Compare') }}"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="product-btn MyWishList" data-id="{{ $product->id }}"
                                        title="{{ __('Add To Wishlist') }}"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            @foreach ($product->product_tags as $ppt)
                                <h4 class="product-catagory">{{ $ppt->tag }}</h4>
                            @endforeach
                            <input type="hidden" name="quantity" value="1" id="product_quantity">
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
                                data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                    class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Featured Products area end here  -->

<!-- About Area start here  -->
<div class="about-area section"
    style="background-image: url({{ asset(aboutUsPage() . siteContentHomePage('about_us')->image) }})">
    <div class="container">
        <div class="section-header-area">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="sub-title">
                        {{ langConverter(siteContentHomePage('about_us')->en_Title, siteContentHomePage('about_us')->fr_Title) }}
                    </h3>
                    <h2 class="section-title">{!! langConverter(
                        siteContentHomePage('about_us')->en_Description_One,
                        siteContentHomePage('about_us')->fr_Description_One,
                    ) !!}</h2>
                </div>
                <div class="col-md-6 align-self-end text-md-end">
                    <a href="{{ route('about.us') }}" class="primary-btn">{{ __('Know More About Us') }}</a>
                </div>
            </div>
        </div>
        <div class="story-box-slide">
            @foreach ($story as $item)
                <div class="single-story-box">
                    <h3 class="story-title">{{ __('Story Of') }} <span class="story-year">{{ $item->Year }}</span>
                    </h3>
                    <p class="story-content">{!! langConverter($item->en_Description, $item->fr_Description) !!}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- About Area  end here  -->

<!-- Trending Products area start here  -->
<div class="trending-products-area section-top pb-100">
    <div class="container">
        <div class="section-header-area">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="sub-title">
                        {{ langConverter(siteContentHomePage('popular_products')->en_Title, siteContentHomePage('popular_products')->fr_Title) }}
                    </h3>
                    <h2 class="section-title">
                        {{ langConverter(siteContentHomePage('popular_products')->en_Description_One, siteContentHomePage('popular_products')->fr_Description_One) }}
                    </h2>
                </div>
                <div class="col-lg-6 align-self-end text-lg-end">
                    <div class="primary-tabs">
                        <ul class="nav nav-tabs" id="TrendingProducts" role="tablist">
                            @if ($allsettings['new_arrival'] == ACTIVE)
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link {{ $allsettings['new_arrival'] == ACTIVE ? 'active' : '' }}"
                                        id="new-arrival-tab" data-bs-toggle="tab" data-bs-target="#new-arrival"
                                        type="button" role="tab" aria-controls="new-arrival"
                                        aria-selected="true">{{ __('NEW ARRIVAL') }}</button>
                                </li>
                            @endif
                            @if ($allsettings['best_selling'] == ACTIVE)
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == ACTIVE ? 'active' : '' }}"
                                        id="best-selling-tab" data-bs-toggle="tab" data-bs-target="#best-selling"
                                        type="button" role="tab" aria-controls="best-selling"
                                        aria-selected="false">{{ __('BEST SELLING') }}</button>
                                </li>
                            @endif
                            @if ($allsettings['on_sale'] == ACTIVE)
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == ACTIVE ? 'active' : '' }}"
                                        id="on-sell-tab" data-bs-toggle="tab" data-bs-target="#on-sell"
                                        type="button" role="tab" aria-controls="on-sell"
                                        aria-selected="false">{{ __('ON SALE') }}</button>
                                </li>
                            @endif
                            @if ($allsettings['featured_items'] == ACTIVE)
                                <li class="nav-item" role="presentation">
                                    <button
                                        class="nav-link {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == INACTIVE && $allsettings['featured_items'] == ACTIVE ? 'active' : '' }}"
                                        id="featured-items-tab" data-bs-toggle="tab" data-bs-target="#featured-items"
                                        type="button" role="tab" aria-controls="featured-items"
                                        aria-selected="false">{{ __('FEATURED ITEMS') }}</button>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="TrendingProductsContent">
            @if ($allsettings['new_arrival'] == ACTIVE)
                <div class="tab-pane fade {{ $allsettings['new_arrival'] == ACTIVE ? 'show active' : '' }}"
                    id="new-arrival" role="tabpanel" aria-labelledby="new-arrival-tab">
                    <div class="row">
                        @foreach ($new_arrivals as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
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
                                                <a class="product-btn CompareList" data-id="{{ $product->id }}"
                                                    title="{{ __('Add To Compare') }}"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="{{ $product->id }}"
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
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if ($allsettings['best_selling'] == ACTIVE)
                <div class="tab-pane fade {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == ACTIVE ? 'show active' : '' }}"
                    id="best-selling" role="tabpanel" aria-labelledby="best-selling-tab">
                    <div class="row">
                        @foreach ($best_sellings as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
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
                                                <a class="product-btn CompareList" data-id="{{ $product->id }}"
                                                    title="{{ __('Add To Compare') }}"><i
                                                        class="icon flaticon-bar-chart"></i></a>
                                            </li>
                                            <li class="single-product-btn">
                                                <a class="product-btn MyWishList" data-id="{{ $product->id }}"
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
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if ($allsettings['on_sale'] == ACTIVE)
                <div class="tab-pane fade {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == ACTIVE ? 'show active' : '' }}"
                    id="on-sell" role="tabpanel" aria-labelledby="on-sell-tab">
                    <div class="row">
                        @foreach ($on_sales as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
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
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if ($allsettings['featured_items'] == ACTIVE)
                <div class="tab-pane fade {{ $allsettings['new_arrival'] == INACTIVE && $allsettings['best_selling'] == INACTIVE && $allsettings['on_sale'] == INACTIVE && $allsettings['featured_items'] == ACTIVE ? 'show active' : '' }}"
                    id="featured-items" role="tabpanel" aria-labelledby="featured-items-tab">
                    <div class="row">
                        @foreach ($featured_products as $product)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-grid-product">
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
                                        <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                            class="add-cart addCart"
                                            data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                                class="icon fas fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Trending Products area end here  -->

<!-- product banenr area start here  -->
<div class="product-banner pb-100">
    <div class="container">
        <div class="row">
            @foreach ($promotion as $promo)
                <div class="col-md-5">
                    <a href="#" class="single-banner"><img class="banner-image"
                            src="{{ asset(PromotionImage() . $promo->Image_One) }}" alt="product-banner" /></a>
                </div>
                <div class="col-md-7">
                    <a href="#" class="single-banner"><img class="banner-image"
                            src="{{ asset(PromotionImage() . $promo->Image_Two) }}" alt="product-banner" /></a>
                </div>
        </div>
        @endforeach
    </div>
</div>
<!-- product banner area end here  -->
<!-- Blog area start here  -->
<div class="blog-area section-top section-bg pb-100">
    <div class="container">
        <div class="section-header-area">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="sub-title">
                        {{ langConverter(siteContentHomePage('blogspot')->en_Title, siteContentHomePage('blogspot')->fr_Title) }}
                    </h3>
                    <h2 class="section-title">
                        {{ langConverter(siteContentHomePage('blogspot')->en_Description_One, siteContentHomePage('blogspot')->fr_Description_One) }}
                    </h2>
                </div>
                <div class="col-md-6 align-self-end text-md-end">
                    <a href="{{ route('blog') }}" class="see-btn">{{ __('See All') }}</a>
                </div>
            </div>
        </div>

        <div class="blog-slide">
            @foreach ($blogs as $blog)
                <!-- Blog Item Start -->
                <div class="single-grid-blog">
                    <div class="blog-thumbnail">
                        <a href="{{ route('blog.details', $blog->id) }}"><img class="thumbnail-image"
                                src="{{ asset(BlogImage() . $blog->Small_Image) }}" alt="blog" /></a>
                    </div>
                    <div class="blog-info">
                        <ul class="blog-category">
                            @foreach ($blog->tags as $Item)
                                @foreach ($Item->Tag as $n)
                                    <li class="single-category"><a class="category-text"
                                            href="{{ route('blog.details', $blog->id) }}">{{ $n }}</a>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                        <h3 class="blog-title"><a class="blog-link"
                                href="{{ route('blog.details', $blog->id) }}">{{ langConverter($blog->en_Title, $blog->fr_Title) }}</a>
                        </h3>
                        <p class="blog-content">{!! Str::limit(clean(langConverter($blog->en_Description_Two, $blog->fr_Description_Two)), 205) !!}</p>
                        <a class="blog-btn"
                            href="{{ route('blog.details', $blog->id) }}l">{{ __('See Details') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog area end here  -->

<!-- Image Gallery area start here  -->
<x-frontend.image-gallery></x-frontend.image-gallery>
<!-- Image Gallery area end here  -->

<!-- Testimonial ara start here  -->
<div class="testimonial-area section section-bg">
    <div class="container">
        <div class="section-header-area text-center">
            <h3 class="sub-title">{{ __('Testimonial') }}</h3>
            <h2 class="section-title">{{ __('What People Are') }} <br />{{ __('Saying About Ourself') }}</h2>
        </div>
        <div class="testimonial-slide-top">

            <!-- Testimonial authors Float Images Start -->
            @foreach ($testimonial as $test)
                @if ($loop->iteration == 1)
                    <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                        class="testimonial-float-img testimonial-left-1 position-absolute">
                @elseif ($loop->iteration == 2)
                    <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                        class="testimonial-float-img testimonial-left-2 position-absolute">
                @elseif ($loop->iteration == 3)
                    <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                        class="testimonial-float-img testimonial-left-3 position-absolute">
                @elseif ($loop->iteration == 4)
                    <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                        class="testimonial-float-img testimonial-left-4 position-absolute">
                @elseif ($loop->iteration == 5)
                    <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                        class="testimonial-float-img testimonial-right-1 position-absolute">
                @elseif ($loop->iteration == 6)
                    <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                        class="testimonial-float-img testimonial-right-2 position-absolute">
                @elseif ($loop->iteration == 7)
                    <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                        class="testimonial-float-img testimonial-right-3 position-absolute">
                @elseif ($loop->iteration == 8)
                    <img src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="img"
                        class="testimonial-float-img testimonial-right-4 position-absolute">
                @endif
            @endforeach
            <!-- Testimonial authors Float Images End -->

            <img class="shape-image" src="{{ asset('frontend/assets/images/shape.png') }}" alt="shape" />
            <div class="testimonial-image-slide">
                @foreach ($testimonial as $test)
                    <div class="signle-testimonial-image"><img class="testimonial-image"
                            src="{{ asset(IMG_TESTIMONIAL . $test->Image) }}" alt="testimonal-image" /></div>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="testimonail-slide">
                    @foreach ($testimonial as $test)
                        <div class="single-testimonial">
                            <p class="testimonial-text">
                                {{ langConverter($test->en_Description, $test->fr_Description) }}</p>
                            <h3 class="testimonial-title">{{ $test->Name }}</h3>
                            <ul class="review-area">
                                <li><i class="flaticon-star"></i></li>
                                <li class="{{ $test->star == 1 ? 'inactive' : '' }}"><i class="flaticon-star"></i>
                                </li>
                                <li class="{{ $test->star == 1 || $test->star == 2 ? 'inactive' : '' }}"><i
                                        class="flaticon-star"></i></li>
                                <li
                                    class="{{ $test->star == 1 || $test->star == 2 || $test->star == 3 ? 'inactive' : '' }}">
                                    <i class="flaticon-star"></i>
                                </li>
                                <li
                                    class="{{ $test->star == 1 || $test->star == 2 || $test->star == 3 || $test->star == 4 ? 'inactive' : '' }}">
                                    <i class="flaticon-star"></i>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial ara end here  -->
