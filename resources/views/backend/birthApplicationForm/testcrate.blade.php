<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Baby Details') }}</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                    data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('babyNameInNepali') }}</div>
                <label
                    for="babyNameInNepali">{{ __("What will be your's baby's legal name (as it should appear on the birth certificate)") }}
                    ?</label>
                <input type="text" name="babyNameInNepali" id="babyNameInNepali"
                    placeholder="{{ __('Name of Baby') }}" class="form-control"
                    value="{{ old('babyNameInNepali') }}">
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('babyNameInEnglish') }}
                </div>
                <label for="babyNameInEnglish">What will be your's baby's legal name
                    (as it should appear on the birth certificate ? (In English)</label>
                <input type="text" name="babyNameInEnglish" id="babyNameInEnglish"
                    placeholder="Name of Baby" class="form-control"
                    value="{{ old('babyNameInEnglish') }}">
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('gender') }}</div>
                <label for="inputStatus">{{ __("Baby's Gender") }}<i
                        class="text-danger">*</i></label>
                <select class="form-control custom-select" name="gender" required>
                    <option selected disabled>{{ __("Select Baby's Gender") }} </option>
                    <option value="Male"
                        {{ (old("gender") == "Male" ? "selected":"") }}>{{ __('Male') }}
                    </option>
                    <option value="Female"
                        {{ (old("gender") == "Female" ? "selected":"") }}>
                        {{ __('Female') }}</option>
                    <option value="Other"
                        {{ (old("gender") == "Other" ? "selected":"") }}>
                        {{ __('Other') }}</option>
                </select>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('dobInNepali') }}</div>
                <label for="dobInNepali">{{ __('Date of Birth in BS') }}<i
                        class="text-danger">*</i></label>
                <input type="date" name="dobInNepali" id="dobInNepali"
                    class="form-control nepaliDate9" value="{{ old('dobInNepali') }}"
                    autocomplete="off" placeholder="yyyy-mm-dd" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('dobInEnglish') }}</div>
                <label for="dobInEnglish">{{ __('Date of Birth in AD') }}<i
                        class="text-danger">*</i></label>
                <input type="date" name="dobInEnglish" id="dobInEnglish" class="form-control"
                    value="{{ old('dobInEnglish') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('timeOfBirth') }}</div>
                <label for="timeOfBirth">{{ __('Time of Birth') }}<i
                        class="text-danger">*</i></label>
                <input type="time" name="timeOfBirth" id="timeOfBirth" class="form-control"
                    value="{{ old('timeOfBirth') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('province') }}</div>
                <label for="province">{{ __('Provience') }}<i
                        class="text-danger">*</i></label>
                <select class="form-control select2 input-lg dynamic" name="province"
                    id="provience_np" style="width: 100%;" required
                    data-dependent="district">
                    <option selected="selected" disabled> {{ __('Provience') }}</option>
                    {{-- @foreach($provience_list as $provience)
                        <option value="{{$provience->provience_np  }}"
                    {{ (old("provience_np") == $provience->provience_np ? "selected":"") }}>{{ $provience->provience_np }}
                    </option>
                    @endforeach --}}
                </select>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('district') }}</div>
                <label for="district">{{ __('District') }}<i
                        class="text-danger">*</i></label>
                <select class="form-control select2 input-lg dynamic" name="district"
                    id="district" style="width: 100%;" required
                    data-dependent="municipality">
                    <option selected="selected" disabled> {{ __('District') }}</option>

                </select>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('municipality') }}
                </div>
                <label for="municipality">{{ __('Gaupalika / Municipality') }}<i
                        class="text-danger">*</i></label>
                <select name="municipality" id="municipality"
                    class="form-control input-lg select2">
                    <option value="" selected disabled>
                        {{ __('Gaupalika / Municipality') }}</option>
                </select>
            </div>

            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('wardNumber') }}</div>
                <label for="wardNumber">{{ __('Ward Number') }}<i
                        class="text-danger">*</i></label>
                <input type="number" name="wardNumber" id="wardNumber"
                    class="form-control" value="{{ old('wardNumber') }}"
                    placeholder="{{ __('Ward Number') }}" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('village') }}</div>
                <label for="village">{{ __('Village / Tole') }}</label>
                <input type="text" name="village" id="village" class="form-control"
                    value="{{ old('village') }}"
                    placeholder="{{ __('Village / Tole') }}">
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('house_no') }}</div>
                <label for="fhouse_no">{{ __('House Number') }}</label>
                <input type="number" name="house_no" id="house_no" class="form-control"
                    value="{{ old('house_no') }}" placeholder="{{ __('House Number') }}"
                    autocomplete="off">
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="col-md-12">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Parents Details') }}</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                    data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('grand_parent_name') }}
                </div>
                <label for="grandparentname">{{ __('Grand Parent Name') }}<i
                        class="text-danger">*</i></label>
                <input type="text" name="grand_parent_name" id="grandparentname"
                    class="form-control" value="{{ old('grand_parent_name') }}"
                    placeholder="{{ __('Grand Parent Name') }}" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">
                    {{ $errors->first('english_grand_parent_name') }}</div>
                <label for="english_grandparentname">Grand Parent Name<i
                        class="text-danger">*</i></label>
                <input type="text" name="english_grand_parent_name"
                    id="english_grandparentname" class="form-control"
                    value="{{ old('english_grand_parent_name') }}"
                    placeholder="{{ __('Grand Parent Name in English') }}" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">
                    {{ $errors->first('grand_parent_gender') }}</div>
                <label for="grandParent_gender">{{ __("Grand Parent Gender") }}<i
                        class="text-danger">*</i></label>
                <select class="form-control custom-select" id="grandParent_gender"
                    name="grand_parent_gender" value="{{ old('grand_parent_gender') }}"
                    required>
                    <option selected disabled>{{ __("Select Grand Parent Gender") }}
                    </option>
                    <option value="Male"
                        {{ (old("grand_parent_gender") == "Male" ? "selected":"") }}>
                        {{ __('Male') }}</option>
                    <option value="Female"
                        {{ (old("grand_parent_gender") == "Female" ? "selected":"") }}>
                        {{ __('Female') }}</option>
                </select>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('father_name') }}</div>
                <label for="fname">{{ __("Baby's Father's Name") }}<i
                        class="text-danger">*</i></label>
                <input type="text" name="father_name" id="fname" class="form-control"
                    value="{{ old('father_name') }}"
                    placeholder="{{ __("Baby's Father's Name") }}" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">
                    {{ $errors->first('english_father_name') }}</div>
                <label for="faname">Father's Name<i class="text-danger">*</i></label>
                <input type="text" name="english_father_name" id="faname"
                    class="form-control" value="{{ old('english_father_name') }}"
                    placeholder="Father's Name in English" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('mother_name') }}</div>
                <label for="mother_name">{{ __("Baby's Mother's Name") }}<i
                        class="text-danger">*</i></label>
                <input type="text" name="mother_name" id="mother_name"
                    class="form-control" value="{{ old('mother_name') }}"
                    placeholder="{{ __("Baby's Mother's Name") }}" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">
                    {{ $errors->first('english_mother_name') }}</div>
                <label for="english_mother_name">Mother's Name<i
                        class="text-danger">*</i></label>
                <input type="text" name="english_mother_name" id="english_mother_name"
                    class="form-control" value="{{ old('english_mother_name') }}"
                    placeholder="Mother's Name in English" required>
            </div>
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('contact_number') }}
                </div>
                <label for="contact_number">{{ __('Contact Number') }}<i
                        class="text-danger">*</i></label>
                <input type="number" name="contact_number" id="contact_number"
                    class="form-control" value="{{ old('contact_number') }}"
                    placeholder="{{ __('Contact Number') }}" required>
            </div>
            <input type="hidden" name="status" value="Still Pending">
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<div class="col-12">
    <button type="submit" class="btn btn-success"
        form="birthregd_store">{{ __('Save') }}</button>
    <a href="{{ url()->previous() }}"
        class="btn btn-danger float-right">{{ __('Cancel') }}</a>
