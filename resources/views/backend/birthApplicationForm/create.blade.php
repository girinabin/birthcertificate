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
                                                        {{ $errors->first('genderInEnglish') }}</div>
                                                    <label for="genderInEnglish">Gender<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control " name="genderInEnglish"
                                                        >
                                                        <option selected disabled>Select Gender</option>
                                                        <option value="Male"
                                                            {{ (old("genderInEnglish") == "Male" ? "selected":"") }}>
                                                            {{ __('Male') }}
                                                        </option>
                                                        <option value="Female"
                                                            {{ (old("genderInEnglish") == "Female" ? "selected":"") }}>
                                                            {{ __('Female') }}</option>
                                                        <option value="Other"
                                                            {{ (old("genderInEnglish") == "Other" ? "selected":"") }}>
                                                            {{ __('Other') }}</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('dobInEnglish') }}
                                                    </div>
                                                    <label for="dobInEnglish">{{ __('Date of Birth') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="date" name="dobInEnglish" id="dobInEnglish"
                                                        class="form-control " value="{{ old('dobInEnglish') }}"
                                                        autocomplete="off" placeholder="" >
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('timeOfBirthInEnglish') }}</div>
                                                    <label for="timeOfBirthInEnglish">{{ __('Time of Birth') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="time" name="timeOfBirthInEnglish"
                                                        id="timeOfBirthInEnglish" class="form-control"
                                                        value="{{ old('timeOfBirthInEnglish') }}" autocomplete="off"
                                                        >
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('weightOfBabyInEnglish') }}</div>
                                                    <label for="weightOfBabyInEnglish">{{ __('Weight') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="number" name="weightOfBabyInEnglish"
                                                        id="weightOfBabyInEnglish" class="form-control"
                                                        value="{{ old('weightOfBabyInEnglish') }}" autocomplete="off"
                                                       placeholder="Enter Weight of Baby" >
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('fatherNameInEnglish') }}</div>
                                                    <label for="fatherNameInEnglish">Father Name<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="fatherNameInEnglish"
                                                        id="fatherNameInEnglish" class="form-control"
                                                        value="{{ old('fatherNameInEnglish') }}"
                                                        placeholder="Father Name" >
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('motherNameInEnglish') }}</div>
                                                    <label for="motherNameInEnglish">Mother Name<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="motherNameInEnglish"
                                                        id="motherNameInEnglish" class="form-control"
                                                        value="{{ old('motherNameInEnglish') }}"
                                                        placeholder="{{ __("Baby's mother's Name") }}" >
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('grandParentNameInEnglish') }}</div>
                                                    <label for="grandParentNameInEnglish">Grand Father Name</label>
                                                    <input type="text" name="grandParentNameInEnglish"
                                                        id="grandParentNameInEnglish" class="form-control"
                                                        value="{{ old('grandParentNameInEnglish') }}"
                                                        placeholder="{{ __("Grand Parent Name ") }}" >
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('provinceInEnglish') }}</div>
                                                    <label for="provinceInEnglish">{{ __('Province') }}<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control select2 input-lg dynamic"
                                                        name="provinceInEnglish" id="" style="width: 100%;" 
                                                        data-dependent="districtInEnglish">
                                                        <option selected="selected" disabled> {{ __('Province') }}
                                                        </option>
                                                        <option value="Province2">Province2</option>

                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('districtInEnglish') }}</div>
                                                    <label for="districtInEnglish">{{ __('District') }}<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control select2 input-lg dynamic"
                                                        name="districtInEnglish" id="districtInEnglish"
                                                        style="width: 100%;" 
                                                        data-dependent="municipalityInEnglish">
                                                        <option selected="selected" disabled> {{ __('District') }}
                                                        </option>
                                                        <option value="Bara">Bara</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('municipalityInEnglish') }}
                                                    </div>
                                                    <label
                                                        for="municipalityInEnglish">{{ __('Gaupalika / Municipality') }}<i
                                                            class="text-danger">*</i></label>
                                                    <select name="municipalityInEnglish" id="municipalityInEnglish"
                                                        class="form-control input-lg select2">
                                                        <option value="" selected disabled>
                                                            {{ __('Gaupalika / Municipality') }}</option>
                                                            <option value="Kolhabi">Kolhabi</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('wardNumberInEnglish') }}</div>
                                                    <label for="wardNumberInEnglish">{{ __('Ward Number') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="number" name="wardNumberInEnglish"
                                                        id="wardNumberInEnglish" class="form-control"
                                                        value="{{ old('wardNumberInEnglish') }}"
                                                        placeholder="{{ __('Ward Number') }}" >
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('villageInEnglish') }}</div>
                                                    <label for="villageInEnglish">{{ __('Village / Tole') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="villageInEnglish" id="villageInEnglish"
                                                        class="form-control" value="{{ old('villageInEnglish') }}"
                                                        placeholder="{{ __('Village / Tole') }}">
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('contactNumberInEnglish') }}</div>
                                                    <label for="contactNumberInEnglish">Contact Number<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="contactNumberInEnglish" id="contactNumberInEnglish"
                                                        class="form-control" value="{{ old('contactNumberInEnglish') }}"
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