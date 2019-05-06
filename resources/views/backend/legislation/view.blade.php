@extends('backend/app')
@section('contents')
<!-- Page Heading -->
<!-- DataTales Example -->

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <div class="row">
      <div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6  pull-right ">
        <h6 class="m-0 font-weight-bold text-primary"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-news" href="/legislations/create"><i class="fas fa-plus"></i>Add Legislation</a></h6>
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
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
          <th>Filetitle</th>
          <th>File</th>
          <th>Created</th>
          <th>Updated</th>
          <th>Action</th>
        </tr>
        </tfoot>
        


        <tbody>
          @foreach($data as $result)
          <tr>
            <td>{{$result->filename}}</td>
            <td><img style="width: 40px;height: 40px;" src="/upload/legislation/<?=$result->img?>"/></td>
            <td>{{$result->created_at}}</td>
            <td>{{$result->updated_at}}</td>
            <td>
              <a class="btn btn-success action" href="{{ URL::to('legislations/'.$result->id.'/edit')}}"><i class="fas fa-pencil-alt"></i>Edit</a>
              <a class="btn btn-danger action open-modal" id="open-modal" value="{{$result->id}}" data-toggle="modal" data-target="#confirmModal" data-id="{{$result->id}}"><i class="fas fa-trash-alt"></i>Delete</a>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
    </div>
  </div>
</div>

<!-- Data Delete Confirmation Modal-->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Delete" below if you are ready to delete selected Legislation.</div>
      <div class="modal-footer">
        <a class="btn btn-primary action" data-dismiss="modal">Cancel</a>
        <form  method="POST" action="{{ URL::to('legislations/delete')}}">
          @csrf
           <input type="hidden" name="id" id="deleteid" value=""/>
          <button class="btn btn-primary action">Delete</button>  
        </form>
      </div>
    </div>
  </div>
</div>

@endsection