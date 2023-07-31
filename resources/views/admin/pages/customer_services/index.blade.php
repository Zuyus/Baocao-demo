@extends('admin.master')
@push('post_styles')
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush
@section('content')

    <div id="table-url" data-url="{{ route('admin.customer.services') }}"></div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Category')}}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">{{ __('Home')}}</a></li>
            <li class="breadcrumb-item " aria-current="page">{{ __('Category')}}</li>
        </ol>
    </div>
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ __('Category Table')}}</h6>
                <div class="col-xs-6 text-right">
                    <a href="{{route('admin.category.create')}}" class="btn btn-md btn-info">{{ __('Create Category')}}</a>
                </div>
            </div>
            <div class="table-responsive p-3">
                <table class="dataTableHover table align-items-center table-flush table-hover" id="CustomerServiceTable">
                    <thead class="thead-light">
                    <tr>
                        <th>{{ __('Location')}}</th>
                        <th>{{ __('Description')}}</th>
                        <th>{{ __('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Row-->
    @push('post_scripts')
        <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('backend/js/admin/datatables/customer_service.js')}}"></script>
        <!-- Page level custom scripts -->
    @endpush
@endsection
