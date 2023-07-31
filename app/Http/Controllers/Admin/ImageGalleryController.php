<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageGalleryRequest;
use App\Models\Admin\ImageGallery;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Faker\Extension\FileExtension;
use Yajra\DataTables\Facades\DataTables;

class ImageGalleryController extends Controller
{
    public function imageGallery(Request $request)
    {
        if ($request->ajax()) {
            $theme = allsetting('theme') == 'one' ? 1 : 2;
            $data = ImageGallery::whereNotNull('Image')->where('theme', $theme);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.image.gallery.edit', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('Image', function ($data) {
                    if ($data->Image) {
                        $url = asset(ImageGallery() . $data->Image);
                        return '<img src=' . $url . ' border="0" width="70" class="img-rounded" align="center" />';
                    } else {
                        return 'No image';
                    }
                })
                ->rawColumns(['action', 'Image'])
                ->make(true);
        }
        $data['title'] = __('Gallery List');
        return view('admin.pages.about_us_image_gallery.index', $data);
    }

    public function imageGalleryCreate()
    {
        $data['title'] = __('Gallery Create');
        return view('admin.pages.about_us_image_gallery.create', $data);
    }
    public function imageGalleryStore(ImageGalleryRequest $request)
    {

        if (!empty($request->image_gallery)) {
            $image = fileUpload($request['image_gallery'], ImageGallery());
        } else {
            return redirect()->back()->with('error', __('Image is required'));
        }
        $gallery = ImageGallery::create([
            'Image' => $image,
        ]);
        if ($gallery) {
            return redirect()->route('admin.image.gallery')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }
    public function imageGalleryDelete($id)
    {
        $delete = ImageGallery::where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.image.gallery')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.image.gallery')->with('error', __('Does not Delete !'));
    }
    public function imageGalleryEdit($id)
    {
        $data['title'] = __('Gallery Edit');
        $theme = allsetting('theme') == 'one' ? 1 : 2;
        $data['edit'] = ImageGallery::where('id', $id)->first();
        $fileName = explode('.', $data['edit']->Image);
        $data['dimension'] = $this->dimension($fileName[0]);
        return view('admin.pages.about_us_image_gallery.edit', $data);
    }
    public function dimension($name)
    {
        if ($name == 'gallery-one-1') {
            return '425*391';
        } elseif ($name == 'gallery-one-2') {
            return '425*659';
        } elseif ($name == 'gallery-one-3') {
            return '425*322';
        } elseif ($name == 'gallery-one-4') {
            return '425*535';
        } elseif ($name == 'gallery-one-5') {
            return '425*385';
        } elseif ($name == 'gallery-one-6') {
            return '425*680';
        } elseif ($name == 'gallery-one-7') {
            return '425*594';
        } elseif ($name == 'gallery-two-1') {
            return '865*316';
        } elseif ($name == 'gallery-two-2') {
            return '425*771';
        } elseif ($name == 'gallery-two-3') {
            return '425*425';
        } elseif ($name == 'gallery-two-4') {
            return '425*321';
        } elseif ($name == 'gallery-two-5') {
            return '425*769';
        } elseif ($name == 'gallery-two-6') {
            return '425*321';
        } else {
            return 'none';
        }
    }
    public function imageGalleryUpdate(Request $request)
    {
        $id = $request->id;
        $gallery = ImageGallery::whereId($id)->first();
        $oldImage = $gallery->Image;
        $defaultFileName = explode('.', $oldImage);
        if (!empty($request->image_gallery)) {
            $image = fileUpload($request['image_gallery'], ImageGallery(), $oldImage, null, null, $defaultFileName[0]);
        } else {
            $image = $gallery->Image;
        }

        $update = $gallery->update([
            'Image' => $image
        ]);
        if ($update) {
            return redirect()->route('admin.image.gallery')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }
}
