@extends('admin.master', ['menu' => 'settings', 'submenu' => 'general_settings'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('General Setting')}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#">{{ __('Settings')}}</a></li>
                <li class="breadcrumb-item " aria-current="page">{{ __('General Setting')}}</li>
            </ol>
        </div>
        <div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form Basic -->
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ __('General Settings')}}</h6>
                            <a href="{{route('admin.general.settings')}}" class="btn btn-md btn-primary text-right">{{ __('All General Setting')}}</a>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{route('admin.general.settings.update')}}">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{$edit->id}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Title')}}</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$edit->Title}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('MetaAuthor')}}</label>
                                    <input type="text" class="form-control" name="metaauthor" id="metaauthor" value="{{$edit->MetaAuthor}}" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('MetaDescription')}}</label>
                                    <textarea name="metadescription" id="metadescription" class="form-control summernote">{{$edit->MetaDescription}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Description')}}</label>
                                    <textarea name="metakeywords" id="metakeywords" class="form-control summernote">{{$edit->MetaKeywords}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Logo')}}</label>
                                    <input type="file" class="form-control putImage1" name="logo" id="logo">
                                    <img class="admin_image" src="{{asset(GeneralSettingsImage().$edit->Logo)}}" id="target1"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Favicon')}}</label>
                                    <input type="file" class="form-control putImage2"  name="favicon" id="favicon">
                                    <img  class="admin_image" src="{{asset(GeneralSettingsImage().$edit->Favicon)}}" id="target2"/>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Update General Settings')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->
        </div>
@endsection
