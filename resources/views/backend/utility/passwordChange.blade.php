@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row my-3">
                @if(Session::has('error_message'))
                <div class="alert alert-danger col-md-3 offset-9" role="alert">
                    {{ Session::get('error_message')}}
                </div>
                @endif

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            


                            <p class="card-text text-center"><strong>Change Password</strong></p>
                        </div>
                        <div class="card-body col-md-4 offset-4" >
                           <form action="{{ route('utility.changePassword') }}" method="POST">
                            @csrf
                            
                               <div class="form-group ">
                                <div class="text text-danger">{{ $errors->first('oldPassword') }}</div>

                                     <label for="">Old Password</label>
                                     <input type="password" class="form-control" name="oldPassword" id="" placeholder="Enter Old Password">
                               </div>
                               <div class="form-group">
                                <div class="text text-danger">{{ $errors->first('password') }}</div>

                                <label for="">New Password</label>
                                <input type="password" class="form-control" name="password" id="" placeholder="Enter New Password">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="" placeholder="Confirm New Password">
                          </div>
                          <button class="btn btn-primary" type="submit">Change Password</button>
                           </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection