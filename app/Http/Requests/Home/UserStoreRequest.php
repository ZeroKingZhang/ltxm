<?php

namespace App\Http\Requests\Home;

use App\Http\Requests\Request;

class UserStoreRequest extends Request
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
            'uname'=>'required|unique:home_users,uname|regex:/^[a-zA-z]{1}[\w]{5,17}$/',
            'upwd' => 'required|regex:/^[\w]{6,18}$/',
            'reupwd' => 'required|same:upwd',
            'email'=>'required|email',
        ];
    }
    public function messages()
    {
         return [
             'uname.required' => '用户名必填',
             'uname.regex' => '用户名格式不正确',
             'uname.unique' => '用户名已存在',
             'upwd.required' => '密码必填',
             'upwd.regex' => '密码格式错误',
             'reupwd.required' => '确认密码必填',
             'reupwd.same' => '两次密码不一致',
             'email.required' => '邮箱必填',
             'email.email' => '邮箱格式不正确',
         ];
    }
}
