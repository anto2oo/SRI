<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudyRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'duration' => ['nullable', 'integer'],
            'university' => ['nullable', 'string'],
            'country' => ['required', Rule::in(array_keys(config('cc')))],
            'ects' => ['nullable', 'integer']
        ];
    }
}
