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
					<div class="block">
						<div class="row">
							<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
								<header>
									<h1 class="page-title">Sign In</h1>
								</header>
								<hr>
								<form role="form" id="form-sign-in-account" method="post" action="/login">
									<input type="text"  hidden="true" name="_token" value="{{ csrf_token() }}">
									
									<div class="form-group">
										<label for="form-sign-in-email">Email:</label>
										<input type="email" class="form-control" id="form-sign-in-email" name="email" required>
									</div>

									<div class="form-group">
										<label for="form-sign-in-password">Password:</label>
										<input type="password" class="form-control" id="form-sign-in-password" name="password" required>
									</div>
									
									<div class="form-group clearfix">
										<button type="submit" class="btn pull-right btn-default" id="account-submit">Sign In</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</section>
				<!-- /.block-->
			</div>
			<!-- end Page Content-->
		</div>
