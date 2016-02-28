@extends('master')

@section('title', 'Register')

@section('content')

<body onunload="" class="page-subpage page-item-detail navigation-off-canvas" id="page-top">
	<div id="outer-wrapper">
		<div id="inner-wrapper">
			@include('pages.includes.sections.header')
			@include('pages.includes.contents.company_detail')
			@include('pages.includes.sections.footer')
		</div>
	</div>
</body>

@endsection