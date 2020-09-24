@extends('layouts.master')
@section('pratibedan')
<link rel="stylesheet" href="{{ asset('birth_pratibedan/pratibedan.css') }}">

@endsection
@section('content')

<?php
$time = explode(':',$applicationForm['timeOfBirthInNepali']);
$date = Carbon::now();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>जन्मको प्रतिबेदन</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-12">
                <a onclick="window.print();" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
            </div>
        </div>
        <div class="container-fluid birthcertificate">
            <!-- .top list -->
            <div class="row">
                <div class="col-md-12">
                    <div class="toplist">
                        <div class="left-corner">
                            <span>आर्थिक वर्ष: {{$date->format('Y')}}-{{$date->format('Y')+1}}</span>
                        </div>
                        <ul class="right-corner">
                            <li class="">जन्म प्रमाण पत्र नं: {{ $applicationForm->id }} </li>
                        </ul>
                    </div>
                    <!-- end of top list -->
                </div>
            </div>
            <!-- main heading -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-heading">
                        <br>
                        <h2>जन्मको प्रतिवेदन</h2>
                    </div>
                </div>
            </div>
            <!-- end of main heading -->
            <!-- main paragraph -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-par">
                        <p>&nbsp;&nbsp;&nbsp;यस संस्थाको अभिलेख अनुसार प्रमाणित गरिन्छ कि
                            {{ $applicationForm->provinceInNepali }} जिल्ला {{ $applicationForm->districtInNepali }}
                            वार्ड न {{ $applicationForm->wardNumberInNepali }} टोल
                            {{ $applicationForm->villageInNepali }} मा बस्ने श्री
                            {{ $applicationForm->fatherNameInNepali }} को पत्नी
                            {{ $applicationForm->motherNameInNepali }} ले मिति वि.सं.{{ $applicationForm->dobInNepali }}
                            (ई.सं.{{ $applicationForm->dobInEnglish }} ) का दिन {{ $time[0] }} बजेर {{ $time[1] }}
                            मिनेट(२४ घण्टा समय) मा {{ $applicationForm->weightInNepali }} ग्राम तौल भएको जीवित
                            {{ $applicationForm->genderInNepali }} बच्चा जन्मेको हो | यो जन्म
                            {{ $applicationForm->numberOfBirthInNepali }} रहेको र
                            {{ $applicationForm->birthTypeInNepali }} बाट जन्मेको हो |</p>
                    </div>
                    <!-- end of main paragaraph -->
                </div>
            </div>
            <!-- end of main paragaraph -->

            <!-- bottom details -->
            <div class="row">
                <div class="col-md-12">
                    <div class="pramanpatrahead">
                        <ul class="pramanpatralist">
                            <li class="heading1">प्रमाण पत्र जारी गर्ने</li>
                            <li>हस्ताक्षर:.................</li>
                            <li>नाम:........................</li>
                            <li>पद:.........................</li>
                            <br>
                            <li class="heading1">प्रमाणित गर्ने</li>
                            <li>हस्ताक्षर:.............</li>
                            <li>नाम:...............</li>
                            <li>पद:...............</li>
                            <li>प्रमाण पत्र जारी मिति:..............</li>
                        </ul>



                        <ul class="pramanpatralist">
                            <li class="heading1">अस्पताल स्वास्थ्य संस्था</li>
                            <li>नाम: {{ $applicationForm->healthPost->healthPostName }} </li>
                            <li>ठेगाना:
                                {{ $applicationForm->healthPost->municipality->municipalityName }},{{ $applicationForm->healthPost->municipality->municipalityDistrict }}
                            </li>
                            <li class="karyalaya">कार्यालय को छाप</li>

                        </ul>
                    </div>

                </div>
            </div>



            <!-- bottom parts-->
            <div class="row">
                <div class="col-md-12">
                    <div class="endnotice"><br>
                        <p>{कृपया स्थानिय पन्जिकाधिकारी (गा.पा.को कार्यालय वा न.पा.को वडा कार्यालय) मा जन्मेको ३५ दिन
                            भित्र घटना दर्ता गरी प्रमाणपत्र लिनु होला |}</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- end of birth certificate -->





</div>

</section>

@endsection