<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewStoreRequest;
use App\Models\Admin\Order;
use App\Models\ProductReview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function userProfile()
    {
        $authId = Auth::user()->id;
        $data['user'] = User::where('id', $authId)->first();
        $data['title'] = __('User Panel');
        $data['description'] = __('User Panel');
        $data['keywords'] = __('User Panel');
        return view('front.pages.user_profile.profile', $data);
    }
    public function userProfileEdit()
    {
        $authId = Auth::user()->id;
        $data['user'] = User::where('id', $authId)->first();
        $data['title'] = __('User Panel');
        $data['description'] = __('User Panel');
        $data['keywords'] = __('User Panel');
        return view('front.pages.user_profile.profile_edit', $data);
    }
    public function userProfileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'dob' => 'required',
            'gender' => 'required',
            'number' => 'required'
        ], [
            'dob' => 'The date of birth is required'
        ]);

        if (!empty($request->image)) {
            $image = fileUpload($request['image'], AdminProfilePicture());
        } else {
            $authId = Auth::user()->id;
            $update = User::where('id', $authId)->first();
            $image = $update->image;
        }

        $authId = Auth::user()->id;
        $user = User::where('id', $authId)->update([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $image,
            'street_address' => $request->street_address,
            'Number' => $request->number,
            'Gender' => $request->gender,
            'DOB' => $request->dob,
            'About' => $request->about,
        ]);
        if ($user) {
            return redirect()->back()->with('success', __('Successfully Updated!'));
        }
        return redirect()->back()->with('success', __('Something Went Wrong!'));
    }
    public function myOrder()
    {
        $orders = Order::with('order_details', 'order_details.product')->latest()->get();
        $data['all_orders'] = $orders->whereIn('Order_Status', [ORDER_PENDING, ORDER_PROCESSING, ORDER_SHIPPED]);
        $data['delivered_orders'] = $orders->where('Order_Status', ORDER_DELIVERED);
        $data['canceled_orders'] = $orders->whereIn('Order_Status', [ORDER_CANCELLED, ORDER_DELIVERED_FAILED, ORDER_RETURN]);
        $data['title'] = __('Orders');
        $data['description'] = __('Orders');
        $data['keywords'] = __('Orders');
        return view('front.pages.user_profile.my_order', $data);
    }
    public function myReview()
    {
        $data['reviews'] = ProductReview::where('user_id', Auth::id())->with('product')->get();
        $data['title'] = __('Reviews');
        $data['description'] = __('Reviews');
        $data['keywords'] = __('Reviews');
        return view('front.pages.user_profile.my_review', $data);
    }
    public function trackMyOrder($id)
    {
        $id = decrypt($id);
        $data['order'] = Order::where('id', $id)->with('order_details', 'order_details.product')->first();
        $data['title'] = __('Order Track');
        $data['description'] = __('Order Track');
        $data['keywords'] = __('Order Track');
        return view('front.pages.user_profile.track_my_order', $data);
    }

    public function reviewStore(ReviewStoreRequest $request)
    {
        $prev_review = ProductReview::where('product_id', $request->product_id)->where('user_id', Auth::id())->first();
        if (!empty($prev_review)) {
            $update = $prev_review->update([
                'feedback' => $request->feedback,
                'rating' => $request->rating,
            ]);
            if (!empty($update)) {
                return redirect()->back()->with('success', 'Your review is successfully updated!');
            }
        }
        $store = ProductReview::create([
            'feedback' => $request->feedback,
            'rating' => $request->rating,
            'product_id' => $request->product_id,
            'user_id' => Auth::id(),
        ]);
        if (!empty($store)) {
            return redirect()->back()->with('success', 'Review Successfully');
        }
        return redirect()->back()->with('error', 'Something went wrong!');
    }
}
