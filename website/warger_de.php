<!DOCTYPE html>
<head>
 <?php 
require("nav.php");
require("connection/conn.php");
	
?>
	<script src="jquery-3.4.0.min.js"></script>
	      <meta name="viewport" content="width=device-width , initial=1.0">


	<style>
		body{
			background-color: #131313;
			background-image: none;
		}
		.d1{
			height: 500px;
			border-radius: 45px;
			overflow: hidden;
			text-align: center;
			float: left;
			
		}
		.d1 > img{
			height: 500px;
			width: 100%;
			border-radius: 40px;
		}
		ol{
			position: relative;top: -100px;
			color: white;
			list-style: none;
			font-size: 20px;
			background-color: #131313;
			text-align: center;
			width: 100%;
		}
		
		
		.d2{
			overflow: scroll;
			overflow-x: hidden;
			float: left;
			height: 500px;
			text-align: center;
			border-top: 2px solid #2879ff;
			border-left: 2px solid #2879ff;
			
		}
		.d2::-webkit-scrollbar{
			 width: 7px;
		background: #2879ff;
		}
		.d2::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: white;
		border-radius: 30px;
    }
		@media only screen and (max-width:1024px){
			.d1>img{
				height: 300px;
				width: 110%;
			}
			
		}
			
			
			
			@media only screen and (max-width:754px){
			.d2{
			clear: both;
				width: 100%;
				
			}
			.d1{
				margin-left: 40px;
			}
			.d1>img{
				height: 400px;
			}
			
		}
		 hr {
			border:1px solid #2879ff;
			width: 100%;filter: 
		}
		.po{
			
			height: 280px;
			width: 180px; float: left; display: inline;
			margin: 10px;position: relative;left: 50px;
						

		}
		
			.po > img {
			height: 280px;
			width: 180px;
			position: relative; 
			transition: .3s;
		}
		.time{
		width: 30px !IMPORTANT;	
		height: 30px !IMPORTANT;	
			position: relative;
			top: -340px; left:80px;
		}
		.po>h4{
			position: relative;
			top: -300px;	
			text-align: right;
			right: 15px;color: #2879ff;text-shadow: 1px 1px 5px black;
		}
		
		.drezha{
			background-color: #131313 !IMPORTANT;
			text-decoration: none !IMPORTANT;
			font-size: 20px; border:2px solid #2879ff;
			position: relative; top: -40px	;left:20px;
			color: #2879ff;
			padding: 5px;
			
		}
		.drezha:hover{
			color:white !IMPORTANT;
			background-color: #2879ff !IMPORTANT;
		}
	</style>
</head>
<body>
	

	
	<div class="col-sm-3 d1" >
		<?php
			$select=mysqli_query($con,"select * from warger where name='".$_GET["name"]."'");
			while ($row=mysqli_fetch_array($select)){
				
		
			?>
		<img src="../admin/actor/<?php echo $row['img_warger'] ?>" class="container">
		 
		<ol>
			
		 	<li><?php echo $row["name"] ?> :ناو</li>
		 	<li><?php echo $row["age"] ?> :ته‌مه‌ن</li>
		 
			
			<?php } ?>
		</ol>
		
	</div>
	
	<div class="col-sm-9 d2">
	<h3 style="color:  #2879ff;">
		<?php 
		$img=mysqli_query($con,"select * from film where name_film=any(select name_film from w_f where name_warger='".$_GET["name"]."') order by id_film desc ");
		
			echo mysqli_num_rows($img);

		
		?>
		
	:	ئه‌و فلیمانه‌ی به‌ژداربووه‌ له‌ ژێرنووس كردنی
		
		</h3><hr>
		
		
		
		<?php
	
				
	
	$img=mysqli_query($con,"select * from film where name_film=any(select name_film from w_f where name_warger='".$_GET["name"]."') order by id_film desc ");
	
	
	
				while($imgr=mysqli_fetch_assoc($img)){
						echo '<div class="po container ">' ;
				?>
			<img  src="../admin/image/<?php echo $imgr['image_film']; ?>">
				<a href="post.php?name=<?php echo $imgr['name_film']; ?>&id=<?php echo $imgr["id_film"] ;?>" class="drezha"> درێژه‌</a>
				<h4><?php echo $imgr["time"];  ?></h4><img src="image/clock.png" class="time">
	<?php  echo "</div>";
				}
				?>		
		
		
	</div>
	
	
	
				

	

	
	
	

	

	
</body>
</html>
