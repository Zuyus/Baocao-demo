@extends('admin.master', ['menu' => 'advertise'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Advertise')}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">{{ __('Home')}}</a></li>
                <li class="breadcrumb-item " aria-current="page"><a href="{{route('admin.advertise')}}">{{ __('Advertise')}}</a></li>
            </ol>
        </div>
        <div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form Basic -->
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ __('Add Advertise')}}</h6>
                            <a href="{{route('admin.advertise')}}" class="btn btn-md btn-info text-right">{{ __('All Advertise')}}</a>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{route('admin.advertise.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Image One')}}</label>
                                    <input type="file" class="form-control putImage1" name="image_one" id="image_one">
                                    <img  src="" id="target1"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Image Two')}}</label>
                                    <input type="file" class="form-control putImage2"  name="image_two" id="image_two">
                                    <img  src="" id="target2"/>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Add')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->
        </div>
@endsection
