<!DOCTYPE html>
<head>
 <?php 
require("nav.php");
require("connection/conn.php");
	
?>
	<script src="jquery-3.4.0.min.js"></script>
	      <meta name="viewport" content="width=device-width , initial=1.0">


	<style>
		.slide{
			background-color: #131313;
			 overflow: hidden;
		}
		.slide>div>div{
			float: left;
			position: relative;left: 0px;
		}
		
		.img>img{
			width: 100%;height: 650px !important; 
				
		}
		#divslide{
			width: 307%
		}
		#divslide>h1{
			color: white ;
			text-shadow: 1px 1px 10px black;
			position: relative;
			top: -600px;
			font-size: 70px;
			left: 400px;
		}
		.right-body{
			  position: relative;
			top: -20px;
			background-color: rgba(27,27,27,0.5);
			border-bottom: 2px solid #2879ff;float: left;
		}	
		
		.left-body{
			height: 1294px;position: relative;
			top: -20px; border-left: 2px solid #2879ff;
			overflow: scroll;
			overflow-x: hidden;background-color: rgba(27,27,27,0.5);
						border-bottom: 2px solid #2879ff;

		}
		h3  {
			color:white;
			font-weight: bold;
			text-align: center;display: block;
			font-size: 20px;line-height: 30px;
		}
		 hr {
			border:1px solid #2879ff;
			width: 100%;filter: 
		}
		.post{
			border:2px solid #2879ff;
			position: relative;
			margin-top: 20px;
			border-radius: 10px;
			filter: grayscale(100); 
			transition: .2s;
			overflow: hidden;
			color: #2879ff;
		}
		.post:hover{
			filter: grayscale(0)
		}
		.post > img {
			height: 160px;
			width: 60%;
			position: relative;
			left: 50px;top: 10px;
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
			top: -340px; left: 140px;
		}
		.po>h4{
			position: relative;
			top: -300px;	
			text-align: right;
			right: 15px;color: #2879ff;text-shadow: 1px 1px 5px black;
		}
		.left-body::-webkit-scrollbar,.post2::-webkit-scrollbar {
        width: 7px;
		background: #2879ff;
    }

    .left-body::-webkit-scrollbar-thumb , .post2::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: white;
		border-radius: 30px;
    }
		
		center>img{
			width: 250px; height:250px;
			position: relative;
			top: 30px;
		}
		.drezha{
			background-color: #131313 !IMPORTANT;
			text-decoration: none !IMPORTANT;
			font-size: 20px; border:2px solid #2879ff;
			position: relative; top: -40px	;left:60px;
			color: #2879ff;
			padding: 5px;
			
		}
		.drezha:hover{
			color:white !IMPORTANT;
			background-color: #2879ff !IMPORTANT;
		}
		.bas{
			display: none;
		}
		@media only screen and (max-width:1085px){
			.slide{
				display: none;
			}
			
			
		}
		
		.post2{
			
			border: 2px solid #2879ff;clear: both;color: #2879ff;
			height: 1200px;overflow: scroll;overflow-x: hidden;
		} 
		.wta {
			border:2px solid #2879ff;position: relative;left: 0px;
			height: 300px;background-color: #111111; margin-top:10px;
			overflow: hidden;	
		}
		
		
		.wtaka{
			position: relative;
			overflow: scroll;
			overflow-x: hidden;
			border-top: 2px solid #2879ff;
			border-left: 2px solid #2879ff;
			height: 200px;
			position: relative;
			top: 50px;text-align: center;
			
		}
		.wtaka>h3{
			color: #2879ff;
		}
		.wtaka>h4{
			line-height:30px;
			color: white;
		}
		
			.wtaka::-webkit-scrollbar {
        width: 7px;
		background: #2879ff;
    }
		.wta>img{
			width: 35%;
			height: 300px;
			background-size: cover;
			float: right
			 
		}

    .wtaka::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: white;
		border-radius: 30px;
    }
		@media only screen and (max-width:760px){
			.wtaka{
				width: 50%;
			}
			.wta>img{
				position: relative;
				top: -100px;height: 100px;
				width: 50%;left: 10px;
			}
			
			
		}
		
	</style>
</head>
<body>
	
	
<div class="container-fluid  slide">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      
		<div class="item active img">
			
        <img src="image/235871.jpg" style="width:100%;">
        
      </div>
 
		<div class="item  img">
			
        <img src="image/235874.jpg" style="width:100%;">
        
      </div>

     <div class="item  img">
			
        <img src="image/235912.jpg" style="width:100%;">
        
      </div>

     
    
     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

	</div>
	</div>
	
	
	
	

	
	
	<div class=" right-body col-sm-9  ">
	<h3 style="color: #2879ff;">تازه‌ترین فلیمه‌كان</h3> <hr>
	

			
				<?php
	
				$img=mysqli_query($con,"select * from film order by id_film desc");
				$num=mysqli_num_rows($img);
				$result_per_page=16;
				$num_of_page=ceil($num/$result_per_page);
				
	if(!isset($_GET["page"])){
		$page=1;
	}
	else {
		$page=$_GET["page"];
	}
	
$this_page_first_page=($page-1)*$result_per_page;
	
	$img=mysqli_query($con,"select * from film order by id_film desc LIMIT ".$this_page_first_page." , ".$result_per_page."");
	
	
	
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


	
	
	

	
<div class=" left-body col-sm-3 ">
	
	
	<h3 style="color: #2879ff">ده‌رباره‌ی ئه‌كته‌ران</h3>
	<hr>
	
	<?php  
	$actor=mysqli_query($con,"select * from actors order by id_actor desc");
	while($r=mysqli_fetch_array($actor)){
		
	?>
	<div class="col-sm-12  post ">
	 <img src="../admin/actor/<?php echo $r['image_actor']; ?>" class="img-circle dactor">
		<h3 style="color: #2879ff"><?php  echo $r["actor_name"]?></h3>
		<h4 style="text-align: center">درێژه‌</h4>
		<h3 class="bas"><?php echo $r["des"] ?></h3>
	</div> 
	<?php
	}
	?>
</div>
	

	
	
	<div class="container-fluid post2">
	<center><h3 style="color: #2879ff">وته‌ی ناو فلیمه‌كان</h3></center>
		<hr>
	<?php  
	$qou=mysqli_query($con,"select * from qouteoffilms order by id_qoute desc");
	while($r=mysqli_fetch_array($qou)){
		
	?>
	<div class="container wta ">	
		<div class="col-sm-6 wtaka">
			<h3 style="display: inline ; "><?php echo $r["name_films"] ?></h3>
			<h4><?php echo $r["qoute"] ?></h4>
		</div>
	 <img src="../admin/qoute/<?php echo $r['image_film']; ?>" >
			
	</div> 
	<?php
	}
	?>
	</div>	

	
	
	
	
	
		<div class="container-fluid" style="background-color: #131313;" >
			<center><a href="warger.php" id="warger" style=";font-size: 30px;text-decoration: none;">وه‌رگێڕه‌كان</a></center>
	<center><img src="logo/logo.png"></center>
	<center><h1 style="color: #2879ff">©2019</h1></center>
			
</div>
		

	
</body>
</html>

<script>
var x=$(".post",function(){
	x.on("click",function(){
		$(this).find(".bas").slideToggle(500);
	})
})
</script>