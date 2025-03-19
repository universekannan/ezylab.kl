<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{!! asset('assets/images/favicon-32x32.png') !!}" type="image/png" />
	<!--plugins-->
	<link href="{!! asset('assets/plugins/simplebar/css/simplebar.css') !!}" rel="stylesheet" />
	<link href="{!! asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') !!}" rel="stylesheet" />
	<link href="{!! asset('assets/plugins/highcharts/css/highcharts-white.css') !!}" rel="stylesheet" />
	<link href="{!! asset('assets/plugins/metismenu/css/metisMenu.min.css') !!}" rel="stylesheet" />
	<link href="{!! asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') !!}" rel="stylesheet" />
	<!-- loader-->
	{{-- <link href="{!! asset('assets/css/pace.min.css') !!}" rel="stylesheet" />
	<script src="{!! asset('assets/js/pace.min.js') !!}"></script> --}}
	<!-- Bootstrap CSS -->
	<link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet">
	<link href="{!! asset('assets/css/bootstrap-extended.css') !!}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{!! asset('assets/css/app.css') !!}" rel="stylesheet">
	<link href="{!! asset('assets/css/icons.css') !!}" rel="stylesheet">
    <link href="{{ asset('assets/css/datatable.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body class="bg-theme bg-theme2">
	<div class="wrapper">
	
            @include('layouts.sidebar')
	        @include('layouts.header')

			    @yield('content')
            @include('layouts.footer')


	<script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
	<!--plugins-->
	<script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
	<script src="{!! asset('assets/plugins/simplebar/js/simplebar.min.js') !!}"></script>
	<script src="{!! asset('assets/plugins/metismenu/js/metisMenu.min.js') !!}"></script>
	<script src="{!! asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') !!}"></script>
	<script src="{!! asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') !!}"></script>
	<script src="{!! asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
	<script src="{!! asset('assets/plugins/highcharts/js/highcharts.js') !!}"></script>
	<script src="{!! asset('assets/plugins/highcharts/js/exporting.js') !!}"></script>
	<script src="{!! asset('assets/plugins/highcharts/js/variable-pie.js') !!}"></script>
	<script src="{!! asset('assets/plugins/highcharts/js/export-data.js') !!}"></script>
	<script src="{!! asset('assets/plugins/highcharts/js/accessibility.js') !!}"></script>
	<script src="{!! asset('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') !!}"></script>
	<script src="{!! asset('assets/js/dashboard-sales.js') !!}"></script>
	<!--app JS-->
	<script src="{!! asset('assets/js/app.js') !!}"></script>
    <script src="{{ asset('assets/js/datatable.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.js') }}"></script>

	<script>
		new PerfectScrollbar('.customers-list');
		new PerfectScrollbar('.store-metrics');
		new PerfectScrollbar('.product-list-2');
	</script>
</body>
</html>
