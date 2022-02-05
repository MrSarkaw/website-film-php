<!DOCTYPE html>
<head>
 <?php 
require("connection/conn.php");
	
?><title>هه‌ساره‌ی فیلم</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="jquery-3.4.0.min.js"></script>
	      <meta name="viewport" content="width=device-width , initial=1.0">


	<style>
		
		body{
			background-color: #131313;
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			font-family: "NRT";
		}
		
		.poster{
			margin-top: 50px;
		}
		.posterimg>img{
			height: 400px;
			width: 100%;
			transition: .4s;
		}
		
		table{
			color: #2879ff;
			font-size: 20px;text-align: right;border-radius: 10px;
			margin-top: 20px;
		}
		table tr{border-right:2px solid #2879ff;border-left:2px solid #2879ff;
			line-height: 40px; text-align: right;
			
		}
			table  tr  th{
			width: 200px;
			text-align: right;
				padding: 2px;
		}
		
		.details{
			margin-top: 3px;
		}
		.details>a{
			font-size: 18px; text-decoration: none;
			border:1px solid #2879ff;margin: 5px;
			position: relative;
			left: -15px;top: -56px;
		}
		

		@media only screen and (max-width:414px){
			.details>a{
				font-size: 13px;
				position: relative;
				left: 40px;
				top: 10px;
			}
			.posterimg>img{
				height:500px;
			}
			table tr th {
				font-size: 15px;
			}
			
		} 
		.icon{
			width: 24px;height: 24px;
		}
		button {
			position: relative;
			left: 10px;
			top: 10px;
		}
		button > img {
			width: 20px;height: 20px;
		}
		
	</style>
</head>
<body>
	<?php 
	require("connection/conn.php");
	$sql=mysqli_query($con,"select * from film where name_film='".$_GET["name"]."'");
	
	while($row=mysqli_fetch_assoc($sql) ){
		
		$user_id=$row["id_user"];
		$admin=mysqli_query($con,"select * from admin where id_user='".$user_id."'");
		while ($row3=mysqli_fetch_assoc($admin)){
			
		
		?>
	
	<button class="btn btn-primary btn-sm" onClick="back()"><img src="icon/home.png"></button>
	
<div class="container poster">
	<div class="col-sm-4 col-xs-12 col-md-3 posterimg" style="float: left;"><img src="../admin/image/<?php echo $row['image_film'] ?>"></div>
		
	

	
		<div class="col-sm-8 posterdet" style="float: right; text-align: right;">
			<table class="col-sm-12 ">
			
			<tr><th style="color:white;"><?php echo $row['name_film'] ?></th><th>: ناوی فیلم  <img src="icon/video-camera.png" class="icon"></th></tr>
			<tr><th style="color:white;"><?php echo $row['time'] ?></th><th>:كات <img src="icon/clock.png" class="icon" class="icon"></th></tr>
			<tr><th style="color:white;">
				
				
				<?php 
		$jor=mysqli_query($con,"select * from genre where id_Genre_film =any(select id_Genre_film from f_g
		where id_film='".$_GET["id"]."')");
			
			while ($rowj=mysqli_fetch_assoc($jor)){
				echo $rowj["Genre_film"] . ",";
			}
				
				?>
				
				
				
				
				</th><th>:جۆری فیلم <img src="icon/movie.png" class="icon"></th></tr>
			<tr><th style="color:white;"><?php echo $row['actors'] ?></th><th>:ئه‌كته‌ری به‌ژداربوو <img src="icon/actor.png" class="icon"></th></tr>
			<tr><th style="color:white;"><?php echo $row['year'] ?></th><th>: ساڵی ده‌رچوون <img src="icon/calendar.png" class="icon"></th></tr>
			<tr><th style="color:white;"><?php echo $row['description'] ?></th><th>:كورته‌ <img src="icon/edit.png" class="icon"></th></tr>
			<tr><th style="color:white;">
				
				<?php 
			$sql2=mysqli_query($con,"select * from warger where name =any(select name_warger from w_f where name_film ='".$_GET["name"]."' )");
			
			while ($row2=mysqli_fetch_array($sql2)){
							echo $row2['name'] .",";

			}
				
				
				
				?>
				
				
				</th><th>:وه‌رگێڕ‌ <img src="icon/subtitles.png" class="icon"></th></tr>
			<tr><th style="color:white;"><?php echo $row3['username'] ?></th><th>:بڵاوكراوه‌ته‌وه‌ له‌لایه‌ن <img src="icon/letter-mail-frontal-envelope-with-post.png" class="icon"></th></tr>

				
				
				
				<tr><th style="color:white;">
					<?php
					$no=$row['visitor'];
					$no=$no+1;
					mysqli_query($con,"update film set visitor='".$no."' where name_film='".$_GET["name"]."'");
					echo $no;
					?>
					
					</th><th>:‌‌‌بینراو <img src="icon/eye.png" class="icon"></th></tr>
			</table>
	
	</div><?php
	}
		
	}
	?>
		
	</div>
	
	
	
	
	
	
	<div class="container details">
		<?php 
		$det=mysqli_query($con,"select * from film where name_film = '".$_GET["name"]."' ");
		while($rowd=mysqli_fetch_assoc($det)){
			
		
		echo '<a href="'.$rowd["download"].'" style="color:white">داونلۆد <img src="icon/download.png"></a>';
		echo '<a href="'.$rowd["online_v"].'" style="color:white">بینینی ئۆنلاین <img src="icon/movie.png"></a>';
		echo '<a href="'.$rowd["trailer"].'" style="color:white"><img src="icon/youtube.png">تڕایله‌ر </a>';
		}
		
		
		?>
	</div>

	
	
	
	
	
	
	
	<script>
	
	function back(){
		window.history.back();
	}
	</script>
	
	

	
	
</body>
</html>
