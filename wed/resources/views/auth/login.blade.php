
<!DOCTYPE html>
<html lang="en">

<head>
<title>Online Crypto investment Platform with 24/7 Support | Coinfinancepro</title>
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
    
  <!-- endinject -->
  <link href="{{asset('img/new/android-icon-48x48.png')}}" rel="icon">
 </head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow" style="background-color: white;">
        
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
          
            <div class="auth-form-transparent text-left p-3">
            <div id="google_translate_element"></div>
              
              @if(Session::has('msg'))   
                  <div  style="color:red; margin-top:10px; padding:8px; font-size: 20px;">
                        <span class="fa fa-exclamation-circle"></span>{{Session::get('msg')}}   
                  </div>
                                
            @endif
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
              @if(Request::get('errorMessage') !== null)
                <p style='padding:15px;' class='bg-danger'>{{ Request::get('errorMessage') }}</p>
            @endif
            
               <form class="" method="POST" action="{{route('logins')}}">
                 {{ csrf_field() }}
                <div class="form-group">
                  <label for="exampleInputEmail">USER ID</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-user-circle text-primary"></i>
                      </span>
                    </div>
                    <input  style="background-color: white;" type="text" name="name"  class="form-control form-control-lg border-left-0" placeholder="USER ID">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="fa fa-low-vision text-primary"></i>
                      </span>
                    </div>
                    <input  style="background-color: white;" type="password" name=password class="form-control form-control-lg border-left-0" placeholder="Password">                        
                  </div>
                </div>
                 
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="./password/reset" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button style="background: orange; color: white;" class="btn btn-block btn-lg font-weight-medium auth-form-btn" type="submit" name="login">LOGIN</button>
                </div>
                
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="./sign-up" class="text-primary">Create</a>
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
