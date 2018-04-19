<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('title')

	@include('include.script')
	@yield('scriptjs')
</head>

<body>

	<!-- Main navbar -->
	@include('include.navbar')
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			@include('include.sidebar')
			<!-- /main sidebar -->


			<!-- Main content -->
			@yield('konten')
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
</script>
@yield('footscript')
@include('include.modal')
</body>
</html>
