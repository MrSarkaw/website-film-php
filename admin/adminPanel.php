
	<?php 
	
	session_start();
	
	if(!isset($_SESSION['username'])){
		header("location: adminpanellogin.php");
	}
else {
		echo "<h1 style='text-align:center;color:whitesmoke'>welcome ".$_SESSION['username']."</h1>";

}
	
	
	?>


<!doctype html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<style>
		body{
			background-color:  #131313;
			font-family: "NRT" !important;
		}
		#dlink{
			height: 500px;
		border-radius: 10px;
			color:#2879ff;
			}
		ol {
			list-style: none;
		}
		
		ol li {
			height: 60px;
			color:#2879ff;
			text-align: center;
			position: relative;
			float: left;
			width: 30%;
			margin-top: 100px;

			
		}
		ol li a {
			width: 100%;
			text-decoration: none !important;
			font-size: 20px;
			font-weight: bold;
			color:#2879ff;
			position: relative;
		}
		
		
	</style>
<meta charset="utf-8">
<title>AdminPanle</title>
</head>

<body>
<div class=" container " id="dlink">
		<ol>
			<li>
				<img src="icon/admin-with-cogwheels.png">
			  <a href="addadmin.php">ئه‌دمینه‌كان</a>
			</li>
			<li>
				<img src="icon/video-camera.png">
			  <a href="addmovies.php">زیادكرنی فیلم</a>
			</li>
			<li>
				<img src="icon/engineer.png">
			  <a href="editMovies.php">چاكسازی</a>
			</li>
				<li>				
					<img src="icon/actor.png">
					<a href="addactor.php">ئه‌كته‌ره‌كان</a>
				</li> 
			<li>				
				<img src="icon/actor.png">
			  <a href="warger.php">وه‌رگێره‌كان</a>
				
		  </li> 	
			
			<li>
				<img src="icon/edit.png">
					<a href="qoute.php">وته‌ی فلیمه‌كان‌</a>
				</li> 
		</ol>
  </div>
</body>
</html>
