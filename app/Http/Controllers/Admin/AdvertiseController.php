<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertiseRequest;
use App\Models\Admin\Advertise;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class AdvertiseController extends Controller
{
    public function advertise(Request $request)
    {

        if ($request->ajax()) {
            $data = Advertise::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.advertise.edit', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('Image_One', function ($data) {
                    $url = asset(PromotionImage() . $data->Image_One);
                    return '<img src=' . $url . ' border="0" width="80"class="img-rounded" align="center" />';
                })
                ->editColumn('Image_Two', function ($data) {
                    $url = asset(PromotionImage() . $data->Image_Two);
                    return '<img src=' . $url . ' border="0" width="80" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'Image_One', 'Image_Two'])
                ->make(true);
        }
        $data['title'] = __('Advertise List');
        return view('admin.pages.advertise.index', $data);
    }

    public function advertiseCreate()
    {
        $data['title'] = __('Advertise Create');
        return view('admin.pages.advertise.create', $data);
    }

    public function advertiseStore(AdvertiseRequest $request)
    {
        if (!empty($request->image_one)) {
            $image_one = fileUpload($request['image_one'], PromotionImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }
        if (!empty($request->image_two)) {
            $image_two = fileUpload($request['image_two'], PromotionImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }
        $slider = Advertise::create([
            'Image_One' => $image_one,
            'Image_Two' => $image_two,
        ]);
        if ($slider) {
            return redirect()->route('admin.advertise')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }

    public function advertiseEdit($id)
    {
        $data['title'] = __('Advertise Edit');
        $data['edit'] = Advertise::where('id', $id)->first();
        return view('admin.pages.advertise.edit', $data);
    }

    public function advertiseUpdate(Request $request)
    {
        $id = $request->id;
        if (!empty($request->image_one)) {
            $image_one = fileUpload($request['image_one'], PromotionImage());
        } else {
            $update = Advertise::where('id', $id)->first();
            $image_one = $update->Image_One;
        }
        if (!empty($request->image_two)) {
            $image_two = fileUpload($request['image_two'], PromotionImage());
        } else {
            $update = Advertise::where('id', $id)->first();
            $image_two = $update->Image_Two;
        }
        $update = Advertise::find($id)->update([
            'Image_One' => $image_one,
            'Image_Two' => $image_two
        ]);
        if ($update) {
            return redirect()->route('admin.advertise')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }

    public function advertiseDelete($id)
    {
        $delete = Advertise::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.advertise')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.advertise')->with('error', __('Does Not Delete!'));
    }
}
