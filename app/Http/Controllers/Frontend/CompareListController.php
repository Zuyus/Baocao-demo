<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Front\CompareList;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CompareListController extends Controller
{
    public function add(Request $request)
    {
        if (auth()->check()) {
            $exist = CompareList::where('Product_Id', $request->product_id)->first();
            if ($exist) {
                return response()->json(['message' => 'This product already added to compare!', 'status' => 0]);
            }
            $compare = new CompareList();
            $compare->User_Id = auth()->user()->id;
            $compare->Product_Id  = $request->product_id;
            $compare->save();
            $count = CompareList::where('User_Id', auth()->user()->id)->count();
            return response()->json(['message' => 'Product added to Compare List successfully', 'status' => 1, 'compare_count' => $count]);
        } else {
            return response()->json(['message' => 'Login First', 'status' => 0,]);
        }
    }

    public function Comparelist()
    {
        $seo = SeoSetting::where('slug', 'compare')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        $data['comparelists'] = CompareList::where('User_Id', auth()->user()->id)->get();
        return view('front.pages.compare.compare', $data);
    }

    public function delete(Request $request)
    {
        $compare = CompareList::find($request->id);
        if ($compare) {
            $compare->delete();
            return true;
        }
        return false;
    }
}
