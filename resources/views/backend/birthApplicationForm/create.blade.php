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

                            <a href="{{ route('birthApplicationForm.index') }}">
                                <button class="btn btn-md badge-info"><strong>View Application List</strong></button>
                            </a>


                            <p class="card-text text-center"><strong>Birth Application Form</strong></p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('birthApplicationForm.store') }}" method="POST" id="birthregd_store">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8 offset-2">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __('Baby Details') }}</h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="collapse" data-toggle="tooltip"
                                                        title="Collapse">
                                                        <i class="fas fa-minus"></i></button>
                                                </div>
                                            </div>
                                            <div class="card-body">


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('genderInNepali') }}</div>
                                                    <label for="genderInNepali">Gender<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control " name="genderInNepali"
                                                        >
                                                        <option selected disabled>Select Gender</option>
                                                        <option value="Male"
                                                            {{ (old("genderInNepali") == "Male" ? "selected":"") }}>
                                                            {{ __('Male') }}
                                                        </option>
                                                        <option value="Female"
                                                            {{ (old("genderInNepali") == "Female" ? "selected":"") }}>
                                                            {{ __('Female') }}</option>
                                                        <option value="Other"
                                                            {{ (old("genderInNepali") == "Other" ? "selected":"") }}>
                                                            {{ __('Other') }}</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('dobInNepali') }}
                                                    </div>
                                                    <label for="dobInNepali">{{ __('Date of Birth') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="dobInNepali" id="dobInNepali"
                                                        class="form-control nepaliDate " value="{{ old('dobInNepali') }}"
                                                        autocomplete="off" placeholder="yy-mm-dd"  >
                                                </div>
                                               

                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('dobInEnglish') }}
                                                    </div>
                                                    <label for="dobInEnglish">{{ __('Date of Birth English') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="dobInEnglish" id="dobInEnglish"
                                                        class="form-control  " value="{{ old('dobInEnglish') }}"
                                                        autocomplete="off" placeholder="yy-mm-dd"  >
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('timeOfBirthInNepali') }}</div>
                                                    <label for="timeOfBirthInNepali">{{ __('Time of Birth') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="time" name="timeOfBirthInNepali"
                                                        id="timeOfBirthInNepali" class="form-control"
                                                        value="{{ old('timeOfBirthInNepali') }}" autocomplete="off"
                                                        >
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('weightOfBabyInNepali') }}</div>
                                                    <label for="weightOfBabyInNepali">{{ __('Weight') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="number" name="weightOfBabyInNepali"
                                                        id="weightOfBabyInNepali" class="form-control"
                                                        value="{{ old('weightOfBabyInNepali') }}" autocomplete="off"
                                                       placeholder="Enter Weight of Baby" >
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('fatherNameInNepali') }}</div>
                                                    <label for="fatherNameInNepali">Father Name<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="fatherNameInNepali"
                                                        id="fatherNameInNepali" class="form-control"
                                                        value="{{ old('fatherNameInNepali') }}"
                                                        placeholder="Father Name" >
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('motherNameInNepali') }}</div>
                                                    <label for="motherNameInNepali">Mother Name<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="motherNameInNepali"
                                                        id="motherNameInNepali" class="form-control"
                                                        value="{{ old('motherNameInNepali') }}"
                                                        placeholder="{{ __("Baby's mother's Name") }}" >
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('grandParentNameInNepali') }}</div>
                                                    <label for="grandParentNameInNepali">Grand Father Name</label>
                                                    <input type="text" name="grandParentNameInNepali"
                                                        id="grandParentNameInNepali" class="form-control"
                                                        value="{{ old('grandParentNameInNepali') }}"
                                                        placeholder="{{ __("Grand Parent Name ") }}" >
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('provinceInNepali') }}</div>
                                                    <label for="provinceInNepali">{{ __('Province') }}<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control select2 input-lg dynamic"
                                                        name="provinceInNepali" id="" style="width: 100%;" 
                                                        data-dependent="districtInNepali">
                                                        <option selected="selected" disabled> {{ __('Province') }}
                                                        </option>
                                                        <option value="Province2">Province2</option>

                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('districtInNepali') }}</div>
                                                    <label for="districtInNepali">{{ __('District') }}<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control select2 input-lg dynamic"
                                                        name="districtInNepali" id="districtInNepali"
                                                        style="width: 100%;" 
                                                        data-dependent="municipalityInNepali">
                                                        <option selected="selected" disabled> {{ __('District') }}
                                                        </option>
                                                        <option value="Bara">Bara</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('municipalityInNepali') }}
                                                    </div>
                                                    <label
                                                        for="municipalityInNepali">{{ __('Gaupalika / Municipality') }}<i
                                                            class="text-danger">*</i></label>
                                                    <select name="municipalityInNepali" id="municipalityInNepali"
                                                        class="form-control input-lg select2">
                                                        <option value="" selected disabled>
                                                            {{ __('Gaupalika / Municipality') }}</option>
                                                            <option value="Kolhabi">Kolhabi</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('wardNumberInNepali') }}</div>
                                                    <label for="wardNumberInNepali">{{ __('Ward Number') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="number" name="wardNumberInNepali"
                                                        id="wardNumberInNepali" class="form-control"
                                                        value="{{ old('wardNumberInNepali') }}"
                                                        placeholder="{{ __('Ward Number') }}" >
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('villageInNepali') }}</div>
                                                    <label for="villageInNepali">{{ __('Village / Tole') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="villageInNepali" id="villageInNepali"
                                                        class="form-control" value="{{ old('villageInNepali') }}"
                                                        placeholder="{{ __('Village / Tole') }}">
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('contactNumberInNepali') }}</div>
                                                    <label for="contactNumberInNepali">Contact Number<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="contactNumberInNepali" id="contactNumberInNepali"
                                                        class="form-control" value="{{ old('contactNumberInNepali') }}"
                                                        placeholder="Contact Number">
                                                </div>


                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-8 offset-2">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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