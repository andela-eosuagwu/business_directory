		<div id="page-canvas">
			<!--Off Canvas Navigation-->
			<nav class="off-canvas-navigation">
				<header>Navigation</header>
				<div class="main-navigation navigation-off-canvas"></div>
			</nav>
			<!--end Off Canvas Navigation-->

			<!--Sub Header-->
			<section class="sub-header">
				<div class="search-bar horizontal collapse" id="redefine-search-form"></div>
				<!-- /.search-bar -->
				<div class="breadcrumb-wrapper">
					<div class="container">
						<div class="redefine-search">
							<a href="#redefine-search-form" class="inner" data-toggle="collapse" aria-expanded="false" aria-controls="redefine-search-form">
								<span class="icon"></span>
								<span>Redefine Search</span>
							</a>
						</div>
						<ol class="breadcrumb">
							<li><a href="index-directory.html"><i class="fa fa-home"></i></a></li>
							<li><a href="#">Page</a></li>
							<li class="active">Detail</li>
						</ol>
						<!-- /.breadcrumb-->
					</div>
					<!-- /.container-->
				</div>
				<!-- /.breadcrumb-wrapper-->
			</section>
			<!--end Sub Header-->

			<!--Page Content-->
			<div id="page-content">
				<section class="container">
					<div class="">
						<!--Content-->
						<div class="">
							<header>
								<h1 class="page-title">Listing</h1>
							</header>
							<figure class="filter clearfix">
								<div class="buttons pull-left">
									<a href="listing-grid.html" class="btn icon active"><i class="fa fa-th"></i>Grid</a>
									<a href="listing-list.html" class="btn icon"><i class="fa fa-th-list"></i>List</a>
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

							<!--Listing Grid-->
							<section class="block equal-height">
								<div class="row">
									@foreach($companies as $company)
									<div class="col-md-3 col-sm-4">
										<div class="item">
											<div class="image">
												<div class="quick-view"><i class="fa fa-eye"></i><span>Quick View</span></div>
												<a href="item-detail.html">
													<div class="overlay">
														<div class="inner">
															<div class="content">
																<h4>Description</h4>
																<p>{{$company->description}}</p>
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
													{{$company['image']['logo']}}
													<img src="{{$company['image']['logo']}}" alt="">
												</a>
											</div>
											<div class="wrapper">
												<a href="item-detail.html"><h3>{{$company->name}}</h3></a>
												<figure>63 Birch Street</figure>
												<div class="info">
													<div class="type">
														<i><img src="assets/icons/restaurants-bars/restaurants/restaurant.png" alt=""></i>
														<span>{{$company->type}}</span>
													</div>
													<div class="rating" data-rating="4"></div>
												</div>
											</div>
										</div>
										<!-- /.item-->
									</div>
									@endforeach
								</div>
								<!--/.row-->
							</section>
							<!--end Listing Grid-->
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
					</div>
				</section>
			</div>
			<!-- end Page Content-->
		</div>