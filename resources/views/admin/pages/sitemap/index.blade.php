@extends('admin.master', ['menu' => 'sitemap'])
@section('title', isset($title) ? $title : '')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Sitemap')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Sitemap')}}</li>
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
                        <a href="{{route('admin.sitemap_create')}}" class="btn btn-md btn-info">{{ __('Add Sitemap')}}</a>
                    </div>
                </div>
                <div class="customers__table">
                    <table id="TestimonialTable" class="dataTableHover row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('URL')}}</th>
                            <th>{{ __('File Name')}}</th>
                            <th>{{ __('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($sitemaps as $sitemap)
                            <tr>
                                <td>{{$sitemap->sitemap_url}}</td>
                                <td>{{$sitemap->filename}}</td>
                                <td>
                                    <a href="{{route('admin.sitemap_download', $sitemap->id)}}" class="btn-action me-2"><i class="fa fa-download"></i></a>
                                    <a href="{{route('admin.sitemap_delete', $sitemap->id)}}" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">{{__('No data found!')}}</td>
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
