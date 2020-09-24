<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeBirthApplication extends FormRequest
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
            'genderInNepali'=>'required',
            'dobInNepali'=>'required',
            'dobInEnglish'=>'required',
            'timeOfBirthInNepali'=>'required',
            'weightOfBabyInNepali'=>'required',
            'numberOfBirthInNepali'=>'required',
            'birthTypeInNepali'=>'required',
            'fatherNameInNepali'=>'required',
            'motherNameInNepali'=>'required',
            'grandParentNameInNepali'=>'required',
            'wardNumberInNepali'=>'required',
            'villageInNepali'=>'required',
            'provinceInNepali'=>'required',
            'districtInNepali'=>'required',
            'municipalityInNepali'=>'required',

            'fatherNameInEnglish'=>'required',
            'motherNameInEnglish'=>'required',
            'grandParentNameInEnglish'=>'required',
            'wardNumberInEnglish'=>'required',
            'villageInEnglish'=>'required',
            'provinceInEnglish'=>'required',
            'districtInEnglish'=>'required',
            'municipalityInEnglish'=>'required',
            'contactNumberInNepali'=>"required"
        ];
    }
}
