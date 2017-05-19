<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sanphamrequest extends FormRequest
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
            'masp' => 'required',
            'tensp' => 'required',
            'anh' => 'required|mimes:jpeg,bmp,png|max:4000',
            'loaisp' => 'required',
            'dvt' => 'required|max:11',
            'giamua' => 'required',
            'giaban' => 'required',
            'ghichu' => 'required|max:300|min:0'

        ];
    }
    public function messages(){
        return [
        'required' => '<div><strong style="color:red;">Vui lòng không bỏ trống</strong></div>',
        'anh.mimes' => '<div><strong style="color:red;">Xin hãy chọn file jpg hoặc png</trong></div>',
        'dvt.max' => '<div><strong style="color:red;">Không được nhập size lơn hơn 11</strong></div>',
        'ghichu.max' => '<div><strong style="color:red;">Không được nhập size lơn hơn 300</strong></div>',
        
        
        ];
    }
}
