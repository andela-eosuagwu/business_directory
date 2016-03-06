<div class="col-md-12" style="padding: 0px 100px;">
	<form id="form-submit" role="form" method="post" action="/business/create" enctype="multipart/form-data">
		
		<input type="text" hidden="true" name="_token" value="{{ csrf_token() }}">
		@include('errors.showerrors')

			<div class="form-group">
				<label for="title">Business Name *</label>
				<input type="text" class="form-control yee" id="title" style="border: 1px solid #9e9e9e;" value="{{ old('name') }}" name="name">
			</div>

		<section>
			<fieldset>
				<h2>Address & Contact</h2>
				<hr>
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<div class="form-group">
						<label for="street">Street</label>
						<input type="text"  style="border: 1px solid #9e9e9e;"  class="form-control" id="address" value="{{ old('location') }}"  name="location">
					</div>
				</div>
		
			</div><br/>
		
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<label for="phone-number">Phone Number</label>
						<input type="text" class="form-control"  style="border: 1px solid #9e9e9e;"  id="phone-number" value="{{ old('phone_number') }}"  name="phone_number" pattern="\d*">
					</div>
				</div>
				<!--/.col-md-4-->
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" class="form-control" style="border: 1px solid #9e9e9e;"  id="email" name="email" value="{{ old('email') }}" >
					</div>
				</div>
				<!--/.col-md-4-->
				<div class="col-md-4 col-sm-4">
					<div class="form-group">
						<label for="website">Website</label>
						<input type="text" class="form-control" style="border: 1px solid #9e9e9e;" value="{{ old('website') }}"  id="website" name="website">
					</div>
				</div>
				<!--/.col-md-4-->
			</div>
				</fieldset>
		</section>
		
		<section>
			<h3>Tell us About what you do?</h3>
			<div class="form-group">
				<div class="form-group">
					<textarea class="form-control" id="about-me" rows="3" name="description"  style="border: 1px solid #9e9e9e;"  required="">{{ old('description') }}</textarea>
				</div>
			</div>
		</section>


		<section>
			<h3>Tags</h3>
			<span>This would help streamline search results so your business can be seen</span>
			<input type="text" class="form-control" data-role="tagsinput" style="border: 1px solid #9e9e9e;" value="business"  id="website" name="tags">
		</section>
<section>
	<h3>Featured Images/Logo of your Business</h3>
	<div class="form-group">
		<div class="form-group">
			<input type="file" name="image[]"  class="form-control" multiple/>
		</div>
	</div>
</section>
		<hr>
		<section style="padding: 0px 70px">
			<figure class="pull-left margin-top-15">
				<p>By clicking “Submit & Pay” button you agree with <a href="#" class="link">Terms & Conditions</a></p>
			</figure>
			<div class="form-group">
				<button type="submit" class="btn btn-default pull-right" id="submit">Submit</button>
			</div>
			<!-- /.form-group -->
		</section>



	</form>
</div>