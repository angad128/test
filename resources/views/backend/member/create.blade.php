@extends('backend/app')


@section('contents')

	<h2>Add Member</h2>
		
    <form method="POST" action="{{ URL::to('/members/create') }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" id="name" name="name" placeholder="Name..">
			</div>
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" type="text" id="title" name="title" placeholder="Title..">
			</div>

			<div class="form-group">
				<label for="file">File</label>
				<input class="form-control" type="file" id="file" name="img">
			</div>

			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection

