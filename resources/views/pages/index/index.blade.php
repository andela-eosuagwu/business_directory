<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{ load_asset('/bootstrap/css/bootstrap.css') }" type="text/css">
		<link rel="stylesheet" href="{ load_asset('/css/bootstrap-select.min.css') }" type="text/css">
		<link rel="stylesheet" href="{ load_asset('/css/owl.carousel.css') }" type="text/css">
		<link rel="stylesheet" href="{ load_asset('/css/jquery.mCustomScrollbar.css') }" type="text/css">
		<link rel="stylesheet" href="{ load_asset('/css/jquery.nouislider.min.css') }" type="text/css">
		<link rel="stylesheet" href="{ load_asset('/css/colors/green.css') }" type="text/css">
		<link rel="stylesheet" href="{ load_asset('/css/user.style.css') }" type="text/css">

		<title>Spotter - Universal Directory Listing HTML Template</title>

	</head>

	<body onunload="" class="map-fullscreen page-homepage navigation-off-canvas" id="page-top">
		<div id="outer-wrapper">
			<div id="inner-wrapper">
				@include('pages.includes.sections.header')
				@include('pages.index.content')
				@include('pages.includes.sections.footer')
			</div>
		</div>
	<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="assets/js/before.load.js"></script>
	<script type="text/javascript" src="assets/js/leaflet.js"></script>
	<script type="text/javascript" src="assets/js/leaflet-providers.js"></script>
	<script type="text/javascript" src="assets/js/leaflet.markercluster.js"></script>
	<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="assets/js/icheck.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.hotkeys.js"></script>
	<script type="text/javascript" src="assets/js/jquery.nouislider.all.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<script type="text/javascript" src="assets/js/maps.js"></script>

	<script>
		var _latitude = 51.541216;
		var _longitude = -0.095678;
		var jsonPath = 'assets/json/real-estate.json.txt';
		var mapProvider = 'HERE.normalDayGrey';

		// Load JSON data and create OSM

		$.getJSON(jsonPath)
				.done(function(json) {
					createHomepageOSM(_latitude,_longitude,json,mapProvider);
				})
				.fail(function( jqxhr, textStatus, error ) {
					console.log(error);
				})
		;

		// Set if language is RTL and load Owl Carousel

		$(window).load(function(){
			var rtl = false; // Use RTL
			initializeOwl(rtl);
		});
	</script>

	<!--[if lte IE 9]>
	<script type="text/javascript" src="assets/js/ie-scripts.js"></script>
	<![endif]-->
	</body>


</html>
	