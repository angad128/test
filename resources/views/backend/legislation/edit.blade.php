@extends('backend/app')
@section('title', 'Legislation Edit')
@section('contents')
	<h2>Edit Legislation</h2>
    <form method="POST" action="{{ URL::to('/legislations/update/' .$data->id ) }}" enctype="multipart/form-data">
    	{{ csrf_field() }}
		<div class="form-group">
			<label for="email">Filename</label>
			<input class="form-control" type="text" id="filename" name="filename" value="{{$data->filename}}" placeholder="{{$data->filename}}">
		</div>
		<div class="form-group">
	        <label for="body">Body</label>
	        <input class="form-control" type="file" id="body" name="img">
	    </div>
		<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>	
	</form>
@endsection

