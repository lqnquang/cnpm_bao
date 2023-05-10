<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules = [
            'title' => 'required',
            'dien_tich' => 'required',
            'gia_phong' => 'required',
            'description' => 'required',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'image_01' => 'sometimes|required|image'
        ];
    
        return $rules;
    }
    
    
}