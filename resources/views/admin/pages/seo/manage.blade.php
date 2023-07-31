@extends('admin.master', ['menu' => 'seo', 'submenu' => $seo->slug])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('SEO Manage')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('SEO Manage')}}</li>
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
                                <div class="col-md-12">
                                    <div class="form-vertical__item bg-style">
                                        <form enctype="multipart/form-data" method="POST" action="{{route('admin.update_seo', $seo->slug)}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">{{ __('Title')}}</label>
                                                        <input type="text" class="form-control" id="title" name="title" value="{{$seo->title}}" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">{{ __('Description')}}</label>
                                                        <input type="text" class="form-control" id="description" name="description" value="{{$seo->description}}" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="input__group mb-25">
                                                        <label for="exampleInputEmail1">{{ __('Keywords')}}</label>
                                                        <input type="text" class="form-control" id="keywords" name="keywords" value="{{$seo->keywords}}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Add')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
