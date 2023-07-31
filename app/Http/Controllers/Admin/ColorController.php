<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductColorRequest;
use App\Models\Admin\Color;
use App\Models\Admin\ProductColor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ColorController extends Controller
{
    public function productColor(Request $request)
    {
        if ($request->ajax()) {
            $data = Color::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.product.color.edit', $data->id) . '" class="btn-action"><i class="fas fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.product.color.delete', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = __('Product Colors List');
        return view('admin.pages.product_color.index', $data);
    }
    public function productColorCreate()
    {
        $data['title'] = __('Product Colors Create');
        return view('admin.pages.product_color.create', $data);
    }
    public function productColorStore(ProductColorRequest $request)
    {

        $color = Color::create([
            'Name' => $request->color_name,
            'ColorCode' => $request->color_code,
        ]);
        if ($color) {
            return redirect()->route('admin.product.color')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }
    public function productColorEdit($id)
    {
        $data['title'] = __('Product Colors Edit');
        $data['edit'] = Color::Where('id', $id)->first();
        return view('admin.pages.product_color.edit', $data);
    }
    public function productColorUpdate(ProductColorRequest $request)
    {
        $id = $request->id;
        $color = Color::where('id', $id)->update([
            'Name' => $request->color_name,
            'ColorCode' => $request->color_code,
        ]);
        if ($color) {
            return redirect()->route('admin.product.color')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }

    public function productColorDelete($id)
    {
        $delete = Color::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.product.color')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.product.color')->with('error', __('Does Not Delete!'));
    }
}
