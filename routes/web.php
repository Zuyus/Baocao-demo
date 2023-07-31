<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\BlogCommentController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BuyNowController;
use App\Http\Controllers\Frontend\CouponController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Http\Controllers\Frontend\CompareListController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\Frontend\ServiceCustomerController;
use App\Http\Controllers\Frontend\SubscribeSessionController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\SslCommerzPaymentController;

//Route::redirect('/', '');
Route::post('currency-price', [CartController::class, 'currencyPrice'])->name('currency_price');
Route::get('currency-symbol', [CartController::class, 'currencySymbol'])->name('currency_symbol');
Route::group(['middleware' => ['is_user']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('front');
    Route::get('/theme-set/{theme}', [HomeController::class, 'theme_set']);
    Route::get('locale/{lang}', [HomeController::class, 'localeSwitch'])->name('locale.switch');
    Route::get('currency/{amount}', [HomeController::class, 'currencySwitch'])->name('currency.switch');
    Route::post('subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');

    // session value store get and delete
    Route::get('do_not_subscribe', [SubscribeSessionController::class, 'doNotSubscribe'])->name('do.not.subscribe');
    Route::get('get_session', [SubscribeSessionController::class, 'doNotSubscribeGet']);
    Route::get('remove_session', [SubscribeSessionController::class, 'doNotSubscribeRemove']);

    Route::group(['prefix' => 'contact-us'], function () {
        Route::get('/', [ContactUsController::class, 'contactUs'])->name('contact.us');
        Route::post('store', [ContactUsController::class, 'contactUsStore'])->name('contact.us.store')->middleware(['isDemo']);
    });
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('blog');
        Route::get('/blog-details/{id}', [BlogController::class, 'blogDetails'])->name('blog.details');
        Route::post('/blog-comment', [BlogCommentController::class, 'blogComment'])->name('user.blog.comment')->middleware(['isDemo']);
    });

    Route::get('/payments/approval', [CheckoutController::class, 'approval'])->name('approval');
    Route::get('/payments/cancelled', [CheckoutController::class, 'cancelled'])->name('cancelled');
    Route::get('/stripe-collapse', [PaymentController::class, 'stripeCollapse'])->name('stripe_collapse');

    Route::get('about-us', [AboutUsController::class, 'aboutUS'])->name('about.us');

    Route::group(['prefix' => 'user/'], function () {
        //User Sign-in and Sign-up
        Route::get('sign-in', [AuthController::class, 'userSignIn'])->name('login');
        Route::post('sign-in', [AuthController::class, 'userSignInPost'])->name('user.sign.in.post');
        Route::post('login-modal', [AuthController::class, 'loginModal'])->name('user.sign.modal');
        Route::get('sign-up', [AuthController::class, 'userSignUp'])->name('user.sign.up');
        Route::post('sign-up', [AuthController::class, 'userSignUpPost'])->name('user.sign.up.post');
        Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('user.redirect_google');
        Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('user.handle_google_callback');
        Route::get('auth/facebook', [AuthController::class, 'redirectToFacebook'])->name('user.redirect_facebook');
        Route::get('auth/facebook/callback', [AuthController::class, 'handleFacebookCallback'])->name('user.handle_facebook_callback');
        Route::get('logout', [AuthController::class, 'userLogout'])->name('user.logout');
        Route::post('change-password', [AuthController::class, 'userChangePassword'])->name('user.profile.change.password')->middleware(['isDemo']);
        //forget password
        Route::get('forget-password', [AuthController::class, 'userForgetPasswordGet'])->name('forget.password.get');
        Route::post('forget-password', [AuthController::class, 'userForgetPasswordPost'])->name('forget.password.post')->middleware(['isDemo']);
        Route::get('reset-password/{token}', [AuthController::class, 'userShowResetPasswordForm'])->name('reset.password.get');
        Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post')->middleware(['isDemo']);

        //User Profile

        Route::group(['middleware' => 'auth'], function () {
            Route::get('profile', [UserProfileController::class, 'userProfile'])->name('user.profile');
            Route::get('profile-edit', [UserProfileController::class, 'userProfileEdit'])->name('user.profile.edit');
            Route::post('profile-update', [UserProfileController::class, 'userProfileUpdate'])->name('user.profile.update')->middleware(['isDemo']);
            Route::get('my-order', [UserProfileController::class, 'myOrder'])->name('user.profile.myOrder');
            Route::get('my-review', [UserProfileController::class, 'myReview'])->name('user.profile.myReview');
            Route::post('review-store', [UserProfileController::class, 'reviewStore'])->name('user.profile.review_store')->middleware(['isDemo']);
            Route::get('track-my-order/{id}', [UserProfileController::class, 'trackMyOrder'])->name('user.profile.track.my.order');

            // wishlist
            Route::group(['prefix' => 'wishlist'], function () {
                Route::get('/', [WishlistController::class, 'Wishlist'])->name('wishlist');
                Route::get('delete', [WishlistController::class, 'delete'])->name('wishlist.delete');
            });

            // comparelist
            Route::group(['prefix' => 'compare'], function () {
                Route::get('', [CompareListController::class, 'Comparelist'])->name('compare');
                Route::get('delete', [CompareListController::class, 'delete'])->name('compare.delete')->middleware(['isDemo']);
            });
        });
        Route::get('compare/add', [CompareListController::class, 'add'])->name('compare.add')->middleware(['isDemo']);
        Route::get('wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add')->middleware(['isDemo']);
    });

    Route::group(['prefix' => 'cart'], function () {
        Route::post('add', [CartController::class, 'addToCart'])->name('add.to.cart');
        Route::get('/content', [CartController::class, 'cartContent'])->name('cart.content');
        Route::get('/delete', [CartController::class, 'cartDelete'])->name('cart.delete');
        Route::get('/decrease', [CartController::class, 'cartDecrease'])->name('cart.decrease');
        Route::get('/increase', [CartController::class, 'cartIncrease'])->name('cart.increase');
    });
    Route::post('buy-now', [BuyNowController::class, 'buyNow'])->name('buy.now');

    Route::group(['prefix' => 'product'], function () {
        Route::get('single/{slug}', [ProductController::class, 'singleProduct'])->name('single.product');
        Route::get('all', [ProductController::class, 'allProduct'])->name('all.product');
        Route::get('all/left-sidebar', [ProductController::class, 'productListLeftSidebar'])->name('product.list.left.sidebar');
        Route::get('shorting', [ProductController::class, 'productSorting'])->name('product.shorting');
        Route::get('filter', [ProductController::class, 'productFiltering'])->name('product.filtering');
        Route::get('left-shorting', [ProductController::class, 'productSortingLeftSide'])->name('product.shorting.left.side');
        Route::get('filter/left-side', [ProductController::class, 'productFilteringLeftSide'])->name('product.filtering.left.side');
        Route::get('category/{id}', [ProductController::class, 'CategoryWiseProduct'])->name('category.product');
        Route::get('category/left/{id}', [ProductController::class, 'CategoryWiseProductLeft'])->name('category.product_left');
        Route::get('brand/{id}', [ProductController::class, 'BrandWiseProduct'])->name('brand.product');
        Route::get('brand/left/{id}', [ProductController::class, 'BrandWiseProductLeft'])->name('brand.product_left');
    });

    Route::get('terms/conditions', [ServiceCustomerController::class, 'termsConditions'])->name('terms.conditions');
    Route::get('privacy/policy', [ServiceCustomerController::class, 'privacyPolicy'])->name('privacy.policy');
    Route::get('shipping/return', [ServiceCustomerController::class, 'shippingReturn'])->name('shipping.return');
    Route::get('faq', [ServiceCustomerController::class, 'Faq'])->name('faq');
    Route::get('refund/policy', [ServiceCustomerController::class, 'refundPolicy'])->name('refund.policy');

    Route::group(['prefix' => 'category'], function () {
        Route::get('search', [ProductController::class, 'CategorySearchProduct'])->name('category.search');
    });

    Route::group(['prefix' => 'checkout'], function () {
        Route::get('', [CheckoutController::class, 'checkoutPage'])->name('checkout');
        Route::post('order', [CheckoutController::class, 'checkoutOrder'])->name('checkout.order');
        Route::post('guest-order', [CheckoutController::class, 'guestCheckoutOrder'])->name('guest.checkout.order');
        Route::post('get-tax-amount', [CheckoutController::class, 'getTaxAmount'])->name('checkout.get_tax_amount');
        Route::get('thank-you', [CheckoutController::class, 'thankyouPage'])->name('checkout.thankyou_page');
    });
    Route::group(['prefix' => 'coupon'], function () {
        Route::post('apply', [CouponController::class, 'couponApply'])->name('apply.coupon');
    });

    Route::get('/page/{slug}', [PageController::class, 'singlePage'])->name('page.single');
    Route::post('/order-track', [CheckoutController::class, 'orderTrack'])->name('checkout.order_track');
});
// SSLCOMMERZ Start
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
