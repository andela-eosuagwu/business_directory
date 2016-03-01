<div id="page-canvas">
	
	<nav class="off-canvas-navigation">
		<header>Navigation</header>
		<div class="main-navigation navigation-off-canvas"></div>
	</nav>

	
	<div id="page-content">
	

		@include('pages.index.map_content')

		@include('pages.includes.sections.why_us')

		@include('pages.includes.sections.index_feature')
		
		@include('pages.includes.sections.index_recent')

		<section class="block banner center">
			<div class="container">
				<h2 class="big">Submit Your Property Today!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum molestie ex vulputate, fermentum ipsum eget</p>
				<a href="submit.html" class="btn btn-default">Submit now</a>
			</div>
			<div class="background">
				<img src="assets/img/real-estate-bg.png" alt="">
			</div>
		</section>


		<section class="block" id="the-team">
			<div class="container">
				<header class="no-border"><h3>The Team</h3></header>
				<div class="row">
					<div class="col-md-3 col-sm-3">
						<div class="member">
							<img src="assets/img/member-1.jpg" alt="">
							<h4>Jane Daubert</h4>
							<figure>Company CEO</figure>
							<hr>
							<div class="social">
								<a href="#" ><i class="fa fa-twitter"></i></a>
								<a href="#" ><i class="fa fa-facebook"></i></a>
								<a href="#" ><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<!--/.member-->
					</div>
					<!--/.col-md-3-->
					<div class="col-md-3 col-sm-3">
						<div class="member">
							<img src="assets/img/member-2.jpg" alt="">
							<h4>Kristy Jose</h4>
							<figure>Marketing Specialist</figure>
							<hr>
							<div class="social">
								<a href="#" ><i class="fa fa-twitter"></i></a>
								<a href="#" ><i class="fa fa-facebook"></i></a>
								<a href="#" ><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<!--/.member-->
					</div>
					<!--/.col-md-3-->
					<div class="col-md-3 col-sm-3">
						<div class="member">
							<img src="assets/img/member-3.jpg" alt="">
							<h4>John Doe</h4>
							<figure>PR Manager</figure>
							<hr>
							<div class="social">
								<a href="#" ><i class="fa fa-twitter"></i></a>
								<a href="#" ><i class="fa fa-facebook"></i></a>
								<a href="#" ><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<!--/.member-->
					</div>
					<!--/.col-md-3-->
					<div class="col-md-3 col-sm-3">
						<div class="member">
							<img src="assets/img/member-4.jpg" alt="">
							<h4>Misty Bates</h4>
							<figure>Support</figure>
							<hr>
							<div class="social">
								<a href="#" ><i class="fa fa-twitter"></i></a>
								<a href="#" ><i class="fa fa-facebook"></i></a>
								<a href="#" ><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<!--/.member-->
					</div>
					<!--/.col-md-3-->
				</div>
				<!--/.row-->
			</div>
			<!--/.container-->
		</section>

		@include('pages.includes.sections.partners')
		
	</div>
	
</div>