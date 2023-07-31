<!-- mobile-menu-area area start here  -->
<div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
    <div class="mobile-menu-area">
        <div class="offcanvas-header">
            <a class="brand-logo" href="{{ route('front') }}"><img class="brand-image"
                    src="{{ asset(IMG_LOGO_PATH . $allsettings['main_logo']) }}"
                    alt="{{ $allsettings['app_title'] }}" /></a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="menu-search-form">
            <form>
                <div class="search-wrap">
                    <select class="form-select">
                        <option selected>{{ __('Category') }}</option>
                        @foreach (Category() as $item)
                            <option value="{{ route('category.product', $item->id) }}">
                                {{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</option>
                        @endforeach
                    </select>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobilesearch" name="search"
                            placeholder="{{ __('Search Here') }}" />
                        <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <nav class="main-menu">
            <ul class="menu-list">
                <li class="menu-item"><a class="menu-link"
                        href="{{ route('front') }}">{{ staticMenuName('home') }}</a></li>
                <li class="menu-item">
                    <span class="menu-expand"></span>
                    <a class="menu-link" href="#">{{ staticMenuName('shop') }}</a>
                    <ul class="sub-menu">
                        @foreach (Category() as $item)
                            <li class="sub-menu-item"><a class="sub-menu-link"
                                    href="{{ route('category.product', $item->id) }}">{{ langConverter($item->en_Category_Name, $item->fr_Category_Name) }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                @foreach ($all_menus as $menu)
                    @if ($menu->submenus->count() == 0)
                        <li class="menu-item"><a class="menu-link"
                                href="{{ $menu->url }}">{{ langConverter($menu->en_name, $menu->fr_name) }}</a>
                        </li>
                    @else
                        <li class="menu-item">
                            <span class="menu-expand"></span>
                            <a class="menu-link"
                                href="#">{{ langConverter($menu->en_name, $menu->fr_name) }}</a>
                            <ul class="sub-menu">
                                @foreach ($menu->submenus as $submenu)
                                    <li class="sub-menu-item"><a class="sub-menu-link"
                                            href="{{ $submenu->url }}">{{ langConverter($submenu->en_name, $submenu->fr_name) }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
                <li class="menu-item"><a class="menu-link"
                        href="{{ route('about.us') }}">{{ staticMenuName('about-us') }}</a></li>
                <li class="menu-item"><a class="menu-link"
                        href="{{ route('blog') }}">{{ staticMenuName('blog') }}</a></li>
                <li class="menu-item"><a class="menu-link"
                        href="{{ route('contact.us') }}">{{ staticMenuName('contact') }}</a></li>

            </ul>
        </nav>
        <div class="menu-bottom">
            <div class="switcher-lang-currency">
                <div class="currency-switcher">
                    <span class="flag">{{ currencySymbol()[currency()] }}</span>
                    <a href="#" class="currency">{{ currency() }} <i class="fas fa-angle-down"></i></a>
                    <ul class="currency-list">
                        @foreach (currency_array(currency()) as $crr)
                            <li class="single-currency"><span class="flag">{{ $crr->symbol }}</span><a
                                    class="currency-text"
                                    href="{{ route('currency.switch', $crr->currency) }}">{{ $crr->currency }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="lang-switcher">
                    @if (app()->getLocale() == 'en')
                        @if(getLanguage('en')->status == 1)
                        <span class="flag"><img src="{{ asset(IMG_LANGUAGE . getLanguage('en')->thumb) }}"
                                alt="united-states" /></span>
                        <a href="javascript:void(0)" class="lang">{{ getLanguage('en')->name }}
                            @if(getLanguage('fr')->status == 1)
                                <i class="fas fa-angle-down"></i>
                            @endif
                        </a>
                        @endif
                    @elseif(app()->getLocale() == 'fr')
                        @if(getLanguage('fr')->status == 1)
                        <span class="flag"><img src="{{ asset(IMG_LANGUAGE . getLanguage('fr')->thumb) }}"
                                alt="india" /></span>
                        <a href="javascript:void(0)" class="lang">{{ getLanguage('fr')->name }}
                            @if(getLanguage('en')->status == 1)
                                <i class="fas fa-angle-down"></i>
                            @endif
                        </a>
                        @endif
                    @endif

                    <ul class="{{ activeLanguage() > 1 ? 'lang-list' : '' }}">
                        @if (app()->getLocale() == 'en')
                            @if(getLanguage('fr')->status == 1)
                                <li class="single-lang"><span class="flag"><img
                                            src="{{ asset(IMG_LANGUAGE . getLanguage('fr')->thumb) }}"
                                            alt="united-states" /></span><a class="lang-text"
                                        href="{{ route('locale.switch', 'fr') }}">{{ getLanguage('fr')->name }}</a>
                                </li>
                            @endif
                        @elseif(app()->getLocale() == 'fr')
                            @if(getLanguage('en')->status == 1)
                                <li class="single-lang"><span class="flag"><img
                                            src="{{ asset(IMG_LANGUAGE . getLanguage('en')->thumb) }}"
                                            alt="united-states" /></span><a class="lang-text"
                                        href="{{ route('locale.switch', 'en') }}">{{ getLanguage('en')->name }}</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            </div>
            @if (Auth::user())
                @if (Auth::user()->is_admin == ACTIVE)
                    <a class="account-btn mb-3" href="{{ route('admin.dashboard') }}"><i
                            class="user-icon flaticon-user"></i> {{ __('Dashboard') }}</a>
                @else
                    <a class="account-btn mb-3" href="{{ route('user.profile') }}"><i
                            class="user-icon flaticon-user"></i> {{ __('Profile') }}</a>
                @endif
                <a class="account-btn mb-3" href="{{ route('user.logout') }}"><i class="user-icon flaticon-user"></i>
                    {{ __('Logout') }}</a>
            @else
                <a class="account-btn" href="{{ route('login') }}"><i class="user-icon flaticon-user"></i>
                    {{ __('My Account') }} </a>
            @endif
        </div>
    </div>
</div>
<!-- mobile-menu-area area end here  -->
