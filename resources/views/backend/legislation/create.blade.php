@extends('backend/app')
@section('title', 'Legislation Create')
@section('contents')

	<h2>Add Legislation</h2>
		
    <form method="POST" action="{{ URL::to('/legislations/create') }}" enctype="multipart/form-data">
			<div class="form-group">
				<label for="email">Filename</label>
				<input class="form-control" type="text" id="filename" name="filename" placeholder="File Name">
			</div>

		    <div class="form-group">
		        <label for="body">Body</label>
		        <input class="form-control" type="file" id="body" name="img" accept="application/pdf">
		    </div>

			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>
			{{ csrf_field() }}
	</form>
	
	
@endsection

