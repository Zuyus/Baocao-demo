<div>
    <div class="mobile-header-area d-block d-lg-none">
        <div class="container">
            <div class="menu-wrap">
                <div class="header-left">
                    <a class="brand-logo" href="{{ route('front') }}"><img class="brand-image"
                            src="{{ asset(IMG_LOGO_PATH . $allsettings['main_logo']) }}" alt="zairito" /></a>
                </div>
                <div class="header-right">
                    <ul class="btn-list">
                        <li class="single-item wishlist-area"><a class="single-btn wishlist-btn"
                                href="{{ route('wishlist') }}"><i class="btn-icon flaticon-like"></i></a></li>
                        <li class="single-item compare-area"><a class="single-btn compare-btn"
                                href="{{ route('compare') }}"><i class="btn-icon flaticon-bar-chart"></i></a></li>
                        <li class="single-item cart-area"><a class="single-btn cart-btn" data-bs-toggle="offcanvas"
                                href="#cartOffcanvasSidebar" role="button" aria-controls="cartOffcanvasSidebar"><i
                                    class="btn-icon flaticon-shopping-bag"></i></a></li>
                        @if (Auth::check())
                            @if (Auth::user()->is_admin == ACTIVE)
                                <li class="single-item user-area">
                                    <a class="single-btn user-btn" href="{{ route('admin.dashboard') }}">
                                        <i class="btn-icon flaticon-user"></i>
                                    </a>
                                </li>
                            @else
                                <li class="single-item user-area">
                                    <a class="single-btn user-btn" href="{{ route('user.profile') }}">
                                        <i class="btn-icon flaticon-user"></i>
                                    </a>
                                </li>
                            @endif
                        @else
                            <li class="single-item user-area"><a class="single-btn user-btn"
                                    href="{{ route('login') }}"><i class="btn-icon flaticon-user"></i></a></li>
                        @endif
                    </ul>
                    <button class="menu-bar" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu"><i
                            class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
