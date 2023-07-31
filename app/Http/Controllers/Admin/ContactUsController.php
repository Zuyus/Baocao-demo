<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Front\Contactus;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contactUs(Request $request)
    {
        if ($request->ajax()) {
            $data = Contactus::query();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.user.reply', $data->id) . '" class="btn-action" title="' . __('Reply') . '"><i class="fab fa-telegram-plane"></i></a>';
                    $btn = $btn . '<a href="javascript:void(0)" class="btn-action" data-bs-toggle="modal" data-bs-target="#viewModal' . $data->id . '" title="' . __('View') . '"><i class="fas fa-eye"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.contact.us.delete', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->addColumn('Name', function ($data) {
                    return $data->FirstName . ' ' . $data->LastName;
                })
                ->editColumn('Email', function ($data) {
                    return $data->Email;
                })
                ->editColumn('ContactNumber', function ($data) {
                    return $data->ContactNumber;
                })
                ->editColumn('Message', function ($data) {
                    return Str::limit($data->Message, 25);
                })

                ->rawColumns(['action', 'FirstName', 'LastName', 'Email', 'ContactNumber', 'Message'])
                ->make(true);
        }
        $data['title'] = __('Contact List');
        $data['contact_list'] = Contactus::get();
        return view('admin.pages.contact.index', $data);
    }

    public function contactUsDelete($id)
    {
        $delete = Contactus::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.contact.us.index')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->back()->with('error', __('Does Not Delete!'));
    }
    public function userReply($id)
    {
        $data['title'] = __('Contact Reply');
        $data['edit'] = Contactus::Where('id', $id)->first();
        return view('admin.pages.mail.index', $data);
    }
    public function sendReply(Request $request)
    {
        if (is_null($request->message)) {
            return redirect()->back()->with('error', __('Message does not empty!'));
        }
        $dt['message'] = $request->message;
        Mail::to($request->email)->send(new SendMail($dt));
        return redirect()->back()->with('success', __('Message Sent Successfully!'));
    }
}
