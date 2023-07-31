<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class ServiceCustomerController extends Controller
{
   public function termsConditions(){
       $seo = SeoSetting::where('slug', 'terms-conditions')->first();
       $data['title'] = $seo->title;
       $data['description'] = $seo->description;
       $data['keywords'] = $seo->keywords;
       return view('front.pages.customer_services.terms_conditions', $data);
   }
   public function privacyPolicy(){
       $seo = SeoSetting::where('slug', 'privacy-policy')->first();
       $data['title'] = $seo->title;
       $data['description'] = $seo->description;
       $data['keywords'] = $seo->keywords;
       return view('front.pages.customer_services.privacy_policy', $data);
   }
   public function shippingReturn(){
       $seo = SeoSetting::where('slug', 'shipping-return')->first();
       $data['title'] = $seo->title;
       $data['description'] = $seo->description;
       $data['keywords'] = $seo->keywords;
       return view('front.pages.customer_services.shipping_return', $data);
   }
   public function Faq(){
       $data['faqs'] = Faq::latest()->get();
       $seo = SeoSetting::where('slug', 'faq')->first();
       $data['title'] = $seo->title;
       $data['description'] = $seo->description;
       $data['keywords'] = $seo->keywords;
       return view('front.pages.customer_services.help_faq', $data);
   }
   public function refundPolicy(){
       $seo = SeoSetting::where('slug', 'refund-policy')->first();
       $data['title'] = $seo->title;
       $data['description'] = $seo->description;
       $data['keywords'] = $seo->keywords;
       return view('front.pages.customer_services.return_policy', $data);
   }
}
