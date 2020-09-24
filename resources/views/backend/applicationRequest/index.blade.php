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

                           


                            <p class="card-text text-center"><strong>APPLICATION FORM REQUEST LIST</strong></p>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-stripped" id="table_id">
                                <thead>
                                    <tr>
                                        <th>{{ __('Application Number') }}</th>
                                        <th>HealthPost</th>
                                        <th>BABY NAME</th>
                                        <th>GENDER</th>
                                        <th>FATHER NAME</th>
                                        <th>STATUS</th>
                                        <th>{{ __('ACTION') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($applicationForms as $applicationForm)
                                        <tr>
                                            <td>{{ $applicationForm->id }}</td>
                                            <td>{{ $applicationForm->healthPost->healthPostName }}</td>
                                            <td>{{ $applicationForm->babyNameInNepali ? strtoupper($applicationForm->babyNameInNepali):'N/A' }}</td>
                                            <td>{{ strtoupper($applicationForm->genderInNepali) }}</td>
                                            <td>{{ strtoupper($applicationForm->fatherNameInNepali) }}</td>
                                            <td>{{ strtoupper($applicationForm->status) }}</td>
                                            <td>
                                                @if($applicationForm->status == 'Pending')
                                                <a href="{{ route('birthcertificate.create',$applicationForm->id) }}"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button></a>
                                                @endif
                                                <a href="{{ route('birthApplicationForm.edit',$applicationForm->id) }}"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                                                {{-- <a href=""><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a> --}}
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

@forelse ($applicationForms as $applicationForm)
<div class="modal fade bd-delete-modal-sm{{ $applicationForm->id }}" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <span class="badge badge-info">{{ ucfirst($applicationForm->babyIdentifyNumber) }}</span>
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