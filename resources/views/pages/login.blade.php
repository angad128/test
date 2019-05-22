@extends('app')
@section('title', 'Login')
@section('contents')
<div style="margin-top: 20px;" id="body">
  <div class="container login ">
      <div class="" role="tabpanel" data-example-id="togglable-tabs">
          <div id="myTabContent" class="tab-content">
              <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="login-tab">

                      <div class="row main">
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                          <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-xs-12">
                              <div class="container email-login">
                                  <h3><span class="text-black">Login</span></h3>
                                  <form method="post" class="form" action="{{ URL::to('/postlogin') }}" data-parsley-validate = " ">
                                      @csrf
                                      <div class="form-group">
                                           <input type="text" id="username" class="form-control" name="username" placeholder="Username" required autofocus required />
                                      </div>
                                      <div class="form-group">
                                          <input type="password" id="password" name="password" class="form-control" placeholder="Password" data-parsley-minlength="6" required>
                                      </div>
                                      <div class="row login-button">
                                          <center>
                                              <button style="width: 50%; height: 40px;" type="submit"
                                                      class="btn btn-primary hvr-sweep-to-right">Login
                                              </button>
                                               <button style="width: 50%; height: 40px;" class="btn btn-lg btn-danger btn-block" type="reset" value="Reset">Clear</button>
                                          </center>
                                      </div>
                                  </form>
                              </div>

                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                          </div>
                      </div>
              </div><!-- Tab Content 1 -->

          </div>
      </div>
  </div>
</div>
@endsection