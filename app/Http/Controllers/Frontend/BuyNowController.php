<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Color;
use App\Models\Admin\Product;
use App\Models\Admin\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;

class BuyNowController extends Controller
{
    public function buyNow(Request $request){
        if (Auth::check()){
            if ($request->ajax()) {
                $product=Product::with('colors','sizes',)->where('id',$request->product_id)->first();
                $color_id = DB::table('color_product')->where('Product_Id', $request->product_id)->where('Color_Id', $request->color_id)->count();
                $size_id = DB::table('size_product')->where('Product_Id', $request->product_id)->where('Size_Id', $request->size_id)->count();
                if($color_id == 0 ){
                    $color_id = null;
                }
                if($size_id == 0){
                    $size_id=null;
                }
                $color_name=Color::where('id',$request->color_id)->first();
                $size_name=Size::where('id',$request->size_id)->first();

                $cart= Cart::add([
                    'id' => $request->product_id,
                    'name' => $product->en_Product_Name,
                    'qty' => $request->quantity,
                    'price' => $product->Discount_Price,
                    'weight' => $product->Price,
                    'options' =>
                        ['size' => $size_id == 0 ? $size_id : $size_name->Size,
                            'color' => $color_id == 0 ? $color_id : $color_name->ColorCode,
                            'image'=>$product->Primary_Image,
                            'discount_price'=> $product->Discount_Price,
                            'item_tag'=>$product->ItemTag,
                            'discount_parcent'=>$product->Discount,
                            'voucher'=>$product->Voucher,
                        ]
                ]);
                if($cart){
                    return redirect()->route('checkout');
                }
            }
        }
    }
}
