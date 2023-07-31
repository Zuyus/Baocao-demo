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
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <a href="{{ route('admin.physical.product.create') }}" class="product-create-card-link">
                                        <div class="card">
                                            <div class="card-body product-create-card">
                                                <div class="product-create-icon bg-primary bubble-shadow-small">
                                                    <i class="fab fa-product-hunt"></i>
                                                </div>
                                                <h2 class="card-text mt-3"><b>{{ __('Add Physical Product') }}</b></h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 mb-4">
                                    <a href="{{ route('admin.digital.product.create') }}" class="product-create-card-link">
                                        <div class="card">
                                            <div class="card-body product-create-card">
                                                <div class="product-create-icon bg-success bubble-shadow-small">
                                                    <i class="fab fa-digital-ocean"></i>
                                                </div>
                                                <h2 class="card-text mt-3"><b>{{ __('Add Digital Product') }}</b></h2>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
