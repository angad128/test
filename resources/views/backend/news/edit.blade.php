@extends('backend/app')


@section('contents')

	<h2>Edit News</h2>
		
    <form method="POST" action="{{ URL::to('news/update/' .$data->id ) }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">Title</label>
				<input class="form-control" type="text" id="title" name="title" value="{{$data->title}}" placeholder="{{$data->title}}">
			</div>

			<div class="form-group">
				<label for="description">Body</label>
				 <textarea name="body" id="editor">{{$data->body}}.</textarea>
			</div>
	
			<div class="form-group">
				<label for="email">Image</label>
				<input class="form-control" type="file" id="title" value="{{$data->img}}" name="img">
			</div>
			
			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Update</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection




