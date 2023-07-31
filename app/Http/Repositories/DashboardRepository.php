<?php

namespace App\Http\Repositories;

use App\Models\Admin\Blog;
use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Order;
use App\Models\Admin\Product;
use App\Models\Admin\Subscribe;
use App\Models\ProductReview;
use App\Models\User;
use Carbon\Carbon;

class DashboardRepository
{
    public function getTotalOrders()
    {
        return Order::count();
    }

    public function getPendingOrders()
    {
        return Order::where('Order_Status', ORDER_PENDING)->count();
    }

    public function getDeliveredOrders()
    {
        return Order::where('Order_Status', ORDER_DELIVERED)->count();
    }

    public function getReturnedOrders()
    {
        return Order::where('Order_Status', ORDER_RETURN)->count();
    }

    public function getTotalProductSale()
    {
        $orders = Order::where('Order_Status', ORDER_DELIVERED)->with('order_details')->get();
        $total_items_qty = 0;
        foreach($orders as $order) {
            foreach($order->order_details as $od) {
                $total_items_qty += $od->Quantity;
            }
        }
        return $total_items_qty;
    }

    public function getTotalTodayProductOrder()
    {
        $current_date = Carbon::now();
        $orders = Order::whereDate('created_at', '=', $current_date)->with('order_details')->get();
        $total_items_qty = 0;
        foreach($orders as $order) {
            foreach($order->order_details as $od) {
                $total_items_qty += $od->Quantity;
            }
        }
        return $total_items_qty;
    }

    public function getcurrentMonthProductSale()
    {
        $current_date = Carbon::now();
        $explode = explode('-',$current_date->format('d-m-Y'));
        $explode[0] = '1';
        $implode= implode("-",$explode);
        $first_day = Carbon::parse($implode);
        $orders = Order::where('Order_Status', ORDER_DELIVERED)->whereDate('created_at','>=',$first_day)->whereDate('created_at','<=',$current_date)->with('order_details')->get();

        $total_items_qty = 0;
        foreach($orders as $order) {
            foreach($order->order_details as $od) {
                $total_items_qty += $od->Quantity;
            }
        }
        return $total_items_qty;
    }

    public function getYearProductSale()
    {
        $current_date = Carbon::now();
        $explode = explode('-',$current_date->format('d-m-Y'));
        $explode[0] = '1';
        $year = date('Y-m-d', strtotime('today - 365 days'));
        $orders = Order::where('Order_Status', ORDER_DELIVERED)->whereDate('created_at','>=',$year)->whereDate('created_at','<=',$current_date)->with('order_details')->get();
        $total_items_qty = 0;
        foreach($orders as $order){
            foreach($order->order_details as $od) {
                $total_items_qty += $od->Quantity;
            }
        }
        return $total_items_qty;
    }

    public function getTotalEarning()
    {
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getTodayEarning()
    {
        $current_date = Carbon::now();
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->whereDate('created_at','=',$current_date)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getMonthEarning()
    {
        $current_date = Carbon::now();
        $explode = explode('-',$current_date->format('d-m-Y'));
        $explode[0] = '1';
        $implode= implode("-",$explode);
        $first_day = Carbon::parse($implode);
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->whereDate('created_at','>=',$first_day)->whereDate('created_at','<=',$current_date)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getYearEarning()
    {
        $current_date = Carbon::now();
        $explode = explode('-',$current_date->format('d-m-Y'));
        $explode[0] = '1';
        $year = date('Y-m-d', strtotime('today - 365 days'));
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->whereDate('created_at','>=',$year)->whereDate('created_at','<=',$current_date)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getTotalItems()
    {
        return Product::count();
    }

    public function getTotalUsers()
    {
        return User::where('is_admin', INACTIVE)->count();
    }

    public function getTotalCategories()
    {
        return Category::count();
    }

    public function getTotalBrands()
    {
        return Brand::count();
    }

    public function getTotalOnlineTransaction()
    {
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->where('Payment_Method', '!=', COD)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getTotalPaypalTransaction()
    {
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->where('Payment_Method', '==', PAYPAL)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getTotalStripeTransaction()
    {
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->where('Payment_Method', '==', STRIPE)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getTotalRazorpayTransaction()
    {
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->where('Payment_Method', '==', RAZORPAY)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getTotalBankTransaction()
    {
        $earnings = Order::where('Order_Status', ORDER_DELIVERED)->where('Payment_Method', '==', BANK_TRANSFER)->sum('Grand_Total');
        return number_format($earnings, 2);
    }

    public function getTotalReviews()
    {
        return ProductReview::count();
    }

    public function getTotalBlogs()
    {
        return Blog::count();
    }

    public function getTotalSubscribers()
    {
        return Subscribe::count();
    }

    public function getTransactionPie()
    {
        $orders = Order::get();
        $order_count = $orders->count();
        $cod = $orders->where('Payment_Method', COD)->count();
        $paypal = $orders->where('Payment_Method', PAYPAL)->count();
        $stripe = $orders->where('Payment_Method', STRIPE)->count();
        $razorpay = $orders->where('Payment_Method', RAZORPAY)->count();
        $bank_transfer = $orders->where('Payment_Method', BANK_TRANSFER)->count();

        $cod_percent = $order_count == 0 ? 0 : ($cod / $order_count) * 100;
        $paypal_percent = $order_count == 0 ? 0 : ($paypal / $order_count) * 100;
        $stripe_percent = $order_count == 0 ? 0 : ($stripe / $order_count) * 100;
        $razorpay_percent = $order_count == 0 ? 0 : ($razorpay / $order_count) * 100;
        $bank_transfer_percent = $order_count == 0 ? 0 : ($bank_transfer * $order_count) * 100;

        $trans_array = [
            $cod_percent,
            $paypal_percent,
            $stripe_percent,
            $razorpay_percent,
            $bank_transfer_percent,
        ];
        return $trans_array;

    }

    public function getSalesRatio()
    {
        $orders = Order::where('Order_Status', ORDER_DELIVERED)->orwhere('Order_Status', ORDER_RETURN)->get();
        $order_count = $orders->count();
        $delivered = $orders->where('Order_Status', ORDER_DELIVERED)->count();
        $returned = $orders->where('Order_Status', ORDER_RETURN)->count();

        $delevered_percent = $order_count == 0 ? 0 : ($delivered / $order_count) * 100;
        $returned_percent = $order_count == 0 ? 0 : ($returned / $order_count) * 100;

        $sr_array = [
            $delevered_percent,
            $returned_percent
        ];
        return $sr_array;
    }
}
