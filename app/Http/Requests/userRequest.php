<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
           'name'=>'required|max:200|min:10',
           'email'=>'required|regex:^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})^',
           'matkhau'=>'required|max:32|min:8',
           'quyen'=>'required'
        ];
    }
    public function messages(){
        return [
           'required'  => '<div><strong  style="color: red;">Vui lòng không để trống trường này!</strong></div>',
            'name.max'  => '<div><strong  style="color: red;">Vui lòng không nhập lớn hơn 200 ký tự</strong></div>',
            'name.min'  => '<div><strong  style="color: red;">Vui lòng không nhập nhỏ hon 10 ký tự</strong></div>',
            'matkhau.max'  => '<div><strong  style="color: red;">Vui lòng không nhập hôn 32 ký tự</strong></div>',
            'matkhau.min'  => '<div><strong  style="color: red;">Vui lòng không nhập nhỏ hơn 8 ký tự</strong></div>',
            'email.regex' => '<div><strong  style="color: red;">Sai định dạng, mời nhập lại</strong></div>'
        ];
    }
}
