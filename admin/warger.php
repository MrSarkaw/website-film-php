<!doctype html>
<html>
<head>
		<?php 
	session_start();
	
	
	if(!isset($_SESSION['username'])){
		header("location: adminpanellogin.php");
	}
	?>
	   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <meta name="viewport" content="widt=device-width , initial=1.0">
<meta http-equiz="contetn.type" content="text/html" charset="utf-8">
	<style>
		body{
			background-color: #131313 !important;
		}
		
		#div7{
			position: absolute;
			top:100px;
			left: 300px;width:70%;height: 400px;
			
			float: left;
			border-radius: 40px
		}
		div >form>	input{
			width: 100%;
			height: 35px;
			border:none;
			background-color:#131313 !important;
			border:2px solid white;
			color: #white !important;
			position: relative;
			top: 30px;
 			margin-top: 30px !important;
			border-radius: 40px;
			text-align: center;
			outline:none;
			font-size: 20px;
				
			
		}
		div > form >textarea{
			width: 99%;
			height: 130px;
			border:none;
			background-color:none;
			position: relative;
			top: 50px;
			text-align: center;
			outline:none;
			font-size: 20px;
			color:whitesmoke;
			background-color:none;
				border:1px solid #131313;
				color: #131313;
				
		}
		button {
			position: absolute;
			top: 350px;
			color: whitesmoke;
			text-align: center;
			width: 60%;
			height: 40px;
			border-radius: 40px;
			border:none; left: 160px;
			position: absolute;
			outline: none;
			font-weight: bold;
			background-color:white;
			border:1px solid #131313;
			color: #131313;
			font-size: 20px;
		}
		select{
			outline:none;width: 100px; height: 
			30px;	font-weight: bold;
			position: relative;
			left: 30px;
			top: 30px;border-radius: 40px;
			background-color:none;
				border:1px solid #131313;
				color: #131313;
		}
		
		#file{
			padding: 20 30;	
			background-color:none;
				border:1px solid #131313;
				color: #131313;
		}
	
	
	</style>
<meta charset="UTF-8">
<?php 
	include("connection/conn.php");
				echo	mysqli_set_charset($con,'UTF-8');
	?></head>

<body>
	
	
		<a href="adminPanel.php"><img src="icon/home.png" style="margin:10px;"></a>

		<div id="div7">

	<form method="post" enctype="multipart/form-data">
		<input type="text" name="namew" placeholder="ناوی فیلم"> 
		<input type="file" name="file" placeholder="ڕه‌سمی فیلم" id="file"> 
		<input type="number" name="age" placeholder="ته‌مه‌ن">
	<button type="submit" name="insert">داخڵ كردن</button>
		
		
	</form>
		<?php 
		include("connection/conn.php");
		
		
		if(isset($_POST["insert"])){
	
			$id_user=mysqli_query($con,"select id_user from admin where username ='".$_SESSION["username"]."'");
				while($row=mysqli_fetch_assoc($id_user))
				{
			$target="qoute/".basename($_FILES["file"]["name"]);
			$image=$_FILES["file"]["name"];
			
	$insert=mysqli_query($con,"insert into warger (name,img_warger,age,id_user)
	values('".$_POST["namew"]."','".$image."','".$_POST["age"]."','".$row["id_user"]."')");
		
			
	if(move_uploaded_file($_FILES["file"]["tmp_name"],$target) and isset($insert)){
		echo '<div style="width:100%;height;30px;background-color:#616F39;color:white;text-align:center;position:relative;top:120px;left:0px;"><h3>insert it</h3></div>';
	}
	
	}

				}
		
			
			
				
		
		
		?>
	

</body>
</html>