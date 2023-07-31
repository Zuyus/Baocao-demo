<!DOCTYPE html>
<html lang="en">
@include('front.layouts.include.head')
<body>
    <!-- Preloader Area Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('/') }}assets/images/preloader.svg" alt="img" />
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- header-area-v2 start here  -->
    <header class="header-area-v2 d-none d-lg-block">
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-wrap">
                    <div class="top-bar-menu">
                        <ul class="menu-list">
                            <li class="menu-item"><a class="menu-link" href="refund-policy.html"></a></li>
                            <li class="menu-item"><a class="menu-link" href="about-us.html">About Us</a></li>
                            <li class="menu-item"><a class="menu-link" href="blog.html">Blog</a></li>
                            <li class="menu-item"><a class="menu-link" href="faq.html">How To Buy</a></li>
                        </ul>
                    </div>
                    <div class="switcher-lang-currency">
                        <div class="currency-switcher">
                            <a href="#" class="currency">Usd <i class="fas fa-angle-down"></i></a>
                            <ul class="currency-list">
                                <li class="single-currency"><a class="currency-text" href="#">Usd</a></li>
                                <li class="single-currency"><a class="currency-text" href="#">Rupi</a></li>
                            </ul>
                        </div>
                        <div class="lang-switcher">
                            <a href="#" class="lang">Eng <i class="fas fa-angle-down"></i></a>
                            <ul class="lang-list">
                                <li class="single-lang"><a class="lang-text" href="#">Eng</a></li>
                                <li class="single-lang"><a class="lang-text" href="#">Hin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="header-wrap">
                <div class="search-area">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="search" name="search"
                                placeholder="Search Here" />
                            <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="brand-logo-area">
                    <a href="index2.html" class="brand-logo"><img class="brand-image"
                            src="{{ asset('/') }}assets/images/zairito-home-two.png" alt="zairito-home-two" /></a>
                </div>
                <div class="header-right">
                    <ul class="btn-list">
                        <li class="single-item wishlist-area"><a class="single-btn wishlist-btn"
                                href="wish-list.html"><i class="btn-icon flaticon-like"></i></a></li>
                        <li class="single-item compare-area"><a class="single-btn compare-btn" href="compare.html"><i
                                    class="btn-icon flaticon-bar-chart"></i></a></li>
                        <li class="single-item cart-area"><a class="single-btn cart-btn" data-bs-toggle="offcanvas"
                                href="#cartOffcanvasSidebar" role="button" aria-controls="cartOffcanvasSidebar"><i
                                    class="btn-icon flaticon-shopping-bag"></i></a></li>
                        <li class="single-item user-area"><a class="single-btn user-btn" href="sign-in.html"><i
                                    class="btn-icon flaticon-user"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <nav class="menu-area">
                <ul class="main-menu">
                    <li class="menu-item menu-item-has-children active">
                        <a class="menu-link" href="index2.html">Home <i class="arrow-icon fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index.html">Home One</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index2.html">Home Two</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index3.html">Home Three</a></li>
                        </ul>
                    </li>
                    <li class="menu-item mega-menu-parent">
                        <a class="menu-link" href="#">Shop <i class="arrow-icon fas fa-angle-down"></i></a>
                        <div class="mega-menu-area">
                            <div class="container">
                                <ul class="mega-menu">
                                    <li class="mega-menu-item">
                                        <a class="mega-menu-title" href="#">Shop Layout</a>
                                        <ul class="menu-items">
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="shop-grid-left-sidebar.html">Shop Grid Leftsidebar <span
                                                        class="menu-item-badge new">New</span></a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="shop-grid-right-sidebar.html">Shop Grid Rightsidebar </a>
                                            </li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="shop-grid.html">Shop Grid No Sidebar <span
                                                        class="menu-item-badge trending">Trending</span></a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="shop-list-left-sidebar.html">Shop List Leftsidebar</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="shop-list-right-sidebar.html">Shop List Rightsidebar</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="shop-list.html">Shop List No Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a class="mega-menu-title" href="#">List Layout & Others</a>
                                        <ul class="menu-items">
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="single-product.html">Product Single 1</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="single-product-v2.html">Product Single 2</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="single-product-v3.html">Product Single 3</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="cart.html">Cart Page</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="checkout.html">Checkout Page</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="compare.html">Compare</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="wish-list.html">Wishlist</a></li>
                                            <li class="mega-menu-items"><a class="mega-menu-link"
                                                    href="empty-wish-list.html">Empty Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a class="mega-menu-banner" href="#">
                                            <img class="menu-banner-image"
                                                src="{{ asset('/') }}assets/images/mega-menu-banner.png"
                                                alt="mega-menu-banner" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="menu-item menu-item-has-children">
                        <a class="menu-link" href="index2.html">Pages <i
                                class="arrow-icon fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="term-conditions.html">Term &
                                    Conditions</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="privacy-policy.html">Privacy
                                    Policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shipping-return.html">Shipping &
                                    Return</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="faq.html">Frequently Asked
                                    Questions</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="refund-policy.html">Refund
                                    policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="error.html">Error Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-in.html">Sign In</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-up.html">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">about us</a></li>

                    <li class="menu-item menu-item-has-children">
                        <a class="menu-link" href="index2.html">Blog <i class="arrow-icon fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="blog.html">Blog Grid</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-blog.html">Blog
                                    Single</a></li>
                        </ul>
                    </li>

                    <li class="menu-item"><a class="menu-link" href="contact.html">Contact</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <!-- header-area-v2 end here  -->

    <!-- mobile-header-area area start here  -->
    <div class="mobile-header-area d-block d-lg-none">
        <div class="container">
            <div class="menu-wrap">
                <div class="header-left">
                    <a class="brand-logo" href="index.html"><img class="brand-image"
                            src="{{ asset('/') }}assets/images/zairito-home-two.png" alt="zairito" /></a>
                </div>
                <div class="header-right">
                    <ul class="btn-list">
                        <li class="single-item wishlist-area"><a class="single-btn wishlist-btn"
                                href="wish-list.html"><i class="btn-icon flaticon-like"></i></a></li>
                        <li class="single-item compare-area"><a class="single-btn compare-btn" href="compare.html"><i
                                    class="btn-icon flaticon-bar-chart"></i></a></li>
                        <li class="single-item cart-area"><a class="single-btn cart-btn" data-bs-toggle="offcanvas"
                                href="#cartOffcanvasSidebar" role="button" aria-controls="cartOffcanvasSidebar"><i
                                    class="btn-icon flaticon-shopping-bag"></i></a></li>
                        <li class="single-item user-area"><a class="single-btn user-btn" href="sign-in.html"><i
                                    class="btn-icon flaticon-user"></i></a></li>
                    </ul>
                    <button class="menu-bar" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu"><i
                            class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-header-area area end here  -->

    <!-- mobile-menu-area area start here  -->
    <div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
        <div class="mobile-menu-area">
            <div class="offcanvas-header">
                <a class="brand-logo" href="index.html"><img class="brand-image"
                        src="{{ asset('/') }}assets/images/zairito-home-two.png" alt="zairito" /></a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="menu-search-form">
                <form>
                    <div class="search-wrap">
                        <select class="form-select">
                            <option selected>Category</option>
                            <option value="1">Health & Beauty</option>
                            <option value="2">Women's Fashion</option>
                            <option value="3">Men's Fashion</option>
                            <option value="4">Electronic</option>
                            <option value="5">Sports </option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobilesearch" name="search"
                                placeholder="Search Here" />
                            <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <nav class="main-menu">
                <ul class="menu-list">
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Home</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index.html">Home One</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index2.html">Home Two</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index3.html">Home Three</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Shop</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-title" href="#">Shop Layout</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link"
                                    href="shop-grid-left-sidebar.html">Shop Grid Leftsidebar <span
                                        class="menu-item-badge new">New</span></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link"
                                    href="shop-grid-right-sidebar.html">Shop Grid Rightsidebar </a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid.html">Shop Grid No
                                    Sidebar <span class="menu-item-badge trending">Trending</span></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link"
                                    href="shop-list-left-sidebar.html">Shop List Leftsidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link"
                                    href="shop-list-right-sidebar.html">Shop List Rightsidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list.html">Shop List No
                                    Sidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-title" href="#">List Layout &
                                    Others</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product.html">Product
                                    Single 1</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product-v2.html">Product
                                    Single 2</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product-v3.html">Product
                                    Single 3</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="cart.html">Cart Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="checkout.html">Checkout Page</a>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="compare.html">Compare</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="wish-list.html">Wishlist</a>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="empty-wish-list.html">Empty
                                    Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="term-conditions.html">Term &
                                    Conditions </a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="privacy-policy.html">Privacy
                                    Policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shipping-return.html">Shipping &
                                    Return</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="faq.html">Frequently Asked
                                    Questions</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="refund-policy.html">Refund
                                    policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="error.html">Error Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-in.html">Sign In</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-up.html">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">about us</a></li>

                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="blog.html">Blog Grid</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-blog.html">Blog
                                    Single</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="contact.html">Contact</a></li>

                </ul>
            </nav>
            <div class="menu-bottom">
                <div class="switcher-lang-currency">
                    <div class="currency-switcher">
                        <a href="#" class="currency">Usd <i class="fas fa-angle-down"></i></a>
                        <ul class="currency-list">
                            <li class="single-currency"><a class="currency-text" href="#">Usd</a></li>
                            <li class="single-currency"><a class="currency-text" href="#">Rupi</a></li>
                        </ul>
                    </div>
                    <div class="lang-switcher">

                        <a href="#" class="lang">Eng <i class="fas fa-angle-down"></i></a>
                        <ul class="lang-list">
                            <li class="single-lang"><a class="lang-text" href="#">Eng</a></li>
                            <li class="single-lang"><a class="lang-text" href="#">Hin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area area end here  -->

    <!-- Cart Offcanvas Sidebar Menu area Start here  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvasSidebar"
        aria-labelledby="cartOffcanvasSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cartOffcanvasSidebarLabel">Shopping Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="cart-product-list">

                <!-- Product item start -->
                <div class="product-item cart-product-item">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="single-product.html"><img class="product-thumbnal"
                                    src="{{ asset('/') }}assets/images/cart-sidebar-img1.png" alt="cart"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-name-part">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html">Premier
                                        Cropped Jean</a></h3>

                                <div class="cart-quantity input-group">
                                    <div class="increase-btn dec qtybutton btn">-</div>
                                    <input class="qty-input cart-plus-minus-box" type="text" name="qtybutton"
                                        value="1" readonly />
                                    <div class="increase-btn inc qtybutton btn">+</div>
                                </div>

                                <button class="cart-remove-btn">Remove</button>
                            </div>
                            <div class="product-price">
                                <span class="regular-price">$220.08</span>
                                <span class="price">$150.08</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product item end -->

                <!-- Product item start -->
                <div class="product-item cart-product-item">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="single-product.html"><img class="product-thumbnal"
                                    src="{{ asset('/') }}assets/images/cart-sidebar-img2.png" alt="cart"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-name-part">
                                <h4 class="product-catagory">Hot - Collection</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html">Premier
                                        Bag Jean</a></h3>

                                <div class="cart-quantity input-group">
                                    <div class="increase-btn dec qtybutton btn">-</div>
                                    <input class="qty-input cart-plus-minus-box" type="text" name="qtybutton"
                                        value="1" readonly />
                                    <div class="increase-btn inc qtybutton btn">+</div>
                                </div>

                                <button class="cart-remove-btn">Remove</button>
                            </div>
                            <div class="product-price">
                                <span class="regular-price">$215.08</span>
                                <span class="price">$150.08</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product item end -->
            </div>

            <div class="total-bottom-part">
                <div class="total-count d-flex">
                    <h3>Total</h3>
                    <h4>$567.00</h4>
                </div>
                <a href="checkout.html" class="proceed-to-btn d-block text-center">
                    Proceed To Checkout
                </a>
                <div class="view-cart-go">
                    <a href="cart.html">View Cart</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Cart Offcanvas Sidebar Menu area end here  -->

    <!-- hero-section-v2 area start here  -->
    <div class="hero-section-v2">
        <div class="hero-section-wrap">
            <div class="signle-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-7">
                            <div class="hero-content">
                                <h1 class="hero-title">Exclusive Summer Sale is Going On zairito The Shopify </h1>
                                <p class="hero-text">Curabitur non nulla sit amet nisl tempus convallis quis lectus.
                                    porttitor lectus
                                    nibh. Curabitur arcu erat, accu msan id imperdiet et, porttitor at. Cras ultricies
                                    ligula sed magna dictum porta. Donec rutrum congue eget malesuaa. Lorem </p>
                                <div class="hero-btn">
                                    <a href="shop-grid.html" class="secondary-btn">See Colections <i
                                            class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-5">
                            <div class="hero-banner-image text-center">
                                <img class="hero-image"
                                    src="{{ asset('/') }}assets/images/hero-slider-v2-image.png"
                                    alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-section-v2 area end here  -->

    <!-- brads area start here  -->
    <div class="brads-area-v2 section-top">
        <div class="container">
            <div class="brads-wrap">
                <div class="brads-slide">
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/treva.png" alt="brad image" />
                    </div>
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/zoo-tv.png" alt="brad image" />
                    </div>
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/circle.png" alt="brad image" />
                    </div>
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/code-lab.png" alt="brad image" />
                    </div>
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/hex-lab.png" alt="brad image" />
                    </div>
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/kanba.png" alt="brad image" />
                    </div>
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/circle.png" alt="brad image" />
                    </div>
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/circle.png" alt="brad image" />
                    </div>
                    <div class="sigle-brad">
                        <img src="{{ asset('/') }}assets/images/code-lab.png" alt="brad image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brads area start here  -->

    <!-- popular-categories-area v2 start here  -->
    <div class="popular-categories-area-v2 section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="catagory-left">
                        <h2 class="catagory-title">Most Popular/Trending Categories</h2>
                        <a href="shop-grid-left-sidebar.html" class="primary-btn-v2">View All Categories </a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <ul class="catagory-list">
                        <li class="sigle-catagory"><a class="catatory-link"
                                href="shop-grid-left-sidebar.html">Weeding Dress <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link"
                                href="shop-grid-right-sidebar.html">Athletic Wear <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-grid.html">Weeding Dress <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-list.html">Medial Mask <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link"
                                href="shop-list-left-sidebar.html">Weeding Dress <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link"
                                href="shop-list-right-sidebar.html">Medial Mask <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-grid.html">Athletic Wear <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-grid.html">Beach Wear <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-grid.html">Athletic Wear <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-grid.html">Athletic Wear <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-grid-left-sidebar.html">Medial
                                Mask <i class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link"
                                href="shop-grid-left-sidebar.html">Athletic Wear <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-grid-left-sidebar.html">Beach
                                Wear <i class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link"
                                href="shop-grid-left-sidebar.html">Athletic Wear <i
                                    class="icon flaticon-arrow-point-to-right"></i></a></li>
                        <li class="sigle-catagory"><a class="catatory-link" href="shop-grid-left-sidebar.html">Beach
                                Wear <i class="icon flaticon-arrow-point-to-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- popular-categories-area v2 end here  -->

    <!-- featured-products-area-v2 start here  -->
    <div class="featured-products-area-v2 section-bg-two section-top pb-100">
        <div class="container">
            <div class="section-header-two text-center">
                <h2 class="section-title">Featured Products</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="single-product-v2.html"><img class="product-thumbnal"
                                    src="{{ asset('/') }}assets/images/home-two-product-image-1.png"
                                    alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">SALE</span>
                                <span class="product-flag discount">-15%</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html"
                                        title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html"
                                        title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">New - Collection</h4>
                            <h3 class="product-name"><a class="product-link" href="single-product-v2.html">Rosmo
                                    Namino Milancelos</a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$770.18</span>
                                <span class="price">$700.08</span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio"
                                            checked="">
                                        <span class="product-color-black"></span>
                                    </label>
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>

                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-gray"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="size-switch">
                                <li class="single-size active">XL</li>
                                <li class="single-size">LARGE</li>
                                <li class="single-size">SMALL</li>
                            </ul>
                            <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                    class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="single-product-v2.html"><img class="product-thumbnal"
                                    src="{{ asset('/') }}assets/images/home-two-product-image-2.png"
                                    alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">SALE</span>
                                <span class="product-flag discount">-15%</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html"
                                        title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html"
                                        title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">Hot - Collection</h4>
                            <h3 class="product-name"><a class="product-link" href="single-product-v2.html">Midi
                                    Dress</a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$270.18</span>
                                <span class="price">$100.08</span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio"
                                            checked="">
                                        <span class="product-color-black"></span>
                                    </label>
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>

                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-gray"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="size-switch">
                                <li class="single-size active">XL</li>
                                <li class="single-size">LARGE</li>
                                <li class="single-size">SMALL</li>
                            </ul>
                            <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                    class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-grid-product-v2">
                        <div class="product-top">
                            <a href="single-product-v2.html"><img class="product-thumbnal"
                                    src="{{ asset('/') }}assets/images/home-two-product-image-3.png"
                                    alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">SALE</span>
                                <span class="product-flag discount">-15%</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html"
                                        title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html"
                                        title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">New - Collection</h4>
                            <h3 class="product-name"><a class="product-link" href="single-product-v2.html">Black
                                    T-Shirt For Woman</a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$800.18</span>
                                <span class="price">$600.08</span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio"
                                            checked="">
                                        <span class="product-color-black"></span>
                                    </label>
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>

                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-gray"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="size-switch">
                                <li class="single-size active">XL</li>
                                <li class="single-size">LARGE</li>
                                <li class="single-size">SMALL</li>
                            </ul>
                            <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                    class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured-products-area-v2 end here -->

    <!-- Spectial Offer ara start here  -->
    <div class="spectial-offer-area section-top">
        <div class="container">
            <div class="spectial-offer-wrap">
                <img class="line-shape-one" src="{{ asset('/') }}assets/images/line-shape-one.png"
                    alt="shape" />
                <img class="line-shape-two" src="{{ asset('/') }}assets/images/line-shape-two.png"
                    alt="shape" />
                <div class="row">
                    <div class="col-lg-5">
                        <div class="offer-image">
                            <img class="thumbnail-image" src="{{ asset('/') }}assets/images/offer-image.png"
                                alt="offer-image" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="offer-info">
                            <h3 class="offet-text">Spectial Offer</h3>
                            <h2 class="offer-catagory"><span class="color-text">Fashion</span> SALE</h2>
                            <h3 class="offer">50%OFF</h3>
                            <a href="shop-list-left-sidebar.html" class="primary-btn">Shop Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Spectial Offer ara end here  -->

    <!-- Recommend product area start here  -->
    <div class="recommend-product-area section">
        <div class="container">
            <div class="section-header-two text-center">
                <h2 class="section-title">Featured Products</h2>
                <div class="secendary-tabs mt-40 ">
                    <ul class="nav nav-tabs" id="FeaturedProductsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="NEWARRIVAL-tab" data-bs-toggle="tab"
                                data-bs-target="#NEWARRIVAL" type="button" role="tab"
                                aria-controls="NEWARRIVAL" aria-selected="true">NEW ARRIVAL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="BESTSELLING-tab" data-bs-toggle="tab"
                                data-bs-target="#BESTSELLING" type="button" role="tab"
                                aria-controls="BESTSELLING" aria-selected="false">BEST SELLING</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="ONSELL-tab" data-bs-toggle="tab" data-bs-target="#ONSELL"
                                type="button" role="tab" aria-controls="ONSELL" aria-selected="false">ON
                                SELL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="FEATUREDITEMS-tab" data-bs-toggle="tab"
                                data-bs-target="#FEATUREDITEMS" type="button" role="tab"
                                aria-controls="FEATUREDITEMS" aria-selected="false">FEATURED ITEMS</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="PRODUCTSLIKE-tab" data-bs-toggle="tab"
                                data-bs-target="#PRODUCTSLIKE" type="button" role="tab"
                                aria-controls="PRODUCTSLIKE" aria-selected="false">PRODUCTS YOU MAY LIKE</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="FeaturedProductsTabContent">
                <div class="tab-pane fade show active" id="NEWARRIVAL" role="tabpanel"
                    aria-labelledby="NEWARRIVAL-tab">
                    <div class="recommend-product-slide">

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-4.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product-v2.html">Black
                                        T-Shirt For Woman</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-5.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="#"><i
                                                class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="#"><i
                                                class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">New - Collection</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Fit-Flare Dress</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-6.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">Hot - Collection</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Midi Dress</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-5.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">Fashion - Collection</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="BESTSELLING" role="tabpanel" aria-labelledby="BESTSELLING-tab">
                    <div class="recommend-product-slide">

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-6.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-4.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-5.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-5.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="ONSELL" role="tabpanel" aria-labelledby="ONSELL-tab">
                    <div class="recommend-product-slide">

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-4.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-6.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-5.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-4.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="FEATUREDITEMS" role="tabpanel"
                    aria-labelledby="FEATUREDITEMS-tab">
                    <div class="recommend-product-slide">
                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-4.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-6.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-5.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="PRODUCTSLIKE" role="tabpanel" aria-labelledby="PRODUCTSLIKE-tab">
                    <div class="recommend-product-slide">

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-6.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-4.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-6.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                        <div class="single-grid-product-v2">
                            <div class="product-top">
                                <a href="single-product-v2.html"><img class="product-thumbnal"
                                        src="{{ asset('/') }}assets/images/home-two-product-image-5.png"
                                        alt="product" /></a>
                                <div class="product-flags">
                                    <span class="product-flag sale">SALE</span>
                                    <span class="product-flag discount">-15%</span>
                                </div>
                                <ul class="prdouct-btn-wrapper">
                                    <li class="single-product-btn">
                                        <a class="addToWishlist product-btn" href="compare.html"
                                            title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                    </li>
                                    <li class="single-product-btn">
                                        <a class="addCompare product-btn" href="wish-list.html"
                                            title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-info text-center">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link"
                                        href="single-product-v2.html">Rosmo Namino Milancelos</a></h3>
                                <ul class="product-review">
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                </ul>
                                <div class="product-price">
                                    <span class="regular-price">$770.18</span>
                                    <span class="price">$700.08</span>
                                </div>
                                <div class="variable-single-item color-switch">
                                    <div class="product-variable-color">
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio"
                                                checked="">
                                            <span class="product-color-black"></span>
                                        </label>
                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-tomato"></span>
                                        </label>

                                        <label>
                                            <input name="modal-product-color" class="color-select" type="radio">
                                            <span class="product-color-gray"></span>
                                        </label>
                                    </div>
                                </div>
                                <ul class="size-switch">
                                    <li class="single-size active">XL</li>
                                    <li class="single-size">LARGE</li>
                                    <li class="single-size">SMALL</li>
                                </ul>
                                <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i
                                        class="icon fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recommend product area end here  -->

    <!-- testimonial-area-v2 start here  -->
    <div class="testimonial-area-v2 section section-bg-two">
        <div class="container">
            <div class="section-header-two text-center">
                <h2 class="section-title">What People Are <br /> Saying About Oursalve</h2>
            </div>
            <div class="testimonial-slide-two">

                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <img class="testimonial-image"
                            src="{{ asset('/') }}assets/images/testimonial-v2-image-1.png" alt="testimonial" />
                    </div>
                    <div class="testimonial-body">
                        <p class="testimonial-content">Quisque velit nisi, pretium lacinia in, Nulla poritor accu msan
                            tinci dunt. Mauris blandit aliquet elit, eget tindunt nibh </p>
                        <h3 class="testimonial-title">Darlene Robertson</h3>
                        <ul class="testimonial-review">
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item"><i class="icon flaticon-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <img class="testimonial-image"
                            src="{{ asset('/') }}assets/images/testimonial-v2-image-2.png" alt="testimonial" />
                    </div>
                    <div class="testimonial-body">
                        <p class="testimonial-content">Quisque velit nisi, pretium lacinia in, Nulla poritor accu msan
                            tinci dunt. Mauris blandit aliquet elit, eget tindunt nibh </p>
                        <h3 class="testimonial-title">Darlene Robertson</h3>
                        <ul class="testimonial-review">
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item"><i class="icon flaticon-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <img class="testimonial-image"
                            src="{{ asset('/') }}assets/images/testimonial-v2-image-3.png" alt="testimonial" />
                    </div>
                    <div class="testimonial-body">
                        <p class="testimonial-content">Quisque velit nisi, pretium lacinia in, Nulla poritor accu msan
                            tinci dunt. Mauris blandit aliquet elit, eget tindunt nibh </p>
                        <h3 class="testimonial-title">Darlene Robertson</h3>
                        <ul class="testimonial-review">
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item"><i class="icon flaticon-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="single-testimonial">
                    <div class="testimonial-top">
                        <img class="testimonial-image"
                            src="{{ asset('/') }}assets/images/testimonial-v2-image-2.png" alt="testimonial" />
                    </div>
                    <div class="testimonial-body">
                        <p class="testimonial-content">Quisque velit nisi, pretium lacinia in, Nulla poritor accu msan
                            tinci dunt. Mauris blandit aliquet elit, eget tindunt nibh </p>
                        <h3 class="testimonial-title">Darlene Robertson</h3>
                        <ul class="testimonial-review">
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item active"><i class="icon flaticon-star"></i></li>
                            <li class="review-item"><i class="icon flaticon-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-v2 end here  -->

    <!-- image-gallery-area-v2 start here  -->
    <div class="image-gallery-area-v2 section-top pb-110">
        <div class="container">
            <div class="section-header-two text-center">
                <h2 class="section-title"> Zairito Gallery <br /> For Online Experience</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-gallery border-left">
                                <img class="gallery-image"
                                    src="{{ asset('/') }}assets/images/home-2-gallery-1.jpg" alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image"
                                        href="{{ asset('/') }}assets/images/home-2-gallery-1.jpg"><i
                                            class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-gallery border-bottom">
                                <img class="gallery-image"
                                    src="{{ asset('/') }}assets/images/home-2-gallery-2.jpg" alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image"
                                        href="{{ asset('/') }}assets/images/home-2-gallery-2.jpg"><i
                                            class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-gallery">
                                <img class="gallery-image"
                                    src="{{ asset('/') }}assets/images/home-2-gallery-3.jpg" alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image"
                                        href="{{ asset('/') }}assets/images/home-2-gallery-3.jpg"><i
                                            class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                            <div class="single-gallery">
                                <img class="gallery-image"
                                    src="{{ asset('/') }}assets/images/home-2-gallery-4.jpg" alt="gallery" />
                                <div class="popuo-overlay">
                                    <a class="popup-image"
                                        href="{{ asset('/') }}assets/images/home-2-gallery-4.jpg"><i
                                            class="view-icon flaticon-view"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-gallery border-top">
                        <img class="gallery-image" src="{{ asset('/') }}assets/images/home-2-gallery-5.jpg"
                            alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="{{ asset('/') }}assets/images/home-2-gallery-5.jpg"><i
                                    class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                    <div class="single-gallery">
                        <img class="gallery-image" src="{{ asset('/') }}assets/images/home-2-gallery-6.jpg"
                            alt="gallery" />
                        <div class="popuo-overlay">
                            <a class="popup-image" href="{{ asset('/') }}assets/images/home-2-gallery-6.jpg"><i
                                    class="view-icon flaticon-view"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- image-gallery-area-v2 end here  -->

    <!-- blog-area-v2 start here  -->
    <div class="blog-area-v2 section-top section-bg-two pb-100">
        <div class="container">
            <div class="blog-area-top">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="blog-top-left">
                            <h2 class="blog-left-title">News And Views From <br /> The Zairito Blog</h2>
                            <p class="blog-left-subtitle">Quisque velit nisi, pretium ut lacinia in, elementum id
                                elementum enim. Nulla porttitor accumssan tincidunt. Donec rutrum congue leo eget malew
                                susada. Cras ultricies ligula sed magna dictum </p>
                            <a href="blog.html" class="primary-btn-v2">View All Articles</a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-3 d-none d-lg-block">
                        <div class="single-grid-blog-v2">
                            <div class="blog-info">
                                <a href="javascript:void(0)" class="blog-category">LADIES FASHION</a>
                                <h5 class="blog-date">May 11, 2019</h5>
                                <h3 class="blog-title"><a class="blog-link" href="single-blog.html">Lorem ipsum
                                        dolor amsp wret, Magna leo alia quet facilisi tem pus dign issim Volu pat,
                                        vestib ulum mi quam pulvinar.</a></h3>
                                <a class="blog-btn" href="single-blog.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-grid-blog-v2">
                        <div class="blog-info">
                            <a href="javascript:void(0)" class="blog-category">Man FASHION</a>
                            <h5 class="blog-date">May 15, 2020</h5>
                            <h3 class="blog-title"><a class="blog-link" href="single-blog.html">Lorem ipsum dolor
                                    amsp wret, Magna leo alia quet facilisi tem pus dign issim Volu pat, vestib ulum mi
                                    quam pulvinar.</a></h3>
                            <a class="blog-btn" href="single-blog.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-grid-blog-v2">
                        <div class="blog-info">
                            <a href="javascript:void(0)" class="blog-category">INNER WEAR</a>
                            <h5 class="blog-date">Jan 12, 2019</h5>
                            <h3 class="blog-title"><a class="blog-link" href="single-blog.html">Lorem ipsum dolor
                                    amsp wret, Magna leo alia quet facilisi tem pus dign issim Volu pat, vestib ulum mi
                                    quam pulvinar.</a></h3>
                            <a class="blog-btn" href="single-blog.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-grid-blog-v2">
                        <div class="blog-info">
                            <a href="javascript:void(0)" class="blog-category">DIGITAL PRODUCT</a>
                            <h5 class="blog-date">Feb 10, 2021</h5>
                            <h3 class="blog-title"><a class="blog-link" href="single-blog.html">Lorem ipsum dolor
                                    amsp wret, Magna leo alia quet facilisi tem pus dign issim Volu pat, vestib ulum mi
                                    quam pulvinar.</a></h3>
                            <a class="blog-btn" href="single-blog.html">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog-area-v2 end here  -->

    <!-- shop map area start here  -->
    <div class="shop-map-area">
        <div class="shop-info">
            <div class="shop-info-left">
                <h2 class="shop-info-title">Local Pickup Available</h2>
                <p class="shop-info-sub-title">301 Front St Toronto, Canada</p>
                <ul class="shop-opaing-time">
                    <li class="open-time">Mon - Fri, 8:30am - 10:30pm,</li>
                    <li class="open-time">Sunday, 8:30am - 10:30pm</li>
                </ul>
            </div>
            <div class="shop-info-right">
                <span class="label">Shops Image</span>
            </div>
        </div>
        <div id="gmap" class="google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1839.0179632416985!2d89.5538504127622!3d22.801132631062536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8f2b1098bf95%3A0xbce09c90b98f8380!2sJust%20Orders%20Khulna!5e0!3m2!1sen!2sbd!4v1636005141952!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <!-- shop map area start here  -->

    <!-- footer area-v2 start here -->
    <footer class="footer-area-v2">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget about-widget">
                            <a href="index.html" class="footer-brand-logo mb-25"><img
                                    src="{{ asset('/') }}assets/images/footer-logo-two.png"
                                    alt="footer-logo" /></a>
                            <p class="address-text">685 Market Street <br /> San Francisco, CA 94105, <br />United
                                States</p>
                            <div class="block-content mb-30">
                                <p class="contact">Call us: 1.800.000.6690</p>
                                <p class="contact">Email: support@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">Shop by</h3>
                            <ul class="widget-menu show">
                                <li class="meni-item"><a class="menu-link"
                                        href="shop-grid-left-sidebar.html">Appliances</a></li>
                                <li class="meni-item"><a class="menu-link"
                                        href="shop-grid-right-sidebar.html">Computers & Laptops</a></li>
                                <li class="meni-item"><a class="menu-link" href="shop-grid.html">Cameras</a></li>
                                <li class="meni-item"><a class="menu-link" href="shop-list.html">Mobile Phones
                                    </a></li>
                                <li class="meni-item"><a class="menu-link"
                                        href="shop-list-right-sidebar.html">Televisions</a></li>
                                <li class="meni-item"><a class="menu-link"
                                        href="shop-list-left-sidebar.html">Video Games</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">Information</h3>
                            <ul class="widget-menu">
                                <li class="meni-item"><a class="menu-link" href="about-us.html">About us</a></li>
                                <li class="meni-item"><a class="menu-link" href="blog.html">Blog</a></li>
                                <li class="meni-item"><a class="menu-link" href="shop-grid.html">Weekly Deals</a>
                                </li>
                                <li class="meni-item"><a class="menu-link" href="cart.html">Cart</a></li>
                                <li class="meni-item"><a class="menu-link" href="sign-in.html">Sign In</a></li>
                                <li class="meni-item"><a class="menu-link" href="sign-up.html">Sign Up</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-widget">
                            <h3 class="widget-title mobile-dropdown-title">Customer Service</h3>
                            <ul class="widget-menu">
                                <li class="meni-item"><a class="menu-link" href="faq.html">Help & FAQs</a></li>
                                <li class="meni-item"><a class="menu-link" href="term-conditions.html">Terms of
                                        Conditions</a></li>
                                <li class="meni-item"><a class="menu-link" href="privacy-policy.html">Privacy
                                        Policy</a></li>
                                <li class="meni-item"><a class="menu-link" href="refund-policy.html">Online
                                        Returns Policy</a></li>
                                <li class="meni-item"><a class="menu-link" href="shipping-return.html">Shipping &
                                        Return</a></li>
                                <li class="meni-item"><a class="menu-link" href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-widget social-media-widget">
                            <h3 class="widget-title">Social Links</h3>
                            <ul class="social-media">
                                <li class="social-media-item"><a class="social-media-link"
                                        href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-media-item"><a class="social-media-link"
                                        href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-media-item"><a class="social-media-link"
                                        href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="social-media-item"><a class="social-media-link"
                                        href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
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
                            <p class="copyright-text">Designed And Developed By Zuy Ú <a class="brand-name"
                                    href="#">DUY Ú</a> @2023</p>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <img class="payment-icons" src="{{ asset('/') }}assets/images/accepts-image.png"
                                alt="accepts-image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area-v2 end here -->

    <!-- Page Load Popup Modal End -->
    <div class="modal fade bd-example-modal-lg theme-modal" id="popUpModal" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1 modal-bg">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="offer_modal_left">
                                        <img src="{{ asset('/') }}assets/images/zairito.png" alt="logo">
                                        {{-- <h3>SUBSCRIBE TO NEWSLETTER</h3>
                                        <p class="m-0">Subscribe to the Zairito mailing list to receive updates
                                            on new arrivals, special offers and our promotions.</p> --}}
                                        <form>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Your email">
                                                <div class="input-group-append">
                                                    <button
                                                        class="theme-btn-one btn-black-overlay btn_sm border-0">Subscribe</button>
                                                </div>
                                            </div>
                                            <div class="check_boxed_modal">
                                                <input type="checkbox" id="vehicle1" name="vehicle1"
                                                    value="Bike">
                                                <label for="vehicle1">Don't show this popup again</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="offer_modal_img d-none d-lg-flex">
                                        <img src="{{ asset('/') }}assets/images/hero-banner-image-1.png"
                                            alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Load Popup Modal End -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/front/custom.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/front/extra.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/front/sweat_aleart.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/common.js') }}"></script>
</body>
</html>
