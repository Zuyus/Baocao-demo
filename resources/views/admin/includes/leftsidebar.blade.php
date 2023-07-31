<!-- Sidebar area start -->
<div class="sidebar__area">
    <div class="sidebar__close">
        <button class="close-btn">
            <i class="fa fa-close"></i>
        </button>
    </div>
    <div class="sidebar__brand">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset(IMG_LOGO_PATH . $allsettings['footer_logo']) }}" alt="icon">
        </a>
    </div>
    <ul id="sidebar-menu" class="sidebar__menu">
        <li class="{{ isset($menu) && $menu == 'dashboard' ? 'mm-active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('admin/images/icons/sidebar/dashboard.svg') }}" alt="icon">
                <span>{{ __('Dashboard') }}</span>
            </a>
        </li>
        @canany(['user-list'])
            <li class="{{ isset($menu) && $menu == 'admins' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-user"></i>
                    <span>{{ __('Admin Manage') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'admin_list' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.admin_list') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Admin List') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'add_admin' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.create_admin') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Add Admin') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'roles' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.role_list') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Roles') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['category-list', 'brand-list'])
            <li class="{{ isset($menu) && $menu == 'catbad' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-list"></i>
                    <span>{{ __('Category and Brand') }}</span>
                </a>
                <ul>
                    @can('category-list')
                        <li class="{{ isset($submenu) && $submenu == 'category' ? 'mm-active' : '' }}">
                            <a href="{{ route('admin.category') }}">
                                <i class="fa fa-circle"></i>
                                <span>{{ __('Category') }}</span>
                            </a>
                        </li>
                    @endcan
                    @can('brand-list')
                        <li class="{{ isset($submenu) && $submenu == 'brand' ? 'mm-active' : '' }}">
                            <a href="{{ route('admin.brand') }}">
                                <i class="fa fa-circle"></i>
                                <span>{{ __('Brand') }}</span>
                            </a>
                        </li>
                    @endcan

                </ul>
            </li>
        @endcanany
        @canany(['product-list'])
            <li class="{{ isset($menu) && $menu == 'products' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fab fa-product-hunt"></i>
                    <span>{{ __('Products') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'product' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.product.create') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Add Product') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'product_list' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.product') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Product List') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'color' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.product.color') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Product Color') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'size' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.product.size') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Product Size') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['order-list'])
            <li class="{{ isset($menu) && $menu == 'shipment' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span>{{ __('Order Management') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'orders_all' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.orders', 'all') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('All Orders') }}</span>
                            <span class="badge bg-info text-white">{{ orderCount() }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'orders_pending' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.orders', 'pending') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Pending Orders') }}</span>
                            <span class="badge bg-info text-white">{{ orderCount(ORDER_PENDING) }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'orders_processing' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.orders', 'processing') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Processing Orders') }}</span>
                            <span class="badge bg-info text-white">{{ orderCount(ORDER_PROCESSING) }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'orders_shipped' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.orders', 'shipped') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Shipped Orders') }}</span>
                            <span class="badge bg-info text-white">{{ orderCount(ORDER_SHIPPED) }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'orders_delivered' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.orders', 'delivered') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Delivered Orders') }}</span>
                            <span class="badge bg-info text-white">{{ orderCount(ORDER_DELIVERED) }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'orders_returned' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.orders', 'returned') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Returned Orders') }}</span>
                            <span class="badge bg-info text-white">{{ orderCount(ORDER_RETURN) }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['transaction-list'])
            <li class="{{ isset($menu) && $menu == 'transactions' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.transactions') }}">
                    <i class="fas fa-random"></i>
                    <span>{{ __('Transactions') }}</span>
                </a>
            </li>
        @endcanany
        @canany(['tax-list'])
            <li class="{{ isset($menu) && $menu == 'tax' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.country_taxation_list') }}">
                    <i class="fas fa-percent"></i>
                    <span>{{ __('Tax Settings') }}</span>
                </a>
            </li>
        @endcanany
        @canany(['delivery-charge-list'])
            <li class="{{ isset($menu) && $menu == 'delivery_charge' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.country_dc_list') }}">
                    <i class="fas fa-shipping-fast"></i>
                    <span>{{ __('Delivery Charge') }}</span>
                </a>
            </li>
        @endcanany
        @canany(['currency-list'])
            <li class="{{ isset($menu) && $menu == 'currency' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.currency_list') }}">
                    <i class="fa fa-dollar-sign"></i>
                    <span>{{ __('Currency') }}</span>
                </a>
            </li>
        @endcanany
        @canany(['currency-list'])
            <li class="{{ isset($menu) && $menu == 'coupon' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.coupon') }}">
                    <i class="fas fa-code"></i>
                    <span>{{ __('Coupon Code') }}</span>
                </a>
            </li>
        @endcanany



        @canany(['advertise-list'])
            <li class="{{ isset($menu) && $menu == 'advertise' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.advertise') }}">
                    <i class="fas fa-ad"></i>
                    <span>{{ __('Advertise') }}</span>
                </a>
            </li>
        @endcanany
        @canany(['blog-list'])
            <li class="{{ isset($menu) && $menu == 'blog' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.blog') }}">
                    <i class="fab fa-blogger-b"></i>
                    <span>{{ __('Blog') }}</span>
                </a>
            </li>
        @endcanany
        @canany(['product-create', 'product-edit'])
            <li class="{{ isset($menu) && $menu == 'tags' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-tags"></i>
                    <span>{{ __('Tags') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'product_tag' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.product.tag') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Product Tag') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'item_tag' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.item.tag') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Item Tag') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['crm-list'])
            <li class="{{ isset($menu) && $menu == 'cms' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-blog"></i>
                    <span>{{ __('CRM') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'contact_us' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.contact.us.index') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Contact Us') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'subscribers' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.subscribe.index') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Subscribers') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['user-list'])
            <li class="{{ isset($menu) && $menu == 'users' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-users"></i>
                    <span>{{ __('Users') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'customer_list' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.customer_list') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Customer List') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['cms-list'])
            <li class="{{ isset($menu) && $menu == 'site_content' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-cube"></i>
                    <span>{{ __('CMS') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'general_settings' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.general.settings') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('General Settings') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'content_home' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.home.page.site.content') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Home Page') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'content_about' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.about.page.site.content') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('About Page') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'content_social_link' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.social.link') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Social Link') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'image_gallery' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.image.gallery') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Image Gallery') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'testimonial' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.testimonial') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Testimonial') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'languages' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.language_list') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Languages') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        <li class="{{ isset($menu) && $menu == 'theme_management' ? 'mm-active' : '' }}">
            <a class="has-arrow" href="#">
                <i class="fas fa-cog"></i>
                <span>{{ __('Theme Management') }}</span>
            </a>
            <ul>
                <li class="{{ isset($submenu) && $submenu == 'theme' ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.theme') }}">{{ __('Select Theme') }}</a>
                </li>
            </ul>
        </li>

        <li class="{{ isset($menu) && $menu == 'slider_banner' ? 'mm-active' : '' }}">
            <a class="has-arrow" href="#">
                <i class="fas fa-list-ol"></i>
                <span>{{ __('Slider & Banner') }}</span>
            </a>
            <ul>
                @canany(['banner-list'])
                    <li class="{{ isset($submenu) && $submenu == 'banner' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.banner') }}">{{ __('Banner') }} ({{ __('Home two') }})</a>
                    </li>
                @endcanany
                @canany(['slider-list'])
                    <li class="{{ isset($submenu) && $submenu == 'slider' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.slider') }}">{{ __('Slider') }} ({{ __('Home one') }})</a>
                    </li>
                @endcanany
                <li class="{{ isset($submenu) && $submenu == 'special_offer' ? 'mm-active' : '' }}">
                    <a href="{{ route('admin.theme.special.offer') }}">{{ __('Offer') }}
                        ({{ __('Home two') }})</a>
                </li>
            </ul>
        </li>
        @canany(['cms-create', 'cms-edit'])
            <li class="{{ isset($menu) && $menu == 'seo' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-cube"></i>
                    <span>{{ __('SEO Management') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'home' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'home') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Home') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'about-us' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'about-us') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('About Us') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'contact' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'contact') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Contact') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'blog' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'blog') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Blog') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'all-products' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'all-products') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Products') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'cart' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'cart') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Cart') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'checkout' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'checkout') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Checkout') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'wishlist' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'wishlist') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Wishlist') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'compare' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'compare') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Compare') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'sign-in' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'sign-in') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Sign In') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'sign-up' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'sign-up') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Sign Up') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'forget-password' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'forget-password') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Forget Password') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'reset-password' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.manage_seo', 'reset-password') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Reset Password') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['menu-list'])
            <li class="{{ isset($menu) && $menu == 'pages' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.pages') }}">
                    <i class="fas fa-book"></i>
                    <span>{{ __('Manage Pages') }}</span>
                </a>
            </li>
            <li class="{{ isset($menu) && $menu == 'menus' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fa fa-bars"></i>
                    <span>{{ __('Manage Menus') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'static_menus' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.static_menus') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Static Menus') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'dynamic_menus' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.dynamic_menus') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Dynamic Menus') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'submenus' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.submenus') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Submenus') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
        @canany(['cms-list'])
            <li class="{{ isset($menu) && $menu == 'sitemap' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.sitemap_list') }}">
                    <i class="fa fa-sitemap"></i>
                    <span>{{ __('Sitemaps') }}</span>
                </a>
            </li>
        @endcanany
        @canany(['payment-gateway-list'])
            <li class="{{ isset($menu) && $menu == 'payment' ? 'mm-active' : '' }}">
                <a href="{{ route('admin.payment_gateway_list') }}">
                    <i class="fa fa-money-bill"></i>
                    <span>{{ __('Payment Gateway') }}</span>
                </a>
            </li>
        @endcanany
        @canany(['cms-list'])
            <li class="{{ isset($menu) && $menu == 'company' ? 'mm-active' : '' }}">
                <a class="has-arrow" href="#">
                    <i class="fas fa-address-book"></i>
                    <span>{{ __('Company') }}</span>
                </a>
                <ul>
                    <li class="{{ isset($submenu) && $submenu == 'faq' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.faq_list') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('FAQ') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'privacy_policy' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.privacy_policy') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Privacy Policy') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'return_policy' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.refund_policy') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Refund Policy') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'shipping_return' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.shipping_return') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Shipment & Return') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'terms_conditions' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.terms_conditions') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Terms & Condition') }}</span>
                        </a>
                    </li>
                    <li class="{{ isset($submenu) && $submenu == 'company_story' ? 'mm-active' : '' }}">
                        <a href="{{ route('admin.company.story') }}">
                            <i class="fa fa-circle"></i>
                            <span>{{ __('Company Story') }}</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endcanany
    </ul>
</div>
<!-- Sidebar area end -->
