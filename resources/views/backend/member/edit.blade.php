@extends('backend/app')
@section('title', 'Member Edit')
@section('contents')
	<h2>{{__('key.edit')}} {{__('key.members')}}</h2>
    <form method="POST" action="{{ URL::to('/members/update/' .$data->id ) }}" enctype="multipart/form-data">
			<div class="row">
    			<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="form-group">
						<label for="name">{{__('key.name')}}</label>
						<input class="form-control" type="text" id="name" name="name" value="{{$data->name}}" placeholder="{{$data->name}}">
					</div>
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-6">
    				<div class="form-group">
    					<label for="degination">{{__('key.degination')}}</label>
						<select id="title" name="title" value="{{$data->title}}" style="width: 100%;">
						    <option value="nonselected" selected disabled>----------</option>
						    <option value="chairman">Chairman</option>
						    <option value="sVC">Senior Vice-Chairman</option>
						    <option value="VC1">Vice-Chairman (State-1)</option>
						    <option value="VC2">Vice-Chairman (State-2)</option>
						    <option value="VC3">Vice-Chairman (State-3)</option>
						    <option value="VC4">Vice-Chairman (State-4)</option>
						    <option value="VC5">Vice-Chairman (State-5)</option>
						    <option value="VC6">Vice-Chairman (State-6)</option>
						    <option value="VC7">Vice-Chairman (State-7)</option>
						    <option value="gSecretary">Secretary General</option>
						    <option value="secretary">Secretary</option>
						    <option value="treasury">Treasury</option>
						    <option value="jTresaury">Juniour Treasury</option>
						    <option value="members">Members</option>
						</select>
					</div>
    			</div>
    		</div>

			<div class="form-group">
				<label for="file">{{__('key.image')}}</label>
				<input class="form-control" type="file" id="img" name="img" value="{{$data->img}}">
			</div>
			{{ csrf_field() }}
			<button type="submit" class="btn btn-sm btn-primary hvr-sweep-to-right">Save</button>
			
	</form>
	
	
@endsection

