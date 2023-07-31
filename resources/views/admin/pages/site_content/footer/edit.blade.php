@extends('admin.master', ['menu' => 'site_content', 'submenu' => 'content_footer'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('General Setting')}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="#">{{ __('Home')}}</a></li>
                <li class="breadcrumb-item " aria-current="page">{{ __('General Setting')}}</li>
            </ol>
        </div>
        <div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form Basic -->
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ __('General Settings Edit Form')}}</h6>
                        </div>
                        <div class="card-body">
                            <form enctype="multipart/form-data" method="POST" action="{{route('admin.footer.information.update')}}">
                                @csrf
                                <input type="hidden" name="id" id="id" value="{{footerInformation()->id}}">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Street Address')}}</label>
                                    <textarea name="street_address" id="street_address" class="form-control summernote">{{footerInformation()->Street_Address}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Contact')}}</label>
                                    <textarea name="contact" id="contact" class="form-control summernote">{{footerInformation()->Contact}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Email')}}</label>
                                    <textarea name="email" id="email" class="form-control summernote">{{footerInformation()->Email}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('News Letter')}}</label>
                                    <textarea name="news_letter" id="news_letter" class="form-control summernote">{{footerInformation()->News_Letter}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Design Developed')}}</label>
                                    <textarea name="design_developed" id="design_developed" class="form-control summernote">{{footerInformation()->Design_Developed}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('Footer Logo')}}</label>
                                    <input type="file" class="form-control putImage1" name="footer_logo" id="footer_logo">
                                    <img class="admin_image" src="{{asset(footerImage().footerInformation()->Logo)}}" id="target1"/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('We Accepts')}}</label>
                                    <input type="file" class="form-control putImage2"  name="accepts" id="accepts">
                                    <img  class="admin_image_two" src="{{asset(footerImage().footerInformation()->Accepts)}}" id="target2"/>
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('Update Footer')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Row-->
        </div>
@endsection
