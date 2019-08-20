<?php

$servername = "127.0.0.1";
$username = "root";
$password="";
$database = "abubakar";


$abusql = new mysqli($servername, $username, $password, $database) or die("Connection failed".mysql_error().mysql_errno());


if(isset($_GET['btn'])){
	$name = $_GET['name'];
	$email=$_GET['email'];
	$phone = $_GET['phone'];

	mysqli_query($abusql,"INSERT INTO info  (name, email, phone) VALUES('$name', '$email', '$phone')");
}





//echo "Welcome ".$name." to my App"




//#3B5998; facebook blue color
?>
<!DOCTYPE html>
<html>

	<head>
		<title>WEB App</title>
		<style>
			body{
				background-color: #000;
						
			}
			.container{
				transform: skew(-15deg);
				border-radius:15px 0 15px 0;
				background:#000;
				border: 1px solid #fff700 !important;
				box-shadow: 0 0 10px 0px #fff700;
				color:#fff700;


				padding-left:20px;
				padding-right:10px;
				padding-bottom:10px;
				padding-top:30px;
				
				text-align:center;
				margin-top: 70px;
				margin-left:250px;
				margin-right:250px;
				font-size:18px;
				font-family: Arial, Helvetica, sans-serif;
				
				
			}
			button{
				background-color:#fff700;
				font-size:18px;
				color:#000;
				border-radius:2px;
				padding:2px;
				
			}
			footer{
				color:#fff700;
				margin-top:200px;
			}
		button:hover{
			background-color: lightgreen;
		}
		
		h1{
			color:#fff700;
			text-align: center;
		}
		
		</style>
	
	</head>
	<body>
		<h1> Please Enter Your Info</h1>
		<div class="container">
		<form action="abu.php"  method="get">
			<label>Name</label>&nbsp&nbsp&nbsp&nbsp<input type="text" name="name">
			<br>
			<br>
			<label>Email</label>&nbsp&nbsp&nbsp&nbsp<input type="text" name="email">
			<br>
			<br>
			<label>Phone</label>&nbsp&nbsp&nbsp&nbsp<input type="number" name="phone">
			<br>
			<br>
			<button name="btn">Save Info</button><br><br>
				
		</form>
		</div>
	
	
	
	</body>
	<footer>
  		<p>Design By: Ibrahim G. Yusuf</p>
  		<p>Contact information: <a href="ibrobk.ga">
 		 www.ibrobk.ga</a>.</p>
	</footer>


</html>
