<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ItemTag;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ItemTagController extends Controller
{
    public function itemTag(Request $request)
    {
        if ($request->ajax()) {
            $data = ItemTag::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.item.tag.edit', encrypt($data->id)) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.item.tag.delete', encrypt($data->id)) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $data['title'] = __('Item Tag List');
        return view('admin.pages.item_tag.index', $data);
    }

    public function itemTagCreate()
    {
        $data['title'] = __('Item Tag Create');
        return view('admin.pages.item_tag.create', $data);
    }

    public function itemTagStore(Request $request)
    {
        if (is_null($request->tag)) {
            return redirect()->back()->with('error', __('Tag field required!'));
        }
        $tag = ItemTag::create([
            'name' => $request->tag
        ]);
        if (!empty($tag)) {
            return redirect()->route('admin.item.tag')->with('success', __('Successfully stored'));
        }
        return redirect()->back()->with('error', __('Something is wrong'));
    }

    public function itemTagDelete($id)
    {
        $id = decrypt($id);
        $delete = ItemTag::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.item.tag')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.item.tag')->with('error', __('Does Not Delete!'));
    }
    public function itemTagEdit($id)
    {
        $id = decrypt($id);
        $data['title'] = __('Product Tag Edit');
        $data['edit'] = ItemTag::where('id', $id)->first();
        return view('admin.pages.item_tag.edit', $data);
    }
    public function itemTagUpdate(Request $request)
    {
        $id = $request->id;
        $item_tag = ItemTag::whereId($id)->first();
        $tag = $item_tag->update([
            'name' => is_null($request->tag) ? $item_tag->name : $request->tag,
        ]);
        if (!empty($tag)) {
            return redirect()->back()->with('success', __('Successfully Updated'));
        }
        return redirect()->back()->with('error', __('Something is wrong'));
    }
}
