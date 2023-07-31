<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStoryRequest;
use App\Models\Admin\Blog;
use App\Models\Admin\CompanyStory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CompanyStroyController extends Controller
{
    public function companyStory(Request $request)
    {
        $data['title'] = __('Company Story');
        if ($request->ajax()) {
            $data = CompanyStory::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.company.story.edit', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.company.story.delete', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('en_Description', function ($data) {
                    return Str::limit($data->en_Description, 30);
                })
                ->editColumn('fr_Description', function ($data) {
                    return Str::limit($data->fr_Description, 30);
                })
                ->rawColumns(['action', 'en_Description', 'fr_Description'])
                ->make(true);
        }
        return view('admin.pages.company_story.index', $data);
    }

    public function companyStoryCreate()
    {
        $data['title'] = __('Add Company Story');
        return view('admin.pages.company_story.create', $data);
    }
    public function companyStoryStore(CompanyStoryRequest $request)
    {
        $story = CompanyStory::create([
            'Year' => $request->year,
            'en_Description' => $request->en_description,
            'fr_Description' => $request->fr_description,
        ]);
        if ($story) {
            return redirect()->route('admin.company.story')->with('success', __('Successfully Stored !'));
        }
        return redirect()->route('admin.company.story')->with('toast_danger', __('Something is wrong !'));
    }
    public function companyStoryDelete($id)
    {
        $delete = CompanyStory::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.company.story')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.company.story')->with('error', __('Does Not Delete!'));
    }
    public function companyStoryEdit($id)
    {
        $data['title'] = __('Edit Company Story');
        $data['edit'] = CompanyStory::where('id', $id)->first();
        return view('admin.pages.company_story.edit', $data);
    }
    public function companyStoryUpdate(Request $request)
    {
        $id = $request->id;
        $story = CompanyStory::where('id', $id)->update([
            'Year' => $request->year,
            'en_Description' => $request->en_description,
            'fr_Description' => $request->fr_description,
        ]);
        if ($story) {
            return redirect()->route('admin.company.story')->with('success', __('Successfully Updated !'));
        }
        return redirect()->route('admin.company.story')->with('toast_danger', __('Something is wrong !'));
    }
}
