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
                                        <th>BABY NAME</th>
                                        <th>FATHER NAME</th>
                                        <th>MOTHER NAME</th>
                                        <th>CONTACT NUMBER</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
 {{-- Delete healthPost Modal --}}

{{-- @forelse ($healthPosts as $healthPost)
<div class="modal fade bd-delete-modal-sm{{ $healthPost->id }}" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <span class="badge badge-info">{{ ucfirst($healthPost->healthPostName) }}</span>
                <button type="button" class="close btn btn-sm" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="container">
                <form action="{{ route('healthPost.delete',$healthPost->id) }}" >
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
@endforelse --}}
@endsection