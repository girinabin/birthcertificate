<?php

namespace App\Http\Controllers;
use App\BirthApplicationForm;
use App\CertificateOfBirth;
use App\Http\Requests\storeBirthCertificate;



class BirthApplicationRequestController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $this->authorize('superAdmin',CertificateOfBirth::class);
        $applicationForms = BirthApplicationForm::with('healthPost')->orderBy('created_at','desc')->get();
        return view('backend.applicationRequest.index',compact('applicationForms'));
    }

   
}
