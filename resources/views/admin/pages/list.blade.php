@extends('admin.master', ['menu' => 'pages'])
@section('title', isset($title) ? $title : '')
@section('content')

    <div id="table-url" data-url="{{ route('admin.pages') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Pages')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Pages')}}</li>
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
                        <a href="{{route('admin.page.create')}}" class="btn btn-md btn-info">{{ __('Add Page')}}</a>
                    </div>
                </div>
                <div class="customers__table">
                    <table id="BlogTable" class="dataTableHover row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('Title')}}</th>
                            <th>{{ __('Details')}}</th>
                            <th>{{ __('URL')}}</th>
                            <th>{{ __('Action')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Row-->
    @push('post_scripts')
        <script src="{{asset('backend/js/admin/datatables/pages.js')}}"></script>
        <!-- Page level custom scripts -->
    @endpush
@endsection
