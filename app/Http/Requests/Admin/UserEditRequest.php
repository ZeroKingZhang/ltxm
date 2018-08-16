<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class UserEditRequest extends Request
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
            'admin_user_password' => 'required|regex:/^[\w]{6,10}$/',
            'repassword' => 'required|same:admin_user_password',
            'admin_user_email' => 'required|email',
            'admin_user_phone' => 'required|regex:/^(1[3,5,6,7,8,9]{1}[\d]{9})$/'
        ];
    }

     public function messages()
    {
        return [
            'admin_user_password.required' => '密码是必填的',
            'admin_user_password.regex' => '密码格式不正确',
            'admin_user_email.required' => '邮箱是必填的',
            'admin_user_email.email' => '邮箱格式不正确',
            'admin_user_phone.required' => '手机号是必填的',
            'admin_user_phone.regex' => '手机号格式不正确'
        ];
    }
}
