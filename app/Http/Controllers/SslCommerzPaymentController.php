<?php

namespace App\Http\Controllers;

// use DB;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;

class SslCommerzPaymentController extends Controller
{

    public function success(Request $request)
    {

        // echo "Transaction is Successful";

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');
        session()->forget('Coupon_Id');
        Cart::destroy();
        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_detials = DB::table('orders')
            ->where('txn', $tran_id)->first();
        if ($order_detials->Payment_Status == '5') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

            if ($validation == TRUE) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $update_product = DB::table('orders')
                    ->where('txn', $tran_id)
                    ->update(['Payment_Status' => '1']);

                return redirect()->route('checkout.thankyou_page')->with('success', 'Order successfully created!');
            } else {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel and Transation validation failed.
                Here you need to update order status as Failed in order table.
                */
                $update_product = DB::table('orders')
                    ->where('txn', $tran_id)
                    ->update(['Payment_Status' => '3']);
                return redirect()->back()->with('error', 'Something Went Wron');
            }
        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            return redirect()->back()->with('error', 'Something Went Wron');
        }
    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('txn', $tran_id)
            ->first();

        if ($order_detials->Payment_Status == '5') {
            $update_product = DB::table('orders')
                ->where('txn', $tran_id)
                ->update(['Payment_Status' => '3']);
            return redirect()->back()->with('error', 'Something Went Wron');
        } else {
            return redirect()->back()->with('error', 'Something Went Wron');
        }
    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_detials = DB::table('orders')
            ->where('txn', $tran_id)
            ->first();

        if ($order_detials->Payment_Status == '5') {
            $update_product = DB::table('orders')
                ->where('txn', $tran_id)
                ->update(['Payment_Status' => '2']);
            return redirect()->back()->with('error', 'Something Went Wron');
        } else {
            return redirect()->back()->with('error', 'Something Went Wron');
        }
    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {
            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('orders')
                ->where('txn', $tran_id)
                ->first();

            if ($order_details->Payment_Status == '5') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('orders')
                        ->where('txn', $tran_id)
                        ->update(['Payment_Status' => '1']);

                    return redirect()->route('checkout.thankyou_page')->with('success', 'Order successfully created!');
                } else {
                    /*
                    That means IPN worked, but Transation validation failed.
                    Here you need to update order status as Failed in order table.
                    */
                    $update_product = DB::table('orders')
                        ->where('txn', $tran_id)
                        ->update(['Payment_Status' => '3']);

                    return redirect()->back()->with('error', 'Something Went Wron');
                }
            } else if ($order_details->Payment_Status == '1') {

                #That means Order status already updated. No need to udate database.

                return redirect()->route('checkout.thankyou_page')->with('success', 'Order successfully created!');
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                return redirect()->back()->with('error', 'Something Went Wron');
            }
        } else {
            return redirect()->back()->with('error', 'Something Went Wron');
        }
    }
}
