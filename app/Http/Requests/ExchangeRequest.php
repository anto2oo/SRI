<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExchangeRequest extends FormRequest
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
            'student_id' => ['required', 'exists:students,id'],
            'study_id' => ['required', 'exists:studies,id'],
            'begins_at' => ['date_format:d/m/Y'],
            'endss_at' => ['date_format:d/m/Y'],
        ];
    }
}
