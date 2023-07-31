@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'image_gallery'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div id="table-url" data-url="{{ route('admin.image.gallery') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Image Gallery') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Image Gallery') }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">
                <div class="customers__table">
                    <table id="ImageGallery" class="dataTableHover row-border data-table-filter table-style">
                        <thead>
                            <tr>
                                <th>{{ __('Image') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
    @push('post_scripts')
        <script src="{{ asset('backend/js/admin/datatables/about_us_image_gallery.js') }}"></script>
    @endpush
@endsection
