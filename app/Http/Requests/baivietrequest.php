<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class baivietrequest extends FormRequest
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
            'name' =>'required',
            'tieude' =>'required',
            'noidung' =>'required',
            'anh'=>'required|mimes:jpeg,bmp,png|max:4000',
            'ghichu' =>'required'
        ];
    }
    public function messages(){
        return [
            'required'=>'<div><trong style="color:red;">Vui lòng không bỏ trống </trong></div>',
            'anh.mimes'=>'<div><trong style="color:red;">Vui lòng chọn file jpeg,bmp,png</trong></div>'

        ];
    }
}
