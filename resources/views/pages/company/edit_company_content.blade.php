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
			<header>
				<ul class="nav nav-pills">
					<li class="active"><a href="profile.html"><h1 class="page-title">John Doe</h1></a></li>
					<li><a href="my-items.html"><h1 class="page-title">My Items</h1></a></li>
				</ul>
			</header>
			<div class="row">
				<div class="col-md-9">
					<form id="form-profile" role="form" method="post" action="/company/update" enctype="multipart/form-data">
						<input name="_token" hidden="true" type="text" value="{{ csrf_token() }}">
						<div class="row">
							<!--Profile Picture-->
							<div class="col-md-3 col-sm-3">
								<section>
									<h3><i class="fa fa-image"></i>Profile Picture</h3>
									<div id="profile-picture" class="profile-picture dropzone">
										<input name="file" type="file">
										<div class="dz-default dz-message"><span>Click or drop picture here</span></div>
										<img src="{{$company->images['logo']}}" alt="">
									</div>
								</section>
							</div>
							<!--/.col-md-3-->

							<!--Contact Info-->
							<div class="col-md-9 col-sm-9">
						
								<section>
									<h3><i class="fa fa-map-marker"></i>Address</h3>
									<div class="form-group">
										<label for="state">Name</label>
										<input type="text" class="form-control" id="state" name="name" value="{{$company->name}}">
									</div>
									<div class="row">
										<div class="col-md-8 col-sm-8">
											<div class="form-group">
												<label for="street">State</label>
												<input type="text" class="form-control" id="street" name="address[state]" value="{{$company->address['state']}}">
											</div>
											<!--/.form-group-->
										</div>
										<!--/.col-md-8-->
										<div class="col-md-4 col-sm-4">
											<div class="form-group">
												<label for="zip">City</label>
												<input type="text" class="form-control" id="zip" name="address[city]"  value="{{$company->address['city']}}">
											</div>
											<!--/.form-group-->
										</div>
									</div>

									<div class="row">
										<div class="col-md-8 col-sm-8">
											<div class="form-group">
												<label for="street">Street</label>
												<input type="text" class="form-control" id="street" name="address[street]" value="{{$company->address['street']}}">
											</div>
											<!--/.form-group-->
										</div>
										<!--/.col-md-8-->
										<div class="col-md-4 col-sm-4">
											<div class="form-group">
												<label for="zip">ZIP</label>
												<input type="text" class="form-control" id="zip" name="address[zip]" pattern="\d*" value="{{$company->address['zip']}}">
											</div>
											<!--/.form-group-->
										</div>
									</div>

									<div class="row">
										<div class="col-md-8 col-sm-8">
											<div class="form-group">
												<label for="street">Email</label>
												<input type="email" class="form-control" id="street" name="email" value="{{$company->email}}">
											</div>
											<!--/.form-group-->
										</div>
										<!--/.col-md-8-->
										<div class="col-md-4 col-sm-4">
											<div class="form-group">
												<label for="zip">Website</label>
												<input type="text" class="form-control" id="zip" name="address[zip]"  value="{{$company->website}}">
											</div>
											<!--/.form-group-->
										</div>
									</div>
									
								</section>
								<section>
									<h3><i class="fa fa-info-circle"></i>Description</h3>
									<div class="form-group">
										<label for="about-me" style="text-transform: capitalize;">Some Words About {{$company->name}}</label>
										<div class="form-group">
											<textarea class="form-control" id="about-me" rows="3" name="description" required>{{$company->description}}</textarea>
										</div>
										<!--/.form-group-->
									</div>
									<!--/.form-group-->
								</section>
								<div class="form-group">
									<button type="submit" class="btn btn-large btn-default" id="submit">Save Changes</button>
								</div>
								<!-- /.form-group -->
							</div>
							<!--/.col-md-6-->
						</div>
					</form>
				</div>
				<!--Password-->
				<div class="col-md-3 col-sm-9">
					<h3><i class="fa fa-asterisk"></i>Password Change</h3>
					<form class="framed" id="form-password" role="form" method="post" action="?" >
						we could add some info here is we like
					</form>
				</div>
				<!-- /.col-md-3-->
			</div>
		</section>
	</div>
	<!-- end Page Content-->
</div>