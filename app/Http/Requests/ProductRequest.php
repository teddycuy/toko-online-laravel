<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => [
                'required',
                'string'
            ],


            'description' => [
                'required'

            ],

            'cate_id' => ['required'],
            'smal_description' => ['required'],
            'original_price' => ['required'],
            'selling_price' => ['required'],
            'tax' => ['required'],
            'qty' => ['required'],

            'image' => [
                'nullable',
                'mimes:jpg,jpeg,png'
            ],
            'meta_title' => [
                'required',
                'string'
            ],
            'meta_keyword' => [
                'required',
                'string'
            ],
            'meta_description' => [
                'required',
                'string'
            ],



        ];
    }
}
