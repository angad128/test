@extends('backend/app')
@section('title', 'News View')
@section('contents')

<!-- DataTales Example -->
<div class="card shadow mb-4 about-us">
  <div class="card-header py-3">
    <div class="row">
      <div class="col col-lg-9 col-md-8 col-sm-7 col-xs-6 "><h2>{{__('key.news')}}</h2></div>
      <div class="col col-lg-3 col-md-4 col-sm-5 col-xs-6 pull-right"><a class="btn btn-sm btn-primary hvr-sweep-to-right btn-gallery" href="{{URL::to('/news/create')}}"><i class="fas fa-plus"></i>  <span class="hide_on_md_screen">{{__('key.create_new')}}</span></a></div>
    </div>
  </div>
  <div class="card-body">
    @if(count($data)>0)
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>{{__('key.title')}}</th>
            <th>{{__('key.image')}}</th>
            <th>{{__('key.created')}}</th>
            <th>{{__('key.updated')}}</th>
            <th>{{__('key.action')}}</th>
          </tr>
        </thead>
        <tfoot>
        <tr>
            <th>{{__('key.title')}}</th>
            <th>{{__('key.image')}}</th>
            <th>{{__('key.created')}}</th>
            <th>{{__('key.updated')}}</th>
            <th>{{__('key.action')}}</th>
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
              <a class="btn btn-success action" href="{{ URL::to('news/'.$result->id.'/edit')}}"><i class="fas fa-pencil-alt"></i><span class="hide_on_md_screen">{{__('key.edit')}}</span></a>
              <a class="btn btn-danger action open-modal" data-toggle="modal" data-target="#deleteModal" data-id="{{$result->id}}" onclick="passId(<?=$result->id;?>)"><i class="fas fa-trash-alt"></i><span class="hide_on_md_screen">{{__('key.delete')}}</span></a>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div style="width: 120px;">{{ $data->links() }}</div>   
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
              {{__('key.delete_message')}}
            </div>
            <div class="modal-footer">
                <form id="deleteInfoForm" action="/news/delete" method="post">
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