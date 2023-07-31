<div>
    <footer class="footer-area-v2">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget about-widget">
                            <a href="{{ route('front') }}" class="footer-brand-logo mb-25">
                                <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}"
                                    alt="{{ $allsettings['app_title'] }}" />
                            </a>
                            <p class="address-text">
                                {{ $allsettings['address'] }} <br />
                                {{ $allsettings['state'] }} <br />
                                {{ $allsettings['country'] }}
                            </p>
                            <div class="block-content mb-30">
                                <p class="contact">{{ __('Call us:') }} {{ $allsettings['call_us'] }}</p>
                                <p class="contact">{{ __('Email:') }} {{ $allsettings['email'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">{{ __('Category') }}</h3>
                            <ul class="widget-menu show">
                                @foreach (Category() as $item)
                                    <li class="meni-item">
                                        <a class="menu-link"
                                            href="{{ route('category.product', $item->id) }}">{{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">{{ __('Brand') }}</h3>
                            <ul class="widget-menu">
                                @foreach (Brnad() as $item)
                                    <li class="meni-item">
                                        <a class="menu-link"
                                            href="{{ route('brand.product', $item->id) }}">{{ langConverter($item->en_BrandName, $item->fr_BrandName) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">{{ __('Customer Service') }}</h3>
                            <ul class="widget-menu">
                                <li class="meni-item">
                                    <a class="menu-link" href="{{ route('faq') }}">{{ __('Help & FAQ') }}</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link"
                                        href="{{ route('terms.conditions') }}">{{ __('Terms of Conditions') }}</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link"
                                        href="{{ route('privacy.policy') }}">{{ __('Privacy Policy') }}</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link"
                                        href="{{ route('refund.policy') }}">{{ __('Online Returns Policy') }}</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link"
                                        href="{{ route('shipping.return') }}">{{ __('Shipping & Return') }}</a>
                                </li>
                                <li class="meni-item">
                                    <a class="menu-link" href="{{ route('contact.us') }}">{{ __('Contact Us') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget social-media-widget">
                            <h3 class="widget-title">{{ __('Social Links') }}</h3>
                            <ul class="social-media">
                                @if (getSocialLink()->Facebook)
                                    <li class="social-media-item">
                                        <a class="social-media-link" href="{{ getSocialLink()->Facebook }}"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                @endif
                                @if (getSocialLink()->Skype)
                                    <li class="social-media-item">
                                        <a class="social-media-link" href="{{ getSocialLink()->Skype }}"><i
                                                class="fab fa-skype"></i></a>
                                    </li>
                                @endif
                                @if (getSocialLink()->Twitter)
                                    <li class="social-media-item">
                                        <a class="social-media-link" href="{{ getSocialLink()->Twitter }}"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                @endif
                                @if (getSocialLink()->Linkedin)
                                    <li class="social-media-item">
                                        <a class="social-media-link" href="{{ getSocialLink()->Linkedin }}"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                @endif
                                @if (getSocialLink()->Instagram)
                                    <li class="social-media-item">
                                        <a class="social-media-link" href="{{ getSocialLink()->Instagram }}"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-wrap">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <p class="copyright-text">
                                {{ $allsettings['footer_title'] }}
                            </p>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            @if ($allsettings['news_letter_status'] == '1')
                                <img class="payment-icons"
                                    src="{{ asset(IMG_FOOTER_PATH . $allsettings['news_letter_img']) }}"
                                    alt="accepts-image" />
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
