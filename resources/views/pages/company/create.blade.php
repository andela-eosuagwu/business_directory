<html lang="en-US">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@include('pages.includes.sections.link')
	</head>

	<body onunload="" class="page-subpage page-submit navigation-off-canvas" id="page-top">

		<div id="outer-wrapper">
			<!-- Inner Wrapper -->
			<div id="inner-wrapper">

				@include('pages.includes.sections.header')

				<div id="page-canvas">
				
					@include('pages.includes.sections.sub-header')
					
					<div id="page-content">
						<section class="container">
							<div class="row">
								@include('pages.company.create_form')
								@include('pages.company.pricing')
							</div>
						</section>
					</div>

				</div>
				@include('pages.includes.sections.footer')
			</div>
			<!-- end Inner Wrapper -->
		</div>






















		@include('pages.includes.sections.script')

		<script>
			$(window).load(function(){
				var _latitude = 51.541599;
				var _longitude = -0.112588;
				var draggableMarker = true;
				simpleMap(_latitude, _longitude,draggableMarker);
			});
			autoComplete();
		</script>

		<!--[if lte IE 9]>
		<script type="text/javascript" src="assets/js/ie-scripts.js"></script>
		<![endif]-->
	</body>
</html>