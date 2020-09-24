<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilityController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function create(){
        return view('backend.utility.passwordChange');
    }

    public function changePassword(Request $request){
      $data = $request->validate([
        'oldPassword'=>['required'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        
      ]);
      if(Auth::attempt(['email' => Auth::user()->email, 'password' => $data['oldPassword']])){
        $result = User::where('email',Auth::user()->email)->update([
          'password'=>bcrypt($data['password'])
        ]);
        if($result){
          return redirect()->route('dashboard')->with('success_message','Password Updated');
        }
      }else{
        return redirect()->back()->with('error_message','Login Credientials Doesnot Match');
      }
      

    

    }
}
