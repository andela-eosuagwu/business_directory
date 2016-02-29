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
							<div class="scroller1">
								<div class="filter">
									<form class="main-search" role="form" method="post" action="?">
										<header class="clearfix">
											<h3 class="pull-left">Search</h3>
											<a href="#advanced-search" class="show-more pull-right" data-toggle="collapse" aria-expanded="false" aria-controls="advanced-search">Advanced Search</a>
										</header>
										<div class="advanced-search collapse" id="advanced-search">
											<h4>Features</h4>
											<ul class="list-unstyled checkboxes">
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="1">Free Parking</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="2">Cards Accepted</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="3">Wi-Fi</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="4">Air Condition</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="5">Reservations</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="6">Team-buildings</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="7">Places to seat</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="8">Winery</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="9">Draft Beer</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="10">LCD</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="11">Saloon</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="12">Free Access</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="13">Terrace</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="14">Minigolf</label></div></li>
												<li><div class="checkbox"><label><input type="checkbox" name="features[]" value="15">Night Bar</label></div></li>
											</ul>
										</div>
										<div class="row">
											<div class="col-md-6 col-sm-6">
												<div class="form-group">
													<label for="type">Property Type</label>
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
											<!--/.col-md-6-->
											<div class="col-md-3 col-sm-3">
												<div class="form-group">
													<label for="bedrooms">Bedrooms</label>
													<div class="input-group counter">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button"><i class="fa fa-minus"></i></button>
														</span>
														<input type="text" class="form-control" id="bedrooms" name="bedrooms" placeholder="Any">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button"><i class="fa fa-plus"></i></button>
														</span>
													</div><!-- /input-group -->
												</div>
												<!-- /.form-group -->
											</div>
											<!--/.col-md-3-->
											<div class="col-md-3 col-sm-3">
												<div class="form-group">
													<label for="bathrooms">Bathrooms</label>
													<div class="input-group counter">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button"><i class="fa fa-minus"></i></button>
														</span>
														<input type="text" class="form-control" id="bathrooms" name="bathrooms" placeholder="Any">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button"><i class="fa fa-plus"></i></button>
														</span>
													</div><!-- /input-group -->
												</div>
												<!-- /.form-group -->
											</div>
											<!--/.col-md-3-->
											<div class="col-md-6 col-sm-6">
												<div class="form-group">
													<label for="location">Location</label>
													<div class="input-group location">
														<input type="text" class="form-control" id="location" placeholder="Enter Location">
														<span class="input-group-addon"><i class="fa fa-map-marker geolocation" data-toggle="tooltip" data-placement="bottom" title="Find my position"></i></span>
													</div>
												</div>
												<!-- /.form-group -->
											</div>
											<div class="col-md-6 col-sm-6">
												<div class="form-group">
													<label>Price</label>
													<div class="ui-slider" id="price-slider" data-value-min="100" data-value-max="40000" data-value-type="price" data-currency="$" data-currency-placement="before">
														<div class="values clearfix">
															<input class="value-min" name="value-min[]" readonly>
															<input class="value-max" name="value-max[]" readonly>
														</div>
														<div class="element"></div>
													</div>
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
									<h3 class="pull-left">Results</h3>
									<div class="buttons pull-right">
										<span>Display:</span>
										<span class="icon active" id="display-grid"><i class="fa fa-th"></i></span>
										<span class="icon" id="display-list"><i class="fa fa-th-list"></i></span>
									</div>
								</header>
								<ul class="results grid">

								</ul>
								<div class="scroller__track">
									<div class="scroller__bar"></div>
								</div>
							</div>
						</div>
						<!--results-->
					</div>
					<!--end Items List-->
				</div>
				<!-- end Map Canvas-->
				<!--Why Us-->
					<section id="why-us" class="block">
						<div class="container">
							<header><h2>Why Us?</h2></header>
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<div class="feature-box">
										<i class="fa fa-thumbs-up"></i>
										<div class="description">
											<h3>Lorem ipsum dolor </h3>
											<p>
												Praesent tempor a erat in iaculis. Phasellus vitae libero libero. Vestibulum ante
												ipsum primis in faucibus orci luctus et ultrices posuere cubilia
											</p>
										</div>
									</div>
									<!--/.feature-box-->
								</div>
								<!--/.col-md-4-->
								<div class="col-md-4 col-sm-4">
									<div class="feature-box">
										<i class="fa fa-folder"></i>
										<div class="description">
											<h3>Etiam vehicula felis a ipsum</h3>
											<p>
												Pellentesque nisl quam, aliquet sed velit eu, varius condimentum nunc.
												Nunc vulputate turpis ut erat egestas, vitae rutrum sapien varius.
											</p>
										</div>
									</div>
									<!--/.feature-box-->
								</div>
								<!--/.col-md-4-->
								<div class="col-md-4 col-sm-4">
									<div class="feature-box">
										<i class="fa fa-money"></i>
										<div class="description">
											<h3>Donec dolor justo, volutpat </h3>
											<p>
												Maecenas quis ipsum lectus. Fusce molestie, metus ut consequat pulvinar,
												ipsum quam condimentum leo, sit amet auctor lacus nulla at felis.
											</p>
										</div>
									</div>
									<!--/.feature-box-->
								</div>
								<!--/.col-md-4-->
							</div>
						</div>
					</section>
				<!--end Why Us-->
				<!--Featured-->
					@include('pages.includes.sections.index_feature')		
				<!--end Featured-->
				<!--Recent-->
					@include('pages.includes.sections.index_recent')	
				<!--end Recent-->
				<!--Promotion-->
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
				<!--end Promotion-->
				<!--Our Team-->
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
				<!--end Our Team-->
				<!--Partners-->
				@include('pages.includes.sections.partners')
				<!--end Partners-->
			</div>
			<!-- end Page Content-->
		</div>