@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row my-3">
                @if(Session::has('success_message'))
                <div class="alert alert-primary col-md-3 offset-9" role="alert">
                    {{ Session::get('success_message')}}
                </div>
                @endif

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            <a href="">
                                <button class="btn btn-md badge-info"><strong>View HealthPost</strong></button>
                            </a>


                            <p class="card-text text-center"><strong>Edit HealthPost Details</strong></p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('healthPost.update',$healthPost->id) }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('healthPostName') }}</div>
                                    <label for="healthPostName">{{ __('Name of Organization') }}</label>
                                    <input type="text" name="healthPostName" id="healthPostName"
                                        class="form-control" value="{{ $healthPost->healthPostName }}"
                                        placeholder="{{ __('Name of Organization') }}" >
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('email') }}</div>
                                    <label for="email">{{ __('Email Address') }}</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ $healthPost->user->email }}" placeholder="{{ __('Email Address') }}"
                                        >
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('password') }}</div>
                                    <label for="password">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                        value="" placeholder="{{ __('Password') }}" >
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('registrationNumber') }}</div>
                                    <label for="registrationNumber">{{ __('Registration Number') }}</label>
                                    <input type="text" name="registrationNumber" id="registrationNumber"
                                        class="form-control" value="{{ $healthPost->registrationNumber }}"
                                        placeholder="{{ __('Registration Number') }}" >
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('registrationDate') }}</div>
                                    <label for="registrationDate">{{ __('Registration Date') }}</label>
                                    <input  type="date" name="registrationDate" id="registrationDate"
                                        class="form-control" value="{{ $healthPost->registrationDate }}"
                                        placeholder="{{ __('Registration Date') }}" >
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('panNumber') }}</div>
                                    <label for="panNumber">{{ __('PAN Number') }}</label>
                                    <input type="number" name="panNumber" id="panNumber" class="form-control"
                                        value="{{ $healthPost->panNumber }}" placeholder="{{ __('PAN Number') }}" >
                                </div>
                            
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('wardNumber') }}</div>
                                    <label for="wardNumber">{{ __('Ward Number') }}</label>
                                    <input type="number" name="wardNumber" id="wardNumber" class="form-control"
                                        value="{{ $healthPost->wardNumber }}" placeholder="{{ __('Ward Number') }}" >
                                </div>
                               
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('contactNumberFirst') }}</div>
                                    <label for="contactNumberFirst">{{ __('Contact Phone Number') }}</label>
                                    <input type="number" name="contactNumberFirst" id="contactNumberFirst" class="form-control"
                                        value="{{ $healthPost->contactNumberFirst }}" placeholder="{{ __('Contact Phone Number') }}"
                                        >
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('contactNumberSecond') }}</div>
                                    <label for="contactNumberSecond">{{ __('Mobile No.') }}</label>
                                    <input type="number" name="contactNumberSecond" id="contactNumberSecond" class="form-control"
                                        value="{{ $healthPost->contactNumberSecond }}" placeholder="{{ __('Mobile No.') }}">
                                </div>
                                
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('faxNumber') }}</div>
                                    <label for="faxNumber">{{ __('Fax Number') }}</label>
                                    <input type="text" name="faxNumber" id="faxNumber" class="form-control"
                                        value="{{ $healthPost->faxNumber }}" placeholder="{{ __('Fax Number') }}">
                                </div>
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('postBoxNumber') }}</div>
                                    <label for="postBoxNumber">{{ __('Post Box Number') }}</label>
                                    <input type="text" name="postBoxNumber" id="postBoxNumber" class="form-control"
                                        value="{{ $healthPost->postBoxNumber }}" placeholder="{{ __('Post Box Number') }}">
                                </div>
                                
                                <div class="form-group col-md-4 float-left">
                                    <div class="text text-danger">{{ $errors->first('status') }}</div>
                                    <label for="status">{{ __('Status') }}</label>
                                    <select name="status" id="status" class="form-control" >
                                        <option disabled selected>Select status</option>
                                        <option value="0" {{$healthPost->status==0 ?'selected':''}} >Inactive</option>
                                        <option value="1" {{$healthPost->status==1 ?'selected':''}} >Active</option>
                                    </select>
                                </div>
                                <div class="form-group col-md float-left">

                                    <button class="btn btn-primary ">{{ __('Update') }}</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection