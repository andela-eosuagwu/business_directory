@extends('master')

@section('title', 'Register')

@section('content')

<body onunload="" class="page-subpage page-register navigation-top-header" id="page-top">
	<div id="outer-wrapper">
		<div id="inner-wrapper">
			@include('pages.includes.sections.header')
			@include('pages.includes.contents.register')
		</div>
	</div>
</body>

@endsection