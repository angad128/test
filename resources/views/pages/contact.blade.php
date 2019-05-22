@extends('app')
@section('title', 'Contact')
@section('contents')
<div id="body" class="container-fluid">
	
	<div class="container" style="margin-bottom: 120px; ">
		<div class="map">
			<h2>Contact Us</h2>
			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1PLlCleFap6mD76Cu11_aehlnuCRL5e2i" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		</div>
		<div class="contact-grids">
			<div class="col-md-3 contact-grid">
				<div class="call">
					<div class="col-xs-3 contact-grdl">
						<i class="fas fa-phone-volume"></i>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>+977-01-4445789 </li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="address">
					<div class="col-xs-3 contact-grdl">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li>Dillibazar, Kathmandu</li>
							<li>Nepal.</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="mail">
					<div class="col-xs-3 contact-grdl">
						<i class="fas fa-envelope"></i>
					</div>
					<div class="col-xs-9 contact-grdr">
						<ul>
							<li><a href="mailto:pllannepal2072@gamil.com">pllannepal2072@gmail.com</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="contact-title">
					<p>Reach out to us and we'll respond as soon as we can</p>
				</div>

				@if($message = Session::get('success'))
					<div class="alert alert-success alert-block">
						<button type="button" class="close" data-dismiss="alert">x</button>
						<strong>{{$message}}</strong>
					</div>
				@endif
				<form method="post" action="{{ URL::to('/sendmail') }}" enctype="multipart/form-data">
					@csrf
					<div class="form-group row">
						<div class="col-sm-6">
							<input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Name" required />
						</div>
						<div class="col-sm-6">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required />
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-sm-12">
							<textarea class="form-control" name="message" id="word_count" rows="5" placeholder="Enter your message here."></textarea>
						</div>
						<h5 class="display-count">Total word count: <span id="display_count">0</h5>
					
						<div class="form-group row contact-number">
							<div class="col-md-6 col-lg-6 col-sm-6">
								<input type="numbers" class="form-control" name="mobile" id="mobile" placeholder="Phone No." required>
							</div>
							<div class="col-md-4 col-lg-4 col-sm-6 pull-right">
								<div class="row login-button">
									<center><button type="submit" class="btn btn-primary btn-contact btn-large hvr-sweep-to-right">Contact</button></center>
								</div>
							</div>
						</div>
						
					</form>
				</div>
			</div>
	</div>
</div>
	@endsection