@extends('backend/app')

@section('title', 'Notice Create')
@section('contents')

	<h2>Create Notice</h2>
		
    <form method="POST" action="{{ URL::to('notice/create/') }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Title</label>
				<input class="form-control" type="text" id="title" name="title" placeholder="Notice title">
			</div>


			<div class="form-group">
				<label for="description">Body</label>
				<textarea name="body" id="editor" placeholder="Write your Notice here."></textarea>
			</div>
			
			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Publish</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection

