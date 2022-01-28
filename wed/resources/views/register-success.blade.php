
<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Coin Finance Pro</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="icon" href="img/log.jpeg" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="ucss/bootstrap.min.css">
    <link rel="stylesheet" href="ucss/font-awesome.min.css">
    <link rel="stylesheet" href="css/lib/font-awesome/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="ucss/main.css">
    <link rel="stylesheet" href="ucss/color_skins.css">
<style>
		@import url(https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Titillium+Web:wght@400;700&display=swap);
		select{
			font-size: 20px;
			font-weight: bolder;
			
		}
	</style>
</head>

<body class="theme-blush" style="font-family: 'Titillium Web';">
<!-- WRAPPER -->
<div id="wrapper" style='background:red;'>
    <div class="vertical-align-wrap" 
    style='background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.4)), url("img/log.jpg"); background-repeat: no-repeat;
	background-size: cover;
	background-position: center;'>
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="top">
                <a href='./'>
                <img  src='img/new/logo.png' data-at2x='img/new/logo.png' width='100' alt='Logo' class='logo_mobile' />
                    <!-- <h3 style='color:red;'>Alvarium Block LTD</h3> -->

                </a>
                </div>
        
                <div class="card" style="margin: auto">
                        <div class="header">

                                     <p class="lead" style='color:#000e2e; font-size: 20px; font-weight: bold'>Login to your account</p>
    </div>
    <div class="body">
                <h4>{{$error}}</h4>
                 @if(Session::has('msg'))   
                  <div  style="color:#ee82ee; margin-top:10px; colr: #fff; padding:8px; font-family: Georgia, serif;">
                        <span class="fa fa-exclamation-circle"></span>{{Session::get('msg')}}                     
                  </div>
                                
                @endif

            
        <form class="form-auth-small" method="POST" action="{{route('logins')}}">
             {{ csrf_field() }}
            <div class="form-group">
                <label for="signin-email" class="control-label sr-only">USER ID</label>
                <input type="text" name="name" class="form-control " id="signin-email" value="" placeholder="USER ID" style='font-size: 17px;'>
                
                            
            </div>
            <div class="form-group">
                <label for="signin-password" class="control-label sr-only">PASSWORD</label>
                <input type="password" name="password" class="form-control " id="signin-password" placeholder="PASSWORD" style='font-size: 17px;'>
                
                            
            </div>
            <div class="form-group clearfix">
                <label class="fancy-checkbox element-left" style="">
                    <input name="remember" type="checkbox">
                    <span>Remember me</span>
                </label>
            </div>

        


            <!-- #000e2e; -->
            <button type="submit" name='login' style='background:#f0ad4e; border:none;' class="btn btn-primary btn-lg btn-block">LOGIN</button>
            <div class="bottom">
<!--                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="password/reset.php">Forgot password?</a></span>-->
                
                <span style='font-size: 16px;'>Don't have an account? <a href="./register" style='color:#000e2e; font-size: 16px;'>Register</a></span>
                    <br>
                <span><a href="./" style='color:#000e2e; font-size: 16px;'>www.iq-markets.com</a></span>
            </div>
        </form>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->






</body>
</html>