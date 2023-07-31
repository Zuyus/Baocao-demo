<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'billing_name' => ['required'],
            'billing_email' => ['required'],
            'billing_street_address' => ['required'],
            'billing_state' => ['required'],
            'billing_zipcode' => ['required'],
            'billing_country' => ['required'],
            'shipping_name' => ['required'],
            'shipping_email' => ['required'],
            'shipping_street_address' => ['required'],
            'shipping_state' => ['required'],
            'shipping_zipcode' => ['required'],
        ];
    }
}
