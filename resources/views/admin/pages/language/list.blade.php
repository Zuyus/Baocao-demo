@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'languages'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Languages')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Languages')}}</li>
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
                            <th>{{ __('Name')}}</th>
                            <th>{{ __('Thumb')}}</th>
                            <th>{{ __('Status')}}</th>
                            <th>{{ __('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($languages as $lang)
                            <tr>
                                <td>{{$lang->name}}</td>
                                <td><img src="{{asset(IMG_LANGUAGE.$lang->thumb)}}" alt="{{$lang->locale}}"></td>
                                <td>
                                    @if($lang->status == 1)
                                        <span class="status active">Active</span>
                                    @else
                                        <span class="status alert-danger">Disable</span>
                                    @endif
                                </td>
                                <td><a href="{{route('admin.language_edit', $lang->id)}}" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">{{__('No Data Found!')}}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->
@endsection
