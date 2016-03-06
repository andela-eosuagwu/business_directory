@extends('master')

@section('title', 'Register')

@section('content')

	<div id="outer-wrapper">
		<div id="inner-wrapper">
			@include('pages.includes.sections.header')
			@include('pages.includes.contents.company_edit')
			@include('pages.includes.sections.footer')
		</div>
	</div>


@endsection