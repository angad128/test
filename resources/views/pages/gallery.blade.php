@extends('app')
@section('title', 'Gallery')
@section('contents')
<div id="body" class="container-fluid">
  <div class="container">
    <div class="about-us">
      <h2>{{__('key.gallery')}}</h2>
      <div id="gallery">
		<!-- The four columns -->
		@if(count($data)>0)
		<div class="row">
		  <div class="stripe">
		  	@foreach($data as $result)
		    <img src="/upload/gallery/{{$result->img}}" alt="{{$result->filename}}" onclick="galleryFunction(this);">
		    @endforeach
		  </div>
		</div>

		<div class="container">
		  <span onclick="this.parentElement.style.display='none'" class="closebtn frontend">&times;</span>
		  <div id="imgtext"></div>
		  <img id="expandedImg" style="width:100%">
		</div>

		@else
	      <div class="alert alert-danger alert-block">Sorry, No Image is published on gallery!</div>
	    @endif

	  </div>
    </div>
  </div>
</div>
@endsection
