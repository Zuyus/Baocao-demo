@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'image_gallery'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Image Gallery Create')}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">{{ __('Site Contents')}}</a></li>
                <li class="breadcrumb-item " aria-current="page">{{ __('Image Gallery')}}</li>
            </ol>
        </div>
        <div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form Basic -->
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ __('Image Gallery Form')}}</h6>
                            <a href="{{route('admin.image.gallery')}}" class="btn btn-md btn-primary text-right">{{ __('All Image Gallery')}}</a>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{route('admin.image.gallery.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Image Gallery Image')}}</label>
                                    <input type="file" class="form-control putImage1"  name="image_gallery" id="image_gallery">
                                    <img   src="" id="target1"/>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Image Gallery Create')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->
        </div>
@endsection
