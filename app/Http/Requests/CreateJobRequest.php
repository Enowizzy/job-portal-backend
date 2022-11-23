<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobRequest extends FormRequest
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
            "position" => "required",
            "company" => "required",
            "location" => "required",
            "message" => "required",
            'image.*' => 'mimes:jpg,jpeg,png|max:5000',
            'image' => 'min:1',
            'pdf.*' => 'mimes:pdf|max:5000',
            'pdf' => 'min:1',
        ];
    }
}
