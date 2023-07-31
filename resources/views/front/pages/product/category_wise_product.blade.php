@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">
                    {{ langConverter($category_m->en_Category_Name, $category_m->fr_Category_Name) }}
                </h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="page-item">
                        {{ langConverter($category_m->en_Category_Name, $category_m->fr_Category_Name) }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Product Area Start -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-widget-area mobile-sidebar">
                        <div class="sidebar-widget-header d-block d-lg-none">
                            <div class="widget-header-wrap">
                                <h5 class="offcanvas-title">{{ __('Filter') }}</h5>
                                <button type="button" class="btn-close text-reset sidebar-close"></button>
                            </div>
                        </div>

                        <div class="single-widget search-widget">
                            <h3 class="widget-title">{{ __('Search Here') }}</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="searchwidget" name="searchwidget"
                                        placeholder="{{ __('Product Store') }}" />
                                    <button type="button" class="search-btn"><i
                                            class="flaticon-search searchWidget"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="single-widget categories-widget">
                            <h3 class="widget-title">{{ __('Categories') }}</h3>
                            <div class="categories-list">
                                @foreach ($category as $cateogories)
                                    <div class="single-categorie">
                                        <div class="categorie-left">
                                            <input class="form-check-input CheckCategory" type="checkbox"
                                                value="{{ $cateogories->en_Category_Name }}">
                                            <label class="form-check-label">{{ $cateogories->en_Category_Name }}</label>
                                        </div>
                                        <span
                                            class="categories-count">{{ productCategoryCount($cateogories->id) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="single-widget price-widget">
                            <h3 class="widget-title">{{ __('Price') }}</h3>
                            <form>
                                <div class="price-wrap">
                                    <div class="price-wrap-left">
                                        <div class="single-price">
                                            <input type="number" class="form-control" id="minPrice" name="min_price"
                                                placeholder="{{ __('$ Min') }}" min="1" />
                                        </div>
                                        <div class="single-price">
                                            <input type="number" class="form-control" id="maxPrice" name="max_price"
                                                placeholder="{{ __('$ Max') }}" />
                                        </div>
                                    </div>
                                    <button type="button" class="price-submit PriceSubmit"><i
                                            class="fas fa-play"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="single-widget colors-widget">
                            <h3 class="widget-title">{{ __('Colors') }}</h3>
                            <div class="colors-list">
                                @foreach ($colors as $color)
                                    <div class="single-colors">
                                        <div class="colors-left">
                                            <input style="background: {{ $color->ColorCode }}"
                                                class="form-check-input checkColor" type="checkbox"
                                                id="{{ $color->ColorCode }}" value="{{ $color->Name }}">
                                            <label class="form-check-label"
                                                for="{{ $color->ColorCode }}">{{ $color->Name }}</label>
                                        </div>
                                        <span class="colors-count">{{ productColorCount($color->id) }}</span>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="single-widget size-widget">
                            <h3 class="widget-title">{{ __('Size') }}</h3>
                            <div class="size-list">
                                @foreach ($sizes as $size)
                                    <div class="single-size">
                                        <input class="form-check-input checkSize" type="checkbox" id="{{ $size->id }}"
                                            value="{{ $size->Size }}">
                                        <label class="form-check-label"
                                            for="{{ $size->id }}">{{ $size->Size }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="single-widget brand-widget">
                            <h3 class="widget-title">{{ __('Brand') }}</h3>
                            <div class="brand-list">
                                @foreach ($brands as $brand)
                                    <div class="single-brand">
                                        <div class="brand-left">
                                            <input class="form-check-input CheckBrand" type="checkbox"
                                                value="{{ $brand->en_BrandName }}">
                                            <label class="form-check-label"
                                                for="Renuar">{{ $brand->en_BrandName }}</label>
                                        </div>
                                        <span class="brand-count">{{ productBrandCount($brand->id) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="product-section-top">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="product-section-top-left">
                                    <button class="sidebar-filter d-block d-lg-none" type="button"
                                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                        aria-controls="offcanvasExample">
                                        {{ __('Filter') }} <img
                                            src="{{ asset('frontend/assets/images/angle-down.svg') }}"
                                            alt="angle-down" />
                                    </button>
                                    <div class="list-grid-view">
                                        <a href="{{ route('category.product_left', $category_m->id) }}"
                                            class="view-btn list-view"><img class="view-icon"
                                                src="{{ asset('frontend/assets/images/view-list.svg') }}"
                                                alt="view-list" /></a>
                                        <a href="{{ route('category.product', $category_m->id) }}"
                                            class="view-btn grid-view active"><img class="view-icon"
                                                src="{{ asset('frontend/assets/images/view-grid.svg') }}"
                                                alt="view-grid" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="product-filter">
                                    <form>
                                        <select class="form-select sortingFilter">
                                            <option value="stop">{{ __('Categories') }}</option>
                                            @foreach (Category() as $item)
                                                <option value="{{ route('category.product', $item->id) }}">
                                                    {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="filterProduct">
                        <div class="product-list">
                            <div class="row">
                                @foreach ($products as $product)
                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                                                    <span
                                                        class="regular-price">{{ currencyConverter($product->Price) }}</span>
                                                    <span
                                                        class="price">{{ currencyConverter($product->Discount_Price) }}</span>
                                                </div>
                                                {{-- <input type="hidden" name="quantity" value="1" id="product_quantity"> --}}
                                                <a href="javascript:void(0)" title="{{ __('Add to cart') }}"
                                                    class="add-cart addCart"
                                                    data-id="{{ $product->id }}">{{ __('Add To Cart') }} <i
                                                        class="icon fas fa-plus-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="pagination-area mt-30">
                                <ul class="paginations text-center">
                                    {{ $products->links('vendor.pagination.custom') }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- For Mobile Filter Sidebar Start -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{ __('Filter') }}</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="sidebar-widget-area">
                <div class="single-widget search-widget p-0 bg-transparent">
                    <h3 class="widget-title">{{ __('Search Here') }}</h3>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control bg-color" id="searchWidgetMobile"
                                name="searchWidgetMobile" placeholder="{{ __('Product Store') }}" />
                            <button type="button" class="search-btn searchWidgetMobile"><i
                                    class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="single-widget categories-widget p-0 bg-transparent">
                    <h3 class="widget-title">{{ __('Categories') }}</h3>
                    <div class="categories-list">
                        @foreach ($category as $cateogories)
                            <div class="single-categorie">
                                <div class="categorie-left">
                                    <input class="form-check-input CheckCategoryMobile" type="checkbox"
                                        value="{{ $cateogories->en_Category_Name }}">
                                    <label class="form-check-label">{{ $cateogories->en_Category_Name }}</label>
                                </div>
                                <span class="categories-count">{{ productCategoryCount($cateogories->id) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="single-widget price-widget p-0 bg-transparent">
                    <h3 class="widget-title">{{ __('Price') }}</h3>
                    <form>
                        <div class="price-wrap">
                            <div class="price-wrap-left">
                                <div class="single-price">
                                    <input type="number" class="form-control" id="minPriceMobile" name="minprice1"
                                        placeholder="{{ __('$ Min') }}" />
                                </div>
                                <div class="single-price">
                                    <input type="number" class="form-control" id="maxPriceMobile" name="maxprice1"
                                        placeholder="{{ __('$ Max') }}" />
                                </div>
                            </div>
                            <button type="button" class="price-submit PriceSubmitMobile"><i
                                    class="fas fa-play"></i></button>
                        </div>
                    </form>
                </div>
                <div class="single-widget colors-widget p-0 bg-transparent">
                    <h3 class="widget-title">{{ __('Colors') }}</h3>
                    <div class="colors-list">
                        @foreach ($colors as $color)
                            <div class="single-colors">
                                <div class="colors-left">
                                    <input style="background: {{ $color->ColorCode }}"
                                        class="form-check-input checkColorMobile" type="checkbox"
                                        id="{{ $color->ColorCode }}" value="{{ $color->Name }}">
                                    <label class="form-check-label"
                                        for="{{ $color->ColorCode }}">{{ $color->Name }}</label>
                                </div>
                                <span class="colors-count">{{ productColorCount($color->id) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="single-widget size-widget p-0 bg-transparent">
                    <h3 class="widget-title">{{ __('Size') }}</h3>
                    <div class="size-list">

                        @foreach ($sizes as $size)
                            <div class="single-size">
                                <input class="form-check-input checkSizeMobile" type="checkbox" id="{{ $size->id }}"
                                    value="{{ $size->Size }}">
                                <label class="form-check-label" for="{{ $size->id }}">{{ $size->Size }}</label>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="single-widget brand-widget p-0 bg-transparent">
                    <h3 class="widget-title">{{ __('Brand') }}</h3>
                    <div class="brand-list">
                        @foreach ($brands as $brand)
                            <div class="single-brand">
                                <div class="brand-left">
                                    <input class="form-check-input CheckBrandMobile" type="checkbox"
                                        value="{{ $brand->en_BrandName }}">
                                    <label class="form-check-label" for="Renuar">{{ $brand->en_BrandName }}</label>
                                </div>
                                <span class="brand-count">{{ productBrandCount($brand->id) }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- For Mobile Filter Sidebar End -->

    <!-- Product Area End -->
    <div id="shortingUrl" data-url="{{ route('product.shorting') }}"></div>
    <div id="checkCategoryFilter" data-url="{{ route('product.filtering') }}"></div>

    <div id="checkCategoryFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="checkColorFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="checkBrandFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="checkSizeFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="searchWidgetFilter" data-url="{{ route('product.filtering') }}"></div>
    <div id="minMaxPriceFilter" data-url="{{ route('product.filtering') }}"></div>

    <div id="AddToCompareItemUrl" data-url="{{ route('compare.add') }}"></div>
    <div id="AddToCartIntoSession" data-url="{{ route('add.to.cart') }}"></div>
    <div id="productWishlistUrl" data-url="{{ route('wishlist.add') }}"></div>
    <div id="productImgAsset" data-url="{{ asset(ProductImage()) }}"></div>

    @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/product.js') }}"></script>
    @endpush
@endsection
