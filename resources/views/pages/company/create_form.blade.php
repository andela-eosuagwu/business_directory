<div class="col-md-9">
	<header>
		<h1 class="page-title">Submit Item</h1>
	</header>

	<form id="form-submit" role="form" method="post" action="/company/create" enctype="multipart/form-data">
		
		<input type="text"  hidden="true" name="_token" value="{{ csrf_token() }}">
		
		<section>
			<div class="form-group large">
				<label for="title">Company Name</label>
				<input type="text" class="form-control" id="title" name="company_name">
			</div>
		</section>

		<section>
			<h3>Address & Contact</h3>
			<div class="row">
				
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<label for="state">State</label>
						<input type="text" class="form-control" id="state" name="address[state]">
					</div>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<div class="row">
						<div class="col-md-8 col-sm-8">
							<div class="form-group">
								<label for="city">City</label>
								<input type="text" class="form-control" id="city" name="address[city]">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group">
								<label for="zip">ZIP</label>
								<input type="text" class="form-control" id="zip" name="address[zip]" pattern="\d*">
							</div>
						</div>
					</div>
				</div>
		
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<label for="street">Street</label>
						<input type="text" class="form-control" id="street" name="address[street]">
					</div>
				</div>
		
			</div>
		
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<label for="phone-number">Phone Number</label>
						<input type="text" class="form-control" id="phone-number" name="phone_number" pattern="\d*">
					</div>
				</div>
				<!--/.col-md-4-->
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
				</div>
				<!--/.col-md-4-->
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<label for="website">Website</label>
						<input type="text" class="form-control" id="website" name="website">
					</div>
				</div>
				<!--/.col-md-4-->
			</div>
		</section>
		
		<section>
			<h3><i class="fa fa-info-circle"></i>About Your Company</h3>
			<div class="form-group">
				<div class="form-group">
					<textarea class="form-control" id="about-me" rows="3" name="description" required=""></textarea>
				</div>
			</div>
		</section>


		<section>
			<h3>Features</h3>
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
		</section>
		
		<hr>
		<section>
			<figure class="pull-left margin-top-15">
				<p>By clicking “Submit & Pay” button you agree with <a href="terms-conditions.html" class="link">Terms & Conditions</a></p>
			</figure>
			<div class="form-group">
				<button type="submit" class="btn btn-default pull-right" id="submit">Submit & Pay</button>
			</div>
			<!-- /.form-group -->
		</section>
	</form>
</div>