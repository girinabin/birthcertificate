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

                            <a href="{{ route('birthApplicationForm.create') }}">
                                <button class="btn btn-sm badge-info"><strong>Add Birth Application Form</strong></button>
                            </a>


                            <p class="card-text text-center"><strong>APPLICATION FORM LIST</strong></p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-stripped" id="table_id">
                                <thead>
                                    <tr>
                                        <th>BABY IDENTIFY NO</th>
                                        <th>HealthPost</th>
                                        <th>BABY NAME</th>
                                        <th>GENDER</th>
                                        <th>FATHER NAME</th>
                                        <th>MOTHER NAME</th>
                                        <th>CONTACT NUMBER</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($birthApplications as $birthApplication)
                                        <tr>
                                            <td>{{ $birthApplication->babyIdentifyNumber }}</td>
                                            <td>{{ $birthApplication->healthPost->healthPostName }}</td>
                                            <td>{{ $birthApplication->babyNameInNepali ? strtoupper($birthApplication->babyNameInNepali):'N/A' }}</td>
                                            <td>{{ strtoupper($birthApplication->genderInNepali) }}</td>
                                            <td>{{ strtoupper($birthApplication->fatherNameInNepali) }}</td>
                                            <td>{{ strtoupper($birthApplication->motherNameInNepali )}}</td>
                                            <td>{{ strtoupper($birthApplication->contactNumberInNepali) }}</td>

                                            <td>
                                                <div class="input-group-prepend">
                                                    <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start"
                                                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
        
                                                        <form action="{{ route('birthApplicationForm.edit',$birthApplication->id) }}" method="GET">
                                                            @csrf
                                                            <button type="submit" class="mt-2  mb-2  dropdown-item"
                                                                title="Edit"><i
                                                                    class="fas fa-edit btn-success btn-sm">&nbsp;Edit</i></button>
                                                        </form>
                                                        {{-- <form action="">
                                                            @csrf
                                                            <button type="submit" class="mt-2  mb-2  dropdown-item"
                                                                title="Delete"><i
                                                                    class="fas fa-eye  btn-warning btn-sm">&nbsp;View</i></button>
                                                        </form> --}}
        
                                                        <button data-toggle="modal"
                                                            data-target=".bd-delete-modal-sm{{$birthApplication->id  }}" type="button"
                                                            class="mt-2  mb-2  dropdown-item" title="Delete"><i
                                                                class="fas fa-trash  btn-danger btn-sm">&nbsp;Delete</i></button>
        
                                                    </div>
                                                </div>
                                            </td>

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

@forelse ($birthApplications as $birthApplication)
<div class="modal fade bd-delete-modal-sm{{ $birthApplication->id }}" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <span class="badge badge-info">{{ ucfirst($birthApplication->babyIdentifyNumber) }}</span>
                <button type="button" class="close btn btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="container">
                <form action="{{ route('birthApplicationForm.delete',$birthApplication->id) }}" method="POST" >
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