@extends('master')

@section('title', 'Register')

@section('content')

<body onunload="" class="page-subpage page-listing-grid navigation-off-canvas" id="page-top">
	<div id="outer-wrapper">
		<div id="inner-wrapper">
			@include('pages.includes.sections.header')
			@include('pages.includes.contents.companies')
			@include('pages.includes.sections.footer')
		</div>
	</div>
</body>

@endsection