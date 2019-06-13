@extends('backend/app')
@section('title', 'Dashboard')


@section('contents')
<div class="card shadow mb-4 about-us">
	<div class="card-header py-3">
	    <h2>{{ __('key.dashboard') }}</h2>
	</div>
		<div class="row" style="margin: 20px auto;">
		  <div class="col-lg-4 col-md-4 col-sm-6">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fas fa-language text-blueZ   CVC"></i>  {{ __('key.langType')}}?</h3>
			  </div>
			  <div class="panel-body">
			    <a class="btn btn-primary hvr-sweep-to-right" href="{{ route('set.language','en') }}" id="en">{{ __('key.langBtnEn')}}</a>
                <a class="btn btn-primary hvr-sweep-to-right" href="{{ route('set.language','np') }}" id="np">{{ __('key.langBtnNp')}}</a>
			  </div>
			</div>
		  </div>
<!-- 		  <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6">
		  		<div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Panel title</h3>
				  </div>
				  <div class="panel-body">
				    Panel content
				  </div>
				</div>
		    </div> -->
		</div>

</div>
@endsection
