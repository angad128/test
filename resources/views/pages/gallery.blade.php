@extends('app')
@section('title', 'Gallery')
@section('contents')
<div id="body" class="container-fluid">
  <div class="container">
    <div class="about-us">
      <h2>Gallery</h2>
     	 <div class="scrollmenu">
     	 	@foreach($data as $result)
	            <img  class="img img-responsive" src="/upload/gallery/{{$result->img}}" onclick="galleryFunction(this);">
	        @endforeach
		</div>

	   	<div class="row"> 
	        <div class="column-right pull-left">
	        	 <div class="container gallery-container">
		            <img id="expandedImg" class="img img-responsive">
		            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
		            <div id="imgtext"></div>
		        </div>
	        </div>
	    </div>
    </div>
  </div>
</div>
@endsection
