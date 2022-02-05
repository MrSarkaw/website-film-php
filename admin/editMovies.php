<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

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
		.table{
			color:white;text-align: center;
		}
		center > form >input{
			border-radius: 20px;
			outline: none;
			border:2px solid #2879ff;
			background-color: #131313;
			width: 15%;
			height: 40px;
			color:#2879ff;
			text-align:center;
			margin-top: 50px
			
			
		}
		center>	form >button{
			border-radius: 20px;
			outline: none !important;
			border:2px solid #2879ff;
			background-color: #2879ff;
			width: 5%;
			height: 30px;
			color: #131313;
			margin-top: 50px

			
		}
		th >img{
			width: 200px;height: 300px;
		}
		.d1{
			overflow: scroll!important;
			overflow-y: hidden!important;
						margin-top: 50px

		}
		 th {
			width: 30%!important;
			text-align: center;
		}
		table  tr  th {
			border:2px solid #2879ff !important;
		}
			.d1::-webkit-scrollbar {
        width: 7px;
		height: 7px;
		background: #2879ff;
    }

    .d1::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: white;
		border-radius: 30px;
    }
		.d2>form >input{
			float: left;
			width: 70%;
			background-color: #131313 !important;
			color: #2879ff !important;
			border:2px solid #2879ff !important;
			margin-top: 4px; transition: .4s;
			
		}		
		.d2>form >textarea{
			float: left;
			width: 70%;
			background-color: #131313 !important;
			color: #2879ff !important;
			border:2px solid #2879ff !important;			margin-top: 4px;
}	
		#btn:hover{
			background-color:#2879ff !important;
			color: white !important;border:2px solid white !important;
		}
	</style>
<meta charset="utf-8">
<?php 
	include('connection/conn.php');
	?></head>

<body>
	<a href="adminPanel.php" style="margin: 20px;"><img src="icon/home.png"></a>

<center>	<form method="post">
		<input type="search" name="search">
		<button name="sub">search</button>
		
	</form></center>
<div class="container d1">
<table class="table table-bordered">
    <tr>
      <th scope="col">name</th>
      <th scope="col">poster</th>
      <th scope="col">time</th>
	  <th scope="col">actor</th>
      <th scope="col">year</th>
      <th scope="col">description</th>
      <th scope="col">id_user</th>	  
	  <th scope="col">linkOfmovie</th>
      <th scope="col">linkOfdownload</th>
      <th scope="col">linkOftrailer</th>
      <th scope="col">visitor</th>
    </tr>
    <?php
	  if(isset($_POST["sub"])){
		  $sql=mysqli_query($con,"select * from film where name_film='".$_POST["search"]."'");
		  if(isset($sql)){
			    while ($row=mysqli_fetch_array($sql)){
		  echo "<tr>";
		  echo "<th>".$row["name_film"]."</th><th><img src='image/".$row["image_film"]."'></th><th>"
			  .$row["time"]."</th><th>".$row["actors"]."</th><th>".$row["year"]."</th><th>".$row["description"]."</th><th>".$row["id_user"]."</th><th>".$row["online_v"]."</th><th>".$row["download"]."</th><th>".$row["trailer"]."</th><th>".$row["visitor"]."</th>";
		  echo "</tr>"; ?>
	
	<a href="editMovies.php?delete=<?php echo $row['name_film'] ?>" class="btn btn-danger">delete</a>
	<a href="editMovies.php?edit=<?php echo $row['id_film'] ?>" class="btn btn-primary">edit</a>
	<?php
	  }
	  
	if (isset($_GET["delete"])){
			$name=mysqli_real_escape_string($con,$_GET["delete"]);
		$sqldelete=mysqli_query($con,"delete from film where name_film='".$name."'");
		if (isset($sqldelete)){
			
			header("location: editMovies.php");
		}
	}
		  }
	  }
	
	?>
</table>
</div>	
	
	<?php
	
	if (isset($_GET['edit'])){
		$select=mysqli_query($con,"select * from film where id_film='".$_GET['edit']."'");
		while($row2=mysqli_fetch_assoc($select)){
			
		
		
		?>
	<div class="col-sm-6 d2" style="position: relative;left: 32%;">

		<form method="post" style="margin-top: 30px;" enctype="multipart/form-data">
			<input require="" type="text" name="name_film" value="<?php echo $row2['name_film'] ?>">
			<input require="" type="file" name="file">
			<input require="" type="text" name="time"  value="<?php echo $row2['time'] ?>">
			<input require="" type="text" name="actors"  value="<?php echo $row2['actors'] ?>">
			<input require="" type="date" name="year"  value="<?php echo $row2['year'] ?>">
	   	    <textarea  require=""  name="des"><?php echo $row2['description'] ?></textarea>
			<input require="" type="url" name="online_v" value="<?php echo $row2['online_v'] ?>">
			<input require="" type="url"  name="download" value="<?php echo $row2['download'] ?>">
			<input require="" type="url"  name="trailer" value="<?php echo $row2['trailer'] ?>">
			<input require="" type="submit" value="edit" class="btn btn-success" id="btn" name="btn">
		
		</form>
	</div>
	<?php
			if(isset($_POST["btn"])){
			
		
					$name_film=mysqli_real_escape_string($con,$_POST["name_film"]);
					$time=mysqli_real_escape_string($con,$_POST["time"]);
					$actor=mysqli_real_escape_string($con,$_POST["actors"]);
					$year=mysqli_real_escape_string($con,$_POST["year"]);
					$des=mysqli_real_escape_string($con,$_POST["des"]);	$online_v=mysqli_real_escape_string($con,$_POST["online_v"]);
					$download=mysqli_real_escape_string($con,$_POST["download"]);
					$trailer=mysqli_real_escape_string($con,$_POST["trailer"]);
					
					
					$target="image/".basename($_FILES["file"]["name"]);
					$image=$_FILES["file"]["name"];
					
				$update=mysqli_query($con,"UPDATE film
				SET name_film=".$name_film." ,
				image_film='".$image."' ,
				time='".$_POST["time"]."' ,
				actors=".$actor." ,
				year=".$year.",
				description=".$des." ,
				online_v=".$online_v.",
				download=".$download.",
				trailer=".$trailer."
				WHERE id_film='".$_GET["edit"]."' ");
					
					if(move_uploaded_file($_FILES["file"]["tmp_name"],$target) and isset($update)){
						header("location: editmovies.php");
					}
					else {
						echo die($update);
					}
			}
		
			
			
				
			
			
			
			
			}
	}
	?>
		
</body>
</html>