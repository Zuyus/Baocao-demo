<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function category(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.category.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.category.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.category.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-toggle-off"></i></a>';
                    }

                    $btn = $btn . '<a href="' . route('admin.category.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('Category_Name', function ($data) {
                    return $data->en_Category_Name;
                })
                ->editColumn('Category_Slug', function ($data) {
                    return $data->en_Category_Slug;
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
                ->editColumn('Description', function ($data) {
                    return Str::limit($data->en_Description, 10);
                })
                ->editColumn('Category_Icon', function ($data) {
                    return $data->Category_Icon;
                })
                ->rawColumns(['action', 'Category_Name', 'Category_Slug', 'Status', 'Description'])
                ->make(true);
        }
        $data['title'] = __('Category List');
        return view('admin.pages.category.index', $data);
    }

    public function categoryCreate()
    {
        $data['title'] = __('Category Create');
        return view('admin.pages.category.create', $data);
    }

    public function categoryStore(CategoryRequest $request)
    {
        $category = Category::create([
            'en_Category_Name' => $request->en_category_name,
            'en_Description' => $request->en_description,
            'en_Category_Slug' => $this->slugify($request->en_category_name),
            'fr_Category_Name' => $request->fr_category_name,
            'fr_Description' => $request->fr_description,
            'fr_Category_Slug' => $this->slugify($request->fr_category_name),

            'Category_Icon' => $request->icon_class,
        ]);
        if ($category) {
            return redirect()->route('admin.category')->with('success', __('Successfully Stored !'));
        }
        return redirect()->route('admin.category')->with('error', __('Does not Stored !'));
    }
    public function categoryEdit($id)
    {
        $data['title'] = __('Category Create');
        $data['edit'] = Category::where('id', $id)->first();
        return view('admin.pages.category.edit', $data);
    }
    public function categoryUpdate(Request $request)
    {
        $id = $request->id;
        $cat = Category::whereid($id)->first();
        $update = $cat->update([
            'en_Category_Name' => is_null($request->en_category_name) ? $cat->en_Category_Name : $request->en_category_name,
            'en_Description' => is_null($request->en_description) ? $cat->en_Description : $request->en_description,
            'en_Category_Slug' => is_null($request->en_category_name) ? $cat->en_Category_Slug : $this->slugify($request->en_category_name),
            'fr_Category_Name' => is_null($request->fr_category_name) ? $cat->fr_Category_Name : $request->fr_category_name,
            'fr_Description' => is_null($request->fr_description) ? $cat->fr_Description : $request->fr_description,
            'fr_Category_Slug' => is_null($request->fr_category_name) ? $cat->fr_Category_Slug : $this->slugify($request->fr_category_name),

            'Category_Icon' => is_null($request->icon_class) ? null : $request->icon_class,
        ]);
        if ($update) {
            return redirect()->route('admin.category')->with('success', __('Successfully Updated!'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }
    public function categoryActive($id)
    {
        $inactive = Category::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.category')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.category')->with('success', __('Does not Updated!'));
    }
    public function categoryInactive($id)
    {
        $inactive = Category::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.category')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.category')->with('success', __('Does not Updated !'));
    }

    public function categoryDelete($id)
    {
        $delete = Category::Where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('admin.category')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.category')->with('error', __('Does Not Delete!'));
    }

    public function slugify($text)
    {
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

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
