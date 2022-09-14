<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Suppliers_with_ordersRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
         'suuplier_code'=>'required',
         'pill_type'=>'required',
         'order_date'=>'required'
        ];
    }

    public function messages()
    {
        return [
        'suuplier_code.required'=>'اسم  المورد',
        'pill_type.required'=>'نوع الفاتورة مطلوب',
        'order_date.required'=>'تاريخ الفاتورة مطلوب',

        ];
    }
}
