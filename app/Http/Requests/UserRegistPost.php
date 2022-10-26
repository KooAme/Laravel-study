<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool //요청에 대한 권한
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules() : array //밸리데이션 규칙 설정
    {
        return [
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', 'max:255'],
        ];
    }
}
