<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSizeRequest;
use App\Models\Admin\ProductSize;
use App\Models\Admin\Size;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SizeController extends Controller
{
    public function productSize(Request $request)
    {
        if ($request->ajax()) {
            $data = Size::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.product.size.edit', $data->id) . '" class="btn-action"><i class="fas fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.product.size.delete', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = __('Product Sizes List');
        return view('admin.pages.product_size.index', $data);
    }
    public function productSizeCreate()
    {
        $data['title'] = __('Product Size Create');
        return view('admin.pages.product_size.create', $data);
    }

    public function productSizeStore(ProductSizeRequest $request)
    {
        $size = Size::create([
            'Size' => $request->size,
        ]);
        if ($size) {
            return redirect()->route('admin.product.size')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }
    public function productSizeEdit($id)
    {
        $data['title'] = __('Product Size Edit');
        $data['edit'] = Size::Where('id', $id)->first();
        return view('admin.pages.product_size.edit', $data);
    }
    public function productSizeUpdate(Request $request)
    {
        $id = $request->id;
        $color = Size::where('id', $id)->update([
            'Size' => $request->size,
        ]);
        if ($color) {
            return redirect()->route('admin.product.size')->with('success', __('Successfully Update !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }
    public function productSizeDelete($id)
    {
        $delete = Size::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.product.size')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.product.size')->with('error', __('Does Not Delete!'));
    }
}
