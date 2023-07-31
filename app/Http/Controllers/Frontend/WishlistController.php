<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Front\Wishlist;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class WishlistController extends Controller
{
    public function add(Request $request)
    {
        if (auth()->check()) {
            $exist = Wishlist::where('Product_Id', $request->product_id)->first();
            if ($exist) {
                return response()->json(['message' => 'This product already added to wishlist!', 'status' => 0]);
            }
            $wishlist = new Wishlist();
            $wishlist->User_Id = auth()->user()->id;
            $wishlist->Product_Id  = $request->product_id;
            $wishlist->save();
            $count = Wishlist::where('User_Id', auth()->user()->id)->count();
            return response()->json(['message' => 'Product added to wishlist successfully', 'status' => 1, 'wishlist_count' => $count]);
        } else {
            return response()->json(['message' => 'Login First', 'status' => 0,]);
        }
    }

    public function Wishlist()
    {
        $seo = SeoSetting::where('slug', 'compare')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        $data['wishlists'] = Wishlist::where('User_Id', auth()->user()->id)->get();
        return view('front.pages.wishlist.wishlist', $data);
    }

    public function delete(Request $request)
    {
        $wishlist = Wishlist::find($request->id);
        if ($wishlist) {
            $wishlist->delete();
            return true;
        }
        return false;
    }
}
