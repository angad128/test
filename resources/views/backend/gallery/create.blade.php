@extends('backend/app')
@section('contents')

   <form method="post" class="container" action="{{URL::to('/gallery/upload')}}" enctype="multipart/form-data">
    @csrf
	    <div class="form-group">
	        <label for="filename">Filename</label>
	        <input class="form-control" type="text" name="filename" placeholder="File name..">
	    </div>
	    <div class="form-group">
	        <label for="filetitle">File Title</label>
	        <input class="form-control" type="text" name="filetitle" placeholder="File title...">
	    </div>
	    <div class="form-group">
	        <label for="filedesc">File Description</label>
	        <input class="form-control" type="text" name="filedesc" placeholder="File description...">
	    </div>
	    <div class="form-group">
	        <label for="image">Image</label>
	        <input class="form-control" type="file" id="image" name="img">
	    </div>
	    <button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Upload</button>
    </form>

@endsection

