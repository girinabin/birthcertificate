<?php

namespace App\Http\Controllers;

use App\BirthApplicationForm;
use App\CertificateOfBirth;
use App\HealthPost;
use App\Http\Requests\storeBirthApplication;
use App\Http\Requests\storeBirthCertificate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Str;

class BirthApplicationFormController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index(){
        $this->authorize('admin',BirthApplicationForm::class);
        $birthApplications = BirthApplicationForm::with('healthPost')->where('health_post_id',Auth::user()->healthPost->id)->get();
        return view('backend.birthApplicationForm.index',compact('birthApplications'));
    }

    public function create(){
        $this->authorize('admin',BirthApplicationForm::class);

        return view('backend.birthApplicationForm.create');
    }

    public function store(storeBirthApplication $request){
        $this->authorize('admin',BirthApplicationForm::class);

       $data = $request->all();
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

    public function view(BirthApplicationForm $applicationForm){
        return view('backend.birthApplicationForm.view',compact('applicationForm'));
    }

    public function edit(BirthApplicationForm $applicationForm){
        $this->authorize('editBirthApplicationForm',$applicationForm);
        return view('backend.birthApplicationForm.edit',compact('applicationForm'));
    }

    public function update(storeBirthApplication $request,BirthApplicationForm $applicationForm){
        $this->authorize('updateBirthApplicationForm',$applicationForm);

       $data = $request->all();

        $data = $request->except(['_token','_method']);
        $result = BirthApplicationForm::where('id',$applicationForm->id)->update($data);

        
        
        

        if($result){
            return redirect()->route('birthApplicationForm.edit',$applicationForm->id)->with('success_message','Application Updated Successfully!');
        }

    }

    public function delete(BirthApplicationForm $applicationForm){
        $this->authorize('deleteBirthApplicationForm',$applicationForm);

        $result = BirthApplicationForm::where('id',$applicationForm->id)->delete();
        if($result){
            return redirect()->route('birthApplicationForm.index')->with('success_message','Application Deleted Successfully!');
        }
    }
}


