<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LKRequest extends FormRequest
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
            'name'=>'required|min:3|max:10',
            'number'=>'required',
            'password'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Поле имя должно быть заполнено',
            'name.min'=>'Поле имя должно состоять минимум из 3х символов',
            'name.max'=>'Поле имя должно сотоять максимум из 10ти смволов',
            'number.required'=>'Поле номер телефона должно быть заполнено',
            'password.required'=>'Поле пароль должно быть заполнено',
        ];
    }
}
