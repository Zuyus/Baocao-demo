<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'en_product_name' => 'required',
            'en_brand_name' => 'required',
            'en_category_name' => 'required',
            'price' => 'required',
            'discount' => 'required',
            'discount_price' => 'required',
            'primary_image' => 'required',
            'en_about' => 'required',
            'fr_about' => 'required',
            'en_description' => 'required',
            'en_shippingreturn' => 'required',
            'en_additionalinformation' => 'required',
            'fr_product_name' => 'required',
            'fr_description' => 'required',
            'fr_shippingreturn' => 'required',
            'fr_additionalinformation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'en_product_name.required' => 'The name is required.',
            'fr_product_name.required' => 'The name is required.',
            'en_brand_name.required' => 'The brand name is required.',
            'en_category_name.required' => 'The category name is required.',
            'en_about.required' => 'The about is required.',
            'fr_about.required' => 'The about is required.',
            'en_description.required' => 'The description is required.',
            'fr_description.required' => 'The description is required.',
            'en_shippingreturn.required' => 'The shipping return is required.',
            'fr_shippingreturn.required' => 'The shipping return is required.',
            'en_additionalinformation.required' => 'The additional information is required.',
            'fr_additionalinformation.required' => 'The additional information is required.',
        ];
    }
}
