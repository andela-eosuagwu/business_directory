@extends('master')

@section('title', 'Register')

@section('content')
	<link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
	<link rel="stylesheet" href="assets/css/dropzone.css" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="assets/css/user.style.css" type="text/css">


<body onunload="" class="page-subpage page-listing-grid navigation-off-canvas" id="page-top">
	<div id="outer-wrapper">
		<div id="inner-wrapper">
			@include('pages.includes.sections.header')
			@include('pages.company.companies')
			@include('pages.includes.sections.footer')
		</div>
	</div>
</body>

@endsection