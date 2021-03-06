@extends('backend/app')

@section('title', 'News Edit')
@section('contents')

	<h2>{{__('key.edit')}} {{__('key.news')}}</h2>
		
    <form method="POST" action="{{ URL::to('news/update/' .$data->id ) }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">{{__('key.title')}}</label>
				<input class="form-control" type="text" id="title" name="title" value="{{$data->title}}" placeholder="{{$data->title}}">
			</div>

			<div class="form-group">
				<label for="description">{{__('key.descriptions')}}</label>
				 <textarea name="body" id="editor" value="{{$data->body}}">{{$data->body}}.</textarea>
			</div>
	
			<div class="form-group">
				<label for="email">{{__('key.image')}}</label>
				<input class="form-control" type="file" id="title" value="{{$data->img}}" name="img">
			</div>
			
			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Update</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection




