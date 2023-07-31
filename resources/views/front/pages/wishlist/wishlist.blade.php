@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Wish List') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ __('Wish List') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- wish-list area start here  -->
    <div class="wish-list-area section">
        <div class="container">
            <div class="row">

                <div class="col-12 wish-list-table">
                    <div class="table-responsive">
                        <div id="wishlistTable">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">{{ __('Image') }}</th>
                                        <th scope="col">{{ __('Product Name') }}</th>
                                        <th scope="col">{{ __('Price') }}</th>
                                        <th scope="col">{{ __('Action') }}</th>
                                        <th scope="col">{{ __('Remove') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $wishlist)
                                        <tr>
                                            <td>
                                                <div class="product-image">
                                                    <a
                                                        href="{{ route('single.product', $wishlist->product->en_Product_Slug) }}"><img
                                                            class="product-thumbnal"
                                                            src="{{ asset(ProductImage() . $wishlist->product->Primary_Image) }}"
                                                            alt="product" /></a>
                                                    <div class="product-flags">

                                                        @if ($wishlist->product->ItemTag)
                                                            <span
                                                                class="product-flag sale">{{ $wishlist->product->ItemTag }}</span>
                                                        @endif
                                                        @if ($wishlist->product->Discount)
                                                            <span
                                                                class="product-flag discount">{{ __('-') }}{{ $wishlist->product->Discount }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-info text-center">
                                                    <h3 class="product-name"><a class="product-link"
                                                            href="{{ route('single.product', $wishlist->product->en_Product_Slug) }}">{{ $wishlist->product->en_Product_Name }}</a>
                                                    </h3>
                                                    <!-- This is server side code. User can not modify it. -->
                                                    {!! productReview($wishlist->product->id) !!}
                                                    <div class="variable-single-item color-switch">
                                                        <div class="product-variable-color">
                                                            <input type="hidden" name="quantity" value="1"
                                                                id="product_quantity">
                                                            @foreach ($wishlist->product->colors as $color)
                                                                <label>
                                                                    <input type="hidden" name="colorId"
                                                                        value="{{ $color->id }}">
                                                                    <input name="productColor" class="color-select"
                                                                        type="radio" value="{{ $color->id }}">
                                                                    <span
                                                                        style="background:{{ $color->ColorCode }};"></span>
                                                                </label>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="product-price text-center">
                                                    <span
                                                        class="regular-price">{{ currencyConverter($wishlist->product->Price) }}</span>
                                                    <span
                                                        class="price">{{ currencyConverter($wishlist->product->Discount_Price) }}</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="action-area">
                                                    <a href="javascript:void(0)" title="{{ __('Add To Cart') }}"
                                                        data-id="{{ $wishlist->product->id }}"
                                                        class="add-cart action-btn addCart">{{ __('Add To Cart') }} <i
                                                            class="icon fas fa-plus-circle"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <button class="delet-btn deleteWishlist" data-id="{{ $wishlist->id }}"
                                                    title="Delete Item">
                                                    <img src="{{ asset('frontend/assets/images/close.svg') }}"
                                                        alt="close" /></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- wish-list area end here  -->

    <div id="deleteWishListUrl" data-url="{{ route('wishlist.delete') }}"></div>
    <div id="AddToCartIntoSession" data-url="{{ route('add.to.cart') }}"></div>
    @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/wishlist.js') }}"></script>
    @endpush()
@endsection
