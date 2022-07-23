<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ordersRequest extends FormRequest
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
            'street'=>'required|min:3|max:10',
            'home'=>'required|min:3|max:10',
            'amountH'=>'required|max:10',
            'amountC'=>'required|max:10',
            'streetOld'=>'required|min:3|max:10',
            'homeOld'=>'required|min:3|max:10',
        ];
    }

    public function messages()
    {
        return [
            'street.required'=>'Поле улица должно быть заполено',
            'street.min'=>'Поле улица должно состоять минимум из 3 символов',
            'street.max'=>'Поле улица должно состоять максимум из 10 символов',
            'home.required'=>'Поле дом должно быть заполено',
            'home.min'=>'Поле дом должно сосотоять минимум из 3 символов',
            'home.max'=>'Поле дом должно сосотоять максимум из 10 символов',
            'amountH.required'=>'Поле количество пассажиров должно быть заполено',
            'amountH.max'=>'Поле количество пассажиров должно состоять максимум из 10 символов',
            'amountC.required'=>'Поле дети должно быть заполено',
            'amountC.max'=>'Поле количество детей должно состоять максимум из 10 символов',
            'streetOld.required'=>'Поле улица должно быть заполено',
            'streetOld.min'=>'Поле улица должно состоять минимум из 3 символов',
            'streetOld.max'=>'Поле улица должно состоять максимум из 10 символов',
            'homeOld.required'=>'Поле дом должно быть заполено',
            'homeOld.min'=>'Поле дом должно сосотоять минимум из 3 символов',
            'homeOld.max'=>'Поле дом должно сосотоять максимум из 10 символов',
        ];
    }
}
