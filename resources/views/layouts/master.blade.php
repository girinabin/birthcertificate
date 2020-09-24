<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BirthCenter Management</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @yield('pratibedan')
  @yield('janmadarta')

  <!--nepali date picker -->
  <link rel="stylesheet" type="text/css" href="{{ asset('nepalidatepicker/nepali.datepicker.v2.2.min.css') }}" />
  {{-- english date picker --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper" id="app">
    @include('layouts/partials/navbar')
    @include('layouts/partials/sidebar')
    @yield('content')
    @include('layouts/partials/footer')
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- nepali date picker -->
<script type="text/javascript" src="{{ asset('nepalidatepicker/nepali.datepicker.v2.2.min.js') }}"></script>
{{-- english daete picker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
    $(document).ready( function () {
    $('#table_id').DataTable();
    } );
  </script>
  <script>
    $(document).ready(()=>{
    setTimeout(()=>{
    $('.alert').slideUp()
    },4000);
    });
  </script>

<script type="application/javascript">
	$(document).ready(function(){
		$('.backlink').click(function(){
			window.history.back();
		});
	});
</script>
<script type="application/javascript">

	$(document).ready(function(){

		$('.nepaliDate').nepaliDatePicker({
			npdMonth: true,
			npdYear: true,
		});


	});
</script>

<script type="application/javascript">

	$(document).ready(function(){

		$('.dobInEnglish').datepicker({
			dateFormat:"yy-mm-dd"
		});


	});
</script>

</body>

</html>