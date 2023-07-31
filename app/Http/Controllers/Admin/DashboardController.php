<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DashboardRepository;
use App\Models\Admin\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function __construct(DashboardRepository $repository)
    {
        $this->repository = $repository;
    }

    public  function Dashboard()
    {
        if (Auth::check()) {
            $days = "";
            $sales = "";
            for ($i = 0; $i < 30; $i++) {
                $days .= "'" . date("d M", strtotime('-' . $i . ' days')) . "',";
                $sales .=  "'" . Order::where('Order_Status', '=', ORDER_DELIVERED)->whereDate('created_at', '=', date("Y-m-d", strtotime('-' . $i . ' days')))->count() . "',";
            }

            $earning_days = "";
            $incomes = "";
            for ($i = 0; $i < 30; $i++) {
                $earning_days .= "'" . date("d M", strtotime('-' . $i . ' days')) . "',";
                $incomes .= "'" . Order::where('Order_Status', '=', ORDER_DELIVERED)->whereDate('created_at', '=', date("Y-m-d", strtotime('-' . $i . ' days')))->sum('Grand_Total') . "',";
            }

            $data['transactionPie'] = $this->repository->getTransactionPie();
            $data['salesRatio'] = $this->repository->getSalesRatio();

            $data['order_days'] = $days;
            $data['order_sales'] = $sales;
            $data['earning_days'] = $earning_days;
            $data['total_incomess'] = $incomes;
            $data['title'] = __('Dashboard');
            $data['totalOrders'] = $this->repository->getTotalOrders();
            $data['pendingOrders'] = $this->repository->getPendingOrders();
            $data['deliveredOrders'] = $this->repository->getDeliveredOrders();
            $data['returnedOrders'] = $this->repository->getReturnedOrders();
            $data['totalProductSale'] = $this->repository->getTotalProductSale();
            $data['todayProductOrder'] = $this->repository->getTotalTodayProductOrder();
            $data['totalCurrentMonthProductSale'] = $this->repository->getcurrentMonthProductSale();
            $data['totalLatYearProductSale'] = $this->repository->getYearProductSale();
            $data['totalEarning'] = $this->repository->getTotalEarning();
            $data['todayEarning'] = $this->repository->getTodayEarning();
            $data['monthEarning'] = $this->repository->getMonthEarning();
            $data['yearEarning'] = $this->repository->getYearEarning();
            $data['totalProducts'] = $this->repository->getTotalItems();
            $data['totalUsers'] = $this->repository->getTotalUsers();
            $data['totalCategories'] = $this->repository->getTotalCategories();
            $data['totalBrands'] = $this->repository->getTotalBrands();
            $data['totalOnlineTransaction'] = $this->repository->getTotalOnlineTransaction();
            $data['totalPaypalTransaction'] = $this->repository->getTotalPaypalTransaction();
            $data['totalStripeTransaction'] = $this->repository->getTotalStripeTransaction();
            $data['totalRazorpayTransaction'] = $this->repository->getTotalRazorpayTransaction();
            $data['totalBankTransaction'] = $this->repository->getTotalBankTransaction();
            $data['getTotalReviews'] = $this->repository->getTotalReviews();
            $data['getTotalBlogs'] = $this->repository->getTotalBlogs();
            $data['getTotalSubscribers'] = $this->repository->getTotalSubscribers();
            return view('admin.pages.dashboard', $data);
        }
        return redirect()->route('login')->with('error', __('Wrong Credential'));
    }
}
