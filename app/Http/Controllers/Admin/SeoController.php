<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function manageSeo($slug)
    {
        $data['title'] = __('Manage SEO');
        $data['seo'] = SeoSetting::where('slug', $slug)->first();
        return view('admin.pages.seo.manage', $data);
    }

    public function updateSeo(Request $request, $slug)
    {
        $seo = SeoSetting::where('slug', $slug)->first();
        if(!is_null($seo)) {
            $update = $seo->update([
                'title' => is_null($request->title) ? $seo->title : $request->title,
                'description' => is_null($request->description) ? $seo->description : $request->description,
                'keywords' => is_null($request->keywords) ? $seo->keywords : $request->keywords,
            ]);

            if(!empty($update)) {
                return redirect()->back()->with('success', __('Successfully Updated'));
            }
        }
        return redirect()->back()->with('error', __('something went wrong!'));
    }
}
