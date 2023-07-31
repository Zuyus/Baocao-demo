<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sitemap;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function index(Request $request)
    {
        $data['sitemaps'] = Sitemap::orderBy('id', 'DESC')->latest()->paginate(10);
        $data['title'] = __('Sitemap List');
        return view('admin.pages.sitemap.index', $data);
    }

    public function create()
    {
        $data['title'] = __('Add Sitemap');
        return view('admin.pages.sitemap.create', $data);
    }

    public function download($id)
    {
        $sitemap = Sitemap::where('id', $id)->first();
        return response()->download('sitemaps/'.$sitemap->filename);
    }

    public function store(Request $request)
    {
        $data = new Sitemap();
        $input = $request->all();
        $filename = 'sitemap' . uniqid() . '.xml';
        SitemapGenerator::create($request->sitemap_url)->writeToFile('sitemaps/' . $filename);
        $input['filename']    = $filename;
        $input['sitemap_url'] = $request->sitemap_url;
        $data->fill($input)->save();
        return redirect()->route('admin.sitemap_list')->with('success', __('Sitemap Generate Successfully'));
    }

    public function delete($id)
    {
        $sitemap = Sitemap::find($id);
        @unlink('sitemaps/' . $sitemap->filename);
        $sitemap->delete();
        return redirect()->back()->with('success', __('Sitemap file deleted successfully!'));
    }
}
