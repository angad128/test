@extends('backend/app')
@section('contents')

   <form method="post" class="container" action="{{URL::to('/gallery/upload')}}" enctype="multipart/form-data">
    @csrf
	    <div class="form-group">
	        <label for="filename">Gallery Name</label>
	        <input class="form-control" type="text" name="filename" placeholder="Gallery name..">
	    </div>
	    <div class="form-group">
	        <label for="filedesc">Gallery Description</label>
	        <input class="form-control" type="text" name="filedesc" placeholder="Gallery description...">
	    </div>
	    <div class="form-group">
	        <label for="image">Image</label>
	        <input class="form-control" type="file" id="image" name="img">
	    </div>
	    <button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Upload</button>
    </form>

@endsection

