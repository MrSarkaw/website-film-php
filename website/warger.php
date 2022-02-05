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
			
		
	
		h3  {
			color:white;
			font-weight: bold;
			text-align: center;display: block;
			font-size: 20px;line-height: 30px;
		}
		h2{
			color: white;text-align: center;font-size: 20px;
		}
		ol{
			color: white; list-style: none;
		}
		ol li {
			float: left; margin-left: 60px;margin-top: 30px;font-size: 20px;
			
		}
		ol li a {
			color: white;
			
		}
		ol li a:hover {
			text-decoration: none;
		}
		table{
			width: 100%;
		}
		 hr {
			border:1px solid #2879ff;
			width: 100%;filter: 
		}
		

	
	</style>
</head>
<body>
	

	
	
	<h3 style="color: #2879ff;">وه‌رگێڕه‌كان</h3> <hr style="width: 90%;">
	
<ol>
	<?php
	$select=mysqli_query($con,"select * from warger");
	
	while($row=mysqli_fetch_array($select)){
		echo "<li><img src='icon/writing.png'> <a href='warger_de.php?name=".$row["name"]." '>".$row["name"]."</a></li>";
	}
	
	
	
	?>
	
	</ol>
			
	
	
	
	
				

	

	
	
	

	

	
</body>
</html>
