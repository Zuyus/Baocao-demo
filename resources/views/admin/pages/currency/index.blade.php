@extends('admin.master', ['menu' => 'currency'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div id="table-url" data-url="{{ route('admin.currency_list') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('Currency')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Currency')}}</li>
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
                        <button data-bs-toggle="modal" data-bs-target="#createModal1" class="btn btn-md btn-info">{{ __('Add Currency')}}</button>
                    </div>
                </div>
                <div class="customers__table">
                    <table id="CategoryTable" class="row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('Currency')}}</th>
                            <th>{{ __('ISO')}}</th>
                            <th>{{ __('Symbol')}}</th>
                            <th>{{ __('Position')}}</th>
                            <th>{{ __('Conversion Rate')}}</th>
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

    <!-- Modal -->
    <div class="modal fade" id="createModal1" tabindex="-1" role="dialog" aria-labelledby="createModalTitle1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="editModalLongTitle">{{__('Add')}}</h5>
                    <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" method="POST" action="{{route('admin.store_currency')}}">
                    <div class="modal-body">
                        @csrf
                        <div class="input__group mb-25">
                            <label for="question">{{__('Currency')}}</label>
                            <input type="text" name="currency" placeholder="{{__('Currency')}}">
                        </div>
                        <div class="input__group mb-25">
                            <label for="exampleInputEmail1">{{ __('ISO')}}</label>
                            <input type="text" name="iso" placeholder="{{__('ISO')}}">
                        </div>
                        <div class="input__group mb-25">
                            <label for="exampleInputEmail1">{{ __('Symbol')}}</label>
                            <input type="text" name="symbol" placeholder="{{__('Symbol')}}">
                        </div>
                        <div class="input__group mb-25">
                            <label for="exampleInputEmail1">{{ __('Position')}}</label>
                            <select name="position" id="">
                                <option value="">{{ __('Select Option') }}</option>
                                <option value="before">{{ __('Before') }}</option>
                                <option value="after">{{ __('After') }}</option>
                            </select>
                        </div>
                        <div class="input__group mb-25">
                            <label for="exampleInputEmail1">{{ __('Conversion Rate')}}</label>
                            <input type="number" name="convert_from_usd" min="1" step="0.01" placeholder="{{__('Conversion Rate')}}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">{{__('Close')}}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Add')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach ($currency as $crr)
        <div class="modal fade" id="editModal{{$crr->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalTitle{{$crr->id}}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="editModalLongTitle">{{__('Edit')}}</h5>
                        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form enctype="multipart/form-data" method="POST" action="{{route('admin.update_currency', encrypt($crr->id))}}">
                        <div class="modal-body">
                            @csrf
                            <div class="input__group mb-25">
                                <label for="question">{{__('Currency')}}</label>
                                <input type="text" name="currency" placeholder="{{__('Currency')}}" value="{{$crr->currency}}">
                            </div>
                            <div class="input__group mb-25">
                                <label for="exampleInputEmail1">{{ __('ISO')}}</label>
                                <input type="text" name="iso" placeholder="{{__('ISO')}}" value="{{$crr->iso}}">
                            </div>
                            <div class="input__group mb-25">
                                <label for="exampleInputEmail1">{{ __('Symbol')}}</label>
                                <input type="text" name="symbol" placeholder="{{__('Symbol')}}" value="{{$crr->symbol}}">
                            </div>
                            <div class="input__group mb-25">
                                <label for="exampleInputEmail1">{{ __('Position')}}</label>
                                <select name="position" id="">
                                    <option value="">{{ __('Select Option') }}</option>
                                    <option value="before" {{ $crr->position == 'before' ? 'selected' : '' }}>{{ __('Before') }}</option>
                                    <option value="after" {{ $crr->position == 'after' ? 'selected' : '' }}>{{ __('After') }}</option>
                                </select>
                            </div>
                            <div class="input__group mb-25">
                                <label for="exampleInputEmail1">{{ __('Conversion Rate')}}</label>
                                <input type="number" name="convert_from_usd" min="1" step="0.01" placeholder="{{__('Conversion Rate')}}" value="{{$crr->convert_from_usd}}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger me-0" data-bs-dismiss="modal">{{__('Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    @push('post_scripts')
        <script src="{{asset('backend/js/admin/datatables/currency.js')}}"></script>
        <!-- Page level custom scripts -->
    @endpush
@endsection
