@extends('admin.master', ['menu' => 'menus', 'submenu' => 'dynamic_menus'])
@section('title', isset($title) ? $title : '')
@section('title', __('Dashboard'))
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Add Menu')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Menu')}}</li>
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
                            <form enctype="multipart/form-data" method="POST" action="{{route('admin.update_menu', encrypt($menu->id))}}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{langString('en', false).':'}}</h2>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="en-title">{{ __('Name')}}</label>
                                                <input type="text" class="form-control" id="en-name" name="en_name" placeholder="{{__('Name')}}" required="" value="{{$menu->en_name}}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="url">{{ __('URL')}}</label>
                                                <input type="text" class="form-control" id="url" name="url" placeholder="{{__('URL')}}" required="" value="{{$menu->url}}">
                                            </div>

                                            <div class="input__group mb-25">
                                                <label for="status">{{ __('Status')}}</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="{{ACTIVE}}" {{$menu->status == ACTIVE ? 'SELECTED' : ''}}>{{__('Publish')}}</option>
                                                    <option value="{{INACTIVE}}" {{$menu->status == INACTIVE ? 'SELECTED' : ''}}>{{__('Draft')}}</option>
                                                </select>
                                            </div>
                                            <div class="input__button">
                                                <button type="submit" class="btn btn-blue">{{ __('Update')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-vertical__item bg-style">
                                            <div class="item-top mb-30">
                                                <h2>{{langString('fr', false).':'}}</h2>
                                            </div>
                                            <div class="input__group mb-25">
                                                <label for="fr-title">{{ __('Name')}}</label>
                                                <input type="text" class="form-control" id="fr-name" name="fr_name" placeholder="{{__('Name')}}" required="" value="{{$menu->fr_name}}">
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
    @push('post_scripts')
        <script src="{{asset('backend/js/admin/datatables/pages.js')}}"></script>
    @endpush
@endsection

