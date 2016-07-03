<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $title }}</title>
	{{ HTML::style('public/css/master/main.css') }}
</head>
<body>
	<!-- Custom Scripts -->
	@section('script')
	@show
	
	@include('layouts.web.header')
	@yield('content')
	@include('layouts.web.footer')
</body>
</html>
