<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageStoreRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class PageController extends Controller
{
    public function pages(Request $request)
    {
        if ($request->ajax()) {
            $data = Page::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('title', function ($data) {
                    return $data->en_title;
                })
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.page.edit', $data->slug) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.page.delete', encrypt($data->id)) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('url', function ($data) {
                    return route('page.single', $data->slug);
                })
                ->editColumn('description', function ($data) {
                    return strlen(strip_tags($data->en_description)) > 250 ? substr(strip_tags($data->en_description), 0, 250) . '...' : strip_tags($data->en_description);
                })
                ->rawColumns(['action', 'description'])
                ->make(true);
        }
        $data['title'] = __('All Pages');
        return view('admin.pages.list', $data);
    }

    public function pageCreate()
    {
        $data['title'] = __('Page Create');
        return view('admin.pages.create', $data);
    }

    public function pageStore(PageStoreRequest $request)
    {
        if (Page::where('slug', $request->slug)->exists()) {
            $slug = $request->slug . '-' . time();
        } else {
            $slug = $request->slug;
        }
        $store = Page::create([
            'en_title' => $request->en_title,
            'en_description' => $request->en_description,
            'slug' => $slug,
            'fr_title' => $request->fr_title,
            'fr_description' => $request->fr_description,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
        ]);

        if (!empty($store)) {
            return redirect()->route('admin.pages')->with('success', __('Successfully Stored'));
        }
        return redirect()->back()->with('error', __('Something went wrong'));
    }

    public function pageEdit($slug)
    {
        $page = Page::where('slug', $slug)->first();
        if (!is_null($page)) {
            $data['title'] = __('Edit Page');
            $data['page'] = $page;
            return view('admin.pages.edit', $data);
        }
        return redirect()->back()->with('error', __('Page not found!'));
    }

    public function pageUpdate(Request $request, $id)
    {
        $id = decrypt($id);
        $page = Page::whereId($id)->first();
        if (!is_null($page)) {
            $update = $page->update([
                'en_title' => is_null($request->en_title) ? $page->en_title : $request->en_title,
                'en_description' => is_null($request->en_description) ? $page->en_description : $request->en_description,
                'fr_title' => is_null($request->fr_title) ? $page->fr_title : $request->fr_title,
                'fr_description' => is_null($request->fr_description) ? $page->fr_description : $request->fr_description,
                'meta_description' => is_null($request->meta_description) ? $page->meta_description : $request->meta_description,
                'meta_keywords' => is_null($request->meta_keywords) ? $page->meta_keywords : $request->meta_keywords,
            ]);

            if (!empty($update)) {
                return redirect()->back()->with('success', __('Page successfully Updated'));
            }
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function pageDelete($id)
    {
        $id = decrypt($id);
        $page = Page::whereId($id)->delete();
        if (!empty($page)) {
            return redirect()->back()->with('success', __('Page successfully Deleted!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }
}
