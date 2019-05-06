@extends('app')
@section('contents')

<div id="body" class="container-fluid">
      <div class="container">
          <h2>Gallery</h2>
        <div class="gallery-container">
          @foreach($gallery_data as $result)
          <a href="#">
            <div style="background-image: url(upload/gallery/<?=$result->img?>);"></div>
            <h3>{{$result->filename}}</h3>
            <p class="text-center">{{$result->filedesc}}</p>
          </a>
          @endforeach
        </div>
        {{ $gallery_data->links() }}

      </div>
</div>
@endsection