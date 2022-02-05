<!doctype html>
<html>
<head>
		<?php 
	session_start();
	
	
	if(!isset($_SESSION['username'])){
		header("location: adminpanellogin.php");
	}
	?>
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
			float: left;
			height: 400px;
			border:2px solid #2879ff;
			border-bottom-left-radius: 40px;
			border-top-left-radius: 40px;width: 400px;
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
</head>

<body>
	<a href="adminPanel.php" style="margin:10px;"><img src="icon/home.png"></a>	


	<div class="container">
	<div id="divinadd" class="col-sm-5">

	<form method="post">
		<input type="text" name="firstname" placeholder="firstname"> <br>
		
		<button type="submit" name="add">delete</button>
		<div>
		<a class="admin" href="upadmin.php">update</a>
		<a class="admin" href="addadmin.php">add</a>
		</div>
	</form>
		<?php 
		include("connection/conn.php");
		
		
		if(isset($_POST["add"])){

		$insert="delete from admin  where first_name='".$_POST["firstname"]."'"; 
			$insertt=mysqli_query($con,$insert);
	if(isset($insertt)){
		echo '<div style="width:100%;height;30px;background-color:#616F39;color:white;text-align:center;position:relative;top:120px;left:0px;"><h3>deleted it</h3></div>';
	}
	
	}?>
	</div>
	
	<div id="divDisplayAdmin">
	<table>
			<tr><th>username</th><th>first name</th><th>password</th><th>level</th></tr>
		
		<?php
				include("connection/conn.php");

		$sql1="select * from admin";
		
		$user=mysqli_query($con,$sql1);
	
		
		
		if(mysqli_num_rows($user)>0){
			while ($us=mysqli_fetch_assoc($user)){
			
			echo "<tr><th>".$us["username"]."</th><th>".$us["first_name"]."</th><th>".$us["password"]."</th><th>".$us["permission_level"]."</th></tr>";
			
		}
		
		}
		?>
	</div>
</div>
</body>
</html>