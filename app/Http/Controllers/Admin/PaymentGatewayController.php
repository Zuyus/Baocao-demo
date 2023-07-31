<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentPlatform;
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function index()
    {
        $data['title'] = __('Payment Gateway');
        $data['payment_gateways'] = PaymentPlatform::get();
        return view('admin.pages.payment-gateway.index', $data);
    }

    public function paymentGatewayUpdate(Request $request, $slug)
    {
        // return $request;
        if ($slug == 'cod') {
            $env_val['COD_NAME'] = $request->name;
            $env_val['COD_STATUS'] = $request->status;
            if (!empty($request->image)) {
                $env_val['COD_IMAGE'] = fileUpload($request->image, IMG_PAYMENT_GATEWAY);
            }
            $update = $this->setEnvValue($env_val);

            if ($update == true) {
                return redirect()->back()->with('success', __('Successfully Updated!'));
            }
        } else {
            $payment_gateway = PaymentPlatform::where('slug', $slug)->first();

            if (!empty($request->image)) {
                $image = fileUpload($request->image, IMG_PAYMENT_GATEWAY);
            } else {
                $image = $payment_gateway->image;
            }

            $status = checkBoxValue($request->status);

            $update_name = $payment_gateway->update([
                'name' => $request->name,
                'image' => $image,
                'status' => $status,
            ]);

            if (!empty($update_name)) {
                if ($slug == 'paypal') {
                    $env_val['PAYPAL_CLIENT_ID'] = $request->paypal_client_id;
                    $env_val['PAYPAL_CLIENT_SECRET'] = $request->paypal_client_secret;
                    $env_val['PAYPAL_SANDBOX'] = $request->paypal_sandbox;
                } elseif ($slug == 'stripe') {
                    $env_val['STRIPE_KEY'] = $request->stripe_key;
                    $env_val['STRIPE_SECRET'] = $request->stripe_secret;
                } elseif ($slug == 'sslcommerz') {
                    $env_val['SSLCZ_STORE_ID'] = $request->sslcz_store_id;
                    $env_val['SSLCZ_STORE_PASSWORD'] = $request->sslcz_store_password;
                } elseif ($slug == 'razorpay') {
                    $env_val['RAZORPAY_KEY'] = $request->razorpay_key;
                    $env_val['RAZORPAY_SECRET'] = $request->razorpay_secret;
                } elseif ($slug == 'bank') {
                    $env_val['BANK_NAME'] =  $request->bank_name;
                    $env_val['BANK_SWIFT_CODE'] = $request->swift_code;
                    $env_val['BANK_ROUTING_NUMBER'] = $request->bank_routing_number;
                    $env_val['BANK_ACCOUNT_NUMBER'] = $request->bank_account_number;
                    $env_val['BANK_ACCOUNT_HOLDER_NAME'] =  $request->bank_account_holder_name;
                    $env_val['BANK_ACCOUNT_BRANCH'] =  $request->bank_account_branch;
                }
                $update = $this->setEnvValue($env_val);

                if ($update == true) {
                    return redirect()->back()->with('success', __('Successfully Updated!'));
                }
            }
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    public function setEnvValue($values)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);
        if (count($values) > 0) {
            foreach ($values as $envKey => $envValue) {
                $envValue = '"' . trim($envValue) . '"';
                $str .= "\n";
                $keyPosition = strpos($str, "{$envKey}=");
                $endOfLinePosition = strpos($str, "\n", $keyPosition);
                $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);

                if (!$keyPosition || !$endOfLinePosition || !$oldLine) {
                    $str .= "{$envKey}={$envValue}\n";
                } else {
                    $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
                }
            }
        }
        $str = substr($str, 0, -1);
        if (!file_put_contents($envFile, $str)) return false;
        return true;
    }
}
