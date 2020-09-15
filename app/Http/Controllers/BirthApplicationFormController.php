<?php

namespace App\Http\Controllers;

use App\BirthApplicationForm;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BirthApplicationFormController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index(){
        return view('backend.birthApplicationForm.index');
    }

    public function create(){
        return view('backend.birthApplicationForm.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'genderInEnglish'=>'required',
            'dobInEnglish'=>'required',
            'timeOfBirthInEnglish'=>'required',
            'weightOfBabyInEnglish'=>'required',
            'fatherNameInEnglish'=>'required',
            'motherNameInEnglish'=>'required',
            'grandParentNameInEnglish'=>'nullable|string',
            'wardNumberInEnglish'=>'required',
            'villageInEnglish'=>'required',
            'provinceInEnglish'=>'required',
            'districtInEnglish'=>'required',
            'municipalityInEnglish'=>'required',
            'contactNumberInEnglish'=>"required"
        ]);
        $numbers = range(0, 999999);
        shuffle($numbers);
        $final = array_slice($numbers, 0, 1);
        $data['babyIdentifyNumber'] = $final[0];
        $data['health_post_id'] = Auth::user()->healthPost->id;
        $result = BirthApplicationForm::Create($data);

        if($result){
            return redirect()->route('birthApplicationForm.index')->with('success_message','Application Added Successfully!');
        }
    }
}
