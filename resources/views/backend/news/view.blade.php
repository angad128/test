@extends('backend/app')
@section('contents')

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6  pull-right ">
        <h6 class="m-0 font-weight-bold text-primary"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-news" href="/news/create"><i class="fas fa-plus"></i>Create News</a></h6>
      </div>
    </div>
  </div>
  <div class="card-body">
    @if(count($data)>0)
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Title</th>
            <th>Image</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
          <th>Title</th>
          <th>Image</th>
          <th>Created</th>
          <th>Updated</th>
          <th>Action</th>
        </tr>
        </tfoot>
        
        <tbody>
          @foreach($data as $result)
          <tr>
            <td>{{$result->title}}</td>
            <td><img width="40px" height="40px" src="/upload/news/<?=$result->img?>"/></td>
            <td>{{$result->created_at}}</td>
            <td>{{$result->updated_at}}</td>
            <td>
              <a class="btn btn-success action" href="{{ URL::to('news/'.$result->id.'/edit')}}"><i class="fas fa-pencil-alt"></i>Edit</a>
              <a class="btn btn-danger action open-modal" data-toggle="modal" data-target="#deleteModal" data-id="{{$result->id}}" onclick="passId(<?=$result->id;?>)"><i class="fas fa-trash-alt"></i>Delete</a>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
    </div>
    @else
      <div class="alert alert-danger alert-block">Sorry, currently no News is published!</div>
    @endif
  </div>
</div>



<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
              Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <form id="deleteInfoForm" action="/news/delete" method="post">
                    @csrf
                    <input type="hidden" id="deleteNum" name="id" value="">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection