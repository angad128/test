@extends('backend/app')
@section('title', 'Gallery Edit')
@section('contents')
	<h2>{{__('key.edit')}} {{__('key.gallery')}}</h2>
   <form method="post" class="container" action="{{URL::to('/gallery/update/'.$data->id)}}" enctype="multipart/form-data">
    @csrf
	    <div class="form-group">
	        <label for="filename">{{__('key.name')}}</label>
	        <input class="form-control" type="text" name="filename" value="{{$data->filename}}" placeholder="{{$data->filename}}">
	    </div>
	    <div class="form-group">
	        <label for="image">{{__('key.image')}}</label>
	        <input class="form-control" type="file" id="image" name="img" value="{{$data->img}}">
	    </div>
	    <button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Upload</button>
    </form>

@endsection

