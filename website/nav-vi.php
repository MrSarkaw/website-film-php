<!DOCTYPE html>
<head>
 <?php 
require("nav.php");
require("connection/conn.php");
	
?>
	<script src="jquery-3.4.0.min.js"></script>
	      <meta name="viewport" content="width=device-width , initial=1.0">


	<style>
	
		.right-body{
			  position: relative;
			top: -20px;
			background-color: rgba(27,27,27,0.5);
			border-bottom: 2px solid #2879ff;float: left;
		}	
		
		
		h3  {
			color:#2879ff;
			font-weight: bold;
			text-align: center;display: block;
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
			top: -340px; left: 140px;
		}
		.po>h4{
			position: relative;
			top: -300px;	
			text-align: right;
			right: 15px;color: #2879ff;text-shadow: 1px 1px 5px black;
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
		#li{font-size: 20px;background-color: none;padding-left: 10px;padding-right: 10px;
			transition: .4s;text-decoration: none;text-align: center;
		}
		#li:hover{
			background-color:#2879ff;color: white;
		}
		#nav{
			background-color: #131313;
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}
		#nav::-webkit-scrollbar {
        width: 4px;
		background: #2879ff;
		height: 3px;
    }

    #nav::-webkit-scrollbar-thumb {
        background-color: white;
		border-radius: 30px;
    }
	</style>
</head>
<body>
	
	

	
	
	
<div class=" right-body col-sm-12  ">
	<h3><?php
		$naw=mysqli_query($con,"select * from genre where id_genre_film='".$_GET["id"]."'");
		 while($result=mysqli_fetch_assoc($naw)){
			 
			 echo $result["Genre_film"];
		 }
		?></h3> <hr>
	

			
				<?php
	$img=mysqli_query($con,"select * from film where id_film = any(select id_film from f_g where id_Genre_film='".$_GET["id"]."')");
	
	$num=mysqli_num_rows($img);
	$result_per_page=42;
	
	$num_of_page=ceil($num/$result_per_page);
	if(!isset($_GET["page"])){
		$page=1;
	}
	else {
		$page=$_GET["page"];
	}
	
		  $this_page_first_result=($page-1)*$result_per_page;

	
				$img=mysqli_query($con,"select * from film  where id_film=any(select id_film from f_g where id_Genre_film='".$_GET["id"]."') order by id_film desc  LIMIT ".$this_page_first_result." , ".$result_per_page."");
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


	<center>
		<div id="nav" style="width: 200px;overflow: scroll;overflow-y: hidden;">
		<?php
	
	
	for ($page=1;$page<=$num_of_page;$page++){
?>
	<a id="li" href="nav-vi.php?page=<?php echo $page ; ?>&id=<?php echo $_GET['id'];  ?>"><?php echo $page ?></a>
	<?php
	}
	
	?>
			</div>
	</center>
	
	
	
	
	
	
	

	
	
	
	
	
	
		
		<center><img src="logo/logo.png"></center>
	<center><h1 style="color: #2879ff">©2019</h1></center>


	
</body>
</html>
