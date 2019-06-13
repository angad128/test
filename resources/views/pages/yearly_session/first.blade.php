@extends('app')
@section('title', 'First Session')
@section('contents')
<div id="body" class="container-fluid">
	<div class="container">
		<div class="about-us">
			<h2>Elected Members of First National Sessios  , 2052 Falgun 24-26</h2>
	        <center>
	        <div class="item card">
	              <div class="team-img"> <img class="card-img-top" border="0" src="{{URL::to('images/members/nabaraj_pudasaini.jpg')}}" width="220px" height="220px"></div>
	              <div class="card-block">
	                <h4 class="card-title">Nawaraj Pudasaini</h4>
	                <p class="text-center">{{ __('key.chairman')}}</p>
	              </div>
	        </div>
	        </center>
	            <hr style="height:10px;background: red;" />
	            <center><h3 style="text-decoration: underline;">{{__('key.members')}}</h3></center>
	            <div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Arjun Parsad Ghimiri</p>
				  	<p>{{ __('key.sChairman')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Sailesh Kumar Khanal</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Jugal</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Jarja</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Babu</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{ __('key.gSecretary')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{ __('key.secretary')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{ __('key.secretary')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{ __('key.treasury')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>RadheShysam Sukla</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>

				</div>
		</div>
	</div>
</div>
@endsection

