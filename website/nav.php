<!DOCTYPE html>
<head>
  <title>هه‌ساره‌ی فیلم</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	

	
	
	
	<?php require("connection/conn.php"); ?>
	
	
	<style>
		body{
			background-image: url("image/film.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			background-position: center;
			font-family: "NRT";
		}
		
		#search{
			text-align: center;
			width: 250px;
			height: 40px;
			border:none; margin-top: 5px;margin-right: 50px;
			background-color:  #131313;
			outline: none;color:#2879ff;
		}
		.slide{
			background-color: white;
			color: black;
			height: 620px;
			position: relative;
			top: -20px;
		}
		.slide>img{
			width: 100%;
			position: relative;
			height: 300px;
			float: left;
			position: relative;
		}
		#logo{
			width: 80px;
			height: 80px;
			position: relative;
			top: -19px;
		}
		#myNavbar>ul>li>a{
margin-left: 10px;		}	
		#myNavbar>ul>li>a:hover{
			color: #2879ff;
		}
		#myNavbar>ul>li>img{
			width: 20px;height: 20px;
			position: relative; top: -35px;
		}
	</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid header">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" ><img src="logo/logo.png" id="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
		  <?php 
		  $sql=mysqli_query($con,"select * from genre");
		  	while($recorde=mysqli_fetch_assoc($sql)){ 
		  ?>
		  <li><a href="nav-vi.php?id=<?php echo $recorde['id_Genre_film'] ?>"><?php echo $recorde["Genre_film"] ?></a><img src="image/icon3.png"></li>
				<?php
			}
		  
		  ?>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><input type="search" name='search' id="search" placeholder="...گه‌ڕان"></li>
      </ul>
    </div>
  </div>
</nav>
  
</body>
</html>
