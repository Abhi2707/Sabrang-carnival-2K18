<html>

    <head>

        <title>Register|Sabrang|JKLU</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="robots" content="noindex">

        <meta name="google-signin-client_id" content="922020509399-isf19j3kphkmuko2s2qm61u39vi65gr5.apps.googleusercontent.com">

        <link rel="stylesheet" href="css/register.css">

        <link rel="stylesheet" href="css/media_queries.css">

        <link rel="stylesheet" href="css/sabrang.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:500" rel="stylesheet">

        <link rel="icon" type="image/png" href="favicon.png" sizes="any"><!--Favicon-->

        <!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125647505-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-125647505-1');

</script>

<!--Google Authentication-->

<script src="https://apis.google.com/js/platform.js" async defer></script>



    <style>

  

    body{

        background-image: url('images/lowpoly.jpg');

        background-size: cover;

        background-attachment:fixed;

        height:100%;

        font-family: 'Roboto Mono', monospace;

        color:white;

        background-repeat:round;

    }

    .layer{

    background-color: rgba(0, 0, 0, 0.38);

    position: fixed;

    top: 0;

    left: 0;

    width: 100%;

    height: 100%;

    z-index:-1;

    }

    .textfield2{

        width: 30%;

margin: 50px 0px 28px 0px;

box-sizing: border-box;

border: none;

font-size:24px;

background-color:transparent;

border: 1px solid white;

color:white;

    }

    img{

        width:10%;

    }

    @media only screen and (max-width:480px){

        .textfield2{

        width: 90%;

margin: 50px 0px 28px 0px;

box-sizing: border-box;

border: none;

font-size:24px;

background-color:transparent;

border: 1px solid white;

color:white;

    }

    img{

        width:25%;

    }

    }

</style>

    </head>

    <body>

        <div class="layer">

        </div>

        <h1><center>Registrations Will Open Soon!</center></h1>

        <div style="position:relative;top:20%;">

            <h4><center>We will notify you when it opens</center></h4>
            <h3 style="margin-top:2%;"><center>Authenticate Yourself With <br>Google</center></h3>
            <center style="margin-top:2%;"><div class="g-signin2" data-onsuccess="onSignIn" id="auth"></div></center>

        </div>

        <div style="position:relative;top:30%">

        <a href="index.html"><center><img src="images/newsabranglogo.png" alt="sabrang-logo"/></center></a>

        <h5 style="letter-spacing: 2px;"><center>Designed By Team Sabrang</center></h5>

    </div>

     <script src="js/register.js"></script> 
<script>

   function onSignIn(googleUser) {
   var profile = googleUser.getBasicProfile();
   console.log('Name: ' + profile.getName());
   console.log('Email: ' + profile.getEmail()); 
   var name = profile.getName();
   var email = profile.getEmail();
   var flag = 1;
   //----------------------------------
   if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log("OK");
                console.log(name+","+email);
                if(flag==1){
                alert("THANK YOU! "+name+"\nYour Email Address has been received successfully");}
                else{
                alert("SOMETHING WENT WRONG");}
                }
        };
        xmlhttp.open("GET","http://sabrang.jklu.edu.in/try.php?STORE_NAME="+name+"&STORE_EMAIL="+email+"&FLAG="+flag,true);
        xmlhttp.send();}

   const auth = document.getElementById('auth');
   auth.addEventListener('click',function(){
   console.log("AA GAYA");
   onSignIn(googleUser)});   
    </script>

<?php
    $NAME = $_REQUEST["STORE_NAME"];
    $EMAIL = $_REQUEST["STORE_EMAIL"];
    $serverName="db4free.net";
    $userName="sabrang1";
    $password="9984434231";
    $db="sabrang_db1"; 
    $conn=mysqli_connect($serverName,$userName,$password,$db);
       if(!$conn)
       {
       echo '<script type="text/javascript">alert("connection is not done");</script>';
       }
       else{
          $SQL="INSERT INTO  try(name1,email) VALUES('$NAME','$EMAIL')";
          mysqli_query($conn,$SQL);
          $FLAG = $_REQUEST["FLAG"];
          }
        mysqli_close($conn);  
    ?>
    
</body>
</html>