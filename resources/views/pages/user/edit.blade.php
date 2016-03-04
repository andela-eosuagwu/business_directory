@extends('master')

@section('title', 'Register')
	<link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css" type="text/css">
	<link rel="stylesheet" href="assets/css/jquery.nouislider.min.css" type="text/css">
	<link rel="stylesheet" href="assets/css/colors/green.css" type="text/css">
	<link rel="stylesheet" href="assets/css/user.style.css" type="text/css">
	
@section('content')

<body onunload="" class="page-subpage page-item-detail navigation-off-canvas" id="page-top">
	<div id="outer-wrapper">
		<div id="inner-wrapper">
			@include('pages.includes.sections.header')
			
			@include('pages.includes.sections.footer')
		</div>
	</div>
</body>

@endsection