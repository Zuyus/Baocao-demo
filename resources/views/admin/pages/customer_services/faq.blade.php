@extends('admin.master', ['menu' => 'company', 'submenu' => 'faq'])
@section('title', isset($title) ? $title : '')
@section('content')

    <div id="table-url" data-url="{{ route('admin.faq_list') }}"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="breadcrumb__content">
                <div class="breadcrumb__content__left">
                    <div class="breadcrumb__title">
                        <h2>{{__('FAQ')}}</h2>
                    </div>
                </div>
                <div class="breadcrumb__content__right">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('FAQ')}}</li>
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
                        <a href="javascript:void(0)" class="btn btn-md btn-info" data-bs-toggle="modal" data-bs-target="#createModal1">{{ __('Add FAQ')}}</a>
                    </div>
                </div>
                <div class="customers__table">
                    <table id="CustomerServiceTable" class="dataTableHover row-border data-table-filter table-style">
                        <thead>
                        <tr>
                            <th>{{ __('Question')}}</th>
                            <th>{{ __('Answer')}}</th>
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
                <form enctype="multipart/form-data" method="POST" action="{{route('admin.faq_store')}}">
                    <div class="modal-body">
                        @csrf
                        <div class="input__group mb-25">
                            <label for="question">{{__('Question')}} {{langString('en')}}</label>
                            <input type="text" name="question" placeholder="{{__('Enter Question')}}">
                        </div>
                        <div class="input__group mb-25">
                            <label for="question">{{__('Question')}} {{langString('fr')}}</label>
                            <input type="text" name="question_fr" placeholder="{{__('Enter Question')}}">
                        </div>
                        <div class="input__group mb-25">
                            <label for="exampleInputEmail1">{{ __('Answer')}} {{langString('en')}}</label>
                            <textarea name="answer" id="answer" placeholder="{{__('Enter Answer')}}"></textarea>
                        </div>
                        <div class="input__group mb-25">
                            <label for="exampleInputEmail1">{{ __('Answer')}}  {{langString('fr')}}</label>
                            <textarea name="answer_fr" id="answer-fr" placeholder="{{__('Enter Answer')}}"></textarea>
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
    @foreach ($faqs as $fq)
        <div class="modal fade" id="editModal{{$fq->id}}" tabindex="-1" role="dialog" aria-labelledby="editModalTitle{{$fq->id}}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="editModalLongTitle">{{__('View')}}</h5>
                        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form enctype="multipart/form-data" method="POST" action="{{route('admin.faq_update', encrypt($fq->id))}}">
                        <div class="modal-body">
                            @csrf
                            <div class="input__group mb-25">
                                <label for="question">{{__('Question')}} {{langString('en')}}</label>
                                <input type="text" name="question" value="{{$fq->question}}">
                            </div>
                            <div class="input__group mb-25">
                                <label for="question">{{__('Question')}} {{langString('fr')}}</label>
                                <input type="text" name="question_fr" value="{{$fq->question_fr}}">
                            </div>
                            <div class="input__group mb-25">
                                <label for="exampleInputEmail1">{{ __('Answer')}} {{langString('en')}}</label>
                                <textarea name="answer" id="answer">{{$fq->answer}}</textarea>
                            </div>
                            <div class="input__group mb-25">
                                <label for="exampleInputEmail1">{{ __('Answer')}} {{langString('fr')}}</label>
                                <textarea name="answer_fr" id="answer-fr">{{$fq->answer_fr}}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger me-2" data-bs-dismiss="modal">{{__('Close')}}</button>
                            <button type="submit" class="btn btn-primary">{{ __('Update')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="viewModal{{$fq->id}}" tabindex="-1" role="dialog" aria-labelledby="viewModalTitle{{$fq->id}}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="viewModalLongTitle">{{__('View')}}</h5>
                        <button type="button" class="close text-white" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p><b>{{__('Question:')}}</b> {{$fq->question}}</p>
                        <b>{{__('Answer')}}</b>
                        <p>{!! clean($fq->answer) !!}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{__('Close')}}</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!--Row-->
    @push('post_scripts')
        <script src="{{asset('backend/js/admin/datatables/faq.js')}}"></script>
        <!-- Page level custom scripts -->
    @endpush
@endsection
