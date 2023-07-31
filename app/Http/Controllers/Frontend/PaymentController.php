<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use App\Models\Admin\OrderDetails;
use App\Models\User;
use App\Resolvers\PaymentPlatformResolver;
use Illuminate\Http\Request;
use App\Services\PaypalService;
use Illuminate\Support\Facades\Auth;
use App\Traits\TransactionTrait;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;

class PaymentController extends Controller
{
    use TransactionTrait;
    protected $paymentPlatformResolver;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
//        $this->middleware('auth')->except('cancelled');

        $this->paymentPlatformResolver = $paymentPlatformResolver;


    }

//    public function pay(Request $request)
//    {
//        $rules = [
//            'value' => ['required', 'numeric', 'min:5'],
//            'currency' => ['required', 'exists:currencies,iso'],
//            'payment_platform' => ['required', 'exists:payment_platforms,id'],
//            'package' => ['required'],
//        ];
//
//        $request->validate($rules);
//
//        $paymentPlatform = $this->paymentPlatformResolver
//            ->resolveService($request->payment_platform);
//        session()->put('paymentPlatformId', $request->payment_platform);
//        session()->put('package_id', $request->package);
//
//
//
//        return $paymentPlatform->handlePayment($request);
//    }

    public function approval()
    {
        $success = false;
        if(session()->has('paymentPlatformId')) {
            $paymentPlatform = $this->paymentPlatformResolver
                ->resolveService(session()->get('paymentPlatformId'));
            $payment =  $paymentPlatform->handleApproval();
            if($payment['success'] == true) {
                $success = true;
            }
        }
        return $success;
    }

    public function orderCreateCall($order_number, $shipping_charge, $tax, $subtotal, $discount, $grand_total, $payment_method)
    {
        $payment_status = $this->paymentStatus($payment_method);
        $order = $this->orederCreate($order_number, $shipping_charge, $tax, $subtotal, $discount, $grand_total, $payment_method, $payment_status);
        if($order['success'] == true) {
            session()->forget('Coupon_Id');
            Cart::destroy();
            return redirect()->route('front')->with('success','Payment With COD');
        }
        return redirect()->back()->with('error','Order not accepted');
    }

    public function paymentStatus($payment_method)
    {
        if($payment_method == STRIPE || $payment_method == PAYPAL) {
            return PAYMENT_SUCCESS;
        }
        return PAYMENT_PENDING;
    }

    public function orederCreate($order_number, $shipping_charge, $tax, $subtotal, $discount, $grand_total, $payment_method, $payment_status)
    {
        $data = ['success' => false , 'data' => []];
        $order=Order::create([
            'Order_Number'=>$order_number,
            'User_Id'=>Auth::id(),
            'Billing_Id' => session('billing_id'),
            'Shipping_Id' => session('shipping_id'),
            'Delivery_Charge' =>$shipping_charge,
            'Tax' => $tax,
            'Sub_Total' => $subtotal,
            'Coupon_Id' => Session::get('Coupon_Id'),
            'Coupon_Amount' => $discount,
            'Grand_Total'=> $grand_total - $discount,
            'Is_Free_Delivery' => false,
            'Is_Order_Successful' => false,
            'Is_Order_Completed' => false,
            'Payment_Method' => $payment_method,
            'Payment_Status' => $payment_status,
            'Order_Status' => ORDER_PENDING,
        ]);
        if ($order){
            session()->put('Coupon_Id',null);
            session()->put('couponCode',null);
            session()->put('CouponAmount' , 0);
            session()->put('order_id', $order->id);
            $content=Cart::content();
            foreach ($content as $item){
                OrderDetails::create([
                    'Order_Id' => $order->id,
                    'Product_Id'=>$item->id,
                    'Product_Name'=>$item->name,
                    'Image'=>$item->options->image,
                    'Price'=>$item->price,
                    'Color'=>$item->options->color,
                    'Size'=>$item->options->size,
                    'Quantity'=>$item->qty,
                    'Total_Price'=>$item->price*$item->qty,
                ]);
            }
            $data['success'] = true;
        }
        return $data;

    }

    public function stripeCollapse()
    {
        return view('components.stripe-collapse');
    }
}
