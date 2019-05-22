@extends('backend/app')

@section('title', 'News Create')
@section('contents')

	<h2>{{__('key.create_news')}}</h2>
    <form method="POST" action="{{ URL::to('news/postNews/') }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">{{__('key.title')}}</label>
				<input class="form-control" type="text" id="title" name="title" placeholder="News title">
			</div>


			<div class="form-group">
				<label for="description">{{__('key.descriptions')}}</label>
				<textarea name="body" id="editor" placeholder="Write your News description"></textarea>
			</div>
			

			<div class="form-group">
				<label for="image">{{__('key.image')}}</label>
				<input class="form-control" type="file" id="image" name="img">
			</div>

			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Publish</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection

