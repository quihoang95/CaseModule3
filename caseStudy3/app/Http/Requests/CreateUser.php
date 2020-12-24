<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'fullName'    => 'required',
            'user_name'    => 'required|unique:users',
            'password'    => 'required|gt:4',
            'phoneNumber' => 'required|numeric'
        ];
    }
    function messages()
    {
        return [
            'fullName.required' => 'Họ tên không được để trống',
            'user_name.required' => 'Tài khoản không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'user_name.unique' => 'Tên đăng nhập đã được sử dụng',
            'password.gt' => 'Mật khẩu phải có ít nhất 4 kí tự.',
            'phoneNumber.required' => 'Số điện thoại không được để trống',
            'phoneNumber.regex' => 'Số điện thoại không đúng',

        ];
    }
}
