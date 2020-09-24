<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateBirthCertificate extends FormRequest
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
        $id = $this->route('birthcertificate.id');

        return [
            'babyNameInNepali'=>'required',
           'babyNameInEnglish'=>'required',

           'registrationNumberInNepali'=>'required|integer|unique:certificate_of_births,registrationNumberInNepali,'.$id,
           'registrationNumberInEnglish'=>'required|integer|unique:certificate_of_births,registrationNumberInEnglish,'.$id,

           'registrationDateInNepali'=>'required',
           'registrationDateInEnglish'=>'required',

           'familyRecordFormNumberInNepali'=>'nullable|integer',
           'familyRecordFormNumberInEnglish'=>'nullable|integer',

           'registrarNameInNepali'=>'required',
           'registrarNameInEnglish'=>'required',

           'providerNameInNepali'=>'required',
           'providerNameInEnglish'=>'required',

           'providerGenderInNepali'=>'required',

           
           'fatherNameInNepali'=>'required',
           'fatherNameInEnglish'=>'required',

           

           'citizenNumberFatherInNepali'=>'nullable',
           'citizenNumberFatherInEnglish'=>'nullable',
           'citizenDateFatherInNepali'=>'nullable',
           'citizenDateFatherInEnglish'=>'nullable',
           'citizenDistrictFatherInNepali'=>'nullable',
           'citizenDistrictFatherInEnglish'=>'nullable',

           'motherNameInNepali'=>'required',
           'motherNameInEnglish'=>'required',

           'citizenNumberMotherInNepali'=>'nullable',
           'citizenNumberMotherInEnglish'=>'nullable',
           'citizenDateMotherInNepali'=>'nullable',
           'citizenDateMotherInEnglish'=>'nullable',
           'citizenDistrictMotherInNepali'=>'nullable',
           'citizenDistrictMotherInEnglish'=>'nullable',
           'status' =>'required'
        ];
    }
}
