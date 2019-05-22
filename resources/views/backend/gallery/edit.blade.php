@extends('backend/app')
@section('title', 'Gallery Edit')
@section('contents')
	<h2>Edit Gallery</h2>
   <form method="post" class="container" action="{{URL::to('/gallery/upload/'.$data->id)}}" enctype="multipart/form-data">
    @csrf
	    <div class="form-group">
	        <label for="filename">Gallery Name</label>
	        <input class="form-control" type="text" name="filename" value="{{$data->filename}}" placeholder="{{$data->filename}}">
	    </div>
	    <div class="form-group">
	        <label for="filedesc">Gallery Description</label>
	        <input class="form-control" type="text" name="filedesc" value="{{$data->filedesc}}" placeholder="{{$data->filedesc}}">
	    </div>
	    <div class="form-group">
	        <label for="image">Image</label>
	        <input class="form-control" type="file" id="image" name="img" value="{{$data->img}}">
	    </div>
	    <button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Upload</button>
    </form>

@endsection

