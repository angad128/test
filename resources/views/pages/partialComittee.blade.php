@extends('app')
@section('title', 'Partial Committee')
@section('contents')
<div id="body" class="container-fluid">
	<div class="container">
		<div class="about-us">
			<h2 style="text-decoration: underline;">{{__('key.pCommittee')}}</h2>
	        <div class="row">
	        	<div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1 col-xs-12">
	        		<center>
		        		<div class="item card">
				              <div class="team-img"> <img class="card-img-top" border="0" src="{{URL::to('images/members/Ram_parsad_adikari.jpg')}}" width="220px" height="220px"></div>
				              <div class="card-block">
				                <h4 class="card-title">Ramparasd Adhikari</h4>
				                <p class="text-center">Sallakar Shavapati</p>
				              </div>
				        </div>
				    </center>
	        	</div>
	        	<div class="col-lg-4  col-md-4  col-sm-5 col-xs-12 pull-right">
	        		<center>
		        		<div class="item card">
				              <div class="team-img"> <img class="card-img-top" border="0" src="{{URL::to('images/members/ganesh_parsad_pande.jpg')}}" width="220px" height="220px"></div>
				              <div class="card-block">
				                <h4 class="card-title">Ganesh Parsad Pande</h4>
				                <p class="text-center">Samyojag</p>
				              </div>
				        </div>
				    </center>

	        	</div>
	        </div>

	        
	            <hr style="height:10px;background: red;" />
	            <center><h3 style="text-decoration: underline;">{{__('key.members')}}</h3></center>

				<div class="row">
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Bimal Brd Karki</p>
				  	<p>{{__('key.members')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Ganesh Parsad Pande</p>
				  	<p>{{__('key.members')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Mayadevi Soti Sukla</p>
				  	<p>{{__('key.members')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Kriankumar Shrama</p>
				  	<p>{{__('key.members')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Bharat Bdr Karki</p>
				  	<p>{{__('key.members')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Radhe Shyam Shukla</p>
				  	<p>{{__('key.members')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Dinesh Pokhrel</p>
				  	<p>{{__('key.members')}}</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Mukninatn Neupane</p>
				  	<p>{{__('key.members')}}</p>
				  </div></div>
				</div>
				<div class="row">
				  	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Arjun Parsad Ghimiri</p>
				  	<p>Salakar Samiti Sabhapati</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Chomraj Dahal</p>
				  	<p>Naykik Samiti Samyojak</p>
				  </div></div>
				  <div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-12"><div class="alert alert-info grow">
				  	<p>Fadindra Poudel</p>
				  	<p>Anusasan Samiti Samyojak</p>
				  </div></div>
				</div>
		</div>
	</div>
</div>
@endsection

