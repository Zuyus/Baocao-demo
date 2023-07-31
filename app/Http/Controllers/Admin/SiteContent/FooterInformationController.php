<?php

namespace App\Http\Controllers\Admin\SiteContent;

use App\Http\Controllers\Controller;
use App\Models\Admin\SiteContent\FooterInformation;
use Illuminate\Http\Request;

class FooterInformationController extends Controller
{
    public function footerInformationEdit(){
        $data['title'] = __('Edit Footer Information');
        return view('admin.pages.site_content.footer.edit', $data);
    }
    public function footerInformationUpdate(Request $request){
        $id = $request->id;
        if (!empty($request->footer_logo)) {
            $logo = fileUpload($request['footer_logo'], footerImage());
        } else {
            $image = FooterInformation::where('id', $id)->first();
            $logo = $image->Logo;
        }
        if (!empty($request->accepts)) {
            $favicon = fileUpload($request['accepts'], footerImage());
        } else {
            $image = FooterInformation::where('id', $id)->first();
            $favicon = $image->Accepts;
        }
        $update = FooterInformation::where('id', $id)->update([
            'Street_Address' => $request->street_address,
            'Contact' => $request->contact,
            'Email' => $request->email,
            'News_Letter' => $request->news_letter,
            'Design_Developed' => $request->design_developed,
            'Logo' => $logo,
            'Accepts' => $favicon,
        ]);
        if ($update) {
            return redirect()->route('admin.footer.information.edit')->with('success', __('Successfully Updated !'));
        }
        return redirect()->route('admin.footer.information.edit')->with('success', __('Does not Updated !'));
    }
}
