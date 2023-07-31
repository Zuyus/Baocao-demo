<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminChangePasswordRequest;
use App\Http\Requests\AdminProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function adminProfile()
    {
        $auth = Auth::user()->id;
        $user = User::where('id', $auth)->first();
        return view('admin.admin_profile.index', compact('user'));
    }

    public function adminProfileUpdate(AdminProfileUpdateRequest $request)
    {
        $admin = User::whereId(Auth::id())->first();
        if (!empty($admin)) {
            if (!empty($request->image)) {
                $profile_pic = fileUpload($request['image'], IMG_PROFILE_PIC_PATH);
            } else {
                $profile_pic = $admin->image;
            }
            $update = $admin->update([
                'name' => is_null($request->admin_name) ? $admin->name : $request->admin_name,
                'email' => is_null($request->admin_email) ? $admin->email : $request->admin_email,
                'image' => $profile_pic,
            ]);

            if (!empty($update)) {
                return redirect()->back()->with('success', __('Successfully Updated!'));
            }
            return redirect()->back()->with('error', __('Something went wrong'));
        }
        return redirect()->back()->with('error', __('No admin found!'));
    }

    public function changePassword(AdminChangePasswordRequest $request)
    {
        $admin = User::whereId(Auth::id())->first();

        if (!empty($admin)) {
            if (Hash::check($request->password, $admin->password)) {
                if ($request->new_password == $request->confirm_password) {
                    $new_password = Hash::make($request->new_password);
                    $update = $admin->update([
                        'password' => $new_password,
                    ]);

                    if (!empty($update)) {
                        return redirect()->back()->with('success', __('Password successfully updated!'));
                    }
                    return redirect()->back()->with('error', __('Something went wrong!'));
                }
                return redirect()->back()->with('error', 'Confirm password not matched!');
            }
            return redirect()->back()->with('error', __('Password not matched!'));
        }
        return redirect()->back()->with('error', __('User not found!'));
    }
}
