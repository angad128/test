@extends('backend/app')
@section('title', 'Legislation Create')
@section('contents')

	<h2>{{__('key.create_legislations')}}</h2>
		
    <form method="POST" action="{{ URL::to('/legislations/create') }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">{{__('key.filetitle')}}</label>
				<input class="form-control" type="text" id="filename" name="filename" placeholder="File Name">
			</div>

		    <div class="form-group">
		        <label for="body">{{__('key.file')}}</label>
		        <input class="form-control" type="file" id="body" name="img" accept="application/pdf">
		    </div>

			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection

