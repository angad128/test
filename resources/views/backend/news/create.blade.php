@extends('backend/app')

@section('title', 'News Create')
@section('contents')

	<h2>Create News</h2>
		
    <form method="POST" action="{{ URL::to('news/postNews/') }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">Title</label>
				<input class="form-control" type="text" id="title" name="title" placeholder="News title">
			</div>


			<div class="form-group">
				<label for="description">Body</label>
				<textarea name="body" id="editor" placeholder="Write your News description"></textarea>
			</div>
			

			<div class="form-group">
				<label for="image">Image</label>
				<input class="form-control" type="file" id="image" name="img">
			</div>

			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Publish</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection

