@extends('app')
@section('contents')
<div id="body" class="container-fluid">
  <div class="container">
    <div class="about-us">
      <h2>Gallery</h2>
      <div class="gallery-container">
        @foreach($data as $result)
        <!-- The four columns -->
        <div class="row">
          <div class="column">
            <img  class="img img-responsive" src="/upload/gallery/{{$result->img}}" style="background-image: url('/upload/gallery/<?=$result->img?>'');" onclick="galleryFunction(this);">
          </div>
        </div>
        @endforeach
        <div class="container gallery-container">
            <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
            <img id="expandedImg" style="width:100%">
            <div id="imgtext"></div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection