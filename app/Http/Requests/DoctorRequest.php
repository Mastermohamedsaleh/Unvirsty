<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'email' => 'required|email|unique:doctors,email,'.$this->id,
            'password'=>'required|string|min:6|max:10',
             'ssn'=>'required',
             'address'=>'required',
             'college_id'=>'required',
             'section_id'=>'required',
             'gender_id'=>'required',
             'nationalitie_id'=>'required',
             'Joining_Date'=>'required'

        ];
    }
}
