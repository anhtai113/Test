<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class donhangrequest extends FormRequest
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
            'idkh' => 'required',
            'dssp' => 'required',
            'ngaymua' => 'required',
            'ttien' => 'required',
            'trangthai' => 'required',
            'ghichu' => 'required|max:300'
        ];
    }
    public function message(){
        return [
            'required' => '<div><strong style="color:red;">Vui lòng không bỏ trống</trong></div>',
            'ghichu.max' => '<div><strong style="color:red;">Vui lòng không nhập hơn 300 ký tự</trong></div>'

        ];
    }
}
