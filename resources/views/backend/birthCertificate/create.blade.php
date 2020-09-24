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

                            <a href="{{ route('birthcertificate.index') }}">
                                <button class="btn btn-md badge-info"><strong>View Application List</strong></button>
                            </a>


                            <p class="card-text text-center"><strong>Birth Certificate Form</strong></p>
                        </div>
                        <div class="card-body">
                            @if(isset($applicationForm->id))
                            <form action="{{ route('birthcertificate.store',$applicationForm->id) }}" method="POST" >

                            @else

                            <form action="{{ route('birthcertificate.store') }}" method="POST" >

                            @endif
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __('Baby Details') }}</h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                    <i class="fas fa-minus"></i></button>
                                                </div>
                                            </div>
                                            {{-- <input type="hidden" name="applicationFormId" value="{{ $applicationForm->id }}"> --}}
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('babyNameInNepali') }}</div>
                                                    <label for="babyNameInNepali">{{ __("What will be your's baby's legal name (as it should appear on the birth certificate)") }} ? <i class="text-danger">*</i></label>
                                                        <input type="text" id="babyNameInNepali" name="babyNameInNepali" value="{{ old('babyNameInNepali') }}" placeholder="{{ __('Name of Baby') }}" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('babyNameInEnglish') }}</div>
                                                    <label for="babyNameInEnglish">Name of Baby<i class="text-danger">*</i></label>
                                                        <input type="text" name="babyNameInEnglish" value="{{ old('babyNameInEnglish') }}" id="babyNameInEnglish" placeholder="Name of Baby" class="form-control"  >
                                                </div>
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('registrationNumberInNepali') }}</div>
                                                    <label for="registrationNumberInNepali">{{ __('Birth Registration Number') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="registrationNumberInNepali" value="{{ old('registrationNumberInNepali') }}" id="registrationNumberInNepali" class="form-control"  placeholder="{{ __('Birth Registration Number') }}" >
                                                </div>
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('registrationNumberInEnglish') }}</div>
                                                    <label for="registrationNumberInEnglish">Birth Registration Number<i class="text-danger">*</i></label>
                                                    <input type="text" name="registrationNumberInEnglish" value="{{ old('registrationNumberInEnglish') }}" id="registrationNumberInEnglish" class="form-control"  placeholder="Birth Registration Number" >
                                                </div>
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('registrationDateInNepali') }}</div>
                                                    <label for="registrationDateInNepali">{{ __('Birth Registration Date') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="registrationDateInNepali" value="{{ old('registrationDateInNepali') }}" id="registrationDateInNepali" class="form-control nepaliDate"  autocomplete="off" placeholder="yy-mm-dd" >
                                                </div>
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('registrationDateInEnglish') }}</div>
                                                    <label for="registrationDateInEnglish">Birth Registration Date in AD<i class="text-danger">*</i></label>
                                                    <input type="text" name="registrationDateInEnglish" value="{{ old('registrationDateInEnglish') }}" id="registrationDateInEnglish" class="form-control dobInEnglish"  autocomplete="off" placeholder="yy-mm-dd" >
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('familyRecordFormNumberInNepali') }}</div>
                                                    <label for="familyRecordFormNumberInNepali">{{ __('Family Record Form Number') }}</label>
                                                    <input type="text" name="familyRecordFormNumberInNepali"  value="{{ old('familyRecordFormNumberInNepali') }}" id="familyRecordFormNumberInNepali" class="form-control"  placeholder="{{ __('Family Record Form Number') }}">
                                                </div>
                                                <div class="form-group">
                                                    <div class="text text-danger">{{ $errors->first('familyRecordFormNumberInEnglish') }}</div>
                                                    <label for="familyRecordFormNumberInEnglish">Family Record Form Number</label>
                                                    <input type="text" name="familyRecordFormNumberInEnglish" value="{{ old('familyRecordFormNumberInEnglish') }}" id="familyRecordFormNumberInEnglish" class="form-control"  placeholder="Family Record Form Number">
                                                </div>
                
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('status') }}</div>
                                                    <label for="status">{{ __('Status') }}<i class="text-danger">*</i></label>
                                                    <select name="status" class="form-control" value="{{ old('status') }}" >
                                                        <option disabled selected>Select Status</option>
                                                        <option value="Verified" {{ (old("status") == "Verified" ? "selected":"") }}>{{ __('Verified') }}</option>
                                                        <option value="Rejected"{{ (old("status") == "Rejected") }}>{{ __('Rejected') }}</option>
                                                    </select>
                                                </div>
                                                 {{-- <input type="hidden" name="app_id" > --}}
                
                                                <div class="card-text text-center">
                                                    <h5>{{ __("Local Registar's Detail") }}</h5>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('registrarNameInNepali') }}</div>
                                                    <label for="registrarNameInNepali">{{ __('Name of Registar') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="registrarNameInNepali" value="{{ old('registrarNameInNepali') }}" id="registrarNameInNepali" class="form-control"  placeholder="{{ __('Name of Registar') }}"  >
                                                </div>
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('registrarNameInEnglish') }}</div>
                                                    <label for="registrarNameInEnglish">Name of Registar<i class="text-danger">*</i></label>
                                                    <input type="text" name="registrarNameInEnglish" value="{{ old('registrarNameInEnglish') }}" id="registrarNameInEnglish" class="form-control"  placeholder="Name of Registar"  >
                                                </div>
                
                                                <div class="card-text text-center">
                                                    <h5>{{ __("Information Provider Details") }}</h5>
                                                </div>
                
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('providerNameInNepali') }}</div>
                                                    <label for="providerNameInNepali">{{ __('Information Provider Name') }}<i class="text-danger">*</i></label>
                                                    <input type="text" name="providerNameInNepali" value="{{ old('providerNameInNepali') }}" id="providerNameInNepali" class="form-control"  placeholder="{{ __('Information Provider Name') }}" >
                                                </div>
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('providerNameInEnglish') }}</div>
                                                    <label for="providerNameInEnglish">Information Provider Name<i class="text-danger">*</i></label>
                                                    <input type="text" name="providerNameInEnglish" value="{{ old('providerNameInEnglish') }}" id="providerNameInEnglish" class="form-control"  placeholder="Information Provider Name" >
                                                </div>
                                                <div class="form-group ">
                                                    <div class="text text-danger">{{ $errors->first('providerGenderInNepali') }}</div>
                                                    <label for="providerGenderInNepali">{{ __('Information Provider Gender') }}<i class="text-danger">*</i></label>
                                                    <select name="providerGenderInNepali" id="providerGenderInNepali" class="form-control" value="{{ old('provider_gender') }}" >
                                                        <option selected disabled>{{ __('Information Provider Gender') }}</option>
                                                        <option value="Male" {{ (old("providerGenderInNepali") == "Male" ? "selected":"") }}>{{ __('Male') }}</option>
                                                        <option value="Female" {{ (old("providerGenderInNepali") == "Female" ? "selected":"") }}>{{ __('Female') }}</option>
                                                    </select>
                                                </div>
                
                
                
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-secondary">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __('Parents Details') }}</h3>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                    <i class="fas fa-minus"></i></button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-text text-center">
                                                    <h5>{{ __("Baby's Father Details") }}</h5>
                                                    <p>{{ __('(*please enter details same as of citizenship / passport)') }}</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text text-danger">{{ $errors->first('fatherNameInNepali') }}</div>
                                                        <label for="fatherNameInNepali">{{ __('FatherNameInNepali') }}</label>
                                                        <input type="text" name="fatherNameInNepali" value="{{ old('fatherNameInNepali',$applicationForm->fatherNameInNepali) }}" id="fatherNameInNepali" class="form-control"  placeholder="{{ __('FatherNameInNepali') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text text-danger">{{ $errors->first('fatherNameInEnglish') }}</div>
                                                        <label for="fatherNameInEnglish">{{ __('FatherNameInEnglish') }}</label>
                                                        <input type="text" name="fatherNameInEnglish" value="{{ old('fatherNameInEnglish',$applicationForm->fatherNameInEnglish) }}" id="fatherNameInEnglish" class="form-control"  placeholder="{{ __('FatherNameInEnglish') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text text-danger">{{ $errors->first('citizenNumberFatherInNepali') }}</div>
                                                        <label for="citizenNumberFatherInNepali">{{ __('Citizenship Number') }}</label>
                                                        <input type="text" name="citizenNumberFatherInNepali" value="{{ old('citizenNumberFatherInNepali') }}" id="citizenNumberFatherInNepali" class="form-control"  placeholder="{{ __('Citizenship Number') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text text-danger">{{ $errors->first('citizenNumberFatherInEnglish') }}</div>
                                                        <label for="citizenNumberFatherInEnglish">Citizenship Number</label>
                                                        <input type="text" name="citizenNumberFatherInEnglish" value="{{ old('citizenNumberFatherInEnglish') }}" id="citizenNumberFatherInEnglish" class="form-control"  placeholder="Citizenship Number">
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="text text-danger">{{ $errors->first('citizenDistrictFatherInNepali') }}</div>
                                                        <label for="citizenDistrictFatherInNepali">{{ __('Citizenship Issued District') }}</label>
                                                        <input type="text" name="citizenDistrictFatherInNepali" value="{{ old('citizenDistrictFatherInNepali') }}" id="citizenDistrictFatherInNepali" class="form-control"  placeholder="{{ __('Citizenship Issued District') }}" >
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="text text-danger">{{ $errors->first('citizenDistrictFatherInEnglish') }}</div>
                                                        <label for="citizenDistrictFatherInEnglish">Citizenship Issued District</label>
                                                        <input type="text" name="citizenDistrictFatherInEnglish" value="{{ old('citizenDistrictFatherInEnglish') }}" id="citizenDistrictFatherInEnglish" class="form-control"  placeholder="Citizenship Issued District" >
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="text text-danger">{{ $errors->first('citizenDateFatherInNepali') }}</div>
                                                        <label for="citizenDateFatherInNepali">{{ __('Citizenship Issued Date') }}</label>
                                                        <input type="text" name="citizenDateFatherInNepali" value="{{ old('citizenDateFatherInNepali') }}" id="citizenDateFatherInNepali" class="form-control nepaliDate"  placeholder="yy-mm-dd" >
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="text text-danger">{{ $errors->first('citizenDateFatherInEnglish') }}</div>
                                                        <label for="citizenDateFatherInEnglish">Citizenship Issued Date</label>
                                                        <input type="text" name="citizenDateFatherInEnglish" value="{{ old('citizenDateFatherInEnglish') }}" id="citizenDateFatherInEnglish" class="form-control dobInEnglish"  placeholder="yy-mm-dd" >
                                                    </div>
                                                    <div class="card-text text-center">
                                                    <h5>{{ __("Baby's Mother's Details") }}</h5>
                                                    <p>{{ __('(*please enter details same as of citizenship / passport)') }}</p>
                                                    </div>
                
                                                    <div class="form-group">
                                                        <div class="text text-danger">{{ $errors->first('motherNameInNepali') }}</div>
                                                        <label for="motherNameInNepali">{{ __('MotherNameInNepali') }}</label>
                                                        <input type="text" name="motherNameInNepali" value="{{ old('motherNameInNepali',$applicationForm->motherNameInNepali) }}" id="motherNameInNepali" class="form-control" value="{{ old('MotherNameInNepali') }}" placeholder="{{ __('MotherNameInNepali') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text text-danger">{{ $errors->first('motherNameInEnglish') }}</div>
                                                        <label for="motherNameInEnglish">{{ __('MotherNameInEnglish') }}</label>
                                                        <input type="text" name="motherNameInEnglish" value="{{ old('motherNameInEnglish',$applicationForm->motherNameInEnglish) }}" id="motherNameInEnglish" class="form-control"  placeholder="{{ __('MotherNameInEnglish') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text text-danger">{{ $errors->first('citizenNumberMotherInNepali') }}</div>
                                                        <label for="citizenNumberMotherInNepali">{{ __('Citizenship Number') }}</label>
                                                        <input type="text" name="citizenNumberMotherInNepali" value="{{ old('citizenNumberMotherInNepali') }}" id="citizenNumberMotherInNepali" class="form-control"  placeholder="{{ __('Citizenship Number') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text text-danger">{{ $errors->first('citizenNumberMotherInEnglish') }}</div>
                                                        <label for="citizenNumberMotherInEnglish">Citizenship Number</label>
                                                        <input type="text" name="citizenNumberMotherInEnglish" value="{{ old('citizenNumberMotherInEnglish') }}" id="citizenNumberMotherInEnglish" class="form-control"  placeholder="Citizenship Number">
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="text text-danger">{{ $errors->first('citizenDistrictMotherInNepali') }}</div>
                                                        <label for="citizenDistrictMotherInNepali">{{ __('Citizenship Issued District') }}</label>
                                                        <input type="text" name="citizenDistrictMotherInNepali" value="{{ old('citizenDistrictMotherInNepali') }}" id="citizenDistrictMotherInNepali" class="form-control"  placeholder="{{ __('Citizenship Issued District') }}" >
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="text text-danger">{{ $errors->first('citizenDistrictMotherInEnglish') }}</div>
                                                        <label for="citizenDistrictMotherInEnglish">Citizenship Issued District</label>
                                                        <input type="text" name="citizenDistrictMotherInEnglish" value="{{ old('citizenDistrictMotherInEnglish') }}" id="citizenDistrictMotherInEnglish" class="form-control" placeholder="Citizenship Issued District" >
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="text text-danger">{{ $errors->first('citizenDateMotherInNepali') }}</div>
                                                        <label for="citizenDateMotherInNepali">{{ __('Citizenship Issued Date') }}</label>
                                                        <input type="text" name="citizenDateMotherInNepali" value="{{ old('citizenDateMotherInNepali') }}" id="citizenDateMotherInNepali" class="form-control nepaliDate"  placeholder="yy-mm-dd" >
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="text text-danger">{{ $errors->first('citizenDateMotherInEnglish') }}</div>
                                                        <label for="citizenDateMotherInEnglish">Citizenship Issued Date</label>
                                                        <input type="text" name="citizenDateMotherInEnglish" value="{{ old('citizenDateMotherInEnglish') }}" id="citizenDateMotherInEnglish" class="form-control dobInEnglish"  placeholder="yy-mm-dd" >
                                                    </div>
                
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success" >{{ __('Save') }}</button>
                                        <a href="{{ url()->previous() }}" class="btn btn-danger float-right">{{ __('Cancel') }}</a>
                                    </div>
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