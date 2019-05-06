@extends('backend/app')


@section('contents')

	<h2>Edit Member</h2>
		
    <form method="POST" action="{{ URL::to('/members/update/' .$data->id ) }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" id="name" name="name" value="{{$data->name}}" placeholder="{{$data->name}}">
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" type="text" id="title" name="title" value="{{$data->title}}" placeholder="{{$data->title}}">
			</div>

			<div class="form-group">
				<label for="file">File</label>
				<input class="form-control" type="file" id="img" name="img" value="{{$data->img}}">
			</div>
			{{ csrf_field() }}
			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>
			
	</form>
	
	
@endsection

