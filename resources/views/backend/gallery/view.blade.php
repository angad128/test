@extends('backend/app')
@section('title', 'Gallery View')
@section('contents')
<div class="about-us">
	<div class="row">
		<div class="col col-lg-9 col-md-8 col-sm-7 col-xs-6"><h2>{{__('key.gallery')}}</h2></div>
		<div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6 pull-right"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-gallery" href="/gallery/upload"><i class="fas fa-plus"></i>{{__('key.create_new')}}</a></div>
	</div>
	@if(count($data)>0)
	<div class="scrollmenu">
     	 	@foreach($data as $result)
	            <img  class="img img-responsive" src="/upload/gallery/{{$result->img}}" onclick="galleryFunction(this);">
	        @endforeach
	</div>

	<div class="row"> 
	        <div class="dashboard-gallery column-right pull-left">
	        	 <div class="container gallery-container">
		            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
		            <img id="expandedImg" class="img img-responsive">
		            <div id="imgtext"></div>
		        </div>
	        </div>
    </div>
	@else
      <div class="alert alert-danger alert-block">Sorry, No Image is published on gallery!</div>
    @endif
</div>

@endsection