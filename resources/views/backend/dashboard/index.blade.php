@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        @if(Session::has('success_message'))
        <div class="alert alert-primary col-md-3 offset-9 my-3" role="alert">
            {{ Session::get('success_message')}}
        </div>
        @endif
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h4>test</h4>
              <h5>test</h5>

              <h4 class="mt-5">test</h4>
            </div>
            <div class="icon">
              <i class="fas fa-school"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>

    </div>

  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<!-- /.content-wrapper -->
@endsection