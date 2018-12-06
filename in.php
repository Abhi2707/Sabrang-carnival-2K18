<!doctype html>
<html>
    <head>
        <title>Google reCAPTCHA demo</title>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <form method="post" action="in.php">
            <button
class="g-recaptcha"
data-sitekey="6LcEHXcUAAAAAK5ck-FQhehR1W1MN7risXrAQsQQ"
data-callback="YourOnSubmitFn">
Submit
</button>        </form>
    </body>
</html>

<?php

    
    if($_SERVER["REQUEST_METHOD"] === "POST")
    {
        //form submitted

        //check if other form details are correct

        //verify captcha
        $recaptcha_secret = "6LcEHXcUAAAAAAiobqzb4wUbMrxwxLJyMAyt9_EI";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
        $response = json_decode($response, true);
        if($response["success"] === true)
        {
            echo "Logged In Successfully";
        }
        else
        {
            echo "You are a robot";
        }
    }