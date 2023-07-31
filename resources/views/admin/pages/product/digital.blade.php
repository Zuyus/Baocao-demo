@extends('admin.master', ['menu' => 'products', 'submenu' => 'product'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Add Product') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
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
                            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.product.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{ langString('en', false) . ':' }}</h2>
                                            </div>
                                            <input type="hidden" name="product_type" value="{{ PRODUCT_DIGITAL }}">
                                            <input type="hidden" id="qty" name="qty" value="10000">
                                            <input type="hidden" name="en_shippingreturn" id="en_shippingreturn"
                                                value="N/A">
                                            <input type="hidden" name="fr_shippingreturn" id="fr_shippingreturn"
                                                value="N/A">
                                            <div class="input__group mb-25">
                                                <label for="en-product-name">{{ __('Product Name') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="en-product-name"
                                                    name="en_product_name" value="{{ old('en_product_name') }}"
                                                    placeholder="{{ __('Name') }}">
                                                @error('en_product_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="en-product-slug">{{ __('Product Slug') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="en-product-slug"
                                                    name="en_product_slug" value="{{ old('en_product_slug') }}"
                                                    placeholder="{{ __('Slug') }}">
                                                @error('en_product_slug')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="en_brand_name">{{ __('Brand Name') }}<span
                                                                class="text-danger">*</span></label>
                                                        <select class="form-control" id="en_brand_name"
                                                            name="en_brand_name">
                                                            <option value="">{{ __('---Select item---') }}</option>
                                                            @foreach (Brnad() as $item)
                                                                <option value="{{ $item->id }}">
                                                                    {{ $item->en_BrandName }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('en_brand_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="en_category_name">{{ __('Category Name') }}</label>
                                                        <select class="form-control" id="en_category_name"
                                                            name="en_category_name">
                                                            <option value="">{{ __('---Select item---') }}<span
                                                                    class="text-danger">*</span></option>
                                                            @foreach ($category as $item)
                                                                <option value="{{ $item->id }}">
                                                                    {{ $item->en_Category_Name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('en_category_name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="item_teg">{{ __('Item Tag') }}</label>
                                                        <select class="form-control" id="item_teg" name="item_teg">
                                                            <option value="">{{ __('---Select item---') }}</option>
                                                            @foreach ($item_tags as $it)
                                                                <option value="{{ $it->name }}">{{ $it->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('item_teg')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="select2Multiple">{{ __('Product Tag') }}</label>
                                                        <select class="select2-multiple form-control tag_two"
                                                            name="product_tag[]" multiple="multiple">
                                                            @foreach ($tags as $tag)
                                                                <option value="{{ $tag->name }}">{{ $tag->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('product_tag')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="price">{{ __('Price') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="price" name="price"
                                                    value="{{ old('price') }}" placeholder="{{ __('Price') }}">
                                                @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="discount">{{ __('Discount (in Percentage)') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" min="0" class="form-control" id="discount"
                                                    name="discount" value="{{ old('discount') ?? 0 }}"
                                                    placeholder="{{ __('Discount') }}">
                                                @error('discount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="discount_price">{{ __('Discount Price') }}</label>
                                                <input type="number" class="form-control" id="discount_price"
                                                    name="discount_price" readonly value="{{ old('discount_price') }}"
                                                    placeholder="{{ __('Discount Price') }}">
                                                @error('discount_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="digital-type">{{ __('Select Type') }}<span
                                                                class="text-danger">*</span></label>
                                                        <select name="digital_type" id="digital-type"
                                                            class="form-control">
                                                            <option value="file">{{ __('File') }}</option>
                                                            <option value="link">{{ __('Link') }}</option>
                                                        </select>
                                                        @error('digital_type')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6" id="select-type">
                                                    <div class="input__group mb-25">
                                                        <label for="digital-file">{{ __('File') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" class="form-control" name="digital_file"
                                                            id="digital-file">
                                                        @error('digital_file')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="en_about">{{ __('About') }}<span
                                                        class="text-danger">*</span></label>
                                                <textarea name="en_about" id="en_about" class="form-control" placeholder="{{ __('About') }}">{{ old('en_about') }}</textarea>
                                                @error('en_about')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="en_description">{{ __('Description') }}<span
                                                        class="text-danger">*</span></label>
                                                <textarea name="en_description" id="summernote" class="form-control">{{ old('en_description') }}</textarea>
                                                @error('en_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="input__group mb-25">
                                                <label
                                                    for="en_additionalinformation">{{ __('AdditionalInformation') }}<span
                                                        class="text-danger">*</span></label>
                                                <textarea name="en_additionalinformation" id="summernote2" class="form-control">{{ old('en_additionalinformation') }}</textarea>
                                                @error('en_additionalinformation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="primary_image">{{ __('Primary Image') }}<span
                                                                class="text-danger">*</span></label>
                                                        <input type="file" class="form-control putImage1"
                                                            name="primary_image" id="primary_image">
                                                        <img src="" id="target1" />
                                                        @error('primary_image')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="image_three">{{ __('Image Gallery Image') }}</label>
                                                        <input type="file" class="form-control putImage3"
                                                            name="image_three" id="image_three">
                                                        <img src="" id="target3" />
                                                        @error('image_three')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="image_two">{{ __('Image 2') }}</label>
                                                        <input type="file" class="form-control putImage2"
                                                            name="image_two" id="image_two">
                                                        <img src="" id="target2" />
                                                        @error('image_two')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="image_four">{{ __('Image 3') }}</label>
                                                        <input type="file" class="form-control putImage4"
                                                            name="image_four" id="image_four">
                                                        <img src="" id="target4" />
                                                        @error('image_four')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input__group mb-25">
                                                        <label for="image_five">{{ __('Image 4') }}</label>
                                                        <input type="file" class="form-control putImage5"
                                                            name="image_five" id="image_five">
                                                        <img src="" id="target5" />
                                                        @error('image_five')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1" name="status"
                                                        class="custom-control-input" id="customSwitch1">
                                                    <label class="custom-control-label"
                                                        for="customSwitch1">{{ __('Status') }}</label>
                                                </div>
                                                @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1" name="feature"
                                                        class="custom-control-input" id="customSwitch2">
                                                    <label class="custom-control-label"
                                                        for="customSwitch2">{{ __('Featured Product') }}</label>
                                                </div>
                                                @error('feature')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1" name="best_sale"
                                                        class="custom-control-input" id="customSwitch3">
                                                    <label class="custom-control-label"
                                                        for="customSwitch3">{{ __('Best Selling') }}</label>
                                                </div>
                                                @error('best_sale')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1" name="on_sale"
                                                        class="custom-control-input" id="customSwitch4">
                                                    <label class="custom-control-label"
                                                        for="customSwitch4">{{ __('On Sale') }}</label>
                                                </div>
                                                @error('on_sale')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" value="1" name="on_arrival"
                                                        class="custom-control-input" id="customSwitch5">
                                                    <label class="custom-control-label"
                                                        for="customSwitch5">{{ __('New Arrival') }}</label>
                                                </div>
                                                @error('on_arrival')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
                                                <label for="fr-product-name">{{ __('Product Name') }}<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="fr-product-name"
                                                    name="fr_product_name" value="{{ old('fr_product_name') }}"
                                                    placeholder="{{ __('Name') }}">
                                                @error('fr_product_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr-product-slug">{{ __('Product Slug') }}</label>
                                                <input type="text" class="form-control" id="fr-product-slug"
                                                    name="fr_product_slug" value="{{ old('fr_product_slug') }}"
                                                    placeholder="{{ __('Slug') }}">
                                                @error('fr_product_slug')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_about">{{ __('About') }}</label>
                                                <textarea name="fr_about" id="fr_about" class="form-control" placeholder="{{ __('About') }}">{{ old('fr_about') }}</textarea>
                                                @error('fr_about')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_description">{{ __('Description') }}<span
                                                        class="text-danger">*</span></label>
                                                <textarea name="fr_description" id="summernote3" class="form-control"></textarea>
                                                @error('fr_description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="input__group mb-25">
                                                <label
                                                    for="fr_additionalinformation">{{ __('AdditionalInformation') }}<span
                                                        class="text-danger">*</span></label>
                                                <textarea name="fr_additionalinformation" id="summernote4" class="form-control"></textarea>
                                                @error('fr_additionalinformation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
@endsection
@push('post_scripts')
    <script src="{{ asset('backend/js/admin/products/digital.js') }}"></script>
    <script>
        "use strict";
        $(document).ready(function() {
            $("#summernote").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });

        $(document).ready(function() {
            $("#summernote2").summernote({
                placeholder: 'Additional Information',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote3").summernote({
                placeholder: 'Description',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
        $(document).ready(function() {
            $("#summernote4").summernote({
                placeholder: 'Additional Information',
                height: 300
            });
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
