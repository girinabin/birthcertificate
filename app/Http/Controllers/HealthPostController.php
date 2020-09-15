<?php

namespace App\Http\Controllers;

use App\HealthPost;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HealthPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $healthPosts = HealthPost::with(['municipality','user'])->orderBy('healthPostName','ASC')->get();

        return view('backend.healthPost.index',compact('healthPosts'));
    }

    public function create(){
        return view('backend.healthPost.create');
    }

    public function edit(HealthPost $healthPost){
        return view('backend.healthPost.edit',compact('healthPost'));
    }

    public function store(Request $request){

        $data = $request->validate([
            'healthPostName'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8',
            'registrationNumber'=>'required|integer',
            'registrationDate'=>'required|date',
            'panNumber'=>'required|integer',
            'wardNumber'=>'required|integer',
            'contactNumberFirst'=>'required',
            'contactNumberSecond'=>'required',
            'faxNumber'=>'required|string',
            'postBoxNumber'=>'required|string',
            'status'=>'required'
        ]);
        

        $user = User::Create([
            'name'=>$data['healthPostName'],
            'email'=>$data['email'],
            'password'=>bcrypt($data['password'])
        ]);

        $user->roles()->create([
            'name'=>'ADMIN'
        ]);

        $data = $request->except(['email','password','_token']);
        $data['municipality_id'] = auth()->user()->municipality->id;

        $result = $user->healthpost()->create($data);

        
        if($result){
            return redirect()->route('healthPost.index')->with('success_message','HealthPost Added Successfully!');
        }

    }

    public function update(Request $request,HealthPost $healthPost){
        $data = $request->validate([
            'healthPostName'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'registrationNumber'=>'required|integer',
            'registrationDate'=>'required|date',
            'panNumber'=>'required|integer',
            'wardNumber'=>'required|integer',
            'contactNumberFirst'=>'required|integer',
            'contactNumberSecond'=>'required|integer',
            'faxNumber'=>'required|string',
            'postBoxNumber'=>'required|string',
            'status'=>'required'
        ]);
        $data = $request->except(['email','password','_token','_method']);
        $data['municipality_id'] = auth()->user()->municipality->id;
        $result = HealthPost::where('id',$healthPost->id)->update($data);
        $user = User::where('id',$healthPost->user_id)->update([
            'name'=>$request->healthPostName,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);

        if($result && $user)
        {
            return redirect()->back()->with('success_message','HealthPost Updated!');
        }
        
    }

    public function delete(HealthPost $healthPost){
        $result = HealthPost::where(['id'=>$healthPost->id])->delete();
        $user = User::where(['id'=>$healthPost->user_id])->delete();
        
        if($result && $user)
        {
            return redirect()->route('healthPost.index')->with('success_message','HealthPost Deleted!');
        }
    
    }
}
