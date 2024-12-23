@extends('layout')
  
@section('content')
<main class="login-form" style=background:#1DC5CE>
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header"><b style="color: green;">Login</b></div>
                  <div class="card-body">
  
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label style="color: green;" for="email_address" class="col-md-4 col-form-label text-md-right"><b>E-Mail Address</b></label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label style="color: green;" for="password" class="col-md-4 col-form-label text-md-right"><b>Password</b></label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label style="color: green;">
                                          <input type="checkbox" name="remember"><b> Remember Me </b>
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button style="background: darkorange;" type="submit" class="btn btn-primary">
                                  <b>Login</b>
                              </button>
                          </div>
                      </form>
                        
                  </div>
                  <div class="card-header"><b style="color: green;">Powered By <b style=color:#871f78 >Parvathy WEBwares</b></div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection