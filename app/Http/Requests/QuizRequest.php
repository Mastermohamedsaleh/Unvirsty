<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
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
            'name'=>'required',
            'course_id'=>'required|exists:courses,id',
        ];
    }

    public function messages()
    {
        return [
            'course_id.exists' => 'Enter Course',
            'course_id.required' => 'Enter Course',
        ];
    }


}
