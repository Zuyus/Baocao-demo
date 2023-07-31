@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'languages'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Edit Language')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Language')}}</li>
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
                                        <form enctype="multipart/form-data" method="POST" action="{{route('admin.language_update', $data->id)}}">
                                            @csrf
                                            <div class="input__group mb-25">
                                                <label for="select2Multiple">{{ __('Name')}}</label>
                                                <input type="text" class="form-control" placeholder="{{__('Name')}}" name="name" value="{{$data->name}}">
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="select2Multiple">{{ __('Direction')}}</label>
                                                <select name="direction" id="direction" class="form-control">
                                                    <option value="ltr" {{$data->direction == 'ltr' ? 'selected' : ''}}>{{__('LTR')}}</option>
                                                    <option value="rtl" {{$data->direction == 'rtl' ? 'selected' : ''}}>{{__('RTL')}}</option>
                                                </select>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="select2Multiple">{{ __('Status')}}</label>
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="1" {{$data->status == 1 ? 'selected' : ''}}>{{__('Active')}}</option>
                                                    <option value="0" {{$data->status != 1 ? 'selected' : ''}}>{{__('Disable')}}</option>
                                                </select>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="exampleInputEmail1">{{ __('Thumb')}}</label>
                                                <input type="file" class="form-control putImage2"  name="thumb" id="thumb">
                                                <img src="{{asset(IMG_LANGUAGE.$data->thumb)}}" id="target2" class="admin_image mt-2"/>
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update')}}</button>
                                            </div>
                                            
                                            <div class="form-vertical__item bg-style card shadow my-4">
                                                <div class="item-top mb-30">
                                                    <h2>{{__('Language Keywords & Values : ')}} {{$data->language}}</h2>
                                                </div>
                                                <div class="card-body p-4">
                                                    <div class="gd-responsive-table">
                                                        <table class="table table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>{{ __('Key') }}</th>
                                                                <th>{{ __('Value') }}</th>
                                                                <th>{{ __('Action') }}</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="new-field">
                                                            @foreach($lang as $key => $val)
                                                                <tr>
                                                                    <td>
                                                                        <input type="text" class="form-control" name="keys[]" value="{{ $key }}" readonly>
                                                                    </td>
                                                                    <td><input type="text" class="form-control" name="values[]" value="{{ $val }}"></td>
                                                                    <td>
                                                                        <div class="delete_language_field">
                                                                            <button class="btn btn-danger btn-sm"> <i class="fas fa-trash "></i></button>
                                                                        </div></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                    <div class="row justify-content-center mt-4">
                                                        <button type="button" class="btn btn-primary" id="add_more_language"><i class="fas fa-plus"> </i> {{__('Add More')}}</button>
                                                    </div>
                                                    <div class="row justify-content-center mt-4">
                                                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
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
            </div>
        </div>
    </div>
    @push('post_scripts')
        <script src="{{asset('backend/js/admin/language.js')}}"></script>
    @endpush
@endsection
