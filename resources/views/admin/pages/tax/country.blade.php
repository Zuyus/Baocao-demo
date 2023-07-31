@extends('admin.master', ['menu' => 'tax'])
@section('title', isset($title) ? $title : '')
@section('content')

    <div id="table-url" data-url="{{ route('admin.country_taxation_list') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{ __('Tax Settings') }}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('Tax Settings') }}</li>
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
                        <button data-bs-toggle="modal" data-bs-target="#createModal1"
                            class="btn btn-md btn-info">{{ __('Add') }}</button>
                    </div>
                </div>
                <div class="customers__table">
                    <table id="BlogTable" class="row-border data-table-filter table-style">
                        <thead>
                            <tr>
                                <th>{{ __('Country') }}</th>
                                <th>{{ __('Tax Rate (%)') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createModal1" tabindex="-1" role="dialog" aria-labelledby="createModalTitle1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="editModalLongTitle">{{ __('Add') }}</h5>
                    <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" method="POST" action="{{ route('admin.country_tax_store') }}">
                    <div class="modal-body">
                        @csrf
                        <div class="input__group mb-25">
                            <label for="country">{{ __('Country') }}</label>
                            <select name="country" id="country">
                                <option value="">{{ __('---Country---') }}</option>
                                @foreach (country() as $cn)
                                    <option value="{{ $cn }}">{{ $cn }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input__group mb-25">
                            <label for="exampleInputEmail1">{{ __('Tax Rate (In Percentage)') }}</label>
                            <input type="number" min="0" step="0.01" name="percentage" placeholder="{{ __('Tax Rate') }}"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger me-2"
                            data-bs-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($taxes as $tax)
        <div class="modal fade" id="editModal{{ $tax->id }}" tabindex="-1" role="dialog"
            aria-labelledby="editModalTitle{{ $tax->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="editModalLongTitle">{{ __('Edit') }}</h5>
                        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form enctype="multipart/form-data" method="POST"
                        action="{{ route('admin.country_tax_update', encrypt($tax->id)) }}">
                        <div class="modal-body">
                            @csrf
                            <div class="input__group mb-25">
                                <label for="country">{{ __('Country') }}</label>
                                <input name="country" id="country" value="{{ $tax->country }}" readonly>
                            </div>
                            <div class="input__group mb-25">
                                <label for="exampleInputEmail1">{{ __('Tax Rate (In Percentage)') }}</label>
                                <input type="number" min="0" step="0.01" name="percentage"
                                    placeholder="{{ __('Tax Rate') }}" value="{{ $tax->percentage }}">
                            </div>
                            <div class="input__group mb-25">
                                <label for="status">{{ __('Status') }}</label>
                                <select name="status" id="status">
                                    <option value="{{ ACTIVE }}" {{ $tax->status == ACTIVE ? 'selected' : '' }}>
                                        {{ __('Active') }}</option>
                                    <option value="{{ INACTIVE }}"
                                        {{ $tax->status == INACTIVE ? 'selected' : '' }}>
                                        {{ __('Inactive') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger me-2"
                                data-bs-dismiss="modal">{{ __('Close') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Edit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    @push('post_scripts')
        <script src="{{ asset('backend/js/admin/datatables/tax/country.js') }}"></script>
        <!-- Page level custom scripts -->
    @endpush
@endsection
