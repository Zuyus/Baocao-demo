<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CutomerService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function privacyPolicy()
    {
        $data['title'] = __('Privacy Policy');
        $data['sub_menu'] = 'privacy_policy';
        $data['content'] = CutomerService::where('location', 'privacy_policy')->first();
        return view('admin.pages.company.privacy-policy', $data);
    }
    function refundPolicy()
    {
        $data['title'] = __('Refund Policy');
        $data['sub_menu'] = 'return_policy';
        $data['content'] = CutomerService::where('location', 'return_policy')->first();
        return view('admin.pages.company.privacy-policy', $data);
    }
    function shippingReturn()
    {
        $data['title'] = __('Shipping Return');
        $data['sub_menu'] = 'shipping_return';
        $data['content'] = CutomerService::where('location', 'shipping_return')->first();
        return view('admin.pages.company.privacy-policy', $data);
    }
    function termsConditions()
    {
        $data['title'] = __('Terms & Conditins');
        $data['sub_menu'] = 'terms_conditions';
        $data['content'] = CutomerService::where('location', 'terms_conditions')->first();
        return view('admin.pages.company.privacy-policy', $data);
    }

    public function contentUpdate(Request $request, $id)
    {
        $id = decrypt($id);
        $content = CutomerService::whereId($id)->first();
        $update = $content->update([
            'en_description' => is_null($request->en_description) ? $content->en_description : $request->en_description,
            'fr_description' => is_null($request->fr_description) ? $content->fr_description : $request->fr_description,
        ]);

        if (!empty($update)) {
            return redirect()->back()->with('success', __('Content Successfully Updated'));
        }
        return redirect()->back()->with('error', __('Something went wrong'));
    }
}
