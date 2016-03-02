<div id="page-content">
	<section class="container">
		<div class="row">
			<!--Content-->
			<div class="col-md-9">
				<header>
					<h1 class="page-title">Listing</h1>
				</header>
				<figure class="filter clearfix">
					<div class="buttons pull-left">
						<a href="listing-grid.html" class="btn icon"><i class="fa fa-th"></i>Grid</a>
						<a href="listing-list.html" class="btn icon active"><i class="fa fa-th-list"></i>List</a>
					</div>
					<div class="pull-right">
						<aside class="sorting">
							<span>Sorting</span>
							<div class="form-group">
								<select class="framed" name="sort">
									<option value="">Date - Newest First</option>
									<option value="1">Date - Oldest First</option>
									<option value="2">Price - Highest First</option>
									<option value="3">Price - Lowest First</option>
								</select>
							</div>
							<!-- /.form-group -->
						</aside>
					</div>
				</figure>

				<!--Listing List-->
				<section class="block listing">
					<div class="item list">
						<div class="image">
							<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
							<a href="item-detail.html">
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
								<img src="assets/img/items/1.jpg" alt="">
							</a>
						</div>
						<div class="wrapper">
							<a href="item-detail.html"><h3>Cash Cow Restaurante</h3></a>
							<figure>63 Birch Street</figure>
							<div class="info">
								<div class="type">
									<i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
									<span>Restaurant</span>
								</div>
								<div class="rating" data-rating="4"></div>
							</div>
						</div>
					</div>
				</section>
				<!--end Listing List-->
				<!--Pagination-->
				<nav>
					<ul class="pagination pull-right">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#" class="previous"><i class="fa fa-angle-left"></i></a></li>
						<li><a href="#" class="next"><i class="fa fa-angle-right"></i></a></li>
					</ul>
				</nav>
				<!--end Pagination-->
			</div>
			<!--Sidebar-->
			<div class="col-md-3">
				<aside id="sidebar">
					<section>
						<header><h2>New Places</h2></header>
						<a href="item-detail.html" class="item-horizontal small">
							<h3>Cash Cow Restaurante</h3>
							<figure>63 Birch Street</figure>
							<div class="wrapper">
								<div class="image"><img src="assets/img/items/1.jpg" alt=""></div>
								<div class="info">
									<div class="type">
										<i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
										<span>Restaurant</span>
									</div>
									<div class="rating" data-rating="4"></div>
								</div>
							</div>
						</a>
						<!--/.item-horizontal small-->
						<a href="item-detail.html" class="item-horizontal small">
							<h3>Blue Chilli</h3>
							<figure>2476 Whispering Pines Circle</figure>
							<div class="wrapper">
								<div class="image"><img src="assets/img/items/2.jpg" alt=""></div>
								<div class="info">
									<div class="type">
										<i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
										<span>Restaurant</span>
									</div>
									<div class="rating" data-rating="3"></div>
								</div>
							</div>
						</a>
						<!--/.item-horizontal small-->
						<a href="item-detail.html" class="item-horizontal small">
							<h3>Eddie’s Fast Food</h3>
							<figure>4365 Bruce Street</figure>
							<div class="wrapper">
								<div class="image"><img src="assets/img/items/3.jpg" alt=""></div>
								<div class="info">
									<div class="type">
										<i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
										<span>Restaurant</span>
									</div>
									<div class="rating" data-rating="5"></div>
								</div>
							</div>
						</a>
						<!--/.item-horizontal small-->
					</section>
					<section>
						<a href="#"><img src="assets/img/ad-banner-sidebar.png" alt=""></a>
					</section>
					<section>
						<header><h2>Categories</h2></header>
						<ul class="bullets">
							<li><a href="#" >Restaurant</a></li>
							<li><a href="#" >Steak House & Grill</a></li>
							<li><a href="#" >Fast Food</a></li>
							<li><a href="#" >Breakfast</a></li>
							<li><a href="#" >Winery</a></li>
							<li><a href="#" >Bar & Lounge</a></li>
							<li><a href="#" >Pub</a></li>
						</ul>
					</section>
					<section>
						<header><h2>Events</h2></header>
						<div class="form-group">
							<select class="framed" name="events">
								<option value="">Select Your City</option>
								<option value="1">London</option>
								<option value="2">New York</option>
								<option value="3">Barcelona</option>
								<option value="4">Moscow</option>
								<option value="5">Tokyo</option>
							</select>
						</div>
						<!-- /.form-group -->
					</section>
				</aside>
				<!-- /#sidebar-->
			</div>
			<!-- /.col-md-3-->
			<!--end Sidebar-->
		</div>
	</section>
</div>