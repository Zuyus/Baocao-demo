<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    public function brand(Request $request)
    {
        if ($request->ajax()) {
            $data = Brand::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.brand.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.brand.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.brand.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('admin.brand.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('BrandName', function ($data) {
                    return $data->en_BrandName;
                })
                ->editColumn('BrandSlug', function ($data) {
                    return $data->en_BrandSlug;
                })
                ->editColumn('Status', function ($data) {
                    if ($data->Status == 1) {
                        $active = "Active";
                        return '<span class="status active">' . $active . '</span>';
                    } else {
                        $active = "Inactive";
                        return '<span class="status blocked">' . $active . '</span>';
                    }
                })
                ->editColumn('BrandImage', function ($data) {
                    $url = asset(BrandImage() . $data->BrandImage);
                    return '<img src=' . $url . ' border="0" width="70" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'BrandName', 'BrandSlug', 'Status', 'BrandImage', 'BrandImage'])
                ->make(true);
        }
        $data['title'] = __('Brand List');
        return view('admin.pages.brand.index', $data);
    }

    public function brandCreate()
    {
        $data['title'] = __('Brand Create');
        return view('admin.pages.brand.create', $data);
    }
    public function brandStore(BrandRequest $request)
    {
        //        return $request->all();
        if (!empty($request->brand_image)) {
            $image = fileUpload($request['brand_image'], BrandImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }
        $brand = Brand::create([
            'en_BrandName' => $request->en_brand_name,
            'fr_BrandName' => $request->fr_brand_name,
            'en_BrandSlug' => $this->slugify($request->en_brand_name),
            'fr_BrandSlug' => $this->slugify($request->fr_brand_name),
            'BrandImage' => $image
        ]);
        if ($brand) {
            return redirect()->route('admin.brand')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }

    public function brandDelete($id)
    {

        $delete = Brand::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.brand')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.brand')->with('error', __('Does Not Delete!'));
    }

    public function brandActive($id)
    {
        $inactive = Brand::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.brand')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.brand')->with('success', __('Does not Updated !'));
    }
    public function brandInactive($id)
    {
        $inactive = Brand::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.brand')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.brand')->with('success', __('Does not Updated !'));
    }

    public function brandEdit($id)
    {
        $data['title'] = __('Brand Edit');
        $data['edit'] = Brand::where('id', $id)->first();
        return view('admin.pages.brand.edit', $data);
    }
    public function brandUpdate(Request $request)
    {
        $id = $request->id;

        $brand = Brand::whereId($id)->first();
        if (!empty($request->brand_image)) {
            $image = fileUpload($request['brand_image'], BrandImage());
        } else {
            $image = $brand->BrandImage;
        }
        $update = $brand->update([

            'en_BrandName' => is_null($request->en_brand_name) ? $brand->en_brand_name : $request->en_brand_name,
            'fr_BrandName' => is_null($request->fr_brand_name) ? $brand->fr_brand_name : $request->fr_brand_name,
            'en_BrandSlug' => is_null($request->en_brand_name) ? $brand->en_BrandSlug : $this->slugify($request->en_brand_name),
            'fr_BrandSlug' => is_null($request->fr_brand_name) ? $brand->fr_BrandSlug : $this->slugify($request->fr_brand_name),
            'BrandImage' => $image
        ]);
        if ($update) {
            return redirect()->route('admin.brand')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }


    public function slugify($text)
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate divider
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }
}
