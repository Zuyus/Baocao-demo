<?php

namespace App\Http\Controllers\Admin\SiteContent;

use App\Http\Controllers\Controller;
use App\Models\Admin\SiteContent\Homepage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\TryCatch;
use Yajra\DataTables\Facades\DataTables;

class HomePageController extends Controller
{
    public function homePage(Request $request)
    {
        if ($request->ajax()) {
            $data = Homepage::latest()->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.home.page.site.content.edit', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('Location', function ($data) {
                    return  '<span class="status active">' . $data->Location . '</span>';
                })
                ->editColumn('Title', function ($data) {
                    return Str::limit($data->en_Title, 15);
                })
                ->editColumn('Description_One', function ($data) {
                    return Str::limit($data->en_Description_One, 15);
                })
                ->editColumn('Description_Two', function ($data) {
                    return Str::limit($data->en_Description_Two, 15);
                })
                ->rawColumns(['action', 'Description_One', 'Description_Two', 'Title', 'Location'])
                ->make(true);
        }
        $data['title'] = __('Home Page Content');
        return view('admin.pages.site_content.home_page.index', $data);
    }
    public function homePageEdit($id)
    {
        $data['title'] = __('Edit Home Page Content');
        $data['edit'] = Homepage::where('id', $id)->first();
        return view('admin.pages.site_content.home_page.edit', $data);
    }
    public function homePageUpdate(Request $request)
    {
        $id = $request->id;
        $homepage = Homepage::where('id', $id)->first();
        if ($request->hasFile('image')) {
            $image = fileUpload($request['image'], aboutUsPage());
            $homepage->image = $image;
            $homepage->save();
        }
        $general = $homepage->update([
            'en_Title' => $request->en_title,
            'en_Description_One' => $request->en_description_one,
            'en_Description_Two' => $request->en_description_two,
            'fr_Title' => $request->fr_title,
            'fr_Description_One' => $request->fr_description_one,
            'fr_Description_Two' => $request->fr_description_two
        ]);
        if ($general) {
            // (['image'=>'ddddd']);



            if ($request->location == 'products') {
                Setting::where('slug', 'home_products_page')->update(['value' => $request->home_products_page]);
            }
            if ($request->location == 'popular_products') {
                $new_arrival = checkBoxValue($request->new_arrival);
                $best_selling = checkBoxValue($request->best_selling);
                $on_sale = checkBoxValue($request->on_sale);
                $featured_items = checkBoxValue($request->featured_items);
                Setting::where('slug', 'home_trending_page')->update(['value' => $request->home_trending_page]);
                Setting::where('slug', 'new_arrival')->update(['value' => $new_arrival]);
                Setting::where('slug', 'best_selling')->update(['value' => $best_selling]);
                Setting::where('slug', 'on_sale')->update(['value' => $on_sale]);
                Setting::where('slug', 'featured_items')->update(['value' => $featured_items]);
            }
            return redirect()->route('admin.home.page.site.content')->with('success', __('Successfully Updated !'));
        }
        return redirect()->route('admin.home.page.site.content')->with('success', __('Does not Updated !'));
    }
}
