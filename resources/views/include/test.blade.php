                    <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="committeedropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>{{ __('key.committee') }}</span><span class="caret"></span>
                      </a>
                      <!-- Dropdown - User Information -->
                      <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="committeedropdown">
                         <center><li><a href="{!! url('/comittee/partial'); !!}"><span>{{ __('key.pCommittee') }}</span></a></li></center>
                          <center><li><a href="{!! url('/comittee/under'); !!}"><span>{{ __('key.uCommittee') }}</span></a></li></center>
                      </ul>
                    </li>


<div id="container">
    <div id="header">
        <div style="overflow-x: hidden;" class="container">
            <div class="row head">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 head-address">
                    
                    <ul class="top-ul top-ul-left">
                        <li><p><i class="fas fa-map-marker-alt"></i> Dillibazar</p></li>
                        <li><p><i class="fas fa-phone-volume"></i> call: +977-01-4445789 </p></li>
                    </ul>
                    
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 head-links pull-right">
                    <ul class="top-ul top-ul-right">
                        <center>
                        <li><p><a href=""><i class="fab fa-facebook-f"></i></a></p></li>
                        <li><p><a href=""><i class="fab fa-linkedin-in"></i></a></p></li>
                        <li><p><a href=""><i class="fab fa-twitter"></i></a></p></li>
                        <li><p><a href=""><i class="fab fa-google"></i></a></p></li>
                        <li><p><a href=""><i class="fab fa-youtube"></i></a></p></li>
                        </center>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar container" data-spy="affix" data-offset-top="47">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                 <a href="#"><img border="0" src="{{URL::to('images/logo.png')}}" width="70px" height="27px"
                                          class="img img-responsive brand-img"></a>
            </div>
            
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="{!! url('/'); !!}"><i class="fas fa-home"></i><span>{{ __('key.home') }}</span></a></li>
                    <li><a href="{!! url('/about'); !!}"><span>{{ __('key.about') }}</span></a></li>

                    <li class="nav-item dropdown no-arrow">
                      <a class="nav-link dropdown-toggle" href="#" id="committeedropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>{{ __('key.committee') }}</span><span class="caret"></span>
                      </a>
                      Dropdown - User Information
                      <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="committeedropdown">
                         <center><li><a href="{!! url('/comittee/partial'); !!}"><span>{{ __('key.pCommittee') }}</span></a></li></center>
                          <center><li><a href="{!! url('/comittee/under'); !!}"><span>{{ __('key.uCommittee') }}</span></a></li></center>
                      </ul>
                    </li>

                    <li><a href="{!! url('/'); !!}#news"><span>{{ __('key.news') }}</span></a></li>
                    <li><a href="{!! url('/'); !!}#team"><span>{{ __('key.boardmember') }}</span></a></li>
                    <li><a href="{!! url('/gallery'); !!}"><span>{{ __('key.gallery') }}</span></a></li>
                    <li><a href="{!! url('/contact'); !!}"><span>{{ __('key.contact') }}</span></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <center><p class="text-white text-underline">{{ __('key.langType')}}?</p></center>
                     <a class="btn text-white " href="{{ route('set.language','en') }}" id="en">{{ __('key.langBtnEn')}}</a>
                     <a class="btn text-white " href="{{ route('set.language','np') }}" id="np">{{ __('key.langBtnNp')}}</a>
                </ul>
            </div>
        </nav>
    </div>
</div>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>