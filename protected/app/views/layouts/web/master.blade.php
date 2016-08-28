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

	<!-- Custom Scripts -->
	@section('script')
	@show
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
	@include('layouts.web.header')
	@yield('content')
	@include('layouts.web.footer')
</body>
</html>
