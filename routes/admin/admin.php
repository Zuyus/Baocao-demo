<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\ProductTagController;
use App\Http\Controllers\Admin\TestimonilController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CompanyStroyController;
use App\Http\Controllers\Admin\ImageGalleryController;
use App\Http\Controllers\Admin\CustomerServiceController;
use App\Http\Controllers\Admin\GeneralSettingsController;
use App\Http\Controllers\Admin\SiteContent\HomePageController;
use App\Http\Controllers\Admin\SiteContent\SocialLinkController;
use App\Http\Controllers\Admin\SiteContent\AboutUsPageController;
use App\Http\Controllers\Admin\SiteContent\FooterInformationController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ItemTagController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\PaymentGatewayController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\EcommerceController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SitemapController;

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'LoginDashboard'])->name('login.post');

Route::group(['prefix' => 'subscribe'], function () {
    Route::post('/store', [SubscribeController::class, 'subscribeStore'])->name('admin.subscribe.store');
    Route::get('/delete/{id}', [SubscribeController::class, 'subscribeDelete'])->name('admin.subscribe.delete');
    Route::get('/list', [SubscribeController::class, 'index'])->name('admin.subscribe.index');
    Route::post('promote', [SubscribeController::class, 'promote'])->name('admin.subscribe.promote')->middleware(['isDemo']);;
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin', 'en.locale'], 'as' => 'admin.'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'slider'], function () {
        Route::get('', [SliderController::class, 'slider'])->name('slider')->middleware(['permission:slider-list|slider-create|slider-edit|slider-delete']);
        Route::get('/create', [SliderController::class, 'sliderCreate'])->name('slider.create')->middleware(['permission:slider-create']);
        Route::post('/create', [SliderController::class, 'sliderStore'])->name('slider.store')->middleware(['permission:slider-create', 'isDemo']);
        Route::get('/edit/{id}', [SliderController::class, 'sliderEdit'])->name('slider.edit')->middleware(['permission:slider-edit']);
        Route::post('/update', [SliderController::class, 'sliderUpdate'])->name('slider.update')->middleware(['permission:slider-edit', 'isDemo']);
        Route::get('/delete/{id}', [SliderController::class, 'sliderDelete'])->name('slider.delete')->middleware(['permission:slider-delete', 'isDemo']);
    });
    Route::group(['prefix' => 'advertise'], function () {
        Route::get('', [AdvertiseController::class, 'advertise'])->name('advertise')->middleware(['permission:advertise-list|advertise-create|advertise-edit|advertise-delete']);
        Route::get('/create', [AdvertiseController::class, 'advertiseCreate'])->name('advertise.create')->middleware(['permission:advertise-create']);
        Route::post('/create', [AdvertiseController::class, 'advertiseStore'])->name('advertise.store')->middleware(['permission:advertise-create', 'isDemo']);
        Route::get('/edit/{id}', [AdvertiseController::class, 'advertiseEdit'])->name('advertise.edit')->middleware(['permission:advertise-edit']);
        Route::post('/update', [AdvertiseController::class, 'advertiseUpdate'])->name('advertise.update')->middleware(['permission:advertise-edit', 'isDemo']);
        Route::get('/delete/{id}', [AdvertiseController::class, 'advertiseDelete'])->name('advertise.delete')->middleware(['permission:advertise-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'contact-us'], function () {
        Route::get('/index', [ContactUsController::class, 'contactUs'])->name('contact.us.index')->middleware(['permission:crm-list|crm-create|crm-edit|crm-delete']);
        Route::get('user/reply/{id}', [ContactUsController::class, 'userReply'])->name('user.reply')->middleware(['permission:crm-create']);
        Route::post('send/reply', [ContactUsController::class, 'sendReply'])->name('send.reply')->middleware(['permission:crm-create', 'isDemo']);
        Route::get('/delete/{id}', [ContactUsController::class, 'contactUsDelete'])->name('contact.us.delete')->middleware(['permission:crm-delete', 'isDemo']);;
    });
    Route::group(['prefix' => 'general-settings'], function () {
        Route::get('', [GeneralSettingsController::class, 'GeneralSettings'])->name('general.settings')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [GeneralSettingsController::class, 'GeneralSettingsEdit'])->name('general.settings.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [GeneralSettingsController::class, 'GeneralSettingsUpdate'])->name('general.settings.update')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-settings', [GeneralSettingsController::class, 'updateSettings'])->name('general.settings.update_settings')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-social-login', [GeneralSettingsController::class, 'updateSocialLogin'])->name('general.settings.update_social_login')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-email', [GeneralSettingsController::class, 'updateEmail'])->name('general.settings.update_email')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('', [BlogController::class, 'blog'])->name('blog')->middleware(['permission:blog-list|blog-create|blog-edit|blog-delete']);
        Route::get('/create', [BlogController::class, 'blogCreate'])->name('blog.create')->middleware(['permission:blog-create']);
        Route::post('/create', [BlogController::class, 'blogStore'])->name('blog.store')->middleware(['permission:blog-create', 'isDemo']);
        Route::get('/edit/{id}', [BlogController::class, 'blogEdit'])->name('blog.edit')->middleware(['permission:blog-edit']);
        Route::post('/update', [BlogController::class, 'blogUpdate'])->name('blog.update')->middleware(['permission:blog-edit', 'isDemo']);
        Route::get('/delete/{id}', [BlogController::class, 'blogDelete'])->name('blog.delete')->middleware(['permission:blog-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('', [CategoryController::class, 'category'])->name('category')->middleware(['permission:category-list|category-create|category-edit|category-delete']);
        Route::get('/create', [CategoryController::class, 'categoryCreate'])->name('category.create')->middleware(['permission:category-create']);
        Route::post('/create', [CategoryController::class, 'categoryStore'])->name('category.store')->middleware(['permission:category-create', 'isDemo']);
        Route::get('/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit')->middleware(['permission:category-edit']);
        Route::post('/update', [CategoryController::class, 'categoryUpdate'])->name('category.update')->middleware(['permission:category-edit', 'isDemo']);
        Route::get('/active/{id}', [CategoryController::class, 'categoryActive'])->name('category.active')->middleware(['permission:category-edit', 'isDemo']);
        Route::get('/inactive/{d}', [CategoryController::class, 'categoryInactive'])->name('category.inactive')->middleware(['permission:category-edit', 'isDemo']);
        Route::get('/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete')->middleware(['permission:category-delete', 'isDemo']);
    });
    Route::group(['prefix' => 'brand'], function () {
        Route::get('', [BrandController::class, 'brand'])->name('brand')->middleware(['permission:brand-list|brand-create|brand-edit|brand-delete']);
        Route::get('/create', [BrandController::class, 'brandCreate'])->name('brand.create')->middleware(['permission:brand-create']);
        Route::post('/create', [BrandController::class, 'brandStore'])->name('brand.store')->middleware(['permission:brand-create', 'isDemo']);
        Route::get('/edit/{id}', [BrandController::class, 'brandEdit'])->name('brand.edit')->middleware(['permission:brand-edit']);
        Route::post('/update', [BrandController::class, 'brandUpdate'])->name('brand.update')->middleware(['permission:brand-edit', 'isDemo']);
        Route::get('/active/{id}', [BrandController::class, 'brandActive'])->name('brand.active')->middleware(['permission:brand-edit', 'isDemo']);
        Route::get('/inactive/{d}', [BrandController::class, 'brandInactive'])->name('brand.inactive')->middleware(['permission:brand-edit', 'isDemo']);
        Route::get('/delete/{id}', [BrandController::class, 'brandDelete'])->name('brand.delete')->middleware(['permission:brand-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'image-gallery'], function () {
        Route::get('', [ImageGalleryController::class, 'imageGallery'])->name('image.gallery')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/create', [ImageGalleryController::class, 'imageGalleryCreate'])->name('image.gallery.create')->middleware(['permission:cms-create']);
        Route::post('/create', [ImageGalleryController::class, 'imageGalleryStore'])->name('image.gallery.store')->middleware(['permission:cms-create', 'isDemo']);
        Route::get('/edit/{id}', [ImageGalleryController::class, 'imageGalleryEdit'])->name('image.gallery.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [ImageGalleryController::class, 'imageGalleryUpdate'])->name('image.gallery.update')->middleware(['permission:cms-edit', 'isDemo']);
        Route::get('/delete/{id}', [ImageGalleryController::class, 'imageGalleryDelete'])->name('image.gallery.delete')->middleware(['permission:cms-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'profile/'], function () {
        //Admin_Profile
        Route::get('', [AdminProfileController::class, 'adminProfile'])->name('profile');
        Route::post('update', [AdminProfileController::class, 'adminProfileUpdate'])->name('profile.update')->middleware(['isDemo']);
        Route::post('change-password', [AdminProfileController::class, 'changePassword'])->name('change_password')->middleware(['isDemo']);
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('', [ProductController::class, 'product'])->name('product')->middleware(['permission:product-list|product-create|product-edit|product-delete']);
        Route::get('/create', [ProductController::class, 'productCreate'])->name('product.create')->middleware(['permission:product-create']);
        Route::get('/physical/create', [ProductController::class, 'physicalProductCreate'])->name('physical.product.create')->middleware(['permission:product-create']);
        Route::get('/digital/create', [ProductController::class, 'digitalProductCreate'])->name('digital.product.create')->middleware(['permission:product-create']);
        Route::get('/license/create', [ProductController::class, 'licenseProductCreate'])->name('license.product.create')->middleware(['permission:product-create']);
        Route::get('/affiliate/create', [ProductController::class, 'affiliateProductCreate'])->name('affiliate.product.create')->middleware(['permission:product-create']);
        Route::post('/create', [ProductController::class, 'productStore'])->name('product.store')->middleware(['permission:product-create', 'isDemo']);
        Route::get('/edit/{product_type}/{id}', [ProductController::class, 'productEdit'])->name('product.edit')->middleware(['permission:product-edit']);
        Route::post('/update', [ProductController::class, 'productUpdate'])->name('product.update')->middleware(['permission:product-edit', 'isDemo']);
        Route::get('/active/{id}', [ProductController::class, 'productActive'])->name('product.active')->middleware(['permission:product-edit', 'isDemo']);
        Route::get('/inactive/{d}', [ProductController::class, 'productInactive'])->name('product.inactive')->middleware(['permission:product-edit', 'isDemo']);
        Route::get('/delete/{id}', [ProductController::class, 'productDelete'])->name('product.delete')->middleware(['permission:product-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'product-color'], function () {
        Route::get('', [ColorController::class, 'productColor'])->name('product.color')->middleware(['permission:product-create|product-edit']);
        Route::get('/create', [ColorController::class, 'productColorCreate'])->name('product.color.create')->middleware(['permission:product-create|product-edit']);
        Route::post('/create', [ColorController::class, 'productColorStore'])->name('product.color.store')->middleware(['permission:product-create|product-edit', 'isDemo']);
        Route::get('/edit/{id}', [ColorController::class, 'productColorEdit'])->name('product.color.edit')->middleware(['permission:product-create|product-edit']);
        Route::post('/update', [ColorController::class, 'productColorUpdate'])->name('product.color.update')->middleware(['permission:product-create|product-edit', 'isDemo']);
        Route::get('/delete/{id}', [ColorController::class, 'productColorDelete'])->name('product.color.delete')->middleware(['permission:product-create|product-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'product-size'], function () {
        Route::get('', [SizeController::class, 'productSize'])->name('product.size')->middleware(['permission:product-create|product-edit']);
        Route::get('/create', [SizeController::class, 'productSizeCreate'])->name('product.size.create')->middleware(['permission:product-create|product-edit']);
        Route::post('/create', [SizeController::class, 'productSizeStore'])->name('product.size.store')->middleware(['permission:product-create|product-edit', 'isDemo']);
        Route::get('/edit/{id}', [SizeController::class, 'productSizeEdit'])->name('product.size.edit')->middleware(['permission:product-create|product-edit']);
        Route::post('/update', [SizeController::class, 'productSizeUpdate'])->name('product.size.update')->middleware(['permission:product-create|product-edit', 'isDemo']);
        Route::get('/delete/{id}', [SizeController::class, 'productSizeDelete'])->name('product.size.delete')->middleware(['permission:product-create|product-edit', 'isDemo']);
    });


    Route::group(['prefix' => 'product-tag'], function () {
        Route::get('', [ProductTagController::class, 'productTag'])->name('product.tag')->middleware(['permission:product-create|product-edit']);
        Route::get('/create', [ProductTagController::class, 'productTagCreate'])->name('product.tag.create')->middleware(['permission:product-create|product-edit']);
        Route::post('/create', [ProductTagController::class, 'productTagStore'])->name('product.tag.store')->middleware(['permission:product-create|product-edit', 'isDemo']);
        Route::get('/edit/{id}', [ProductTagController::class, 'productTagEdit'])->name('product.tag.edit')->middleware(['permission:product-create|product-edit']);
        Route::post('/update', [ProductTagController::class, 'productTagUpdate'])->name('product.tag.update')->middleware(['permission:product-create|product-edit', 'isDemo']);
        Route::get('/delete/{id}', [ProductTagController::class, 'productTagDelete'])->name('product.tag.delete')->middleware(['permission:product-create|product-edit', 'isDemo']);
    });


    Route::group(['prefix' => 'item-tag'], function () {
        Route::get('', [ItemTagController::class, 'itemTag'])->name('item.tag')->middleware(['permission:product-create|product-edit']);
        Route::get('/create', [ItemTagController::class, 'itemTagCreate'])->name('item.tag.create')->middleware(['permission:product-create|product-edit']);
        Route::post('/create', [ItemTagController::class, 'itemTagStore'])->name('item.tag.store')->middleware(['permission:product-create|product-edit', 'isDemo']);
        Route::get('/edit/{id}', [ItemTagController::class, 'itemTagEdit'])->name('item.tag.edit')->middleware(['permission:product-create|product-edit']);
        Route::post('/update', [ItemTagController::class, 'itemTagUpdate'])->name('item.tag.update')->middleware(['permission:product-create|product-edit', 'isDemo']);
        Route::get('/delete/{id}', [ItemTagController::class, 'itemTagDelete'])->name('item.tag.delete')->middleware(['permission:product-create|product-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'customer-services'], function () {
        Route::get('', [CustomerServiceController::class, 'customerService'])->name('customer.services')->middleware(['permission:crm-list|crm-create|crm-edit|crm-delete']);
        Route::get('/edit/{id}', [CustomerServiceController::class, 'customerServiceEdit'])->name('customer.services.edit')->middleware(['permission:crm-edit']);
        Route::post('/update', [CustomerServiceController::class, 'customerServiceUpdate'])->name('customer.services.update')->middleware(['permission:crm-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'company-story'], function () {
        Route::get('', [CompanyStroyController::class, 'companyStory'])->name('company.story')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/create', [CompanyStroyController::class, 'companyStoryCreate'])->name('company.story.create')->middleware(['permission:cms-create']);
        Route::post('/create', [CompanyStroyController::class, 'companyStoryStore'])->name('company.story.store')->middleware(['permission:cms-create', 'isDemo']);
        Route::get('/edit/{id}', [CompanyStroyController::class, 'companyStoryEdit'])->name('company.story.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [CompanyStroyController::class, 'companyStoryUpdate'])->name('company.story.update')->middleware(['permission:cms-edit', 'isDemo']);
        Route::get('/delete/{id}', [CompanyStroyController::class, 'companyStoryDelete'])->name('company.story.delete')->middleware(['permission:cms-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'testimonial'], function () {
        Route::get('', [TestimonilController::class, 'testimonial'])->name('testimonial')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/create', [TestimonilController::class, 'testimonialCreate'])->name('testimonial.create')->middleware(['permission:cms-create']);
        Route::post('/create', [TestimonilController::class, 'testimonialStore'])->name('testimonial.store')->middleware(['permission:cms-create', 'isDemo']);
        Route::get('/edit/{id}', [TestimonilController::class, 'testimonialEdit'])->name('testimonial.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [TestimonilController::class, 'testimonialUpdate'])->name('testimonial.update')->middleware(['permission:cms-edit', 'isDemo']);
        Route::get('/delete/{id}', [TestimonilController::class, 'testimonialDelete'])->name('testimonial.delete')->middleware(['permission:cms-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'coupon'], function () {
        Route::get('', [CouponController::class, 'coupon'])->name('coupon')->middleware(['permission:coupon-list|coupon-create|coupon-edit|coupon-delete']);
        Route::get('/create', [CouponController::class, 'couponCreate'])->name('coupon.create')->middleware(['permission:coupon-create']);
        Route::post('/create', [CouponController::class, 'couponStore'])->name('coupon.store')->middleware(['permission:coupon-create', 'isDemo']);
        Route::get('/edit/{id}', [CouponController::class, 'couponEdit'])->name('coupon.edit')->middleware(['permission:coupon-edit']);
        Route::post('/update', [CouponController::class, 'couponUpdate'])->name('coupon.update')->middleware(['permission:coupon-edit', 'isDemo']);
        Route::get('/delete/{id}', [CouponController::class, 'couponDelete'])->name('coupon.delete')->middleware(['permission:coupon-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'site-content/home-page'], function () {
        Route::get('', [HomePageController::class, 'homePage'])->name('home.page.site.content')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [HomePageController::class, 'homePageEdit'])->name('home.page.site.content.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [HomePageController::class, 'homePageUpdate'])->name('home.page.site.content.update')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'theme'], function () {
        Route::get('/', [ThemeController::class, 'index'])->name('theme');
        Route::post('update', [ThemeController::class, 'update'])->name('theme.update')->middleware('isDemo');

        Route::get('special-offer', [ThemeController::class, 'special_offer'])->name('theme.special.offer');
        Route::post('special-offer', [ThemeController::class, 'special_offer_update'])->name('theme.special.offer.update');
    });
    Route::group(['prefix' => 'banner'], function () {
        Route::get('/', [BannerController::class, 'index'])->name('banner');
        Route::post('update/{id}', [BannerController::class, 'update'])->name('banner.update')->middleware('isDemo');
    });

    Route::group(['prefix' => 'site-content/about-page'], function () {
        Route::get('', [AboutUsPageController::class, 'aboutPage'])->name('about.page.site.content')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [AboutUsPageController::class, 'aboutPageEdit'])->name('about.page.site.content.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [AboutUsPageController::class, 'aboutPageUpdate'])->name('about.page.site.content.update')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'social-link'], function () {
        Route::get('', [SocialLinkController::class, 'socialLink'])->name('social.link')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [SocialLinkController::class, 'socialLinkEdit'])->name('social.link.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [SocialLinkController::class, 'socialLinkUpdate'])->name('social.link.update')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'footer-information'], function () {
        Route::get('/edit', [FooterInformationController::class, 'footerInformationEdit'])->name('footer.information.edit')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::post('/update', [FooterInformationController::class, 'footerInformationUpdate'])->name('footer.information.update')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::get('/company/privacy-policy', [CompanyController::class, 'privacyPolicy'])->name('privacy_policy')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
    Route::get('/company/refund-policy', [CompanyController::class, 'refundPolicy'])->name('refund_policy')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
    Route::get('/company/shipping-return', [CompanyController::class, 'shippingReturn'])->name('shipping_return')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
    Route::get('/company/terms-conditions', [CompanyController::class, 'termsConditions'])->name('terms_conditions')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
    Route::post('/company/content-update/{id}', [CompanyController::class, 'contentUpdate'])->name('content_update')->middleware(['permission:cms-edit', 'isDemo']);
    Route::get('/faq-list', [CustomerServiceController::class, 'faqList'])->name('faq_list')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
    Route::post('/faq-update/{id}', [CustomerServiceController::class, 'faqUpdate'])->name('faq_update')->middleware(['permission:cms-edit', 'isDemo']);
    Route::post('/faq-store', [CustomerServiceController::class, 'faqStore'])->name('faq_store')->middleware(['permission:cms-create', 'isDemo']);
    Route::get('/faq-delete/{id}', [CustomerServiceController::class, 'faqDelete'])->name('faq_delete')->middleware(['permission:cms-delete', 'isDemo']);

    Route::get('/orders/{status}', [OrderController::class, 'orders'])->name('orders')->middleware(['permission:order-list|order-create|order-edit|order-delete']);
    Route::post('/order-details', [OrderController::class, 'order_details'])->name('order.details')->middleware(['permission:order-list']);
    Route::get('/order-print/{id}', [OrderController::class, 'order_print'])->name('order.print')->middleware(['permission:order-list']);
    Route::post('/order-status-edit', [OrderController::class, 'orderStatusEdit'])->name('order_status_edit')->middleware(['permission:order-edit', 'isDemo']);
    Route::post('/order-status-change/{id}', [OrderController::class, 'orderStatusChange'])->name('order_status_change')->middleware(['permission:order-edit', 'isDemo']);
    Route::get('/order-delete/{id}', [OrderController::class, 'orderDelete'])->name('order_delete')->middleware(['permission:order-delete', 'isDemo']);
    Route::get('/order/digital-products/{id}', [OrderController::class, 'digitalProductSend'])->name('digital_product_send')->middleware(['permission:order-edit']);
    Route::post('/order/digital-products-mail', [OrderController::class, 'digitalProductMail'])->name('digital_product_mail')->middleware(['permission:order-edit', 'isDemo']);

    Route::get('/transactions', [OrderController::class, 'transactionsList'])->name('transactions')->middleware(['permission:transaction-list|transaction-create|transaction-edit|transaction-delete']);

    //Manage Pages
    Route::get('/pages', [PageController::class, 'pages'])->name('pages')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/page-create', [PageController::class, 'pageCreate'])->name('page.create')->middleware(['permission:menu-create']);
    Route::post('/page-store', [PageController::class, 'pageStore'])->name('page.store')->middleware(['permission:menu-create', 'isDemo']);
    Route::get('/page-edit/{slug}', [PageController::class, 'pageEdit'])->name('page.edit')->middleware(['permission:menu-edit']);
    Route::post('/page-update/{id}', [PageController::class, 'pageUpdate'])->name('page.update')->middleware(['permission:menu-edit', 'isDemo']);
    Route::get('/page-delete/{id}', [PageController::class, 'pageDelete'])->name('page.delete')->middleware(['permission:menu-delete', 'isDemo']);

    //Manage Menus
    Route::get('/static-menus', [MenuController::class, 'staticMenus'])->name('static_menus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/edit-static-menu/{id}', [MenuController::class, 'editStaticMenu'])->name('edit_static_menu')->middleware(['permission:menu-edit']);
    Route::get('/dynamic-menus', [MenuController::class, 'dynamicMenus'])->name('dynamic_menus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/create-menu', [MenuController::class, 'createMenu'])->name('create_menu')->middleware(['permission:menu-create']);
    Route::post('/store-menu', [MenuController::class, 'storeMenu'])->name('store_menu')->middleware(['permission:menu-create', 'isDemo']);
    Route::get('/edit-menu/{id}', [MenuController::class, 'editMenu'])->name('edit_menu')->middleware(['permission:menu-edit']);
    Route::post('/update-menu/{id}', [MenuController::class, 'updateMenu'])->name('update_menu')->middleware(['permission:menu-edit', 'isDemo']);
    Route::get('/delete-menu/{id}', [MenuController::class, 'deleteMenu'])->name('delete_menu')->middleware(['permission:menu-delete', 'isDemo']);
    Route::get('/submenus', [MenuController::class, 'submenus'])->name('submenus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/create-submenu', [MenuController::class, 'createSubmenu'])->name('create_submenu')->middleware(['permission:menu-create']);
    Route::post('/store-submenu', [MenuController::class, 'storeSubmenu'])->name('store_submenu')->middleware(['permission:menu-create', 'isDemo']);
    Route::get('/edit-submenu/{id}', [MenuController::class, 'editSubmenu'])->name('edit_submenu')->middleware(['permission:menu-edit']);
    Route::post('/update-submenu/{id}', [MenuController::class, 'updateSubmenu'])->name('update_submenu')->middleware(['permission:menu-edit', 'isDemo']);
    Route::get('/delete-submenu/{id}', [MenuController::class, 'deleteSubmenu'])->name('delete_submenu')->middleware(['permission:menu-delete', 'isDemo']);

    //Currency
    Route::get('/currency-list', [CurrencyController::class, 'currencyList'])->name('currency_list')->middleware(['permission:currency-list|currency-create|currency-edit|currency-delete']);
    Route::post('/store-currency', [CurrencyController::class, 'storeCurrency'])->name('store_currency')->middleware(['permission:currency-create', 'isDemo']);
    Route::post('/update-currency/{id}', [CurrencyController::class, 'updateCurrency'])->name('update_currency')->middleware(['permission:currency-edit', 'isDemo']);
    Route::get('/delete-currency/{id}', [CurrencyController::class, 'deleteCurrency'])->name('delete_currency')->middleware(['permission:currency-delete', 'isDemo']);

    //Language
    Route::get('/language-list', [LanguageController::class, 'languageList'])->name('language_list')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
    Route::get('/language-edit/{id}', [LanguageController::class, 'languageEdit'])->name('language_edit')->middleware(['permission:cms-edit']);
    Route::post('/language-update/{id}', [LanguageController::class, 'languageUpdate'])->name('language_update')->middleware(['permission:cms-edit', 'isDemo']);

    //Taxation
    Route::get('/country-tax-list', [EcommerceController::class, 'countryTaxList'])->name('country_taxation_list')->middleware(['permission:tax-list|tax-create|tax-edit|tax-delete']);
    Route::post('/country-tax-store', [EcommerceController::class, 'countryTaxStore'])->name('country_tax_store')->middleware(['permission:tax-create', 'isDemo']);
    Route::post('/country-tax-update/{id}', [EcommerceController::class, 'countryTaxUpdate'])->name('country_tax_update')->middleware(['permission:tax-edit', 'isDemo']);

    //Delivery Charge
    Route::get('/delivery-charge-list', [EcommerceController::class, 'countryDCList'])->name('country_dc_list')->middleware(['permission:delivery-charge-list|delivery-charge-create|delivery-charge-edit|delivery-charge-delete']);
    Route::post('/delivery-charge-store', [EcommerceController::class, 'countryDCStore'])->name('country_dc_store')->middleware(['permission:delivery-charge-create', 'isDemo']);
    Route::post('/delivery-charge-update/{id}', [EcommerceController::class, 'countryDCUpdate'])->name('country_dc_update')->middleware(['permission:delivery-charge-edit', 'isDemo']);

    //SEO Management
    Route::get('/manage-seo/{slug}', [SeoController::class, 'manageSeo'])->name('manage_seo')->middleware(['permission:cms-create|cms-edit']);
    Route::post('/update-seo/{slug}', [SeoController::class, 'updateSeo'])->name('update_seo')->middleware(['permission:cms-create|cms-edit', 'isDemo']);

    //User Settings
    Route::get('/admins', [UserController::class, 'adminList'])->name('admin_list')->middleware(['permission:user-list|user-create|user-edit|user-delete']);
    Route::get('/create-admin', [UserController::class, 'createAdmin'])->name('create_admin')->middleware(['permission:user-create']);
    Route::post('/store-admin', [UserController::class, 'storeAdmin'])->name('store_admin')->middleware(['permission:user-create', 'isDemo']);
    Route::get('/edit-admin/{id}', [UserController::class, 'editAdmin'])->name('edit_admin')->middleware(['permission:user-edit']);
    Route::post('/update-admin/{id}', [UserController::class, 'updateAdmin'])->name('update_admin')->middleware(['permission:user-edit', 'isDemo']);
    Route::get('/customers', [UserController::class, 'customerList'])->name('customer_list')->middleware(['permission:user-list|user-create|user-edit|user-delete']);
    Route::get('/customer/{status}/{user_id}', [UserController::class, 'customerStatusChange'])->name('customer_status_change')->middleware(['permission:user-list|user-create|user-edit|user-delete', 'isDemo']);
    Route::get('/admin-status/{id}', [UserController::class, 'statusChange'])->name('status_change')->middleware(['permission:user-list', 'isDemo']);

    //Role Settings
    Route::get('/roles', [RoleController::class, 'index'])->name('role_list')->middleware(['role:Super Admin']);
    Route::get('/create-role', [RoleController::class, 'createRole'])->name('create_role')->middleware(['role:Super Admin']);
    Route::post('/store-role', [RoleController::class, 'storeRole'])->name('store_role')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/edit-role/{id}', [RoleController::class, 'editRole'])->name('edit_role')->middleware(['role:Super Admin']);
    Route::post('/update-role/{id}', [RoleController::class, 'updateRole'])->name('update_role')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/delete-role/{id}', [RoleController::class, 'deleteRole'])->name('delete_role')->middleware(['role:Super Admin', 'isDemo']);

    Route::get('/sitemap-list', [SitemapController::class, 'index'])->name('sitemap_list')->middleware(['role:Super Admin']);
    Route::get('/sitemap-create', [SitemapController::class, 'create'])->name('sitemap_create')->middleware(['role:Super Admin']);
    Route::post('/sitemap-store', [SitemapController::class, 'store'])->name('sitemap_store')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/sitemap-delete', [SitemapController::class, 'delete'])->name('sitemap_delete')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/sitemap-download/{id}', [SitemapController::class, 'download'])->name('sitemap_download')->middleware(['role:Super Admin', 'isDemo']);

    Route::get('/payment-gateway', [PaymentGatewayController::class, 'index'])->name('payment_gateway_list')->middleware(['permission:payment-gateway-list|payment-gateway-create|payment-gateway-edit|payment-gateway-delete']);
    Route::post('/payment-gateway-update/{slug}', [PaymentGatewayController::class, 'paymentGatewayUpdate'])->name('payment_gateway_update')->middleware(['permission:payment-gateway-edit', 'isDemo']);
});
