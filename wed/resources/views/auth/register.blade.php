<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->

  <link rel="stylesheet" href="account/css/style.css">
  <link rel="stylesheet" href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}">
  <!-- endinject -->
 <link href="{{asset('img/new/android-icon-48x48.png')}}" rel="icon">
  <!-- PAGE TITLE HERE -->
    <title>Online Crypto investment Platform with 24/7 Support | Coinfinancepro</title>
 

</head>

<body>
    <style> #hide{display:none;}</style>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow" style="background-color: white;">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
            <div id="google_translate_element"></div>
             
              <h4>New here?</h4>
              <h6 class="font-weight-light">Join us today! It takes only few steps</h6>
            <form class="pt-3" action="{{route('addAccount')}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="rfnumber" value="1429359" readonly="true" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
              <input type="text" id="hide" name="subject"  value="Thanks for joining us" class="form-control form-control-lg border-left-0">

                <div class="form-group {{$errors->has('fullname') ?  'has-error' : ''}}">
                  <label>Full Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user-circle text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="fullname" class="form-control form-control-lg border-left-0" placeholder="First Name" value="{{ old('fullname') }}">
                  </div>
                  <p style="color: red; font-size: 14px; margin-top: 6px;">{{$errors->first('fullname')}}</p>
                </div>
                
                <div class="form-group {{$errors->has('email') ?  'has-error' : ''}}">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-address-card-o text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" placeholder="Email" value="{{ old('email') }}">
                  </div>
                  <p style="color: red; font-size: 14px; margin-top: 6px;">{{$errors->first('email')}}</p>
                </div>
                <div class="form-group {{$errors->has('username') ?  'has-error' : ''}}">
                  <label>USER ID</label>
                  <div class="input-group" style="margin-bottom:10px;">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user-secret text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="username" class="form-control form-control-lg border-left-0" placeholder="USER ID" value="{{ old('username') }}">
                  </div>
                  <span>minimum of 6 characters required. space not allowed</span>
                  <p style="color: red; font-size: 14px; margin-top: 6px;">{{$errors->first('username')}}</p>
                </div>
               
                <div class="form-group {{$errors->has('password') ?  'has-error' : ''}}">
                  <label>Password</label>
                  <div class="input-group" style="margin-bottom:10px;">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-low-vision text-primary"></i>
                      </span>
                    </div>
                    <input type="password"  name="password" class="form-control form-control-lg border-left-0" placeholder="Password">                        
                  </div>
                  <span>Minimum of 8 characters required with at least 1 of each: upper case, lower case and numeric character</span>
                 <p style="color: red; font-size: 14px; margin-top: 6px;">{{$errors->first('password')}}</p>
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-low-vision text-primary"></i>
                      </span>
                    </div>
                    <input type="password"  name="password_confirmation" class="form-control form-control-lg border-left-0" id="" placeholder="Confirm Password">                        
                  </div>
                </div>
                <div class="form-group">
                  <label>Phone Number(optional)</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-phone-square text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="phone" class="form-control form-control-lg border-left-0" placeholder="Phone Number" value="{{ old('phone') }}">
                  </div>
                </div>
                @if(Session::has('referrer'))  
                 <div class="form-group">
                  <label>Referral ID(optional)</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="text-primary"></i>
                      </span>
                    </div>
                    <input readonly type="text" value="{{Session::get('referrer')}}" name="referral_id" class="form-control form-control-lg border-left-0" placeholder="YFLM813A">
                  </div>
                 </div>
                @else
                <div class="form-group">
                  <label>Referral ID(optional)</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="referral_id" class="form-control form-control-lg border-left-0" placeholder="YFLM813A">
                  </div>
                 </div>
                @endif
               
                <div style="margin-left: 5%" class="mb-4 {{$errors->has('terms') ?  'has-error' : ''}}">
                  <div class="form-check">
                    <label class=" text-muted">
                      <input type="checkbox" class="form-check-input" checked="checked" name="terms">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                  <p style="color: red; font-size: 14px; margin-top: 6px;"> <p style="color: red;">{{$errors->first('terms')}}</p>
                </div>
                <div class="mt-3">
                  <button style="background: orange; color: white;" class="btn btn-block btn-lg font-weight-medium auth-form-btn"  type="submit" name="submit">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="./login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
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
