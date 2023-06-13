<!DOCTYPE html>
<html lang="en">
	<head>
		@include('layouts.meta')
		@include('layouts.head')
        @yield('css')
	</head>

	<body class="main-body app sidebar-mini">
		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		@include('layouts.sidebar')
		<!-- main-content -->
		<div class="main-content app-content">
			@include('layouts.nav')
			<!-- container -->
			<div class="container-fluid">
				@yield('page-header')
				@yield('content')
				@include('layouts.sidebar')
				@include('layouts.models')
            	@include('layouts.footer')
				@include('layouts.scripts')
	</body>
</html>
