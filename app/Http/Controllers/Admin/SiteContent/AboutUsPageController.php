<?php

namespace App\Http\Controllers\Admin\SiteContent;

use App\Http\Controllers\Controller;
use App\Models\Admin\SiteContent\AboutUsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class AboutUsPageController extends Controller
{
    public function aboutPage(Request $request)
    {
        if ($request->ajax()) {
            $data = AboutUsPage::latest()->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.about.page.site.content.edit', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('Location', function ($data) {
                    return  '<span class="status active">' . $data->Location . '</span>';
                })
                ->editColumn('Image', function ($data) {
                    if ($data->Image) {
                        $url = asset(aboutUsPage() . $data->Image);
                        return '<img src=' . $url . ' border="0" width="80"class="img-rounded" align="center" />';
                    } else {
                        $url = asset(aboutUsPage() . $data->Icon_One);
                        return '<img src=' . $url . ' border="0" width="80"class="img-rounded" align="center" />';
                    }
                })
                ->editColumn('Title', function ($data) {
                    return Str::limit($data->en_Title_One, 15);
                })
                ->editColumn('Description', function ($data) {
                    return Str::limit($data->en_Description_One, 50);
                })
                ->rawColumns(['action', 'Description', 'Title', 'Location', 'Image'])
                ->make(true);
        }
        $data['title'] = __('About Page Content');
        return view('admin.pages.site_content.about_us.index', $data);
    }
    public function aboutPageEdit($id)
    {
        $data['title'] = __('Edit About Page Content');
        $data['edit'] = AboutUsPage::where('id', $id)->first();
        return view('admin.pages.site_content.about_us.edit', $data);
    }
    public function aboutPageUpdate(Request $request)
    {
        $id = $request->id;
        $about = AboutUsPage::where('id', $id)->first();
        if (!empty($request->image)) {
            $image = fileUpload($request['image'], aboutUsPage());
        } else {
            $image = $about->Image;
        }

        if (!empty($request->icon_one)) {
            $icon_one = fileUpload($request['icon_one'], aboutUsPage());
        } else {
            $icon_one = $about->Icon_One;
        }
        if (!empty($request->icon_two)) {
            $icon_two = fileUpload($request['icon_two'], aboutUsPage());
        } else {
            $icon_two = $about->Icon_Two;
        }
        if (!empty($request->icon_three)) {
            $icon_three = fileUpload($request['icon_three'], aboutUsPage());
        } else {
            $icon_three = $about->Icon_Three;
        }
        if (!empty($request->icon_four)) {
            $icon_four = fileUpload($request['icon_four'], aboutUsPage());
        } else {
            $icon_four = $about->Icon_Four;
        }

        // return $request->en_title;
        $general = $about->update([
            'en_Title' => $request->en_Title,
            'en_Subtitle' => $request->en_subtitle,
            'Image' => $image,
            'Icon_One' => $icon_one,
            'Icon_Two' => $icon_two,
            'Icon_Three' => $icon_three,
            'Icon_Four' => $icon_four,
            'en_Title_One' => $request->en_title_one,
            'en_Title_Two' => $request->en_title_two,
            'en_Title_Three' => $request->en_title_three,
            'en_Title_Four' => $request->en_title_four,
            'en_Description_One' => $request->en_description_one,
            'en_Description_Two' => $request->en_description_two,
            'en_Description_Three' => $request->en_description_three,
            'en_Description_Four' => $request->en_description_four,
            'fr_Title_One' => $request->fr_title_one,
            'fr_Title_Two' => $request->fr_title_two,
            'fr_Title_Three' => $request->fr_title_three,
            'fr_Title_Four' => $request->fr_title_four,
            'fr_Subtitle' => $request->fr_subtitle,
            'fr_Description_One' => $request->fr_description_one,
            'fr_Description_Two' => $request->fr_description_two,
            'fr_Description_Three' => $request->fr_description_three,
            'fr_Description_Four' => $request->fr_description_four,
        ]);
        if ($general) {
            return redirect()->route('admin.about.page.site.content')->with('success', __('Successfully Updated !'));
        }
        return redirect()->route('admin.about.page.site.content')->with('success', __('Does not Updated !'));
    }
}
