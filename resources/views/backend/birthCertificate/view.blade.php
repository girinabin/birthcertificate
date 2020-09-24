@extends('layouts.master')
@section('janmadarta')
<link rel="stylesheet" href="{{ asset('birth_pratibedan/janmadarta.css') }}">

@endsection
@section('content')

<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header no-print">
                            <div class="row no-print float-left">
                                <a onclick="window.print();" class="btn btn-info"><i class="fas fa-print"></i> Print</a>
                            </div>
                            <div class="row no-print float-right">
                                <a href="{{ route('birthcertificate.edit',$birthcertificate->id) }}" class="btn btn-warning "><i class="fas fa-edit "></i> Edit</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- nepali -->
                            <div class="container-fluid birthcertificate">
                                <div class="logo">
                                    <img src="{{ asset('birth_pratibedan/images/school-logo.png') }}" alt="NepalSarkarLogo"
                                        class="img-fluid">
                                </div>
                                <div class="certificatetop">
                                    <ul class="topul">
                                        <li>अनुसूची-१२</li>
                                        <li>(नियम ७ सँग सम्बन्धित)</li>
                                        <li>नेपाल सरकार</li>
                                        <li>संघीय मामिला तथा स्थानीय विकास मन्त्रालय</li>
                                        <li>स्थानीय पंजिकाधिकारीको कार्यालय</li>
                                        <li style="font-size: 30px; text-align: center;">{{ $municipalityNameInNepali }} गाउँपालिका बिकाश
                                            समिति/नगरपालिका</li>
                                        <li style="font-size: 30px; text-align: center;">{{ $municipalityDistrictInNepali }} जिल्ला</li>
                                    </ul>
                                </div>
                                <div class="pramanpatra">
                                    <h2>जन्म दर्ता प्रमाणपत्र</h2>
                                </div>
                                <div class="registration-field">
                                    <div class="regfield">
                                        <h4>दर्ता नम्बर:{{ $registrationNumberInNepali }} </h4>
                                        <h4>परिवारिक लगत फारम नं:{{ $familyRecordFormNumberInNepali }}</h4>
                                    </div>
                                    <div class="regrightfield">
                                        <h4> दर्ता मिति:{{ $registrationDateInNepali }} </h4>
                                    </div>
                                </div>
                                <div class="birthdescp">
                                    <p>यस कार्यालयमा खडा गरिएको जन्म दर्ता किताब अनुसार प्रमाणीत गरिन्छ कि सूचक {{ $birthcertificate['providerGenderInNepali'] == "Male"? "श्री." : "श्रीमती." }}
                                        {{ $providerNameInNepali }}
                                        ले भरेको अनुसूची-२ को सूचना फारम बामोजिम श्री. {{ $grandParentNameInNepali }},
                                        को {{ $birthcertificate->birthApplication->genderInNepali =='पुरुष' ?'नाति':'नातीनी' }} {{ $babyNameInNepali }} जिल्ला {{ $districtInNepali }}
                                        वार्ड नं.{{ $wardNumberInNepali }} मा बस्ने श्री. {{ $fatherNameInNepali }} तथा श्रीमती. {{ $motherNameInNepali }} 
                                        को मिति वि.सं.{{ $dobInNepali }} (ई.सं.{{ $dobInEnglish }}) मा जन्म भएको हो |</p>
                                </div>
                                <div class="issue-row">
                                    <div class="nep-issue-list">
                                        <h4>नागरिकता लिएको भए</h4>
                                        <h4>नागरिकता प्रमाणपत्र नं , जारी मिति र जिल्ला</h4>
                                        <h4>बुवाको: {{ $citizenNumberFatherInNepali }}, {{ $citizenDateFatherInNepali }}, {{ $citizenDistrictFatherInNepali }} </h4>
                                        <h4>आमाको: {{ $citizenNumberMotherInNepali }}, {{ $citizenDateMotherInNepali }}, {{ $citizenDistrictMotherInNepali }}</h4>
                                    </div>
                                    <div class="sthaniya">
                                        <h4>स्थानीय पंजिकाधिकारीको <br>सही.........................</h4>
                                        <h4>नाम थर: {{ $registrarNameInNepali }}</h4>
                                        <h4>मिति:......................</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end of nepali -->
                            <hr>

                            <!-- english starts -->
                            <div class="container-fluid birthcertificate1">
                                <div class="certificatetop">
                                    <ul class="topul">
                                        <li>Schedule-12</li>
                                        <li>(Related with Rule 7)</li>
                                        <li>Government of Nepal</li>
                                        <li style="font-size: 32px; text-align: center;">Office of Local Registrar</li>
                                        <li>{{ strtoupper($municipalityNameInEnglish) }} VDC/Municipality</li>
                                        <li>{{ strtoupper($municipalityDistrictInEnglish) }} District</li>
                                    </ul>
                                </div>
                                <div class="pramanpatra">
                                    <h2>Birth Registration Certificate</h2>
                                </div>
                                <div class="registration-field">
                                    <div class="regfield">
                                        <h6>Registration No:{{ $registrationNumberInEnglish }} </h6>
                                        <h6>Family Record Form No:{{ $familyRecordFormNumberInEnglish }} </h6>
                                    </div>
                                    <div class="regrightfield">
                                        <h6>Date of Registration:{{ $registrationDateInEnglish }}</h6>
                                    </div>
                                </div>
                                <div class="birthdescp">
                                    <p class="mainparagraph">This is to certify, as per the birth register
                                        maintained at this office and the information provided by {{ $birthcertificate['providerGenderInNepali'] == "Male"? "Mr." : "Mrs." }}
                                        {{ $providerNameInEnglish }}
                                        in the information from of schedule 2,
                                        that {{ $birthcertificate->birthApplication->genderInNepali =='पुरुष' ?'Mr.':'Ms.' }} {{ $babyNameInEnglish }}
                                        of Mr. {{ $fatherNameInEnglish }}
                                        Mrs. {{ $motherNameInEnglish }} a resident of Ward no. {{ $wardNumberInEnglish }}
                                        Rural Development Committe/Municipality District was born on {{ $dobInNepali }} Bs( {{ $dobInEnglish }} AD)  </p>
                                </div>
                                <div class="issue-list">
                                    <h4 id="issuedet1">Citizenship Certificate No. Date, District if Citizenship
                                        Certificate is issued to:</h4>
                                </div>
                                <div class="issuedto">
                                    <div class="issuedlist">
                                        <h4>A. Father:{{ $citizenNumberFatherInEnglish }}, {{ $citizenDateFatherInEnglish }}, {{ $citizenDistrictFatherInEnglish }} </h4>
                                        <h4>B. Mother:{{ $citizenNumberMotherInEnglish }}, {{ $citizenDateMotherInEnglish }}, {{ $citizenDistrictMotherInEnglish }}</h4>
                                    </div>
                                    <div class="localreg">
                                        <h4>Local Registrar's <br> Signature .......................</h4>
                                        <h4>Name and surname:{{ $registrarNameInEnglish }} </h4>
                                    </div>
                                </div>
                            </div>
                            <!-- english ends -->
                        </div>
                    </div>
                </div>
            </div>
                
        </div><!-- /.container-fluid -->
    </div>
        <!-- /.content -->
</div>

@endsection