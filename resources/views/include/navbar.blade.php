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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>{{ __('key.committee') }}</span><span class="caret"></span></a>
                        <ul class="dropdown-menu">
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