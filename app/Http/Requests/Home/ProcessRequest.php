<?php

namespace App\Http\Requests\Home;

use App\Http\Requests\Request;

class ProcessRequest extends Request
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
            'phone' => 'required',
            'content' => 'required'
        ];
    }
    public function messages()
    {
         return [
             'phone.required' => '联系方式必填',
             'content.required' => '反馈内容必填'
         ];
    }
}
