<div>
    <div class="image-gallery-area-v2 section-top pb-110">
        <div class="container">
            <div class="section-header-two text-center">
                <h2 class="section-title">
                    {{ langConverter(siteContentHomePage('image_gallery')->en_Title, siteContentHomePage('image_gallery')->fr_Title) }}
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach ($image_gallery->take(1) as $key => $item)
                                <div class="single-gallery border-left">
                                    <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                        alt="gallery" />
                                    <div class="popuo-overlay">
                                        <a class="popup-image" href="{{ asset(ImageGallery() . $item->Image) }}"><i
                                                class="view-icon flaticon-view"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @foreach ($image_gallery->skip(1)->take(1) as $key => $item)
                                <div class="single-gallery border-bottom">
                                    <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                        alt="gallery" />
                                    <div class="popuo-overlay">
                                        <a class="popup-image" href="{{ asset(ImageGallery() . $item->Image) }}"><i
                                                class="view-icon flaticon-view"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @foreach ($image_gallery->skip(2)->take(2) as $key => $item)
                                <div class="single-gallery">
                                    <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                        alt="gallery" />
                                    <div class="popuo-overlay">
                                        <a class="popup-image" href="{{ asset(ImageGallery() . $item->Image) }}"><i
                                                class="view-icon flaticon-view"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    @foreach ($image_gallery->skip(4)->take(2) as $key => $item)
                        @if ($key == 0)
                            <div class="single-gallery border-top">
                                <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                    alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image" href="{{ asset(ImageGallery() . $item->Image) }}"><i
                                            class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                        @else
                            <div class="single-gallery">
                                <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                    alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image" href="{{ asset(ImageGallery() . $item->Image) }}"><i
                                            class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
