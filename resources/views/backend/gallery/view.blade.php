@extends('backend/app')
@section('title', 'Gallery View')
@section('contents')
<div class="about-us">
	<div class="row">
		<div class="col col-lg-9 col-md-8 col-sm-7 col-xs-6"><h2>{{__('key.gallery')}}</h2></div>
		<div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6 pull-right"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-gallery" href="/gallery/upload"><i class="fas fa-plus"></i>  <span class="hide_on_md_screen">{{__('key.create_new')}}</span></a></div>
	</div>
	<div id="gallery">
		<!-- The four columns -->
		@if(count($data)>0)
		<div class="row">
		  <div class="stripe">
		  	@foreach($data as $result)
		    <img src="/upload/gallery/{{$result->img}}" alt="{{$result->filename}}" id="{{$result->id}}" onclick="galleryFunction(this);" />

		    @endforeach
		  </div>
		</div>


		<div class="container">
		  <span onclick="this.parentElement.style.display='none'" class="closebtn backend">&times;</span>
		  <div id="imgtext"></div>
		  <img id="expandedImg" style="width:100%">
		  	<div class="gallery-action-button" style="margin: 5px auto;">
			  	<a class="btn btn-success action" id="editGalleryLink"><i class="fas fa-pencil-alt"></i><span class="hide_on_md_screen">{{__('key.edit')}}</span></a>
	            <a class="btn btn-danger action open-modal" id="deleteGalleryLink" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i><span class="hide_on_md_screen">{{__('key.delete')}}</span></a>
			</div>
		</div>

		@else
	      <div class="alert alert-danger alert-block">Sorry, No Image is published on gallery!</div>
	    @endif

	</div>
</div>



<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">{{__('key.delete_message')}}</div>
            <div class="modal-footer">
                <form id="deleteInfoForm" action="/gallery/delete" method="post">
                    @csrf
                    <input type="hidden" id="deleteNum" name="id" value="">
                     <button style="border: 1px solid black;" type="button" class="btn btn-default" data-dismiss="modal">{{__('key.no')}}</button>
                    <button type="submit" class="btn btn-danger">{{__('key.yes')}}</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection