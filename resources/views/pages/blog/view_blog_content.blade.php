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
						<h1 class="page-title">{{$blog->title}}</h1>
					</header>

					<article class="blog-post">
						@if(!$blog->image == '')
							<a href="blog-detail.html"><img src="{{$blog->image}}" alt=""></a>
						@endif
						<figure class="meta">
							<a href="#" class="link-icon"><i class="fa fa-user"></i>Admin</a>
							<a href="#" class="link-icon"><i class="fa fa-calendar"></i>{{$blog->created_at->diffForHumans()}}</a>
							<div class="tags">
								@foreach($blog->tags as $tag)
									<a href="#" class="tag article">{{$tag}}</a>
								@endforeach
							</div>
						</figure>
						<p>
							{{$blog->article}}
							Fusce quis nulla volutpat, rhoncus ligula ut, pulvinar nisi. In dapibus urna sit amet accumsan
							tristique. Donec odio ligula, luctus venenatis varius id, tincidunt ac ipsum. Cras commodo,
							velit nec aliquam dictum, tortor velit dictum ipsum, sed ornare nunc leo nec ipsum. Vestibulum
							sagittis sapien vitae tristique mollis. Aliquam hendrerit nulla semper, viverra mi et,
							hendrerit mauris. Maecenas hendrerit congue ultrices. In laoreet erat blandit eros aliquet,
							in malesuada sem rutrum. In placerat porta egestas.
						</p>
					</article>


					<section id="comments">
						<header><h2 class="no-border">Comments</h2></header>
						<ul class="comments">
							<li class="comment">
								<figure>
									<div class="image">
										<img alt="" src="assets/img/default-avatar.png">
									</div>
								</figure>
								<div class="comment-wrapper">
									<div class="name pull-left">Catherine Brown</div>
									<span class="date pull-right"><span class="fa fa-calendar"></span>12.05.2014</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur,
										augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit
										mauris imperdiet vel. Nulla et massa metus. Nam porttitor quam eget ante elementum consectetur. Aenean ac nisl
										et nulla placerat suscipit eu a mauris. Curabitur quis augue condimentum, varius mi in, ultricies velit.
										Suspendisse potenti.
									</p>
									<a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
									<hr>
								</div>
							</li>
						</ul>
					</section>

					<section id="leave-reply">
						<header><h2 class="no-border">Leave a Reply</h2></header>
						<form role="form" id="form-blog-reply" method="post" action="?" class="clearfix">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="form-blog-reply-name">Your Name<em>*</em></label>
										<input type="text" class="form-control" id="form-blog-reply-name" name="form-blog-reply-name" required>
									</div><!-- /.form-group -->
								</div><!-- /.col-md-6 -->
								<div class="col-md-6">
									<div class="form-group">
										<label for="form-blog-reply-email">Your Email<em>*</em></label>
										<input type="email" class="form-control" id="form-blog-reply-email" name="form-blog-reply-email" required>
									</div><!-- /.form-group -->
								</div><!-- /.col-md-6 -->
							</div><!-- /.row -->
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="form-blog-reply-message">Your Message<em>*</em></label>
										<textarea class="form-control" id="form-blog-reply-message" rows="5" name="form-blog-reply-message" required></textarea>
									</div><!-- /.form-group -->
								</div><!-- /.col-md-12 -->
							</div><!-- /.row -->
							<div class="form-group clearfix">
								<button type="submit" class="btn pull-right btn-default" id="form-blog-reply-submit">Leave a Reply</button>
							</div><!-- /.form-group -->
							<div id="form-rating-status"></div>
						</form><!-- /#form-contact -->
					</section>

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