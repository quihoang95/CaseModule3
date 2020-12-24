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
            'product_name'=>'required',
            'description' => 'required',
            'stock'       =>'required',
            'priceEach'   =>'required'
        ];
    }
    public function messages()
    {
        return [
          'product_name.required'=>'Bạn chưa nhập tên sản phẩm',
          'ription.required'     =>'Bạn chưa nhập mô tả sản phẩm',
          'stock.required'       => 'Bạn chưa nhập số lượng',
          'priceEach.required'   =>'Bạn chưa nhập giá'
        ];
    }
}
