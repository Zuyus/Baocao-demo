@extends('admin.master', ['menu' => 'products', 'submenu' => 'product'])
@section('title', isset($title) ? $title : '')
@section('content')
    <div>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">{{ __('Edit Product')}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="{{route('admin.dashboard')}}">{{ __('Home')}}</a></li>
                <li class="breadcrumb-item " aria-current="page">{{ __('Product Edit')}}</li>
            </ol>
        </div>
        <div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form Basic -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{ __('English')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('France')}}</a>
                        </li>
                    </ul>

                    <div class="card mb-4">
                        <div class="tab-content slider-page-form" id="pills-tabContent">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">{{ __('Product')}}</h6>
                                <a href="{{route('admin.product')}}" class="btn btn-md btn-primary text-right">{{ __('All Products')}}</a>
                            </div>
                            <div class="card-body ">
                                <form enctype="multipart/form-data" method="POST" action="{{route('admin.product.update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Product Name')}}</label>
                                            <input type="text" class="form-control" id="en_product_name" name="en_product_name" value="{{$product->en_Product_Name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Brand Name')}}</label>
                                            <select class="form-control" id="en_brand_name" name="en_brand_name">
                                                <option value="">{{__('---SELECT A BRAND---')}}</option>
                                                @foreach(Brnad() as $item)
                                                    <option value="{{$item->id}}" {{$item->id == $product->Brand_Id ? 'selected' : ''}}>{{$item->en_BrandName}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Category Name')}}</label>
                                            <select class="form-control" id="en_category_name" name="en_category_name">
                                                <option value="">{{__('---SELECT A CATEGORY---')}}</option>
                                                @foreach(Category() as $item)
                                                    <option value="{{$item->id}}" {{$item->id == $product->Category_Id ? 'selected' : ''}} >{{$item->en_Category_Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Item Tag')}}</label>
                                            <select class="form-control" id="item_teg" name="item_teg">
                                                <option>{{__('---Select item---')}}</option>
                                                @foreach ($item_tags as $it)
                                                    <option value="{{$it->name}}" {{$it->name == $product->ItemTag ? 'selected' : ''}}>{{$it->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="select2Multiple">{{ __('Product Tag')}}</label>
                                            <select class="select2-multiple form-control tag_two" name="product_tag[]" multiple="multiple">
                                                <option value="">{{__('---SELECT A PRODUCT TAG---')}}</option>
                                                @foreach($tags as $tag)
                                                    <option value="{{$tag->name}}" {{selectProductTag($tag->name, $product->id)}}>{{$tag->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="select2Multiple">{{ __('Product Color')}}</label>
                                            <select class="select2-multiple form-control tag_two" name="color[]" multiple="multiple">
                                                @foreach($colors as $item)
                                                    <option value="{{$item->id}}" {{colorSelected($product->id, $item->id) == 1 ? 'selected' : ''}}>{{$item->Name}}</option >
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="select2Multiple">{{ __('Product Size')}}</label>
                                            <select class="select2-multiple form-control tag_one" name="size[]" multiple="multiple">
                                                @foreach($sizes as $item)
                                                    <option value="{{$item->id}}" {{sizeSelected($product->id, $item->id) == 1 ? 'selected' : ''}}>{{$item->Size}}</option >
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Quantity')}}</label>
                                            <input type="text" class="form-control" id="qty" name="qty" value="{{$product->Quantity}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Price')}}</label>
                                            <input type="text" class="form-control" id="price" name="price" value="{{$product->Price}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Discount')}}</label>
                                            <input type="text" class="form-control" id="discount" name="discount" value="{{$product->Discount}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Discount Price')}}</label>
                                            <input type="text" class="form-control" value="{{$product->Discount_Price}}" id="discount_price" name="discount_price" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('About')}}</label>
                                            <textarea name="en_about" id="en_about" class="form-control summernote">{!! clean($product->en_About) !!}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Description')}}</label>
                                            <textarea name="en_description" id="en_description" class="form-control summernote">{!! clean($product->en_Description) !!}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('ShippingReturn')}}</label>
                                            <textarea name="en_shippingreturn" id="en_shippingreturn" class="form-control summernote">{!! clean($product->en_ShippingReturn) !!}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('AdditionalInformation')}}</label>
                                            <textarea name="en_additionalinformation" id="en_additionalinformation" class="form-control summernote">{!! clean($product->en_AdditionalInformation) !!}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Primary Image')}}</label>
                                            <input type="file" class="form-control putImage1"  name="primary_image" id="primary_image">
                                            <img class="admin_image"  src="{{asset(ProductImage().$product->Primary_Image)}}" id="target1"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Image 2')}}</label>
                                            <input type="file" class="form-control putImage2"  name="image_two" id="image_two">
                                            <img   class="admin_image"  src="{{asset(ProductImage().$product->Image2)}}" id="target2"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Image Gallery Image')}}</label>
                                            <input type="file" class="form-control putImage3"  name="image_three" id="image_three">
                                            <img   class="admin_image"  src="{{asset(ProductImage().$product->Image3)}}" id="target3"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Image 3')}}</label>
                                            <input type="file" class="form-control putImage4"  name="image_four" id="image_four">
                                            <img   class="admin_image"  src="{{asset(ProductImage().$product->Image4)}}" id="target4"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Image 4')}}</label>
                                            <input type="file" class="form-control putImage5"  name="image_five" id="image_five">
                                            <img   class="admin_image"  src="{{asset(ProductImage().$product->Image5)}}" id="target5"/>
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox"  value="1" {{$product->Status == 1 ? 'checked' : ''}} name="status" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">{{ __('Status')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" value="1" {{$product->Featured_Product == 1 ? 'checked' : ''}} name="feature" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">{{ __('Featured Product')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" value="1" {{$product->Best_Selling == 1 ? 'checked' : ''}} name="best_sale" class="custom-control-input" id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3">{{ __('Best Selling')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" value="1" {{$product->On_Sale == 1 ? 'checked' : ''}} name="on_sale" class="custom-control-input" id="customSwitch4">
                                                <label class="custom-control-label" for="customSwitch4">{{ __('On Sale')}}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" value="1" {{$product->New_Arrival == 1 ? 'checked' : ''}} name="on_arrival" class="custom-control-input" id="customSwitch5">
                                                <label class="custom-control-label" for="customSwitch5">{{ __('New Arrival')}}</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">{{ __('Category Create')}}</button>
                                    </div>

                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Product Name')}}</label>
                                            <input type="text" class="form-control" id="fr_product_name" value="{{$product->fr_Product_Name}}" name="fr_product_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('About')}}</label>
                                            <textarea name="fr_about" id="fr_about" class="form-control">{{ $product->fr_About }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('Description')}}</label>
                                            <textarea name="fr_description" id="fr_description" class="form-control summernote">{!! clean($product->fr_Description) !!}</textarea>
                                        </div>



                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('ShippingReturn')}}</label>
                                            <textarea name="fr_shippingreturn" id="fr_shippingreturn" class="form-control summernote">{!! clean($product->fr_ShippingReturn) !!}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">{{ __('AdditionalInformation')}}</label>
                                            <textarea name="fr_additionalinformation" id="fr_additionalinformation" class="form-control summernote">{!! clean($product->fr_AdditionalInformation) !!}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">{{ __('Update')}}</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@push('post_scripts')
    <script src="{{asset('backend/js/admin/products/edit.js')}}"></script>
@endpush
@endsection
