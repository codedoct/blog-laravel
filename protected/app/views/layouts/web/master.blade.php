<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>
		@if($title)
			{{ $title }}
		@else
			Codedoct.com
		@endif
	</title>

	<!-- Custom Style -->
	@section('style')
	@show
	{{ HTML::style('public/css/master/main.css') }}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Custom Scripts -->
	@section('script')
	@show
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	@include('layouts.web.header')
	@yield('content')

	<!-- modal -->
	@section('modal')
	@show

	@include('layouts.web.footer')
</body>
</html>
