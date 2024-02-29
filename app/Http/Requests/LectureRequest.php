<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LectureRequest extends FormRequest
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
            'file_name' => 'required|mimes:pdf|max:2048',
            'title'=>'required',
            'doctor_id' => 'required|exists:doctors,id',
            'college_id'=>'required|exists:colleges,id',
            'classroom_id'=>'required|exists:classrooms,id',
            'course_id'=>'required|exists:courses,id',
        ];
    }

    
    public function messages()
    {
        return [
            'college_id.exists' => 'Fill in the empty fields',
            'classroom_id.exists' => 'Fill in the empty fields',
            'classroom_id.required' => 'Fill in the empty fields',
            'college_id.required' => 'Fill in the empty fields',
            'course_id.exists' => 'Enter Course',
            'course_id.required' => 'Enter Course',
            'doctor_id.exists' => 'Fill in the empty fields' ,
            'doctor_id.required' => 'Fill in the empty fields',
        ];
    }



}
