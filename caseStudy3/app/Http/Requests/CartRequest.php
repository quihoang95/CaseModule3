<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'name'       => 'required',
            'phoneNumber'=>'required|numeric',
            'address'    =>'required',
            'email'      =>'required|email'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên',
            'phoneNumber.required'=>'Vui lòng nhập số điện thoại',
            'phoneNumber.numeric'=>'Số điện thoại không đúng',
            'address.required' => 'Vui lòng nhập địa chỉ',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không đúng (xxx@example.com)'
        ];
    }
}
