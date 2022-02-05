<!doctype html>
<html>
<head>
	<style>
		body{
			background-color: #131313 !important;
		}
		
		#divinadd{
			height: 400px;
			border-radius: 40px;
			float: left;
		}
			form >input{
			width: 100%;
			height: 50px;
			border:2px solid #2879ff;
			background-color:#131313;
			position: relative;
			top: 10px;
			border-radius: 40px;
			text-align: center;
			outline:none;
			font-size: 30px;
			color:#2879ff;
			margin-top: 30px !important;	
			
		}
		form >button {
			border:2px solid #2879ff;
			color: whitesmoke !important;
			text-align: center;
			width: 30%;
			height: 30px;
			border-radius: 40px;
			background-color: #131313;
			outline: none;
			position: relative;
			left: 40px;
			top: 30px;
		}
		form >select{
			outline:none;width: 100px; height: 
			30px; background-color: #131313;color: whitesmoke !important;	font-weight: bold;
			position: relative;
			left: 30px;color: #2879ff;
			top: 30px;border-radius: 40px;
		}
		
		div>.admin{
			position: relative;
			top: 97px;
			padding: 6px;	
			padding-left: 40px;
			padding-right: 40px;
			color: whitesmoke;
			text-align: center;
			width: 30%;
			height: 30px;
			margin-left: 20px;
			border-radius: 40px;
			border:2px solid #2879ff;
			background-color: #131313;
			left: 40px;
			outline: none;
			text-decoration: none !important;
		}
		#divDisplayAdmin{
			float: right;
			height: 400px;
			border:2px solid #2879ff;
			border-bottom-left-radius: 40px;
			border-top-left-radius: 40px;
			color: white; overflow: scroll; overflow-x: hidden;
		}
		#divDisplayAdmin::-webkit-scrollbar{
			width: 8px; background-color: white;color: #2879ff;
		}	
		#divDisplayAdmin::-webkit-scrollbar-thumb{
			width: 8px; background-color: #2879ff ;color: #2879ff;
			border:2px solid #2879ff;
		}
		
		table  {
		font-size: 16px;
		font-weight: bold;
		width: 100%;
		
		
		
	}
	th {
		border-left: 2px solid #2879ff;
		border-collapse:collapse;
	}
		h3{
			text-align: center;
			color: #2879ff !important;
		}
	</style>
<meta charset="utf-8">
	<?php 
	session_start();
	
	
	if(!isset($_SESSION['username'])){
		header("location: adminpanellogin.php");
	}
	?></head>

	
	
<body>
	<a href="adminPanel.php" style="margin:10px;"><img src="icon/home.png"></a>	
	
	<div class="container d1">

		
	<div id="divinadd" class="col-sm-5">

	<form method="post">
		<input type="text" name="username" placeholder="username"> <br>
		<input type="text" name="username" placeholder="username"> <br>
		<input type="text" name="firstname" placeholder="firstname"> <br>
		<input type="password" name="password" placeholder="password"> <br>
		<select name="level">
			<option value="manger">manger</option>
			<option value="admin">admin</option>
		</select>
		<button type="submit" name="add">add</button>
		<div>
		<a class="admin" href="deladmin.php">delete</a>
		<a class="admin" href="upadmin.php">update</a>
		</div>
	</form>
		<?php 
		include("connection/conn.php");
		
		
		if(isset($_POST["add"])){

		$insert="INSERT INTO admin(first_name,username,password,permission_level) VALUES('".$_POST["firstname"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["level"]."')";
	$insertt=mysqli_query($con,$insert);

	if(isset($insertt)){
		echo '<div style="width:100%;height;30px;background-color:#616F39;color:white;text-align:center;position:relative;top:20px;left:0px;"><h3>insert it</h3></div>';
	}
	
	}?>
	</div>
	
	
	
		<div  class="col-sm-5">
			<h3>ئه‌دمینه‌كان</h3>
			<div id="divDisplayAdmin" class="col-sm-12">
	<table class="col-sm-12">
			<tr><th>id</th><th>username</th><th>first name</th><th>password</th><th>level</th></tr>
		
		<?php
				include("connection/conn.php");

		$sql1="select * from admin";
		
		$user=mysqli_query($con,$sql1);
	
		
		
		if(mysqli_num_rows($user)>0){
			while ($us=mysqli_fetch_assoc($user)){
			
			echo "<tr><th>".$us["id_user"]."</th><th>".$us["username"]."</th><th>".$us["first_name"]."</th><th>".$us["password"]."</th><th>".$us["permission_level"]."</th></tr>";
			
		}
		
		}
		?>
	</div>
			</div>
	</div>
</body>
</html>