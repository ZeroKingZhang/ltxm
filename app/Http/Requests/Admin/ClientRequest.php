<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class ClientRequest extends Request
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
            'ctitle' => 'required',
            'cinfo' => 'required',
        ];
    }

     public function messages()
    {
        return [
            'ctitle.required' => '链接标题是必填的',
            'cinfo.required' => '链接内容是必填的',
        ];
    }
}
