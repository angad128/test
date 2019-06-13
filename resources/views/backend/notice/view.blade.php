@extends('backend/app')
@section('title', 'Notice View')
@section('contents')
<!-- Page Heading -->
<!-- DataTales Example -->

<div class="card shadow mb-4 about-us">
  <div class="card-header py-3">
    <div class="row">
      <div class="col col-lg-9 col-md-8 col-sm-7 col-xs-6 "><h2>{{__('key.notice')}}</h2></div>
      <div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6 pull-right"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-gallery" href="{{URL::to('/notice/create')}}"><i class="fas fa-plus"></i>  <span class="hide_on_md_screen">{{__('key.create_new')}}</span></a></div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>{{__('key.filetitle')}}</th>
            <th>{{__('key.file')}}</th>
            <th>{{__('key.action')}}</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th>{{__('key.filetitle')}}</th>
            <th>{{__('key.file')}}</th>
            <th>{{__('key.action')}}</th>
        </tr>
        </tfoot>
        


        <tbody>
          @foreach($data as $result)
          <tr>
            <td>{{$result->title}}</td>
            <td>{!! str_limit($result->body, $limit = 60) !!}..</td>
            <td>
              <a class="btn btn-success action" href="{{ URL::to('notice/'.$result->id.'/edit')}}"><i class="fas fa-pencil-alt"></i><span class="hide_on_md_screen">{{__('key.edit')}}</span></a>
              <a class="btn btn-danger action open-modal" data-toggle="modal" data-target="#deleteModal" data-id="{{$result->id}}" onclick="passId(<?=$result->id;?>)"><i class="fas fa-trash-alt"></i><span class="hide_on_md_screen">{{__('key.delete')}}</span></a>
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
              {{__('key.delete_message')}}
            </div>
            <div class="modal-footer">
                <form id="deleteInfoForm" action="/notice/delete" method="post">
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