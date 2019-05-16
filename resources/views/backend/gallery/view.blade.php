@extends('backend/app')
@section('contents')
<div class="about-us">
	<div class="row">
		<div class="col col-lg-9 col-md-8 col-sm-7 col-xs-6"><h2>Gallery</h2></div>
		<div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6 pull-right"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-gallery" href="/gallery/upload">Add to Gallery</a></div>
	</div>
	@if(count($data)>0)
	<div class="gallery-container">
		@foreach($data as $result)
		<a href="#">
			<div class="img" style=" background-image: url(/upload/gallery/<?=$result->img?>);"></div>
			<h3>{{$result->filename}}</h3>
			<p class="text-center">{{$result->filedesc}}</p>
		</a>
		@endforeach
	</div>
	{{ $data->links() }}
	@else
      <div class="alert alert-danger alert-block">Sorry, image is published!</div>
    @endif
</div>
@endsection