<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use App\Models\Front\Contactus;
use App\Models\SeoSetting;

class ContactUsController extends Controller
{
    public function contactUs()
    {
        $seo = SeoSetting::where('slug', 'contact')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('front.pages.contact.index', $data);
    }

    public function contactUsStore(ContactUsRequest $request)
    {
        Contactus::create([
            'FirstName' => $request->firstname,
            'LastName' => $request->lastname,
            'Email' => $request->email,
            'ContactNumber' => $request->contact_number,
            'Message' => $request->message,
        ]);
        return redirect()->back()->with('success', __('Successfully Sent Message!'));
    }
}
