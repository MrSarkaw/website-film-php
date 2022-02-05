<!doctype html>
<html>
<head>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style>
		html{
			background-color: #131313;
		}
		#d{
			background-color: none;
			height: 500px;
			
			border-radius: 40px;
			transition: .7s;
			float: left;
			position: relative;
			left: 35%;
			top: 80px;
			}
		
		div > form >input{
			width: 90%;
			height: 50px;
			border:2px solid #2879ff;
			background-color:#131313;
			position: relative;
			top: 140px;
			left: 25px;
			margin-top: 30px;
			border-radius: 40px;
			text-align: center;
			outline:none;
			font-size: 30px;
			color:#2879ff;
			
		}
		div > form >button {
			position: absolute;
			top: 350px;
			color:#2879ff;
			text-align: center;
			width: 40%;
			height: 30px;
			border-radius: 40px;
			border:2px solid #2879ff;
			background-color:#131313;
			position: absolute;
			left: 140px;
			outline: none;
			transition: .3s;
		}
		div > form >button:hover {
			position: absolute;
			top: 350px;
			color:#131313;
			text-align: center;
			width: 40%;
			height: 30px;
			border-radius: 40px;
			border:2px solid #2879ff;
			background-color:#2879ff;
			position: absolute;
			left: 140px;
			outline: none;
		}
		
	</style>
<meta charset="utf-8">
<title>AdminPanleLogin</title>
</head>

<body>
	<div id="d" class="col-sm-4">
		<form method="post" accept-charset="UTF-8">
			<input type="text" placeholder="username" name="username"><br>

			<input type="password" placeholder="password" name="password"><br>

			<button  name="btn" type="submit" values="">login</button>
		</form>

		<?php 
		session_start();
		require("connection/conn.php");
		echo "<h1 style='color:#2879ff;background-color:#131313;width:100%;position:relative;top:-150px;text-align:center;border-radius:40px;border:2px solid #2879ff;'>AdminPanel</h1>";
		if(isset($_POST["btn"])){
			$login=mysqli_query($con,"select * from admin where username='".$_POST['username']."' and password='".$_POST['password']."'");
			
			if(mysqli_num_rows($login)==1){
				$_SESSION['username']=$_POST["username"];
			header("location: adminpanel.php");
				}
			else {
				echo "<div style='width:100%;color:whitesmoke;background-color:#616F39;position:relative;top:250px;text-align:center'><h3>username or password is wrong</h3></div>";
}
		}
		
		
		if(isset($_GET['logout'])){
			session_unregister("username");
		}
		
		
		?>
	</div>
</body>
</html>
<?php
	if(isset($_SESSION["username"])){
		header("location: adminpanel.php");
	}
	
	?>