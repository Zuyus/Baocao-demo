@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')
@section('content')
    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">{{ __('Blog Details') }}</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="{{ route('front') }}">{{ __('Home') }}</a></li>
                    <li class="page-item">{{ __('Blog Details') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- blog-single-area area start here  -->
    <div class="blog-single-area section-bottom">
        <div class="container">
            <div class="blog-single-top">
                <div class="blog-thumbnail">
                    <img class="blog-image" src="{{ asset(BlogImage() . $blog->Big_Image) }}"
                        alt="{{ __('blog-single-image') }}" />
                    <div class="blog-info">
                        <div class="blog-info-wrap">
                            <ul class="blog-meta">
                                <li class="single-meta"><span
                                        class="blog-date">{{ \Carbon\Carbon::parse($blog->created_at)->format('F j, Y') }}</span>
                                </li>
                            </ul>
                            <h2 class="blog-title">{!! clean(Str::limit(langConverter($blog->en_Description_One, $blog->fr_Description_One), 205)) !!}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row blog-details-content-wrap">
                {{-- <div class="col-lg-10 offset-lg-1"> --}}
                <div class="blog-meta-box">
                    <div class="post-author">
                        <img class="author-image"
                            src="{{ isset($blog->author->image) ? asset(AdminProfilePicture() . $blog->author->image) : Avatar::create($blog->author->name)->toBase64() }}"
                            alt="post-author" />
                        <div class="author-info">
                            <h3 class="author-name">{{ $blog->author->name }}</h3>
                            <p class="author-designation">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                    <div class="social-media">
                        <ul class="media-lsit">
                            <li class="medi-item"><a
                                    href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.details', $blog->id) }}"
                                    class="media-link"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="medi-item"><a
                                    href="https://pinterest.com/pin/create/button/?url={{ route('blog.details', $blog->id) }}"
                                    class="media-link"><i class="fab fa-pinterest-p"></i></a></li>
                            <li class="medi-item"><a
                                    href="https://twitter.com/intent/tweet?url={{ route('blog.details', $blog->id) }}"
                                    class="media-link"><i class="fab fa-twitter"></i></a></li>
                            <li class="medi-item"><a href="javascript:void(0)" class="media-link"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                {!! langConverter($blog->en_Description_Two, $blog->fr_Description_Two) !!}

                <!-- comments-area start here  -->
                <div class="comments-area mb-40">
                    <h3 class="comments-title">{{ $comment }} {{ __('COMMENTS') }}</h3>
                    <ul class="comment-list">
                        @if ($blog)
                            @foreach ($blog->comments as $comment)
                                <li class="single-comment">
                                    <div class="comment-meta">
                                        <img class="comments-author-image"
                                            src="{{ isset($comment->user->image) ? asset(AdminProfilePicture() . $comment->user->image) : Avatar::create($comment->user->name)->toBase64() }}"
                                            alt="comments-author" />
                                        <div class="comment-meta-info">
                                            <h4 class="author-name">{{ $comment->Name }}</h4>
                                            <span
                                                class="comment-time">{{ \Carbon\Carbon::parse($comment->created_at)->format('d M Y') . ' at ' . \Carbon\Carbon::parse($comment->created_at)->format('H:i') }}
                                                |</span>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <p class="comment-text">{{ $comment->Comment }}</p>
                                    </div>
                                    <a class="reply ReplyComment" href="#write_reply"
                                        data-comment="{{ $comment->id }}">{{ __('Reply') }}</a>
                                    @if (isset($comment->replies[0]))
                                        @foreach ($comment->replies as $reply)
                                            <ul class="children">
                                                <li class="single-comment">
                                                    <div class="comment-meta">
                                                        <img class="comments-author-image"
                                                            src="{{ isset($reply->user->image) ? asset(AdminProfilePicture() . $reply->user->image) : Avatar::create($reply->user->name)->toBase64() }}"
                                                            alt="comments-author" />
                                                        <div class="comment-meta-info">
                                                            <h4 class="author-name">{{ $reply->Name }}</h4>
                                                            <span
                                                                class="comment-time">{{ \Carbon\Carbon::parse($reply->created_at)->format('d M Y') . ' at ' . \Carbon\Carbon::parse($reply->created_at)->format('H:i') }}
                                                                |</span>
                                                        </div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p class="comment-text">{{ $reply->Comment }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        @endforeach
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <!-- comments-area start here  -->

                <!-- comment-respond start here  -->
                <div class="comment-respond" id="write_reply">
                    <h3 class="reply-title text-center">{{ __('Leave a comment') }}</h3>
                    <div class="comemnt-form">
                        <form action="{{ route('user.blog.comment') }}" method="post">
                            @csrf
                            <div class="row">
                                @if (Auth::user())
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                @else
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Contact_Name" name="name"
                                                placeholder="{{ __('Contact Name') }}" required="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="Emil_Address" name="email"
                                                placeholder="{{ __('Email Address') }}" required="" />
                                        </div>
                                    </div>
                                @endif
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control message-box" id="comment" name="comment" rows="3"
                                            placeholder="{{ __('Type Message Here..') }}."></textarea>
                                    </div>
                                </div>
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <input type="hidden" name="comment_id" id="comment_id">
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="submit-btn">{{ __('Submit Comment') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    @push('post_script')
        <script src="{{ asset('frontend/assets/js/pages/blog_details.js') }}"></script>
    @endpush()
@endsection
