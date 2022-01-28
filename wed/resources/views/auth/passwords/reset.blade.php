
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('account/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
    <!-- PAGE TITLE HERE -->
    <title>Coinfinancepro | Change Password</title>

  <!-- endinject -->
  <link href="{{asset('img/new/android-icon-48x48.png')}}" rel="icon">
 </head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
        
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
          
            <div class="auth-form-transparent text-left p-3">
            
              
               @if (session('status'))
                    <div style="color:red;" class="alert alert-success">
                         {{ session('status') }}
                    </div>
                @endif
                               <form class="pt-3" method="POST" action="{{ route('password.request') }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="col-md-12 col-sm-12 col-xs-12 form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong sty;e="color"red>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                         <div class="form-group col-md-12 col-sm-12 col-xs-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter New Password">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                <strong sty;e="color"red>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                <strong sty;e="color"red>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                      
                                        <div class="my-3">
                                          <button style="background: orange; color: white;" class="btn btn-block btn-lg font-weight-medium auth-form-btn" type="submit" name="login">Reset Password</button>
                                        </div>
               
                
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">COINFINANCEPRO &copy; 2017 All Right Reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
    <!-- container-scroller -->
  <!-- plugins:js -->

 
</body>

</html>


