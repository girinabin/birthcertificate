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
                            @can('Admin', App\BirthApplicationForm::class)
                            <a href="{{ route('birthApplicationForm.index') }}">
                                <button class="btn btn-md badge-info"><strong>View Application List</strong></button>
                            </a>
                            @endcan
                            @can('superAdmin', App\CertificateOfBirth::class)
                            <a href="{{ route('birthapplicationrequest.index') }}">
                                <button class="btn btn-md badge-info"><strong>View Application Request List</strong></button>
                            </a>
                            @endcan
                            


                            <p class="card-text text-center"><strong>Birth Application Form</strong></p>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('birthApplicationForm.update',$applicationForm->id) }}" method="POST" id="birthregd_store">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-8 offset-2">
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __('Update Baby Details') }}</h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" applicationForm-card-widget="collapse" applicationForm-toggle="tooltip" title="Collapse">
                                                        <i class="fas fa-minus"></i></button>
                                                </div>
                                            </div>
                                            <div class="card-body">


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('genderInNepali') }}</div>
                                                    <label for="genderInNepali">Gender<i class="text-danger">*</i></label>
                                                    <select class="form-control " name="genderInNepali">
                                                        <option selected disabled>Select Gender</option>
                                                        <option value="Male" {{ ($applicationForm->genderInNepali == "Male" ? "selected":"") }}>
                                                            {{ __('Male') }}
                                                        </option>
                                                        <option value="Female" {{ ($applicationForm->genderInNepali == "Female" ? "selected":"") }}>
                                                            {{ __('Female') }}</option>
                                                        <option value="Other" {{ ($applicationForm->genderInNepali == "Other" ? "selected":"") }}>
                                                            {{ __('Other') }}</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('dobInNepali') }}
                                                    </div>
                                                    <label for="dobInNepali">{{ __('Date of Birth') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="dobInNepali" id="dobInNepali" class="form-control nepaliDate " value="{{ $applicationForm->dobInNepali }}" autocomplete="off" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('dobInEnglish') }}
                                                    </div>
                                                    <label for="dobInEnglish">{{ __('Date of Birth English') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="dobInEnglish" id="dobInEnglish" class="form-control dobInEnglish " value="{{ $applicationForm->dobInEnglish }}" autocomplete="off" placeholder="">
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('timeOfBirthInNepali') }}</div>
                                                    <label for="timeOfBirthInNepali">{{ __('Time of Birth') }}<i class="text-danger">*</i></label>
                                                    <input type="time" name="timeOfBirthInNepali" id="timeOfBirthInNepali" class="form-control" value="{{ $applicationForm->timeOfBirthInNepali }}" autocomplete="off">
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('weightOfBabyInNepali') }}</div>
                                                    <label for="weightOfBabyInNepali">{{ __('Weight') }}<i class="text-danger">*</i></label>
                                                    <input type="number" name="weightOfBabyInNepali" id="weightOfBabyInNepali" class="form-control" value="{{ $applicationForm->weightOfBabyInNepali }}" autocomplete="off" placeholder="Enter Weight of Baby">
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('numberOfBirthInNepali') }}</div>
                                                    <label for="numberOfBirthInNepali">{{ __("Number of Birth") }}<i class="text-danger">*</i></label>
                                                    <select class="form-control custom-select" name="numberOfBirthInNepali" required>
                                                        <option selected disabled>{{ __("Number of Birth") }} </option>
                                                        <option value="Single" {{ ($applicationForm["numberOfBirthInNepali"] == "Single" ? "selected":"") }}>{{ __('Single') }}</option>
                                                        <option value="Twins" {{ ($applicationForm["numberOfBirthInNepali"] == "Twins" ? "selected":"") }}>{{ __('Twins') }}</option>
                                                        <option value="Triplets" {{ ($applicationForm["numberOfBirthInNepali"] == "Triplets" ? "selected":"") }}>{{ __('Triplets') }}</option>
                                                        <option value="Multiple Baby" {{ ($applicationForm["numberOfBirthInNepali"] == "Multiple Baby" ? "selected":"") }}>{{ __('Multiple Baby') }}</option>
                                                    </select>
                                                </div>
                
                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('birthTypeInNepali') }}</div>
                                                    <label for="birthTypeInNepali">{{ __("Birth Type") }}<i class="text-danger">*</i></label>
                                                    <select class="form-control custom-select" name="birthTypeInNepali" required>
                                                        <option selected disabled>{{ __("Birth Type") }} </option>
                                                        <option value="Normal" {{ ($applicationForm["birthTypeInNepali"] == "Normal" ? "selected":"") }}>{{ __('Normal') }}</option>
                                                        <option value="From Tools " {{ ($applicationForm["birthTypeInNepali"] == "From Tools" ? "selected":"") }}>{{ __('From Tools') }}</option>
                                                        <option value="Surgery" {{ ($applicationForm["birthTypeInNepali"] == "Surgery" ? "selected":"") }}>{{ __('Surgery') }}</option>
                                                        <option value="Other Process" {{ ($applicationForm["birthTypeInNepali"] == "Other Process" ? "selected":"") }}>{{ __('Other Process') }}</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('fatherNameInNepali') }}</div>
                                                    <label for="fatherNameInNepali">{{ __('Father Name In Nepali') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="fatherNameInNepali" id="fatherNameInNepali" class="form-control" value="{{ $applicationForm->fatherNameInNepali }}" placeholder="Father Name">
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('motherNameInNepali') }}</div>
                                                    <label for="motherNameInNepali">{{ __('Mother Name In Nepali') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="motherNameInNepali" id="motherNameInNepali" class="form-control" value="{{ $applicationForm->motherNameInNepali }}" placeholder="{{ __("Baby's mother's Name") }}">
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('grandParentNameInNepali') }}</div>
                                                    <label for="grandParentNameInNepali">{{ __('Grand Father Name In Nepali') }}</label>
                                                    <input type="text" name="grandParentNameInNepali" id="grandParentNameInNepali" class="form-control" value="{{ $applicationForm->grandParentNameInNepali }}" placeholder="{{ __("Grand Parent Name ") }}">
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('provinceInNepali') }}</div>
                                                    <label for="provinceInNepali">{{ __('Province In Nepali') }}<i class="text-danger">*</i></label>
                                                    <select class="form-control select2 input-lg dynamic" name="provinceInNepali" id="" style="width: 100%;" applicationForm-dependent="districtInNepali">
                                                        <option selected="selected" disabled> {{ __('Province') }}
                                                        </option>
                                                        <option value="Province2" selected>Province2</option>

                                                    </select>
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('districtInNepali') }}</div>
                                                    <label for="districtInNepali">{{ __('District In Nepali') }}<i class="text-danger">*</i></label>
                                                    <select class="form-control select2 input-lg dynamic" name="districtInNepali" id="districtInNepali" style="width: 100%;" applicationForm-dependent="municipalityInNepali">
                                                        <option selected="selected" disabled> {{ __('District') }}
                                                        </option>
                                                        <option value="Bara" selected>Bara</option>

                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('municipalityInNepali') }}
                                                    </div>
                                                    <label for="municipalityInNepali">{{ __('Gaupalika / Municipality In Nepali') }}<i class="text-danger">*</i></label>
                                                    <select name="municipalityInNepali" id="municipalityInNepali" class="form-control input-lg select2">
                                                        <option value="" selected disabled>
                                                            {{ __('Gaupalika / Municipality') }}</option>
                                                        <option value="Kolhabi" selected>Kolhabi</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('wardNumberInNepali') }}</div>
                                                    <label for="wardNumberInNepali">{{ __('Ward Number In Nepali') }}<i class="text-danger">*</i></label>
                                                    <input type="number" name="wardNumberInNepali" id="wardNumberInNepali" class="form-control" value="{{ $applicationForm->wardNumberInNepali }}" placeholder="{{ __('Ward Number') }}">
                                                </div>

                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('villageInNepali') }}</div>
                                                    <label for="villageInNepali">{{ __('Village / Tole In Nepali') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="villageInNepali" id="villageInNepali" class="form-control" value="{{ $applicationForm->villageInNepali }}" placeholder="{{ __('Village / Tole') }}">
                                                </div>
                                                {{-- <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('villageInNepali') }}</div>
                                                    <label for="villageInNepali">{{ __('Village / Tole In Nepali') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="villageInNepali" id="villageInNepali"
                                                        class="form-control" value="{{ old('villageInNepali') }}"
                                                        placeholder="{{ __('Village / Tole') }}">
                                                </div> --}}
                                                
                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('fatherNameInEnglish') }}</div>
                                                    <label
                                                        for="fatherNameInEnglish">{{ __('Father Name In English') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="fatherNameInEnglish"
                                                        id="fatherNameInEnglish" class="form-control"
                                                        value="{{ old('fatherNameInEnglish',$applicationForm->fatherNameInEnglish) }}"
                                                        placeholder="Father Name">
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('motherNameInEnglish') }}</div>
                                                    <label
                                                        for="motherNameInEnglish">{{ __('Mother Name In English') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="motherNameInEnglish"
                                                        id="motherNameInEnglish" class="form-control"
                                                        value="{{ old('motherNameInEnglish',$applicationForm->motherNameInEnglish) }}"
                                                        placeholder="{{ __("Baby's mother's Name") }}">
                                                </div>


                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('grandParentNameInEnglish') }}</div>
                                                    <label
                                                        for="grandParentNameInEnglish">{{ __('Grand Father Name In English') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="grandParentNameInEnglish"
                                                        id="grandParentNameInEnglish" class="form-control"
                                                        value="{{ old('grandParentNameInEnglish',$applicationForm->grandParentNameInEnglish) }}"
                                                        placeholder="{{ __("Grand Parent Name ") }}">
                                                </div>



                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('provinceInEnglish') }}</div>
                                                    <label for="provinceInEnglish">{{ __('Province In English') }}<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control select2 input-lg dynamic"
                                                        name="provinceInEnglish" id="" style="width: 100%;"
                                                        data-dependent="districtInEnglish">
                                                        <option selected="selected" disabled>
                                                            {{ __('Province In English') }}
                                                        </option>
                                                        <option value="Province2">Province2</option>

                                                    </select>
                                                </div>




                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('districtInEnglish') }}</div>
                                                    <label for="districtInEnglish">{{ __('District In English') }}<i
                                                            class="text-danger">*</i></label>
                                                    <select class="form-control select2 input-lg dynamic"
                                                        name="districtInEnglish" id="districtInEnglish"
                                                        style="width: 100%;" data-dependent="municipalityInEnglish">
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
                                                        for="municipalityInEnglish">{{ __('Gaupalika / Municipality In English') }}<i
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
                                                    <label
                                                        for="wardNumberInEnglish">{{ __('Ward Number In English') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="number" name="wardNumberInEnglish"
                                                        id="wardNumberInEnglish" class="form-control"
                                                        value="{{ old('wardNumberInEnglish',$applicationForm->wardNumberInEnglish) }}"
                                                        placeholder="{{ __('Ward Number') }}">
                                                </div>



                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('villageInEnglish') }}</div>
                                                    <label
                                                        for="villageInEnglish">{{ __('Village / Tole In English') }}<i
                                                            class="text-danger">*</i></label>
                                                    <input type="text" name="villageInEnglish" id="villageInEnglish"
                                                        class="form-control" value="{{ old('villageInEnglish',$applicationForm->villageInEnglish) }}"
                                                        placeholder="{{ __('Village / Tole') }}">
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">
                                                        {{ $errors->first('contactNumberInNepali') }}</div>
                                                    <label for="contactNumberInNepali">Contact Number<i class="text-danger">*</i></label>
                                                    <input type="text" name="contactNumberInNepali" id="contactNumberInNepali" class="form-control" value="{{ $applicationForm->contactNumberInNepali }}" placeholder="Contact Number">
                                                </div>


                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-8 offset-2">
                                    <button type="submit" class="btn btn-success">Update</button>
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
