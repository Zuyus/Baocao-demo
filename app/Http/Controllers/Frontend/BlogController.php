<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogComment;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::with('tags')->latest()->paginate(6);
        $seo = SeoSetting::where('slug', 'blog')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('front.pages.blog.blog', $data);
    }
    public function blogDetails($id)
    {
        $blog = Blog::where('id', $id)->with('comments', 'author')->first();
        $data['blog'] = $blog;
        $data['comment'] = BlogComment::where('Blog_Id', $id)->count('id');
        $data['title'] = $blog->en_Title;
        $data['description'] = $blog->en_Title;
        $data['keywords'] = $blog->en_Title;
        return view('front.pages.blog.blog_details', $data);
    }
}
