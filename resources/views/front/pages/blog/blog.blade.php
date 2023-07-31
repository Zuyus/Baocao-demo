@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{__('Blog')}}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{route('front')}}">{{__('Home')}}</a></li>
                    <li class="page-item">{{__('Blog')}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Blog Page area start here  -->
    <div class="blog-area blog-page-area section">
        <div class="container">
            <div class="row">
                <!-- Blog Item Start -->
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-grid-blog">
                        <div class="blog-thumbnail">
                            <a href="{{route('blog.details',$blog->id)}}"><img class="thumbnail-image" src="{{asset(BlogImage().$blog->Small_Image)}}" alt="blog" /></a>
                        </div>
                        <div class="blog-info">
                            <ul class="blog-category">
                                @foreach($blog->tags as $Item)
                                    @foreach($Item->Tag as $n)
                                        <li class="single-category"><a class="category-text" href="{{route('blog.details',$blog->id)}}">{{$n}}</a></li>
                                    @endforeach
                                @endforeach
                            </ul>
                            <h3 class="blog-title"><a class="blog-link" href="{{route('blog.details',$blog->id)}}">{{langConverter($blog->en_Title,$blog->fr_Title)}}</a></h3>
                            <p class="blog-content">{!! Str::limit(clean(langConverter($blog->en_Description_Two,$blog->fr_Description_Two)),205) !!}</p>
                            <a class="blog-btn" href="{{route('blog.details',$blog->id)}}">{{__('See Details')}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="pagination-area mt-30">
                    <ul class="paginations text-center">
                        {{ $blogs->links('vendor.pagination.custom') }}
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Blog Page area end here  -->
@endsection
