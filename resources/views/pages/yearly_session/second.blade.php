@extends('app')
@section('title', 'Second Session')
@section('contents')
<div id="body" class="container-fluid">
	<div class="container">
		<div class="about-us">
			<h2>Elected Members of Second National Sessions  , 2055 Falgun 27-29</h2>
	        <center>
	        <div class="item card">
	              <div class="team-img"> <img class="card-img-top" border="0" src="" width="220px" height="220px"></div>
	              <div class="card-block">
	                <h4 class="card-title">Arjun Prasad Ghimiri</h4>
	                <p class="text-center">{{ __('key.chairman')}}</p>
	              </div>
	        </div>
	        </center>
	            <hr style="height:10px;background: red;" />
	            <center><h3 style="text-decoration: underline;">{{__('key.members')}}</h3></center>
	            <div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Sridhar Giri</p>
				  	<p>{{ __('key.sChairman')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Kedar Parsad Poudel</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Nirmal Kumar Gurung</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Binod Karki</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Rishiram Neupane</p>
				  	<p>{{ __('key.vChairman')}}</p>
				  </div></div>
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Sivaram Khatri</p>
				  	<p>{{ __('key.vChairman')}} </p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Tejparsad Dakhal</p>
				  	<p>{{ __('key.gSecretary')}} </p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Chomraj Dahal</p>
				  	<p>{{ __('key.secretary')}} </p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Sesmani Nepla</p>
				  	<p>{{ __('key.secretary')}} </p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Dhak Bdr Karki</p>
				  	<p>{{ __('key.treasury')}} </p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Kamal Khanal</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Kasinath Ammghai</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Kedar parsad Pokhrel</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Denanath Upereti</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Purusotam Adikhari</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Baburam Ohja</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Bodh Raj Sharma</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Bhupit Wagle</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Laxman Subedi</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Hiraparsad Nepal</p>
				  	<p>{{__('key.member')}}</p>
				  </div></div>
				</div>

		</div>
	</div>
</div>
@endsection

