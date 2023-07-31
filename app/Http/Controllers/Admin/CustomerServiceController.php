<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqStoreRequest;
use App\Models\Admin\CutomerService;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CustomerServiceController extends Controller
{
    public function customerService(Request $request)
    {
        if ($request->ajax()) {
            $data = CutomerService::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<a href="' . route('admin.customer.services.edit', $data->id) . '" class="edit btn btn-primary btn-sm "><i class="fas fa-pencil-alt"></i></a>';
                    return $btn;
                })
                ->editColumn('Location', function ($data) {
                    return $data->Location;
                })
                ->editColumn('Description', function ($data) {
                    return Str::limit($data->Description, 350);
                })
                ->rawColumns(['action', 'Description', 'Location'])
                ->make(true);
        }
        return view('admin.pages.customer_services.index');
    }

    public function customerServiceEdit($id)
    {
        $edit = CutomerService::where('id', $id)->first();
        return view('admin.pages.customer_services.edit', compact('edit'));
    }

    public function customerServiceUpdate(Request $request)
    {
        $id = $request->id;
        $blog = CutomerService::where('id', $id)->update([
            'Description' => $request->description,
        ]);
        if ($blog) {
            return redirect()->route('admin.customer.services')->with('success', __('Successfully Updated !'));
        }
        return redirect()->route('admin.customer.services')->with('toast_danger', __('Something is wrong !'));
    }

    public function faqList(Request $request)
    {
        $data['title'] = __('FAQ List');
        if ($request->ajax()) {
            $data = Faq::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="javascript:void(0)" class="btn-action" data-bs-toggle="modal" data-bs-target="#editModal' . $data->id . '"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="javascript:void(0)" class="btn-action" data-bs-toggle="modal" data-bs-target="#viewModal' . $data->id . '"><i class="fas fa-eye"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.faq_delete', encrypt($data->id)) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('answer', function ($data) {
                    return Str::limit($data->answer, 100, '...');
                })
                ->rawColumns(['action', 'answer'])
                ->make(true);
        }
        $data['faqs'] = Faq::get();
        return view('admin.pages.customer_services.faq', $data);
    }

    public function faqStore(FaqStoreRequest $request)
    {
        $create = Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'question_fr' => $request->question_fr,
            'answer_fr' => $request->answer_fr,
        ]);
        if (!empty($create)) {
            return redirect()->back()->with('success', __('Successfully Added!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function faqUpdate(Request $request, $id)
    {
        $id = decrypt($id);
        $faq = Faq::whereId($id)->first();
        if (!empty($faq)) {
            $update = $faq->update([
                'question' => is_null($request->question) ? $faq->question : $request->question,
                'answer' => is_null($request->answer) ? $faq->answer : $request->answer,
                'question_fr' => is_null($request->question_fr) ? $faq->question_fr : $request->question_fr,
                'answer_fr' => is_null($request->answer_fr) ? $faq->answer_fr : $request->answer_fr,
            ]);
            if (!empty($update)) {
                return redirect()->back()->with('success', __('Successfully Updated!'));
            }
            return redirect()->back()->with('error', __('Something went wrong!'));
        }
        return redirect()->back()->with('error', __('Data not found!'));
    }

    public function faqDelete($id)
    {
        $id = decrypt($id);
        $delete = Faq::whereId($id)->delete();
        if (!empty($delete)) {
            return redirect()->back()->with('success', __('Successfully deleted!'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }
}
