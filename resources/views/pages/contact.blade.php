@extends('app')
@section('contents')
<div id="body" class="container-fluid">
	
	<div class="container">
		<div class="map">
			<h2>Contact Us</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d113057.08357618727!2d85.27882751265581!3d27.685348287058456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39eb198c8d6a0639%3A0x99903dada8289577!2sTinkune+kathmandu!3m2!1d27.685365899999997!2d85.3488678!5e0!3m2!1sne!2snp!4v1503650828640" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
				<form method="post" action="contact-us.php" enctype="multipart/form-data">
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