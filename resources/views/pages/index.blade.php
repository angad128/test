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
              <center><button class="btn btn-primary hvr-sweep-to-right popUpBtn" id="closePopUpModal" type="button">{{__('key.close')}}</button></center>
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
                  <a class="rpwe-img" href="/news/{{$n_data->id}}" rel="bookmark">
                    <img class="rpwe-alignleft rpwe-thumb rpwe-default-thumb" src="/upload/news/{{$n_data->img}}" width="45" height="45">
                  </a>
                  <h6 class="rpwe-title">
                  <a class="rpwe-title" href="/news/{{$n_data->id}}" title="" rel="bookmark"><p>{!! str_limit($n_data->body, $limit = 60)  !!}</p></a>
                  </h6>
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
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th class="text-center"></th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/Lekhapadhi-Bidhan-2074-Final.pdf')}}" target="_blank">Nepal Lekhapadhi Kannon Bewasi Association Bidhan 2063</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/rules-075-sep 10.pdf')}}" target="_blank">Niyamawoli</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/१०-संयुक्त-आवास-धनी-दर्ता-श्रेस्ता.docx')}}" target="_blank">संयुक्त आवास धनी दर्ता श्रेस्ता</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/११-संयुक्त-आवास-धनी-दर्ता-प्रमाण-पूर्जा.docx')}}" target="_blank">संयुक्त आवास धनी दर्ता प्रमाण पूर्जा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/१२-लिखत-पारित-गर्न-डोर-खटाई-पाउनका-लागि-दिने-निवेदनको-ढाँचा.docx')}}" target="_blank">लिखत पारित गर्न डोर खटाई पाउनका लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/१३-राजीनामा.docx')}}" target="_blank">राजीनामा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/१५-हालैदेखिको-बकसपत्र-दानपत्र.docx')}}" target="_blank">हालैदेखिको बकसपत्र दानपत्र</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/१७-शेषपछिको-बकसपत्र.docx')}}" target="_blank">शेषपछिको बकसपत्र (अष्टलोहसम्पत्ति विवरण नखुलेको)</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/१९-दर्ताफारी.docx')}}" target="_blank">दर्ताफारी</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/२२-सट्टापट्टा.docx')}}" target="_blank">सट्टापट्टा
                        </a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/२३-मानो-छुट्टिएको.docx')}}" target="_blank">मानो छुट्टिएको</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/२४-मानो-जोडिएको.docx')}}" target="_blank">मानो जोडिएको</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/२५-दृष्टिबन्धकी.docx')}}" target="_blank">दृष्टिबन्धकी</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/२७-कपाली-तमसुक.docx')}}" target="_blank">कपाली तमसुक</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/२८-आवास-इकाई-अपार्टमेन्ट-घरतल्ला-को-राजीनामा.docx')}}" target="_blank">आवास इकाईअपार्टमेन्टघरतल्लाको राजीनामा
                        </a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/२९-नामसारीको-लागि-दिने-निवेदनको-ढाँचा.docx')}}" target="_blank">नामसारीको लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/३० आवास इकार्इ अपार्टमेन्ट घरको तल्लाको नामसारी गरी जग्गाधनी-दर्ता-प्रमाण-पूर्जा-पाऊँ.docx')}}" target="_blank">आवास इकार्इ अपार्टमेन्ट घरको तल्लाको नामसारी गरी जग्गाधनी दर्ता प्रमाण पूर्जा पाऊँ</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/३१ अदालतको फैसला वा मिलापत्र बमोजिम दाखिला खारेजका लागि दिने निवेदनको ढाँचा.docx')}}" target="_blank">अदालतको फैसला वा मिलापत्र बमोजिम दाखिला खारेजका लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/३२ बेजिल्लामा पारित भएको लिखत बमोजिम दाखिल खारेजको लागि दिने निवेदनको ढाँचा.docx')}}" target="_blank">बेजिल्लामा पारित भएको लिखत बमोजिम दाखिल खारेजको लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/३४ जग्गावाला वा जग्गाको विवरण संशोधनका लागि दिने निवेदनको ढाँचा.docx')}}" target="_blank">जग्गावाला वा जग्गाको विवरण संशोधनका लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/३५ रैकर तर्फको छुट जग्गा दर्ताका लागि दिने निवेदनको ढाँचा.docx')}}" target="_blank">रैकर तर्फको छुट जग्गा दर्ताका लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/३६ बिर्ता जग्गा दर्ताका लागि जग्गा कमाउने व्यक्तिबाट दिने दरखास्तको ढाँचा.docx')}}" target="_blank">बिर्ता जग्गा दर्ताका लागि जग्गा कमाउने व्यक्तिबाट दिने दरखास्तको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/३७ रजिष्ट्रेशन भएको लिखतको प्रतिलिपि माग गर्नका लागि दिने निवेदनको ढाँचा.docx')}}" target="_blank">रजिष्ट्रेशन भएको लिखतको प्रतिलिपि माग गर्नका लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/४१ घर कायम गर्नको लागि दिने निवेदनको ढाँचा.docx')}}" target="_blank">घर कायम गर्नको लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/४४ श्रेस्ता एकीकरण गर्नको लागि दिने निवेदनको ढाँचा.docx')}}" target="_blank">श्रेस्ता एकीकरण गर्नको लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-file-pdf"></i> <strong style="margin-left:10px;" class="download-description"><a href="{{URL::to('upload/legislations/४५ घर कायम गर्नको लागि दिने निवेदनको ढाँचा.docx')}}" target="_blank">४५ घर कायम गर्नको लागि दिने निवेदनको ढाँचा</a></strong></td>
                    </tr>
                </tbody>
            </table>
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
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/sitaram_dahal.jpg')}}" alt="sitaram dahal"></div>
              <div class="card-block">
                <h4 class="card-title">Sitaram Dahal</h4>
                <p class="text-center">{{ __('key.chairman')}}</p>
              </div>
            </div>
          </center>

          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/tej_parad_dahakal.jpg')}}" alt="Tej Parsad Dhakal"></div>
              <div class="card-block">
                <h4 class="card-title">Tej Parsad Dhakal</h4>
                <p class="text-center">Present {{ __('key.chairman')}}</p>
              </div>
            </div>
          </center>

          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/gurudev_yadav.jpg')}}" alt="GuruDev Yadav"></div>
              <div class="card-block">
                <h4 class="card-title">GuruDev Yadav</h4>
                <p class="text-center">{{ __('key.sChairman')}}</p>
              </div>
            </div>
          </center>

          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/purusotam_adikhari.JPG')}}" alt="Purusotam Adikhari"></div>
              <div class="card-block">
                <h4 class="card-title">Purusotam Adikhari</h4>
                <p class="text-center">{{ __('key.vChairman')}} {{ __('key.state1')}}</p>
              </div>
            </div>
          </center>

          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/rajkumar_lal_karna.JPG')}}" alt="Rajkumar Lal Karna"></div>
              <div class="card-block">
                <h4 class="card-title">Rajkumar Lal Karna</h4>
                <p class="text-center">{{ __('key.vChairman')}} {{ __('key.state2')}}</p>
              </div>
            </div>
          </center>

          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/surya_thapa.JPG')}}" alt="Surya Bahadur Thapa"></div>
              <div class="card-block">
                <h4 class="card-title">Surya Bahadur Thapa</h4>
                <p class="text-center">{{ __('key.vChairman')}} {{ __('key.state3')}}</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/mayadevi_soti.JPG')}}" alt="Mayadevi Soti"></div>
              <div class="card-block">
                <h4 class="card-title">Mayadevi Soti</h4>
                <p class="text-center">{{ __('key.vChairman')}} {{ __('key.state4')}}</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/nep_brd_oli.jpg')}}" alt="Nep Bahadur Oli"></div>
              <div class="card-block">
                <h4 class="card-title">Nep Bahadur Oli</h4>
                <p class="text-center">{{ __('key.vChairman')}} {{ __('key.state5')}}</p>
              </div>
            </div>
          </center>

          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/tritharaj_giri.JPG')}}" alt="Tirtharaj Giri"></div>
              <div class="card-block">
                <h4 class="card-title">Tirtharaj Giri</h4>
                <p class="text-center">{{ __('key.vChairman')}} {{ __('key.state6')}}</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/chirinjibi_basnet.JPG')}}" alt="Chiranjibi Basnet"></div>
              <div class="card-block">
                <h4 class="card-title">Chiranjibi Basnet</h4>
                <p class="text-center">{{ __('key.vChairman')}} {{ __('key.state7')}}</p>
              </div>
            </div>
          </center>

          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/krishna_pdr_dahal.JPG')}}" alt="Krishna Parsad Dahal(Nabaraj)"></div>
              <div class="card-block">
                <h4 class="card-title">Krishna Parsad Dahal(Nabaraj)</h4>
                <p class="text-center">{{ __('key.gSecretary')}}</p>
              </div>
            </div>
          </center>

          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/saroj_ghimiri.jpg')}}" alt="Saroj Ghimiri"></div>
              <div class="card-block">
                <h4 class="card-title">Saroj Ghimiri</h4>
                <p class="text-center">{{ __('key.secretary')}}</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/yubraj-karki.JPG')}}" alt="Yubraj Karki(Parbat)"></div>
              <div class="card-block">
                <h4 class="card-title">Yubraj Karki'Parbat'</h4>
                <p class="text-center">{{ __('key.secretary')}}</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/hari_parsad_poudel.jpg')}}" alt="Hari Parsad Poudel"></div>
              <div class="card-block">
                <h4 class="card-title">Hari Parsad Poudel</h4>
                <p class="text-center">{{ __('key.treasury')}}</p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/laxmi_baniya.jpg')}}" alt="Laxmi Baniya"></div>
              <div class="card-block">
                <h4 class="card-title">Laxmi Baniya</h4>
                <p class="text-center">Juniour {{ __('key.treasury')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/atma_ram_moktan.jpg')}}" alt="Atma Ram Moktan"></div>
              <div class="card-block">
                <h4 class="card-title">Atma Ram Moktan</h4>
                <p class="text-center">{{ __('key.cMembers')}} </p>
              </div>
            </div>
          </center>
           <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/ramesh_pokhrel.JPG')}}" alt="Ramesh Pokherel"></div>
              <div class="card-block">
                <h4 class="card-title">Ramesh Pokherel</h4>
                <p class="text-center">{{__('key.cMembers')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/renuka_bhattarai.jpg')}}" alt="Renuka Bhattarai"></div>
              <div class="card-block">
                <h4 class="card-title">Renuka Bhattarai</h4>
                <p class="text-center">{{ __('key.cMembers')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/doj_kumar_raut.JPG')}}" alt="Doj Kumar Raut"></div>
              <div class="card-block">
                <h4 class="card-title">Doj Kumar Raut</h4>
                <p class="text-center">{{__('key.cMembers')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/bishnu_maya_adikhari.JPG')}}" alt="Bishnu Maya Adikhari"></div>
              <div class="card-block">
                <h4 class="card-title">Bishnu Maya Adikhari</h4>
                <p class="text-center">{{__('key.cMembers')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/pursotam_dahal.JPG')}}" alt="Purusotam Dahal"></div>
              <div class="card-block">
                <h4 class="card-title">Purusotam Dahal</h4>
                <p class="text-center">{{__('key.cMembers')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/uttam_tharu.jpg')}}" alt="Utam Chaudary Tharu"></div>
              <div class="card-block">
                <h4 class="card-title">Utam Chaudary Tharu</h4>
                <p class="text-center">{{ __('key.cMembers')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/ang_jimbo_sherpa.JPG')}}" alt="Ang Jimbho Sherpa"></div>
              <div class="card-block">
                <h4 class="card-title">Ang Jimbho Sherpa</h4>
                <p class="text-center">{{__('key.cMembers')}} </p>
              </div>
            </div>
          </center>
         <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/hari_parsad_sharma.jpg')}}" alt="Hari Parsad Sharma"></div>
              <div class="card-block">
                <h4 class="card-title">Hari Parsad Sharma</h4>
                <p class="text-center">{{ __('key.cMembers')}} </p>
              </div>
            </div>
          </center>          
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/dor_bdr_bhandari.JPG')}}" alt="Dor Bahadur Bhandari"></div>
              <div class="card-block">
                <h4 class="card-title">Dor Bahadur Bhandari</h4>
                <p class="text-center">{{__('key.cMembers')}} </p>
              </div>
            </div>
          </center>
          
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/ram_parsad_sharma.jpg')}}" alt="Ram Parsad Sharma"></div>
              <div class="card-block">
                <h4 class="card-title">Ram Parsad Sharma</h4>
                <p class="text-center">{{ __('key.cMembers')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/gajendra_shrestha.jpg')}}" alt="Gajendra Shrestha"></div>
              <div class="card-block">
                <h4 class="card-title">Gajendra Shrestha</h4>
                <p class="text-center">{{ __('key.member')}} {{ __('key.state1')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/pulkit_chaudary.jpg')}}" alt="Pulkit Chaudary"></div>
              <div class="card-block">
                <h4 class="card-title">Pulkit Chaudary</h4>
                <p class="text-center">{{ __('key.member')}} {{ __('key.state2')}}</p>
              </div>
            </div>
          </center>          
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/lokraj_adikhari.jpg')}}" alt="Lok Raj Adhikari"></div>
              <div class="card-block">
                <h4 class="card-title">Lok Raj Adhikari</h4>
                <p class="text-center">{{ __('key.member')}} {{ __('key.state3')}} </p>
              </div>
            </div>
          </center>
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/saroj_devkota.jpg')}}" alt="Saroj Devkota"></div>
              <div class="card-block">
                <h4 class="card-title">Saroj Devkota</h4>
                <p class="text-center">{{ __('key.member')}} {{ __('key.state4')}} </p>
              </div>
            </div>
          </center> 
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/lekhnath_poudel.jpg')}}" alt="Lekhnath Poudel"></div>
              <div class="card-block">
                <h4 class="card-title">Lekhnath Poudel</h4>
                <p class="text-center">{{ __('key.member')}} {{ __('key.state5')}} </p>
              </div>
            </div>
          </center>                 
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/ramshingh_budhathoki.jpg')}}"alt="Ramshing Budhathoki"></div>
              <div class="card-block">
                <h4 class="card-title">Ramshing Budhathoki</h4>
                <p class="text-center">{{ __('key.member')}} {{ __('key.state6')}} </p>
              </div>
            </div>
          </center>          
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" alt="Ram Bahadur Badayak" src="{{URL::to('images/members/rambahadur_badayat.jpg')}}"></div>
              <div class="card-block">
                <h4 class="card-title">Ram Bahadur Badayak</h4>
                <p class="text-center">{{ __('key.member')}} {{ __('key.state7')}} </p>
              </div>
            </div>
          </center>     
    
          <center>
            <div class="item card">
              <div class="team-img"> <img class="card-img-top" src="{{URL::to('images/members/shreedhar_kayasta.jpg')}}" alt="Shirdhar Parsad Kayasta"></div>
              <div class="card-block">
                <h4 class="card-title">ShreeDhar Parsad Kayasta</h4>
                <p class="text-center">{{ __('key.member')}} (Kathmandu Valley)</p>
              </div>
            </div>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection