@extends('mastercompany')


@section('title', 'Lekki Republic Dashboard')

@section('content')

	<div id="outer-wrapper">
		<div id="inner-wrapper">
			@include('pages.includes.sections.adminheader')

			<div class="content-wrapper">
				<div class="content-heading" style="padding-left: 150px;">
					<b>Add Your Business</b>
				</div>
				<div style="padding : 0px 50px;">
					<!-- START widgets box-->
					<div class="row">


						@include('pages.company.create_form')


					</div>
					<!-- END widgets box-->

				</div>
			</div>

			@include('pages.includes.sections.slimfooter')
		</div>
	</div>


@stop






