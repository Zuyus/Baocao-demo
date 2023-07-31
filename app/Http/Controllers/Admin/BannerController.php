<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $data['title'] = __('Edit Banner');
        $data['banner'] = Banner::first();
        return view('admin.pages.banner.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'position' => 'required'
        ]);

        $banner = Banner::find($id);
        if (!empty($request->image)) {
            $oldImage = $banner->image;
            $banner->image = fileUpload($request['image'], BannerImage(), $oldImage);
        }
        $banner->en_title = $request->en_title;
        $banner->en_summary = $request->en_summary;
        $banner->url = $request->url;
        $banner->position = $request->position;
        $banner->fr_title = $request->fr_title;
        $banner->fr_summary = $request->fr_summary;
        $banner->save();
        return redirect()->back()->with('success', __('Successfully Updated!'));
    }
}
