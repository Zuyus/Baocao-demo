<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'background_image'=>['required', 'mimes:jpg,png,webp,jpeg,gif,bmp'],
            'thumbnail'=>['required', 'mimes:jpg,png,webp,jpeg,gif,bmp'],

            'en_title'=>'required',
            'en_sub_title'=>'required',
            'en_btn_text'=>'required',
            'en_description'=>'required',

            'fr_title'=>'required',
            'fr_sub_title'=>'required',
            'fr_btn_text'=>'required',
            'fr_description'=>'required',
        ];
    }
}
