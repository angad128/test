@extends('backend/app')
@section('title', 'Gallery Create')
@section('contents')
	<h2>{{__('key.create_gallerys')}}</h2>
   <form method="post" class="container" action="{{URL::to('/gallery/upload')}}" enctype="multipart/form-data">
    @csrf
	    <div class="form-group">
	        <label for="filename">{{__('key.name')}}</label>
	        <input class="form-control" type="text" name="filename" placeholder="Gallery name..">
	    </div>
	    <div class="form-group">
	        <label for="image">{{__('key.image')}}</label>
	        <input class="form-control" type="file" id="image" name="img">
	    </div>
	    <button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Upload</button>
    </form>

@endsection

