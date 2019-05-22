@extends('app')
@section('title', 'Home')
@section('contents')
        <div id="popUpMain" class="container">
            <div id="popUp">
              @if(count($notice_data)>0)
                @foreach($notice_data as $not_data)
                <h1 id="popUpHeading">{{$not_data->title}} </h1>
                <div>
                    <p class="text-white">{!! $not_data->body !!}</p>
                </div>
                @endforeach
              @else
                <h1 style="color: red; font-size: 30px;">No notice to show!!</h1>
              @endif
              <center><button class="btn btn-secondary" id="closePopUpModal" type="button">Close</button></center>
            </div>
        </div>


<div id="body" class="container-fluid">
  <div id="carouselss">
    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img img-responsive" src="images/1.jpg" alt="Los Angeles">
            <div class="carousel-caption animated bounceInUp">
              <center><h1>Welcome to<br> Pllannepal</h1></center>
              <center><p class="animated bounce center-align">EXCEL YOURSELF HERE</p>
            </div>
          </div>
          <div class="item">
            <img class="img img-responsive" src="images/2.jpg" alt="Chicago" >
            <div class="carousel-caption animated bounceInUp">
              <center><h1>Namesthe<br> To all of You</h1></center>
              <center><p  class="animated bounce center-align">Be with US</p>
            </div>
          </div>
          
          <div class="item">
            <img class="img img-responsive" src="images/3.jpg" alt="New york" >
            <div class="carousel-caption animated bounceInUp">
              <center><h1>Have A<br>Nice Day</h1></center>
              <center><p  class="animated bounce center-align">EXCEL YOURSELF HERE</p>
            </div>
          </div>
        </div>
        <!-- Left and right controls -->
         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        </a>
      </div>
    </div>
  </div>
  <div id="details">
    <div class="container" id="news">
      <div class="row news-panel">

        <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-box">
          <div class="forfaicon"><i class="fa fa-file"></i></div>
          <div class="new-box-content">
            <h3 class="text-underline"><span>{{ __('key.news-title') }}</span></h3>
            <div class="rpwe-block ">
              <ul class="rpwe-ul">
              @if(count($news_data)>0)
                @foreach($news_data as $n_data)
                <li class="rpwe-li rpwe-clearfix">
                  <a class="rpwe-img" href="" rel="bookmark">
                    <img class="rpwe-alignleft rpwe-thumb rpwe-default-thumb" src="/upload/news/{{$n_data->img}}" width="45" height="45">
                  </a>
                  <h3 class="rpwe-title">
                  <a href="/news/{{$n_data->id}}" title="Permalink to परिषदबाट सञ्चालन हुने तालीममा सहभागिताका लागि सूचिकृत हुन आउने सूचना" rel="bookmark"><p>{!! str_limit($n_data->body, $limit = 60)  !!}</p></a>
                  </h3>
                  <time class="rpwe-time published" datetime="2019-03-23T15:34:09+05:45">{{$n_data->created_at}}</time>
                </li>
                @endforeach
              @else
                <li class="rpwe-li rpwe-clearfix">Sorry, currently no News is published!</li>
              @endif
              </ul>
            </div>
          </div>
        </div>

        <div  class="col-lg-6 col-md-6 col-sm-6 col-xs-12 news-box download-box">
          <div class="forfaicon"><i class="fa fa-book"></i></div>
          <div class="new-box-content">
            <h3 class="text-underline"><span>{{ __('key.regulation') }}</span></h3>
            <div class="table-responsive">
              <table class="table table-bordered" style="overflow: scroll;">
                <tbody>
                  @foreach($legislations_data as $l_data)
                  <tr>
                    <td colspan="8"><i class="fas fa-file-pdf"></i> <strong class="download-description"><p>{{$l_data->filename}}</p></strong></td><td><a href="/generate-pdf/{{$l_data->id}}" class="btn btn-primary hvr-sweep-to-right btnView" type="button"><span>
                    {{ __('key.viewBtn') }}</span></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="team">
    <div class="container">
      <h2 class="center-align"><span>{{ __('key.team') }}</span></h2>
      <div class="slider">
        <div class="owl-carousel" id="slider">
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="images/teacher1.jpg" alt="Card image cap"></div>
              <div class="card-block">
                <h4 class="card-title">Mrs. Bidya Limbu</h4>
                <p class="text-center">Chairman</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="images/teacher3.jpg" alt="Card image cap"></div>
              
              <div class="card-block">
                <h4 class="card-title">Mr.Umesh Shrestha</h4>
                <p class="text-center">Senior Vice-Chairman</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="images/teacher4.jpg" alt="Card image cap"></div>
              
              <div class="card-block">
                <h4 class="card-title">Mr. Mukunda Pr. Sharma </h4>
                <p class="text-center">Finance Director</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="images/teachr5.jpg" alt="Card image cap"></div>
              
              <div class="card-block">
                <h4 class="card-title">Mrs. Renu Rajbahak</h4>
                <p class="text-center">Chairman</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="images/teacher6.jpg" alt="Card image cap"></div>
              
              <div class="card-block">
                <h4 class="card-title">Mr.Rajesh Bhandari</h4>
                <p class="text-center">Vice Principal</p>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection