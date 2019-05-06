@extends('backend/app')


@section('contents')

	<h2>Edit Legislation</h2>
		
    <form method="POST" action="{{ URL::to('/legislations/update/' .$data->id ) }}" enctype="multipart/form-data">


			<div class="form-group">
				<label for="email">Filename</label>
				<input class="form-control" type="text" id="filename" name="filename" value="{{$data->filename}}" placeholder="{{$data->filename}}">
			</div>


	
			<div class="form-group">
				<label for="email">File</label>
				<input class="form-control" type="file" id="title" value="{{$data->img}}" name="img">
			</div>

			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection

