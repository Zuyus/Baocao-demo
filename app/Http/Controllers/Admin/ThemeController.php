<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\SpecialOffer;
use Illuminate\Http\Request;
use App\Models\Setting;

class ThemeController extends Controller
{
    public function index()
    {
        $setting = Setting::query()->where('slug', 'theme')->first();
        return view('admin.pages.theme.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::query()->where('slug', 'theme')->first();
        $setting->value = $request->theme;
        $setting->save();
        session(['theme' => $request->theme == 'one' ? 'theme1' : 'theme2']);
        return redirect()->back()->with('success', __('Successfully Updated !'));
    }

    public function special_offer()
    {
        $data['specialOffer'] = SpecialOffer::first();
        $data['categories'] = Category::where('status', 1)->get();
        return view('admin.pages.theme.special_offer', $data);
    }

    public function special_offer_update(Request $request)
    {
        // return $request->all();
        $offer = SpecialOffer::first();
        $image = $offer->image;
        $offer->en_title = $request->en_title;
        $offer->fr_title = $request->fr_title;
        $offer->category_id  = $request->category_id;
        $offer->discount  = $request->discount;
        $offer->url  = $request->url;
        $offer->status  = $request->status;
        if (!empty($request->image)) {
            $offer->image = fileUpload($request['image'], offerImage(), $image);
        }
        $offer->save();
        return redirect()->back()->with('success', __('Successfully Updated !'));


        return $request->all();
    }
}
