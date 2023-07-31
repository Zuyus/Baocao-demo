@extends('admin.master', ['menu' => 'slider_banner', 'submenu' => 'special_offer'])
@section('title', 'Theme')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Special Offer') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Special Offer') }}</li>
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
                            <form enctype="multipart/form-data" method="POST"
                                action="{{ route('admin.theme.special.offer.update') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="input__group mb-25">
                                                <label for="en_title">{{ __('Title') }}
                                                    ({{ langString('en', false) }})</label>
                                                <input type="text" class="form-control" id="en_title" name="en_title"
                                                    required="" value="{{ $specialOffer->en_title }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr_title">{{ __('Title') }}
                                                    ({{ langString('fr', false) }})</label>
                                                <input type="text" class="form-control" id="fr_title" name="fr_title"
                                                    required="" value="{{ $specialOffer->fr_title }}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="url">{{ __('Url') }}</label>
                                                <input type="text" class="form-control" id="url" name="url"
                                                    required="" value="{{ $specialOffer->url }}">
                                            </div>

                                            @if ($specialOffer->image)
                                                <div class="input__group mb-25">
                                                    <label for="exampleInputEmail1">{{ __('image') }}</label>
                                                    <input type="file" class="form-control putImage5" name="image"
                                                        id="image">
                                                    <img class="admin_image"
                                                        src="{{ asset(offerImage() . $specialOffer->image) }}"
                                                        id="target5" />
                                                </div>
                                            @endif
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="input__group mb-25">
                                                <label for="category_id">{{ __('Category') }}</label>
                                                <select name="category_id" id="category_id" class="form-control">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->en_Category_Name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="discount">{{ __('Discount') }}</label>
                                                <input type="text" class="form-control" id="discount" name="discount"
                                                    required="" value="{{ $specialOffer->discount }}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="status">{{ __('Status') }}</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="1"
                                                        {{ $specialOffer->status == 1 ? 'selected' : '' }}>
                                                        {{ __('Show') }}</option>
                                                    <option value="0"
                                                        {{ $specialOffer->status == 0 ? 'selected' : '' }}>
                                                        {{ __('Hide') }}</option>
                                                </select>
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
