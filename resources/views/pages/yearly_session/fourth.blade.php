@extends('app')
@section('title', 'Fourth Session')
@section('contents')
<div id="body" class="container-fluid">
	<div class="container">
		<div class="about-us">
			<h2>Elected Members of Fourth National Sessios  , 2062 Falgun 25-27</h2>
	        <center>
	        <div class="item card">
	              <div class="team-img"> <img class="card-img-top" border="0" src="{{URL::to('images/members/tej_parad_dahakal.jpg')}}" width="220px" height="220px"></div>
	              <div class="card-block">
	                <h4 class="card-title">TejPrasad Dhakal</h4>
	                <p class="text-center">{{ __('key.chairman')}}</p>
	              </div>
	        </div>
	        </center>
	            <hr style="height:10px;background: red;" />
	            <center><h3 style="text-decoration: underline;">{{__('key.members')}}</h3></center>
	            <div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Ramparsad Adikhari</p>
				  	<p>{{ __('key.sChairman')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Purusotam Adikhiri</p>
				  	<p>Eastern Development Region {{ __('key.vChairman')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Raj Kumar Lal Karna</p>
				  	<p>Central Development Region {{ __('key.vChairman')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Bijya Adikhiri</p>
				  	<p>Western Development Region {{ __('key.vChairman')}}</p>
				  </div></div>
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Khadananda Sharma</p>
				  	<p>Mid-Western Development Region {{ __('key.vChairman')}}</p>
				  </div></div>
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Jaya Ram Joshi</p>
				  	<p>Far-Western Development Region {{ __('key.vChairman')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Sitaram Dahal</p>
				  	<p>{{ __('key.gSecretary')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Baburam Ojha</p>
				  	<p>{{ __('key.secretary')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Krishna Parsad Dahal</p>
				  	<p>{{ __('key.secretary')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Fadindra Poudel</p>
				  	<p>{{ __('key.treasury')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Gurudev Yadav</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Saroj Ghimiri</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Yudanath Adikari</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Shyam Bdr Rokaya</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Kiran Kumar Sharma</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Jagdish Lal Srivastav</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Amrita Baniya K.C.</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Ashok Kumar Rai</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Dinesh Pokhrel</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Mukninatn Neupane</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>

		</div>
	</div>
</div>
@endsection

