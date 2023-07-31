<div>
    <div class="image-gallery-area section-top pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-header-area">
                        <h3 class="sub-title">
                            {{ langConverter(siteContentHomePage('image_gallery')->en_Title, siteContentHomePage('image_gallery')->fr_Title) }}
                        </h3>
                        <h2 class="section-title">
                            {{ langConverter(siteContentHomePage('image_gallery')->en_Description_One, siteContentHomePage('image_gallery')->fr_Description_One) }}
                        </h2>
                    </div>
                    @foreach ($image_gallery->take(2) as $key => $item)
                        @if ($key == 0)
                            <div class="single-gallery">
                                <img class="gallery-image" src="{{ asset(ImageGallery() . $item->Image) }}"
                                    alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image" href="{{ asset(ImageGallery() . $item->Image) }}"><i
                                            class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                        @else
                            <div class="single-gallery big-height">
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
                <div class="col-lg-4 col-md-4">
                    @foreach ($image_gallery->skip(2)->take(3) as $key => $item)
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
                <div class="col-lg-4 col-md-4">
                    @foreach ($image_gallery->skip(5)->take(2) as $key => $item)
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
    </div>
</div>
