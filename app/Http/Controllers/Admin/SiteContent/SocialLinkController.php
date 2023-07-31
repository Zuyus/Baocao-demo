<?php

namespace App\Http\Controllers\Admin\SiteContent;

use App\Http\Controllers\Controller;
use App\Models\Admin\SiteContent\SocialLink;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SocialLinkController extends Controller
{
    public function socialLink(Request $request)
    {
        //        return $data = SocialLink::latest()->get();
        if ($request->ajax()) {
            $data = SocialLink::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.social.link.edit', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('Facebook', function ($data) {
                    if ($data->Facebook) {
                        $btn = '<a href="' . $data->Facebook . '" target= _blank class="btn btn-success small">Facebook</a>';
                        return $btn;
                    } else {
                        $btn = '<a href="' . $data->Facebook . '" target= _blank class="btn btn-success small disabled">Facebook</a>';
                        return $btn;
                    }
                })
                ->editColumn('Skype', function ($data) {
                    if ($data->Skype) {
                        $btn = '<a href="' . $data->Skype . '" target= _blank class="btn btn-success small">Skype</a>';
                        return $btn;
                    } else {
                        $btn = '<a href="' . $data->Skype . '" target= _blank class="btn btn-success small disabled">Skype</a>';
                        return $btn;
                    }
                })
                ->editColumn('Twitter', function ($data) {
                    if ($data->Twitter) {
                        $btn = '<a href="' . $data->Twitter . '" target= _blank class="btn btn-success small">Twitter</a>';
                        return $btn;
                    } else {
                        $btn = '<a href="' . $data->Twitter . '" target= _blank class="btn btn-success small disabled">Twitter</a>';
                        return $btn;
                    }
                })
                ->editColumn('Linkedin', function ($data) {
                    if ($data->Linkedin) {
                        $btn = '<a href="' . $data->Linkedin . '" target= _blank class="btn btn-success small">Linkedin</a>';
                        return $btn;
                    } else {
                        $btn = '<a href="' . $data->Linkedin . '" target= _blank class="btn btn-success small disabled">Linkedin</a>';
                        return $btn;
                    }
                })
                ->editColumn('Instagram', function ($data) {
                    if ($data->Instagram) {
                        $btn = '<a href="' . $data->Instagram . '" target= _blank class="btn btn-success small">Instagram</a>';
                        return $btn;
                    } else {
                        $btn = '<a href="' . $data->Instagram . '" target= _blank class="btn btn-success small disabled">Instagram</a>';
                        return $btn;
                    }
                })
                ->rawColumns(['action', 'Facebook', 'Skype', 'Twitter', 'Linkedin', 'Instagram'])
                ->make(true);
        }
        $data['title'] = __('Social Link');
        return view('admin.pages.site_content.social_link.index', $data);
    }

    public function socialLinkEdit($id)
    {
        $data['title'] = __('Edit Social Link');
        $data['edit'] = SocialLink::where('id', $id)->first();
        return view('admin.pages.site_content.social_link.edit', $data);
    }
    public function socialLinkUpdate(Request $request)
    {
        $id = $request->id;
        $update = SocialLink::where('id', $id)->update([
            'Facebook' => $request->facebook,
            'Skype' => $request->skype,
            'Twitter' => $request->twitter,
            'Linkedin' => $request->linkedin,
            'Instagram' => $request->instagram,
        ]);
        if ($update) {
            return redirect()->route('admin.social.link')->with('success', __('Successfully Update !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }
}
