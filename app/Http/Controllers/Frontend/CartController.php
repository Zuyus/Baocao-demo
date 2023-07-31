<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Color;
use App\Models\Admin\Product;
use App\Models\Admin\Size;
use App\Models\SeoSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        if ($request->ajax()) {
            $product = Product::with('colors', 'sizes',)
                ->where('id', $request->product_id)
                ->first();
            $cd = Cart::content();
            $ta = 0;
            foreach (Cart::content() as $cart) {
                if ($cart->id == $product->id) {
                    $qty = $cart->qty + $request->quantity;
                    Cart::update($cart->rowId, $qty);

                    foreach ($cd as $item) {
                        $ta = $ta + $item->price * $item->qty;
                    }
                    $tc = Cart::count();
                    return response()->json([$tc, $ta, $cd]);
                }
            }
            $color_id = DB::table('color_product')->where('Product_Id', $request->product_id)->where('Color_Id', $request->color_id)->count();
            $size_id = DB::table('size_product')->where('Product_Id', $request->product_id)->where('Size_Id', $request->size_id)->count();
            if ($color_id == 0) {
                $color_id = null;
            }
            if ($size_id == 0) {
                $size_id = null;
            }
            $color_name = Color::where('id', $request->color_id)->first();
            $size_name = Size::where('id', $request->size_id)->first();

            $cart = Cart::add([
                'id' => $request->product_id,
                'name' => $product->en_Product_Name,
                'qty' => $request->quantity,
                'price' => $product->Discount_Price,
                'weight' => $product->Price,
                'options' =>
                [
                    'size' => $size_id == 0 ? $size_id : $size_name->Size,
                    'color' => $color_id == 0 ? $color_id : $color_name->ColorCode,
                    'image' => $product->Primary_Image,
                    'slug' => $product->en_Product_Slug,
                    'discount_price' => $product->Discount_Price,
                    'item_tag' => $product->ItemTag,
                    'discount_parcent' => $product->Discount,
                    'voucher' => $product->Voucher,
                ]
            ]);
            if ($cart) {
                $cd = Cart::content();
                $ta = 0;
                foreach ($cd as $item) {
                    $ta = $ta + $item->price * $item->qty;
                }
                $tc = Cart::count();
                return response()->json([$tc, $ta, $cd]);
            }
        }
    }
    public function cartContent()
    {
        $content = Cart::content();
        $data['content'] = $content;
        $seo = SeoSetting::where('slug', 'cart')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        if ($content->count()) {
            return view('front.pages.cart.cart_content', $data);
        }
        return view('front.pages.cart.empty-cart', $data);
    }
    public function cartDelete(Request $request)
    {
        // return response()->json($request->all());
        Session::forget('CouponAmount');
        Session::forget('couponCode');

        $id = $request->id;
        if ($id) {
            Cart::remove($id);
        }
        $cd = Cart::content();
        $ta = 0;
        foreach ($cd as $item) {
            $ta = $ta + $item->price * $item->qty;
        }
        $tc = Cart::count();
        return response()->json([$tc, $ta, $cd]);
    }

    public function cartDecrease(Request $request)
    {
        $id = $request->id;
        $cd = Cart::content();
        $ta = 0;
        foreach (Cart::content() as $cart) {
            if ($cart->rowId == $id) {
                $qty = $request->quantity == 1 ? 1 : $cart->qty - 1;
                $singleValue = Cart::update($cart->rowId, $qty);
                $st = $singleValue->price * $singleValue->qty;

                foreach ($cd as $item) {
                    $ta = $ta + $item->price * $item->qty;
                }
                $tc = Cart::count();
                return response()->json([$tc, $ta, $cd, $st]);
            }
        }
    }

    public function cartIncrease(Request $request)
    {
        $id = $request->id;
        $cd = Cart::content();
        $ta = 0;
        foreach (Cart::content() as $cart) {
            if ($cart->rowId == $id) {
                $qty = $cart->qty + 1;
                $singleValue = Cart::update($cart->rowId, $qty);
                $st = $singleValue->price * $singleValue->qty;

                foreach ($cd as $item) {
                    $ta = $ta + $item->price * $item->qty;
                }
                $tc = Cart::count();
                return response()->json([$tc, $ta, $cd, $st]);
            }
        }
    }

    public function currencyPrice(Request $request)
    {
        if ($request->ajax()) {
            return currencyConverter($request->price);
        }
    }

    public function currencySymbol()
    {
        return currencySymbol()[currency()];
    }
}
