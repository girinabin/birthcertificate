<?php

namespace App\Http\Controllers;

use App\BirthApplicationForm;
use App\CertificateOfBirth;
use App\Http\Requests\storeBirthCertificate;
use App\Http\Requests\updateBirthCertificate;

use Illuminate\Support\Facades\Auth;

class BirthCertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $this->authorize('superAdmin',CertificateOfBirth::class);
      
        $birthcertificates  = CertificateOfBirth::with('birthApplication')->get();

        return view('backend.birthcertificate.index',compact('birthcertificates'));
    }

    public function create(BirthApplicationForm $applicationForm){
        $this->authorize('superAdmin',CertificateOfBirth::class);


        return view('backend.birthcertificate.create',compact('applicationForm'));
    }

   

    public function store(storeBirthCertificate $request,BirthApplicationForm $applicationForm){
        $this->authorize('superAdmin',CertificateOfBirth::class);

       
        $data = $request->except(['_token']);
        
        $data['birth_application_form_id'] = $applicationForm->id;
        
        $result = CertificateOfBirth::create($data);
        BirthApplicationForm::where('id',$applicationForm->id)->update([
            'status' =>'Approved'
        ]);
        
        if($result){
            return redirect()->route('birthcertificate.index')->with('success_message','Birth Certificate Information Added Successfully!');
        }
    }

    public function edit(CertificateOfBirth $birthcertificate){
        $this->authorize('superAdmin',CertificateOfBirth::class);

        return view('backend.birthCertificate.edit',compact('birthcertificate'));

        
    }

    public function update(updateBirthCertificate $request,CertificateOfBirth $birthcertificate){
        $this->authorize('superAdmin',CertificateOfBirth::class);

        $data = $request->except(['_token','_method']);
        $result = CertificateOfBirth::where('id',$birthcertificate->id)->update($data);
        if($result){
            return redirect()->back()->with('success_message','Birth Certificate Information Updated Successfully!');
        }
    }

    public function view(CertificateOfBirth $birthcertificate){
        $this->authorize('superAdmin',CertificateOfBirth::class);

        
        $municipalityNameInNepali = Auth::user()->municipality->municipalityNameInNepali;
        $municipalityNameInEnglish = Auth::user()->municipality->municipalityNameInEnglish;

        $municipalityDistrictInEnglish = Auth::user()->municipality->municipalityDistrictInEnglish;
        $municipalityDistrictInNepali = Auth::user()->municipality->municipalityDistrictInNepali;



        $registrationNumberInNepali = $birthcertificate->registrationNumberInNepali;
        $registrationNumberInEnglish = $birthcertificate->registrationNumberInEnglish;

        $registrationDateInNepali = $birthcertificate->registrationDateInNepali;
        $registrationDateInEnglish = $birthcertificate->registrationDateInEnglish;

        $familyRecordFormNumberInNepali = $birthcertificate->familyRecordFormNumberInNepali;
        $familyRecordFormNumberInEnglish = $birthcertificate->familyRecordFormNumberInEnglish;

        $grandParentNameInNepali =$birthcertificate->birthApplication->grandParentNameInNepali;
        $grandParentNameInEnglish =$birthcertificate->birthApplication->grandParentNameInEnglish;


        $providerNameInNepali = $birthcertificate->providerNameInNepali;
        $providerNameInEnglish = $birthcertificate->providerNameInEnglish;

        $babyNameInNepali = $birthcertificate->babyNameInNepali;
        $babyNameInEnglish = $birthcertificate->babyNameInEnglish;

        $districtInNepali = $birthcertificate->birthApplication->districtInNepali;
        $districtInEnglish = $birthcertificate->birthApplication->districtInEnglish;

        $wardNumberInNepali = $birthcertificate->birthApplication->wardNumberInNepali;
        $wardNumberInEnglish = $birthcertificate->birthApplication->wardNumberInEnglish;


        $fatherNameInNepali = $birthcertificate->fatherNameInNepali;
        $motherNameInNepali = $birthcertificate->motherNameInNepali;

        $fatherNameInEnglish = $birthcertificate->fatherNameInEnglish;
        $motherNameInEnglish = $birthcertificate->motherNameInEnglish;

        $dobInNepali = $birthcertificate->birthApplication->dobInNepali;
        $dobInEnglish = $birthcertificate->birthApplication->dobInEnglish;

        $citizenNumberFatherInEnglish = $birthcertificate->citizenNumberFatherInEnglish;
        $citizenNumberFatherInNepali = $birthcertificate->citizenNumberFatherInNepali;

        $citizenDateFatherInEnglish = $birthcertificate->citizenDateFatherInEnglish;
        $citizenDateFatherInNepali = $birthcertificate->citizenDateFatherInNepali;

        $citizenDistrictFatherInEnglish = $birthcertificate->citizenDistrictFatherInEnglish;
        $citizenDistrictFatherInNepali = $birthcertificate->citizenDistrictFatherInNepali;


        $citizenNumberMotherInEnglish = $birthcertificate->citizenNumberMotherInEnglish;
        $citizenNumberMotherInNepali = $birthcertificate->citizenNumberMotherInNepali;

        $citizenDateMotherInEnglish = $birthcertificate->citizenDateMotherInEnglish;
        $citizenDateMotherInNepali = $birthcertificate->citizenDateMotherInNepali;

        $citizenDistrictMotherInEnglish = $birthcertificate->citizenDistrictMotherInEnglish;
        $citizenDistrictMotherInNepali = $birthcertificate->citizenDistrictMotherInNepali;

        $registrarNameInNepali = $birthcertificate->registrarNameInNepali;
        $registrarNameInEnglish = $birthcertificate->registrarNameInEnglish;


        return view('backend.birthCertificate.view',
        compact(['birthcertificate',
                 'municipalityNameInNepali',
                 'municipalityNameInEnglish',

                 'municipalityDistrictInNepali',
                 'municipalityDistrictInEnglish',

                 'registrationNumberInNepali',
                 'registrationNumberInEnglish',
                 'registrationDateInNepali',
                 'registrationDateInEnglish',
                 'familyRecordFormNumberInNepali',
                 'familyRecordFormNumberInEnglish',
                 'providerNameInNepali',
                 'providerNameInEnglish',
                 'babyNameInNepali',
                 'babyNameInEnglish',
                 'districtInNepali',
                 'wardNumberInNepali',
                 'wardNumberInEnglish',

                 'grandParentNameInNepali',
                 'grandParentNameInEnglish',
                 'fatherNameInNepali',
                 'fatherNameInEnglish',
                 'motherNameInNepali',
                 'motherNameInEnglish',
                 'dobInEnglish',
                 'dobInNepali',
                 'citizenNumberFatherInEnglish',
                 'citizenNumberFatherInNepali',
                 'citizenDateFatherInEnglish',
                 'citizenDateFatherInNepali',
                 'citizenDistrictFatherInEnglish',
                 'citizenDistrictFatherInNepali',

                 'citizenNumberMotherInEnglish',
                 'citizenNumberMotherInNepali',
                 'citizenDateMotherInEnglish',
                 'citizenDateMotherInNepali',
                 'citizenDistrictMotherInEnglish',
                 'citizenDistrictMotherInNepali',
                 'registrarNameInNepali',
                 'registrarNameInEnglish'

                 ]));
    }

    public function delete(CertificateOfBirth $birthcertificate){
        $result = $birthcertificate->delete();
        if($result){
            return redirect()->back()->with('success_message','Birth Certificate Information Deleted Successfully!');
        }
    }
}
