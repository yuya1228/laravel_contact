<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ZipCodeRule;

class ContactRequest extends FormRequest
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
            'surname'=>['required'],
            'firstname'=>['required'],
            'gender'=>['required'],
            'email'=>['required','email'],
            'postcode'=>['required','max:8', new ZipCodeRule()],
            'address'=>['required'],
            'text'=>['required','max:120']
        ];
    }

    public function messages()
    {
        return [
            'surname.required' => '苗字を入力してください。',
            'firstname.required' => '名前を入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'postcode.required'=>'郵便番号を入力してください。',
            'address.required'=>'住所を入力してください。',
            'text.required'=>'ご意見ください。'
        ];
    }
}
