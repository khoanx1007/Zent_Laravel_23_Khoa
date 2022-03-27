<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|unique:posts|min:20|max:255',
            'content' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'required' => 'Phần :attribute không được để trống',
            'min' => 'Phần :attribute tiêu đề cần ít nhất 20 kí tự ',
        ];
    }
    public function attributes()
    {
        return[
            'title'=>'tiêu đề',
            'content'=>'nội dung'
        ];
    }
}
