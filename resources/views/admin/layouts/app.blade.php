<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>Rifle - @yield('title')</title>

	<meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<link rel="icon" href="{{ asset('assets/shooting-target.jpg') }}" type="image/png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!--Admin Css -->
	<!-- <link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="{{ asset('assets/admin/styles/shards-dashboards.1.0.0.min.css') }} "> -->
	<link rel="stylesheet" id="main-stylesheet" data-version="1.0.0" href="{{ asset('assets/admin/styles/shards-dashboards.1.1.0.min.css') }} ">
	
	<link rel="stylesheet" href="{{ asset('assets/admin/styles/extras.1.0.0.min.css') }} ">
	
	<script async defer src="https://buttons.github.io/buttons.js"></script>
</head>
<body class="h-100">
	@yield('color-switcher')

	<!-- <div class="container"> -->
		<div class="container-fluid">
			@yield('content')
		</div>

		@section('footer_file')
		<!-- JS -->
		<script src="{{ asset('assets/admin/scripts/js/jquery-3.3.1.min.js') }} "></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		@show
		<!-- Chart -->
		<script src="{{ asset('assets/admin/scripts/js/Chart_2.7.1.min.js') }} "></script>

		<script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>

		<script src="{{ asset('assets/admin/scripts/extras.1.0.0.min.js') }} "></script>
		<!-- <script src="{{ asset('assets/admin/scripts/extras.1.1.0.min.js') }} "></script> -->

		<script src="{{ asset('assets/admin/scripts/shards-dashboards.1.0.0.min.js') }} "></script>
		<!-- <script src="{{ asset('assets/admin/scripts/shards-dashboards.1.1.0.min.js') }} "></script> -->

		<script src="{{ asset('assets/admin/scripts/app/app-blog-overview.1.0.0.js') }} "></script>
	</body>
	</html>