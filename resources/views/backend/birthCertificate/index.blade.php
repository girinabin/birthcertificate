@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @if(Session::has('success_message'))
                <div class="alert alert-primary col-md-3 offset-9 my-3" role="alert">
                    {{ Session::get('success_message')}}
                </div>
                @endif

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            {{-- <a href="{{ route('birthcertificate.create') }}">
                                <button class="btn btn-sm badge-info"><strong>Add Birth Certificate Form</strong></button>
                            </a> --}}
                           


                            <p class="card-text text-center"><strong>BirthCertificate LIST</strong></p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-stripped" id="table_id">
                                <thead>
                                    <tr>
                                        <th>{{ __('HEALTH POST') }}</th>
                                        <th>{{ __('BABY NAME') }}</th>
                                        <th>{{ __('FATHER NAME') }}</th>
                                        <th>{{ __('MOTHER NAME') }}</th>

                                        
                                        <th>{{ __('ACTION') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($birthcertificates as $birthCertificate)
                                        <tr>
                                            <td>{{ $birthCertificate->birthApplication ? strtoupper($birthCertificate->birthApplication->healthPost->healthPostName):'N/A' }}</td>
                                            <td>{{ strtoupper($birthCertificate->babyNameInEnglish) }}</td>
                                            <td>{{ strtoupper($birthCertificate->fatherNameInEnglish) }}</td>
                                            <td>{{ strtoupper($birthCertificate->motherNameInEnglish) }}</td>
                                            <td>
                                                <a href="{{ route('birthcertificate.edit',$birthCertificate->id) }}"><button type="button" class="btn btn-warning" title="EDIT"><i class="fa fa-edit"></i></button></a>
                                                <a href="{{ route('birthcertificate.view',$birthCertificate->id) }}"><button type="button" class="btn btn-success" title="VIEW"><i class="fa fa-eye"></i></button></a>
                                                <form action="{{ route('birthcertificate.delete',$birthCertificate->id) }}" style="display: inline" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                               <button onclick="return confirm('Are You Sure To Delete?')" type="submit" class="btn btn-danger" title="DELETE"><i class="fa fa-trash"></i></button>

                                                </form>
                                                {{-- <a href="{{ route('birthcertificate.delete',$birthCertificate->id) }}" onclick="return confirm('Are You Sure To Delete?')"><button type="button" class="btn btn-danger" title="DELETE"><i class="fa fa-trash"></i></button></a> --}}



                                            </td>

                                            {{-- <td>
                                                <div class="input-group-prepend">
                                                    <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
        
                                                        <form action="" method="GET">
                                                            @csrf
                                                            <button type="submit" class="mt-2  mb-2  dropdown-item"
                                                                title="Edit"><i
                                                                    class="fas fa-edit btn-success btn-sm">&nbsp;Edit</i></button>
                                                        </form>
                                                        <form action="" >
                                                            @csrf
                                                            <button type="submit" class="mt-2  mb-2  dropdown-item"
                                                                title="Delete"><i
                                                                    class="fas fa-eye  btn-warning btn-sm">&nbsp;View</i></button>
                                                        </form>
        
                                                        <button data-toggle="modal"
                                                            data-target=".bd-delete-modal-sm{{$birthCertificate->id  }}" type="button"
                                                            class="mt-2  mb-2  dropdown-item" title="Delete"><i
                                                                class="fas fa-trash  btn-danger btn-sm">&nbsp;Delete</i></button>
        
                                                    </div>
                                                </div>
                                            </td> --}}

                                        </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
 {{-- Delete healthPost Modal --}}

@forelse ($birthcertificates as $birthCertificate)
<div class="modal fade bd-delete-modal-sm{{ $birthCertificate->id }}" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <span class="badge badge-info">{{ ucfirst($birthCertificate->babyIdentifyNumber) }}</span>
                <button type="button" class="close btn btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="container">
                <form action="" method="POST" >
                    @csrf
                    @method('DELETE')
                    <div>
                        <p>Are You Sure to Delete?</p>
                        <button type="submit" class="btn btn-danger btn-sm mb-2 mt-2 ">Delete</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
@empty
@endforelse
@endsection