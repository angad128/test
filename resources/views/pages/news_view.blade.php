@extends('app')

@section('contents')
<div id="body" class="container-fluid">
	<div class="container">
		<div class="about-us">
			@foreach($data as $result)
			<center><h2>{{$result->title}}</h2></center>
			<p>{{$result->body}}</p>
			@endforeach
		</div>
	</div>
</div>
@endsection

