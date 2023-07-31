@extends('admin.master', ['menu' => 'menus', 'submenu' => 'submenus'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Submenus')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Submenus')}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="customers__area bg-style mb-30">
                <div class="item-title">
                    <div class="col-xs-6">
                        <a href="{{route('admin.create_submenu')}}" class="btn btn-md btn-info">{{ __('Add Submenu')}}</a>
                    </div>
                </div>
                <div class="customers__table">
                    <table id="BlogTable" class="dataTableHover row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('Name')}}</th>
                            <th>{{ __('URL')}}</th>
                            <th>{{ __('Parent Menu')}}</th>
                            <th>{{ __('Status')}}</th>
                            <th>{{ __('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($menus as $menu)
                            <tr>
                                <td>{{$menu->en_name}}</td>
                                <td>{{$menu->url}}</td>
                                <td>{{$menu->menu->en_name}}</td>
                                <td>{{$menu->status == ACTIVE ? __('Published') : __('Drafted')}}</td>
                                <td>
                                    <a href="{{route('admin.edit_submenu', encrypt($menu->id))}}" class="btn-action me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{route('admin.delete_submenu', encrypt($menu->id))}}" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">{{__('No data found!')}}</td>
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
