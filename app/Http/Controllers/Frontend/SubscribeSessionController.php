<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;

class SubscribeSessionController extends Controller
{
    public function doNotSubscribe(Request $request){
        if ($request->ajax()) {
           $d = $request->session()->put('dontshoW',$request->dontShow);
           return response()->json($d);
        }
    }
    public function doNotSubscribeGet(Request $request){
        if($request->session()->has('currency')){
        echo $request->session()->get('currency');
    }else{
            echo "No Data Found!";
        }
    }

    public function doNotSubscribeRemove(Request $request){
        $request->session()->flush();
    }
}
