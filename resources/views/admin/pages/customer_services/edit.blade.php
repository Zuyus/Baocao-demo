@extends('admin.master')
@section('title', __('Dashboard'))
@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Advertise Edit')}}</h1>
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
                            <h6 class="m-0 font-weight-bold text-primary">{{ __('Advertise Form')}}</h6>
                            <a href="{{route('admin.advertise')}}" class="btn btn-md btn-info text-right">{{ __('All Advertise')}}</a>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{route('admin.customer.services.update')}}">
                                @csrf
                                <input type="hidden" name="id" value="{{$edit->id}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Description')}}</label>
                                    <textarea name="description" id="description" class="form-control summernote">{{$edit->Description}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Advertise Update')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->
        </div>
@endsection
