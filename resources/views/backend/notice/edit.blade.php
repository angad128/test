@extends('backend/app')


@section('contents')

	<h2>Edit Notice</h2>
		
    <form method="POST" action="{{ URL::to('/notice/update/' .$data->id ) }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="Title">Title</label>
				<input class="form-control" type="text" id="title" name="title" value="{{$data->title}}" placeholder="{{$data->title}}">
			</div>	
			<div class="form-group">
				<label for="description">Body</label>
				<textarea name="body" id="editor" value="{{$data->body}}">{{$data->body}}</textarea>
			</div>
			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection
