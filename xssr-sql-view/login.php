<?php 

session_start();

session_destroy();

session_start();



$servername = "db4free.net";

$username = "sabrang1";

$password = "9984434231";

$db = "sabrang_db1";



$con = mysqli_connect($servername, $username, $password, $db) or die("Connection Failed");



if (isset($_POST['submit'])) {



	$id = 

	$pass = $_POST['password'];



	$query = "SELECT password FROM `login` WHERE id=$id";

	$result = mysqli_query($con, $query);

    $password = mysqli_fetch_assoc($result);



    if($password['password']==$pass){

    	$_SESSION['id']=$id;

    	header("Location: sabrang_solo_event_data.php");

        exit; 

     }

    else echo '<p>'.'Password Incorrect'.'</p>';

	

}

?>

<html>

<head>

	<style type="text/css">

		h1{

			color: white;

			background-color: black;



		}



		button {

			line-height: 2;

			letter-spacing: 3;

		}



		button:hover {

			background-color: black;

			color: white;

		}



		p{

			color: red;

		}

		.c1{

			border: 0px;

			

			width: 350px;

			height: 400px;

			margin: auto;

			align-content: center;

			margin-top: 100px;

	padding-top: 20px;

	border-style: solid;

	background: rgba(0%,0%,0%,0.2);





		}

		.c8{



	height: 80px;

	width: 80px;

	margin-top: 8px;



		}

		.c2{



	width: 65%;

	height: 30px;

	margin: 10px;

	

	color: black;

	font-size: 14px;

	padding: 3px;

	font-weight: bold;

	background: transparent;

	border: 1px solid black;





		}

		.c9{

	

	margin-top: 4px;

		}



	</style>

</head>

<h1 align="center">Login Page</h1>

<div class="c1">

<form action="login.php" method="post" align="center">

<center>	<img src="http://sabrang.jklu.edu.in/images/newsabranglogo.png" class="c8"></center>

<br>

<center><h2>SABRANG-CARNIVAL-2K18</h2></center>

	<center><input class="c2" type="text" name="id" placeholder="User_ID"></center><br>

	<center><input class="c2" type="password" name="password" placeholder="Password"></center><br>

	<center><button type="submit" name="submit">Submit</button></center>



</form>

</div>

</html>