@extends('admin.master', ['menu' => 'products', 'submenu' => 'product'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Edit Product') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Product') }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="gallery__area bg-style">
                <div class="gallery__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.product.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <input type="hidden" name="product_type" value="{{ PRODUCT_DIGITAL }}">
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" id="qty" name="qty" value="10000">
                                            <input type="hidden" name="en_shippingreturn" id="en_shippingreturn"
                                                value="N/A">
                                            <input type="hidden" name="fr_shippingreturn" id="fr_shippingreturn"
                                                value="N/A">
                                            <div class="input__group mb-25">
                                                <label for="en-product-name">{{ __('Product Name') }}</label>
                                                <input type="text" class="form-control" id="en-product-name"
                                                    name="en_product_name" value="{{ $product->en_Product_Name }}"
                                                    placeholder="{{ __('Name') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en-product-slug">{{ __('Product Slug') }}</label>
                                                <input type="text" class="form-control" id="en-product-slug"
                                                    name="en_product_slug" value="{{ $product->en_Product_Slug }}"
                                                    placeholder="{{ __('Slug') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="affiliate-link">{{ __('Affiliate Link') }}</label>
                                                <input type="text" class="form-control" id="affiliate-link"
                                                    name="affiliate_link" value="{{ $product->affiliate_link }}"
                                                    placeholder="{{ __('Link') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_brand_name">{{ __('Brand Name') }}</label>
                                                <select class="form-control" id="en_brand_name" name="en_brand_name">
                                                    <option value="">{{ __('---SELECT A BRAND---') }}</option>
                                                    @foreach (Brnad() as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $product->Brand_Id ? 'selected' : '' }}>
                                                            {{ $item->en_BrandName }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_category_name">{{ __('Category Name') }}</label>
                                                <select class="form-control" id="en_category_name"
                                                    name="en_category_name">
                                                    <option value="">{{ __('---SELECT A CATEGORY---') }}</option>
                                                    @foreach (Category() as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $item->id == $product->Category_Id ? 'selected' : '' }}>
                                                            {{ $item->en_Category_Name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="item_teg">{{ __('Item Tag') }}</label>
                                                <select class="form-control" id="item_teg" name="item_teg">
                                                    <option>{{ __('---Select item---') }}</option>
                                                    @foreach ($item_tags as $it)
                                                        <option value="{{ $it->name }}"
                                                            {{ $it->name == $product->ItemTag ? 'selected' : '' }}>
                                                            {{ $it->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="product_tag">{{ __('Product Tag') }}</label>
                                                <select class="select2-multiple form-control tag_two" id="product_tag" name="product_tag[]"
                                                    multiple="multiple">
                                                    <option value="">{{ __('---SELECT A PRODUCT TAG---') }}</option>
                                                    @foreach ($tags as $tag)
                                                        <option value="{{ $tag->name }}"
                                                            {{ selectProductTag($tag->name, $product->id) }}>
                                                            {{ $tag->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="price">{{ __('Price') }}</label>
                                                <input type="text" class="form-control" id="price" name="price"
                                                    value="{{ $product->Price }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label
                                                    for="discount">{{ __('Discount (in Percentage)') }}</label>
                                                <input type="text" class="form-control" id="discount" name="discount"
                                                    value="{{ $product->Discount }}" placeholder="Discount">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="discount_price">{{ __('Discount Price') }}</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $product->Discount_Price }}" id="discount_price"
                                                    name="discount_price" readonly>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="en_about">{{ __('About') }}</label>
                                                <textarea name="en_about" id="en_about" class="form-control" placeholder="About">{{ $product->en_About }}</textarea>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="en_description">{{ __('Description') }}</label>
                                                <textarea name="en_description" id="en_description" class="form-control summernote">{!! clean($product->en_Description) !!}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en_additionalinformation">{{ __('AdditionalInformation') }}</label>
                                                <textarea name="en_additionalinformation" id="en_additionalinformation"
                                                    class="form-control summernote">{!! clean($product->en_AdditionalInformation) !!}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="primary_image">{{ __('Primary Image') }}</label>
                                                <input type="file" class="form-control putImage1" name="primary_image"
                                                    id="primary_image">
                                                <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Primary_Image) }}"
                                                    id="target1" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="image_two">{{ __('Image 2') }}</label>
                                                <input type="file" class="form-control putImage2" name="image_two"
                                                    id="image_two">
                                                <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Image2) }}" id="target2" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="image_three">{{ __('Image Gallery Image') }}</label>
                                                <input type="file" class="form-control putImage3" name="image_three"
                                                    id="image_three">
                                                <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Image3) }}" id="target3" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="image_four">{{ __('Image 3') }}</label>
                                                <input type="file" class="form-control putImage4" name="image_four"
                                                    id="image_four">
                                                <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Image4) }}" id="target4" />
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="image_five">{{ __('Image 4') }}</label>
                                                <input type="file" class="form-control putImage5" name="image_five"
                                                    id="image_five">
                                                <img class="admin_image"
                                                    src="{{ asset(ProductImage() . $product->Image5) }}" id="target5" />
                                            </div>

                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->Status == 1 ? 'checked' : '' }} name="status"
                                                        class="custom-control-input" id="customSwitch1">
                                                    <label class="custom-control-label"
                                                        for="customSwitch1">{{ __('Status') }}</label>
                                                </div>
                                            </div>
                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->Featured_Product == 1 ? 'checked' : '' }}
                                                        name="feature" class="custom-control-input" id="customSwitch2">
                                                    <label class="custom-control-label"
                                                        for="customSwitch2">{{ __('Featured Product') }}</label>
                                                </div>
                                            </div>
                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->Best_Selling == 1 ? 'checked' : '' }} name="best_sale"
                                                        class="custom-control-input" id="customSwitch3">
                                                    <label class="custom-control-label"
                                                        for="customSwitch3">{{ __('Best Selling') }}</label>
                                                </div>
                                            </div>
                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->On_Sale == 1 ? 'checked' : '' }} name="on_sale"
                                                        class="custom-control-input" id="customSwitch4">
                                                    <label class="custom-control-label"
                                                        for="customSwitch4">{{ __('On Sale') }}</label>
                                                </div>
                                            </div>
                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1"
                                                        {{ $product->New_Arrival == 1 ? 'checked' : '' }} name="on_arrival"
                                                        class="custom-control-input" id="customSwitch5">
                                                    <label class="custom-control-label"
                                                        for="customSwitch5">{{ __('New Arrival') }}</label>
                                                </div>
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('fr', false) . ':' }}</h2>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr-product-name">{{ __('Product Name') }}</label>
                                                <input type="text" class="form-control" id="fr-product-name"
                                                    value="{{ $product->fr_Product_Name }}" name="fr_product_name" placeholder="{{ __('Name') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr-product-slug">{{ __('Product Slug') }}</label>
                                                <input type="text" class="form-control" id="fr-product-slug"
                                                    name="fr_product_slug" value="{{ $product->fr_Product_Slug }}" placeholder="{{ __('Slug') }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_about">{{ __('About') }}</label>
                                                <textarea name="fr_about" id="fr_about" class="form-control" placeholder="{{ __('About') }}">{{ $product->fr_About }}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_description">{{ __('Description') }}</label>
                                                <textarea name="fr_description" id="fr_description" class="form-control summernote">{!! clean($product->fr_Description) !!}</textarea>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_additionalinformation">{{ __('Additional Information') }}</label>
                                                <textarea name="fr_additionalinformation" id="fr_additionalinformation"
                                                    class="form-control summernote">{!! clean($product->fr_AdditionalInformation) !!}</textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @push('post_scripts')
        <script src="{{ asset('backend/js/admin/products/edit.js') }}"></script>
    @endpush
@endsection
