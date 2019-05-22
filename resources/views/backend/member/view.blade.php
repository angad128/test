@extends('backend/app')
@section('title', 'Member View')
@section('contents')
<!-- Page Heading -->
<!-- DataTales Example -->
<div class="card shadow mb-4 about-us">
  <div class="card-header py-3">
    <div class="row">
      <div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6  pull-left ">
        <h6 class="m-0 font-weight-bold text-primary"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-news" href="/members/create"><i class="fas fa-plus"></i>{{__('key.create_new')}}</a></h6>
      </div>
      <div class="col col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 col-sm-6 pull-right">
        <h2>{{__('key.members')}}</h2>
      </div>
    </div>
  </div>
  <div class="card-body">
    @if(count($data)>0)
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>{{__('key.name')}}</th>
            <th>{{__('key.title')}}</th>
            <th>{{__('key.image')}}</th>
            <th>{{__('key.action')}}</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th>{{__('key.name')}}</th>
            <th>{{__('key.title')}}</th>
            <th>{{__('key.image')}}</th>
            <th>{{__('key.action')}}</th>
        </tr>
        </tfoot>
        

        <tbody>
          @foreach($data as $result)
          <tr>
            <td>{{$result->name}}</td>
            <td>{{$result->title}}</td>
            <td><img style="width: 80px;height: 80px;" src="/upload/member/<?=$result->img?>"/></td>
            <td>
              <a class="btn btn-success action" href="{{ URL::to('members/'.$result->id.'/edit')}}"><i class="fas fa-pencil-alt"></i>{{__('key.edit')}}</a>
              <a class="btn btn-danger action open-modal" data-toggle="modal" data-target="#deleteModal" data-id="{{$result->id}}" onclick="passId(<?=$result->id;?>)"><i class="fas fa-trash-alt"></i>{{__('key.delete')}}</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
    </div>
      @else
      <div class="alert alert-danger alert-block">Sorry, currently no member is added yet!</div>
      @endif
  </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
              {{__('key.delete_message')}}
            </div>
            <div class="modal-footer">
                <form id="deleteInfoForm" action="/members/delete" method="post">
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