</div>



{{-- kdkd --}}

<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ __('Baby Details') }}</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                    data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('babyNameInEnglish') }}</div>
                <label
                    for="babyNameInEnglish">{{ __("What will be your's baby's legal name (as it should appear on the birth certificate)") }}
                    ?</label>
                <input type="text" name="babyNameInEnglish" id="babyNameInEnglish"
                    placeholder="{{ __('Name of Baby') }}" class="form-control"
                    value="{{ old('babyNameInEnglish') }}">
            </div>
           
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('genderInEnglish') }}</div>
                <label for="genderInEnglish">{{ __("Baby's Gender") }}<i
                        class="text-danger">*</i></label>
                <select class="form-control custom-select" name="genderInEnglish" required>
                    <option selected disabled>{{ __("Select Baby's Gender") }} </option>
                    <option value="Male"
                        {{ (old("genderInEnglish") == "Male" ? "selected":"") }}>{{ __('Male') }}
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
                <div class="text text-danger">{{ $errors->first('dobInEnglish') }}</div>
                <label for="dobInEnglish">{{ __('Date of Birth in BS') }}<i
                        class="text-danger">*</i></label>
                <input type="date" name="dobInEnglish" id="dobInEnglish"
                    class="form-control EnglishDate9" value="{{ old('dobInEnglish') }}"
                    autocomplete="off" placeholder="yyyy-mm-dd" required>
            </div>

           
            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('timeOfBirthInEnglish') }}</div>
                <label for="timeOfBirthInEnglish">{{ __('Time of Birth') }}<i
                        class="text-danger">*</i></label>
                <input type="time" name="timeOfBirthInEnglish" id="timeOfBirthInEnglish" class="form-control"
                    value="{{ old('timeOfBirthInEnglish') }}" autocomplete="off" required>
            </div>

            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('fatherNameInEnglish') }}</div>
                <label for="fatherNameInEnglish">{{ __("Baby's Father's Name") }}<i
                        class="text-danger">*</i></label>
                <input type="text" name="fatherNameInEnglish" id="fatherNameInEnglish" class="form-control"
                    value="{{ old('fatherNameInEnglish') }}"
                    placeholder="{{ __("Baby's Father's Name") }}" required>
            </div>

            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('motherNameInEnglish') }}</div>
                <label for="motherNameInEnglish">{{ __("Baby's mother's Name") }}<i
                        class="text-danger">*</i></label>
                <input type="text" name="motherNameInEnglish" id="motherNameInEnglish" class="form-control"
                    value="{{ old('motherNameInEnglish') }}"
                    placeholder="{{ __("Baby's mother's Name") }}" required>
            </div>

            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('grandParentNameInEnglish') }}</div>
                <label for="grandParentNameInEnglish">{{ __("Grand Parent Name ") }}<i
                        class="text-danger">*</i></label>
                <input type="text" name="grandParentNameInEnglish" id="grandParentNameInEnglish" class="form-control"
                    value="{{ old('grandParentNameInEnglish') }}"
                    placeholder="{{ __("Grand Parent Name") }}" required>
            </div>


            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('provinceInEnglish') }}</div>
                <label for="provinceInEnglish">{{ __('Provience') }}<i
                        class="text-danger">*</i></label>
                <select class="form-control select2 input-lg dynamic" name="provinceInEnglish"
                    id="" style="width: 100%;" required
                    data-dependent="districtInEnglish">
                    <option selected="selected" disabled> {{ __('Provience') }}</option>
                   
                </select>
            </div>


            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('districtInEnglish') }}</div>
                <label for="districtInEnglish">{{ __('districtInEnglish') }}<i
                        class="text-danger">*</i></label>
                <select class="form-control select2 input-lg dynamic" name="districtInEnglish"
                    id="districtInEnglish" style="width: 100%;" required
                    data-dependent="municipalityInEnglish">
                    <option selected="selected" disabled> {{ __('districtInEnglish') }}</option>

                </select>
            </div>

            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('municipalityInEnglish') }}
                </div>
                <label for="municipalityInEnglish">{{ __('Gaupalika / municipalityInEnglish') }}<i
                        class="text-danger">*</i></label>
                <select name="municipalityInEnglish" id="municipalityInEnglish"
                    class="form-control input-lg select2">
                    <option value="" selected disabled>
                        {{ __('Gaupalika / municipalityInEnglish') }}</option>
                </select>
            </div>

            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('wardNumberInEnglish') }}</div>
                <label for="wardNumberInEnglish">{{ __('Ward Number') }}<i
                        class="text-danger">*</i></label>
                <input type="number" name="wardNumberInEnglish" id="wardNumberInEnglish"
                    class="form-control" value="{{ old('wardNumberInEnglish') }}"
                    placeholder="{{ __('Ward Number') }}" required>
            </div>

            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('villageInEnglish') }}</div>
                <label for="villageInEnglish">{{ __('villageInEnglish / Tole') }}</label>
                <input type="text" name="villageInEnglish" id="villageInEnglish" class="form-control"
                    value="{{ old('villageInEnglish') }}"
                    placeholder="{{ __('villageInEnglish / Tole') }}">
            </div>

            <div class="form-group">
                <div class="text text-danger">{{ $errors->first('houseNumberInEnglish') }}</div>
                <label for="fhouseNumberInEnglish">{{ __('House Number') }}</label>
                <input type="number" name="houseNumberInEnglish" id="houseNumberInEnglish" class="form-control"
                    value="{{ old('houseNumberInEnglish') }}" placeholder="{{ __('House Number') }}"
                    autocomplete="off">
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>