<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Admin\Blog;
use App\Models\Admin\Coupon;
use App\Models\Admin\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class CouponController extends Controller
{
    public function coupon(Request $request)
    {
        if ($request->ajax()) {
            $data = Coupon::get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.coupon.edit', $data->id) . '" class="btn-action"><i class="fa-solid fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.coupon.delete', $data->id) . '" class="btn-action delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('ExpireDate', function ($data) {
                    return $data->ExpireDate;
                })
                ->addColumn('Validity', function ($data) {
                    if (Carbon::parse($data->ExpireDate)->isPast()) {
                        return '<span class="status blocked">' . __('Invalid') . '</span>';
                    } else {
                        return '<span class="status active">' . __('Valid') . '</span>';
                    }
                })
                ->rawColumns(['action', 'ExpireDate', 'Validity'])
                ->make(true);
        }
        $data['title'] = __('Coupon Code');
        return view('admin.pages.coupon.index', $data);
    }
    public function couponCreate()
    {
        $data['title'] = __('Coupon Create');
        return view('admin.pages.coupon.create', $data);
    }
    public function couponStore(CouponRequest $request)
    {
        if ($request->min_expenses < $request->amount) {
            return redirect()->back()->with('error', __('Amount never be exceeded from minimum expense'));
        }
        $coupon = Coupon::create([
            'CouponCode' => $request->coupon_code,
            'Amount' => $request->amount,
            'Min_Expenses' => $request->min_expenses,
            'ExpireDate' => $request->expire_date,
        ]);
        if ($coupon) {
            return redirect()->route('admin.coupon')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }
    public function couponDelete($id)
    {
        $order_count = Order::where('Coupon_Id', $id)->count();
        if ($order_count != 0) {
            return redirect()->back()->with('error', __('This coupon is used by a user. You can not delete used coupon.'));
        }
        $delete = Coupon::Where('id', $id)->delete();
        if (!empty($delete)) {
            return redirect()->route('admin.coupon')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.coupon')->with('error', __('Does Not Delete!'));
    }

    public function couponEdit($id)
    {
        $data['title'] = __('Coupon Create');
        $data['edit'] = Coupon::where('id', $id)->first();
        return view('admin.pages.coupon.edit', $data);
    }

    public function couponUpdate(Request $request)
    {
        $id = $request->id;
        if ($request->min_expenses < $request->amount) {
            return redirect()->back()->with('error', __('Amount never be exceeded from minimum expense'));
        }
        $coupon = Coupon::whereId($id)->first();
        $update = $coupon->update([
            'CouponCode' => is_null($request->coupon_code) ? $coupon->CouponCode : $request->coupon_code,
            'Amount' => is_null($request->amount) ? $coupon->Amount : $request->amount,
            'Min_Expenses' => is_null($request->min_expenses) ? $coupon->Min_Expenses : $request->min_expenses,
            'ExpireDate' => is_null($request->expire_date) ? $coupon->ExpireDate : $request->expire_date,
        ]);
        if ($update) {
            return redirect()->route('admin.coupon')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }
}
