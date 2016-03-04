
@extends('master')
		@section('content')
<!-- Outer Wrapper-->
<div id="outer-wrapper">
	<!-- Inner Wrapper -->
	<div id="inner-wrapper">
		<!-- Navigation-->
		@include('pages.includes.sections.header')
		<!-- end Navigation-->
		<!-- Page Canvas-->
		<div id="page-canvas">
			<!--Off Canvas Navigation-->
			<nav class="off-canvas-navigation">
				<header>Navigation</header>
				<div class="main-navigation navigation-off-canvas"></div>
			</nav>
			<!--end Off Canvas Navigation-->
			<!--Page Content-->
			<div id="page-content">
				<!-- Map Canvas-->
				<div class="map-canvas list-solid">
					<!-- Map -->
					<div class="map">
						<div class="toggle-navigation">
							<div class="icon">
								<div class="line"></div>
								<div class="line"></div>
								<div class="line"></div>
							</div>
						</div>
						<!--/.toggle-navigation-->
						<div id="map" class="has-parallax"></div>
					</div>
					<!-- end Map -->
					<!--Items List-->
					<div class="items-list">
						<div class="inner">
							<div class="filter">
								<form class="main-search" role="form" method="post" action="?">
									<header class="clearfix">
										<h3 class="pull-left">Search</h3>
										</header>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="type">Search by Name</label>
												<input type="text" class="form-control" name="search"/>

											</div>
											<!-- /.form-group -->
										</div>
										<!--/.col-md-6-->
										<div class="col-md-6">
											<div class="form-group">
												<label for="bedrooms">Select Category</label>
												<select name="type" multiple title="All" data-live-search="true" id="type">
													<option value="1">Stores</option>
													<option value="2" class="sub-category">Apparel</option>
													<option value="3" class="sub-category">Computers</option>
													<option value="4" class="sub-category">Nature</option>
													<option value="5">Tourism</option>
													<option value="6">Restaurant & Bars</option>
													<option value="7" class="sub-category">Bars</option>
													<option value="8" class="sub-category">Vegetarian</option>
													<option value="9" class="sub-category">Steak & Grill</option>
													<option value="10">Sports</option>
													<option value="11" class="sub-category">Cycling</option>
													<option value="12" class="sub-category">Water Sports</option>
													<option value="13" class="sub-category">Winter Sports</option>
												</select>
											</div>
											<!-- /.form-group -->
										</div>
										<!--/.col-md-3-->

										<div class="col-md-offset-6 col-md-6">
											<div class="form-group">
												<input type="submit" class="btn btn-primary pull-right" style="background: #0dcdbd;color: #fff;"/>
											</div>
											<!-- /.form-group -->
										</div>

										<!--/.col-md-6-->
									</div>
									<!--/.row-->
								</form>
								<!-- /.main-search -->
							</div>
							<!--end Filter-->
							<header class="clearfix">
								<h3 class="pull-left">Featured Businesses</h3>
							</header>
							<ul class="results grid">

							</ul>
						</div>
						<!--results-->
					</div>
					<!--end Items List-->
				</div>
				<!-- end Map Canvas-->

				<!--Featured-->
				<section id="featured" class="block background-color-white">
					<div class="container">
						<header><h2>Featured</h2></header>
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<div class="item featured equal-height">
									<div class="image">
										<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
										<a href="real-estate-item-detail.html">
											<div class="overlay">
												<div class="inner">
													<div class="content">
														<h4>Description</h4>
														<p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
													</div>
												</div>
											</div>
											<div class="item-specific">
												<span title="Bedrooms"><img src="assets/img/bedrooms.png" alt="">2</span>
												<span title="Bathrooms"><img src="assets/img/bathrooms.png" alt="">2</span>
												<span title="Area"><img src="assets/img/area.png" alt="">240m<sup>2</sup></span>
												<span title="Garages"><img src="assets/img/garages.png" alt="">1</span>
											</div>
											<div class="icon">
												<i class="fa fa-thumbs-up"></i>
											</div>
											<img src="assets/img/items/real-estate/6.jpg" alt="">
										</a>
									</div>
									<div class="wrapper">
										<a href="real-estate-item-detail.html"><h3>3295 Valley Street</h3></a>
										<figure>Collingswood</figure>
										<div class="price">$42.000</div>
										<div class="info">
											<div class="type">
												<i><img src="assets/icons/real-estate/apartment-3.png" alt=""></i>
												<span>Apartment</span>
											</div>
											<div class="rating" data-rating="4"></div>
										</div>
									</div>
								</div>
								<!-- /.item-->
							</div>
							<!--/.col-sm-4-->
							<div class="col-md-3 col-sm-3">
								<div class="item featured equal-height">
									<div class="image">
										<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
										<a href="real-estate-item-detail.html">
											<div class="overlay">
												<div class="inner">
													<div class="content">
														<h4>Description</h4>
														<p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
													</div>
												</div>
											</div>
											<div class="item-specific">
												<span title="Bedrooms"><img src="assets/img/bedrooms.png" alt="">2</span>
												<span title="Bathrooms"><img src="assets/img/bathrooms.png" alt="">2</span>
												<span title="Area"><img src="assets/img/area.png" alt="">240m<sup>2</sup></span>
												<span title="Garages"><img src="assets/img/garages.png" alt="">1</span>
											</div>
											<div class="icon">
												<i class="fa fa-thumbs-up"></i>
											</div>
											<img src="assets/img/items/real-estate/12.jpg" alt="">
										</a>
									</div>
									<div class="wrapper">
										<a href="real-estate-item-detail.html"><h3>534 Roosevelt Street</h3></a>
										<figure>San Francisco</figure>
										<div class="price">$16.000</div>
										<div class="info">
											<div class="type">
												<i><img src="assets/icons/real-estate/apartment-3.png" alt=""></i>
												<span>Apartment</span>
											</div>
											<div class="rating" data-rating="4"></div>
										</div>
									</div>
								</div>
								<!-- /.item-->
							</div>
							<!--/.col-sm-4-->
							<div class="col-md-3 col-sm-3">
								<div class="item featured equal-height">
									<div class="image">
										<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
										<a href="real-estate-item-detail.html">
											<div class="overlay">
												<div class="inner">
													<div class="content">
														<h4>Description</h4>
														<p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
													</div>
												</div>
											</div>
											<div class="item-specific">
												<span title="Bedrooms"><img src="assets/img/bedrooms.png" alt="">2</span>
												<span title="Bathrooms"><img src="assets/img/bathrooms.png" alt="">2</span>
												<span title="Area"><img src="assets/img/area.png" alt="">240m<sup>2</sup></span>
												<span title="Garages"><img src="assets/img/garages.png" alt="">1</span>
											</div>
											<img src="assets/img/items/real-estate/1.jpg" alt="">
										</a>
									</div>
									<div class="wrapper">
										<a href="real-estate-item-detail.html"><h3>3019 White Avenue</h3></a>
										<figure>Corpus Christi</figure>
										<div class="price">$39.000</div>
										<div class="info">
											<div class="type">
												<i><img src="assets/icons/real-estate/apartment-3.png" alt=""></i>
												<span>Apartment</span>
											</div>
											<div class="rating" data-rating="5"></div>
										</div>
									</div>
								</div>
								<!-- /.item-->
							</div>
							<!--/.col-sm-4-->
							<div class="col-md-3 col-sm-3">
								<div class="item featured equal-height">
									<div class="image">
										<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
										<a href="real-estate-item-detail.html">
											<div class="overlay">
												<div class="inner">
													<div class="content">
														<h4>Description</h4>
														<p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
													</div>
												</div>
											</div>
											<div class="item-specific">
												<span title="Bedrooms"><img src="assets/img/bedrooms.png" alt="">2</span>
												<span title="Bathrooms"><img src="assets/img/bathrooms.png" alt="">2</span>
												<span title="Area"><img src="assets/img/area.png" alt="">240m<sup>2</sup></span>
												<span title="Garages"><img src="assets/img/garages.png" alt="">1</span>
											</div>
											<img src="assets/img/items/real-estate/8.jpg" alt="">
										</a>
									</div>
									<div class="wrapper">
										<a href="real-estate-item-detail.html"><h3>1882 Trainer Avenue</h3></a>
										<figure>Louisville</figure>
										<div class="price">$150.000</div>
										<div class="info">
											<div class="type">
												<i><img src="assets/icons/real-estate/apartment-3.png" alt=""></i>
												<span>Apartment</span>
											</div>
											<div class="rating" data-rating="4"></div>
										</div>
									</div>
								</div>
								<!-- /.item-->
							</div>
							<!--/.col-sm-4-->
						</div>
					</div>
				</section>
				<!--end Featured-->
				<!--Recent-->
				<section id="recent" class="block">
					<div class="container">
						<header><h2>Recent</h2></header>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="item list">
									<div class="image">
										<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
										<a href="real-estate-item-detail.html">
											<div class="overlay">
												<div class="inner">
													<div class="content">
														<h4>Description</h4>
														<p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
													</div>
												</div>
											</div>
											<div class="item-specific">
												<span title="Bedrooms"><img src="assets/img/bedrooms.png" alt="">2</span>
												<span title="Bathrooms"><img src="assets/img/bathrooms.png" alt="">2</span>
												<span title="Area"><img src="assets/img/area.png" alt="">240m<sup>2</sup></span>
												<span title="Garages"><img src="assets/img/garages.png" alt="">1</span>
											</div>
											<img src="assets/img/items/real-estate/10.jpg" alt="">
										</a>
									</div>
									<div class="wrapper">
										<a href="real-estate-item-detail.html"><h3>431 Hardman Road</h3></a>
										<figure>Brattleboro</figure>
										<div class="price">$82.000</div>
										<div class="info">
											<div class="type">
												<i><img src="assets/icons/real-estate/apartment-3.png" alt=""></i>
												<span>Apartment</span>
											</div>
											<div class="rating" data-rating="4"></div>
										</div>
									</div>
								</div>
								<!-- /.item-->
							</div>
							<!--/.col-md-6-->
							<div class="col-md-6 col-sm-6">
								<div class="item list">
									<div class="image">
										<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
										<a href="real-estate-item-detail.html">
											<div class="overlay">
												<div class="inner">
													<div class="content">
														<h4>Description</h4>
														<p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
													</div>
												</div>
											</div>
											<div class="item-specific">
												<span title="Bedrooms"><img src="assets/img/bedrooms.png" alt="">2</span>
												<span title="Bathrooms"><img src="assets/img/bathrooms.png" alt="">2</span>
												<span title="Area"><img src="assets/img/area.png" alt="">240m<sup>2</sup></span>
												<span title="Garages"><img src="assets/img/garages.png" alt="">1</span>
											</div>
											<img src="assets/img/items/real-estate/7.jpg" alt="">
										</a>
									</div>
									<div class="wrapper">
										<a href="real-estate-item-detail.html"><h3>4282 River Road</h3></a>
										<figure>Springfield</figure>
										<div class="price">$57.000</div>
										<div class="info">
											<div class="type">
												<i><img src="assets/icons/real-estate/apartment-3.png" alt=""></i>
												<span>Apartment</span>
											</div>
											<div class="rating" data-rating="4"></div>
										</div>
									</div>
								</div>
								<!-- /.item-->
							</div>
							<!--/.col-md-6-->
							<div class="col-md-6 col-sm-6">
								<div class="item list">
									<div class="image">
										<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
										<a href="real-estate-item-detail.html">
											<div class="overlay">
												<div class="inner">
													<div class="content">
														<h4>Description</h4>
														<p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
													</div>
												</div>
											</div>
											<div class="item-specific">
												<span title="Bedrooms"><img src="assets/img/bedrooms.png" alt="">2</span>
												<span title="Bathrooms"><img src="assets/img/bathrooms.png" alt="">2</span>
												<span title="Area"><img src="assets/img/area.png" alt="">240m<sup>2</sup></span>
												<span title="Garages"><img src="assets/img/garages.png" alt="">1</span>
											</div>
											<img src="assets/img/items/real-estate/9.jpg" alt="">
										</a>
									</div>
									<div class="wrapper">
										<a href="real-estate-item-detail.html"><h3>2543 Fairfax Drive</h3></a>
										<figure>Elizabeth</figure>
										<div class="price">$486.000</div>
										<div class="info">
											<div class="type">
												<i><img src="assets/icons/real-estate/apartment-3.png" alt=""></i>
												<span>Apartment</span>
											</div>
											<div class="rating" data-rating="4"></div>
										</div>
									</div>
								</div>
								<!-- /.item-->
							</div>
							<!--/.col-md-6-->
							<div class="col-md-6 col-sm-6">
								<div class="item list">
									<div class="image">
										<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
										<a href="real-estate-item-detail.html">
											<div class="overlay">
												<div class="inner">
													<div class="content">
														<h4>Description</h4>
														<p>Curabitur odio nibh, luctus non pulvinar a, ultricies ac diam. Donec neque massa</p>
													</div>
												</div>
											</div>
											<div class="item-specific">
												<span title="Bedrooms"><img src="assets/img/bedrooms.png" alt="">2</span>
												<span title="Bathrooms"><img src="assets/img/bathrooms.png" alt="">2</span>
												<span title="Area"><img src="assets/img/area.png" alt="">240m<sup>2</sup></span>
												<span title="Garages"><img src="assets/img/garages.png" alt="">1</span>
											</div>
											<img src="assets/img/items/real-estate/11.jpg" alt="">
										</a>
									</div>
									<div class="wrapper">
										<a href="real-estate-item-detail.html"><h3>3295 Valley Street</h3></a>
										<figure>Collingswood</figure>
										<div class="price">$42.000</div>
										<div class="info">
											<div class="type">
												<i><img src="assets/icons/real-estate/apartment-3.png" alt=""></i>
												<span>Apartment</span>
											</div>
											<div class="rating" data-rating="4"></div>
										</div>
									</div>
								</div>
								<!-- /.item-->
							</div>
							<!--/.col-md-6-->
						</div>
						<!--/.row-->
					</div>
					<!--/.container-->
				</section>
				<!--end Recent-->
				<!--Promotion-->
				<section class="block banner center">
					<div class="container">
						<h2 class="big">Submit Your Business Today!</h2>
						<p>As we help you showcase your business to the world and find business oppourtunities for your organisation.</p>
						<a href="submit.html" class="btn btn-default">Submit now</a>
					</div>
					<div class="background">
						<img src="assets/img/woman.jpg" alt="">
					</div>
				</section>
				<!--end Promotion-->
			</div>
			<!-- end Page Content-->
		</div>
		<!-- end Page Canvas-->
		<!--Page Footer-->
		@include('pages.includes.sections.footer')
		<!--end Page Footer-->
	</div>
	<!-- end Inner Wrapper -->
</div>
<!-- end Outer Wrapper-->
@stop
