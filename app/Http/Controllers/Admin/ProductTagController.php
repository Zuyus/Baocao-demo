<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ProductTag;
use App\Models\ProductTagList;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductTagController extends Controller
{
    public function productTag(Request $request)
    {
        if ($request->ajax()) {
            $data = ProductTagList::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.product.tag.edit', encrypt($data->id)) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.product.tag.delete', encrypt($data->id)) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = __('Product Tag List');
        return view('admin.pages.product_tag.index', $data);
    }
    public function productTagCreate()
    {
        $data['title'] = __('Product Tag Create');
        return view('admin.pages.product_tag.create', $data);
    }
    public function productTagStore(Request $request)
    {
        if (is_null($request->tag)) {
            return redirect()->back()->with('error', __('Tag field required!'));
        }
        $tag = ProductTagList::create([
            'name' => $request->tag
        ]);
        if (!empty($tag)) {
            return redirect()->route('admin.product.tag')->with('success', __('Successfully Stored'));
        }
        return redirect()->back()->with('error', __('Something is wrong'));
    }
    public function productTagDelete($id)
    {
        $id = decrypt($id);
        $delete = ProductTagList::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.product.tag')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.product.tag')->with('error', __('Does Not Delete!'));
    }
    public function productTagEdit($id)
    {
        $id = decrypt($id);
        $data['title'] = __('Product Tag Edit');
        $data['edit'] = ProductTagList::where('id', $id)->first();
        return view('admin.pages.product_tag.edit', $data);
    }
    public function productTagUpdate(Request $request)
    {
        $id = $request->id;
        $product_tag = ProductTagList::whereId($id)->first();
        $tag = $product_tag->update([
            'name' => is_null($request->tag) ? $product_tag->name : $request->tag,
        ]);
        if (!empty($tag)) {
            return redirect()->back()->with('success', __('Successfully Updated'));
        }
        return redirect()->back()->with('error', __('Something is wrong'));
    }
}
