@extends('backend/app')
@section('title', 'Member Edit')
@section('contents')
	<h2>{{__('key.edit')}} {{__('key.members')}}</h2>
    <form method="POST" action="{{ URL::to('/members/update/'.$data->id) }}" enctype="multipart/form-data">
			<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
						<label for="name">{{__('key.name')}}</label>
						<input class="form-control" type="text" id="name" name="name" value="{{$data->name}}" placeholder="{{$data->name}}">
					</div>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6">
    				<div class="form-group">
    					<label for="title">{{__('key.degination')}}</label>
						<select name="title" value="{{$data->title}}" style="width: 100%;">
						    <option value="{{$data->title}}" selected=""></option>
						    <option value="chairman">Chairman</option>
						    <option value="Senior Vice-Chairman">Senior Vice-Chairman</option>
						    <option value="Vice-Chairman (State-1)">Vice-Chairman (State-1)</option>
						    <option value="Vice-Chairman (State-2)">Vice-Chairman (State-2)</option>
						    <option value="Vice-Chairman (State-3)">Vice-Chairman (State-3)</option>
						    <option value="Vice-Chairman (State-4)">Vice-Chairman (State-4)</option>
						    <option value="Vice-Chairman (State-5)">Vice-Chairman (State-5)</option>
						    <option value="Vice-Chairman (State-6)">Vice-Chairman (State-6)</option>
						    <option value="Vice-Chairman (State-7)">Vice-Chairman (State-7)</option>
						    <option value="Secretary General">Secretary General</option>
						    <option value="Secretary">Secretary</option>
						    <option value="Treasury">Treasury</option>
						    <option value="Juniour Tresaury">Juniour Treasury</option>
						    <option value="Members">Members</option>
						</select>
					</div>
    			</div>
    		</div>

			<div class="form-group">
				<label for="file">{{__('key.image')}}</label>
				<input cclass="form-control" type="file" id="file" name="img" value="{{$data->img}}">
			</div>
			<input type="hidden" name="id" value="{{$data->id}}">
			{{ csrf_field() }}
			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>
			
	</form>
	
	
@endsection

