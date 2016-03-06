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
			<div class="row">
				<div class="col-md-9">
					<header>
						<h1 class="page-title">Blog</h1>
					</header>

					@foreach($blogs as $blog)
						<article class="blog-post">
							<header><a href="/blog{{$blog->id}}"><h2>{{$blog->title}}</h2></a></header>
							
							@if(!$blog->image == '')
								<a href="/blog{{$blog->id}}"><img src="{{$blog->image}}" alt=""></a>
							@endif

							<figure class="meta">
								<a href="#" class="link-icon"><i class="fa fa-user"></i>Admin</a>
								<a href="#" class="link-icon"><i class="fa fa-calendar"></i>{{$blog->created_at->diffForHumans()}}</a>
								@foreach($blog->tags as $tag)
								<div class="tags">
									<a href="#" class="tag article">{{$tag}}</a>
								</div>
								@endforeach
							</figure>
							<p>{{$blog->article}}

							Fusce quis nulla volutpat, rhoncus ligula ut, pulvinar nisi. In dapibus urna sit amet accumsan
								tristique. Donec odio ligula, luctus venenatis varius id, tincidunt ac ipsum. Cras commodo,
								velit nec aliquam dictum, tortor velit dictum ipsum, sed ornare nunc leo nec ipsum. Vestibulum
								sagittis sapien vitae tristique mollis. Aliquam hendrerit nulla semper, viverra mi et,
								hendrerit mauris. Maecenas hendrerit congue ultrices. In laoreet erat blandit eros aliquet,
								in malesuada sem rutrum. In placerat porta egestas.
							</p>
							<a href="blog-detail.html" class="icon">Read More <i class="fa fa-angle-right"></i></a>
						</article>
					@endforeach
		
					<nav>
						<ul class="pagination pull-right">
							{!! $blogs->render() !!}
						</ul>
					</nav>
					<!--end Pagination-->
				</div>
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
			</div>
		</section>
	</div>
	<!-- end Page Content-->
</div>