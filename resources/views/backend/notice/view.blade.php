@extends('backend/app')
@section('contents')
<!-- Page Heading -->
<!-- DataTales Example -->

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6  pull-right ">
        <h6 class="m-0 font-weight-bold text-primary"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-news" href="/notice/create"><i class="fas fa-plus"></i>Create Notice</a></h6>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Filetitle</th>
            <th>File</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
          <th>Filetitle</th>
          <th>File</th>
          <th>Action</th>
        </tr>
        </tfoot>
        


        <tbody>
          @foreach($data as $result)
          <tr>
            <td>{{$result->title}}</td>
            <td>{!! str_limit($result->body, $limit = 80) !!}..</td>
            <td>
              <a class="btn btn-success action" href="{{ URL::to('notice/'.$result->id.'/edit')}}"><i class="fas fa-pencil-alt"></i>Edit</a>
              <a class="btn btn-danger action open-modal" data-toggle="modal" data-target="#deleteModal" data-id="{{$result->id}}" onclick="passId(<?=$result->id;?>)"><i class="fas fa-trash-alt"></i>Delete</a>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>




<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
              Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <form id="deleteInfoForm" action="/notice/delete" method="post">
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