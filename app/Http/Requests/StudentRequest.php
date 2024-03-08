<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        $rules = [
             'name'=>'required',
             'email' => "required|email|unique:students,email,".$this->id.",id",
             'password'=>'required|string|min:6|max:10',
             'ssn'=>'required',
             'gender_id'=>'required',
             'nationalitie_id'=>'required',
             'academic_year'=>'required',
             'college_id'=>'required',
             'classroom_id'=>'required'

        ];

        if($this->id) {
            return array_merge($rules, ['password' => 'required|min:6']);
        }
        
        return $rules;
    }

    public function messages()
    {
        return [
            'college_id.exists' => 'Enter College',
            'classroom_id.exists' => 'Enter Classroom',
            'classroom_id.required' => 'Enter Classroom',
            'college_id.required' => 'Enter College',
        ];
    }



}
