<!doctype html>
<html>
		<?php 
	session_start();
	
	
	if(!isset($_SESSION['username'])){
		header("location: adminpanellogin.php");
	}
	?>
<head>
	<link rel="stylesheet" href="font/font.css">
	   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <meta name="viewport" content="widt=device-width , initial=1.0">
<meta http-equiz="contetn.type" content="text/html" charset="utf-8">
	<style>
		body{
			background-color: #131313 !important;
		}
		#div7{
			top:50px;
			height: 700px;
			border:2px solid #2879ff;
			float: left;border-top-right-radius: 40px;
			border-bottom-right-radius: 40px;
		}
		
		#div2{
			top:50px;
			height: 700px;border:2px solid #2879ff;
			border-top-left-radius: 40px;
			border-bottom-left-radius: 40px;
			float: left; overflow: scroll;overflow-x: hidden;
		}
		
		#div2::-webkit-scrollbar{
			width: 7px;
			background-color: #2879ff;
			color: #131313;
		}
		#div2::-webkit-scrollbar-thumb{
			width: 7px;
			background-color: #131313;
						border:2px solid white;

		}
		#dw{
			border:2px solid #2879ff;
				
		}
			form >input{
			width: 100%;
			height: 35px;
			border:none;
			background-color:#131313;
				border:2px solid #2879ff;
				color: #2879ff;
			position: relative;
			top: 30px;
 			margin-top: 20px !important;
			border-radius: 40px;
			text-align: center;
			outline:none;
			font-size: 20px;
				
			
		}
		form >textarea{
			width: 80%;
			height: 130px;
			border:none;
			background-color:#131313;
			position: relative;
			top: 50px;
			left: 30px;
			text-align: center;
			outline:none;
			font-size: 20px;
			background-color:none;
				border:2px solid #2879ff;
				color: #2879ff;
				
		}
		form >button {
			height: 40px;
			border-radius: 40px;
			border:none; 
			text-align: center;
			outline: none;
			font-weight: bold;
			position: relative;
			top: 40px;
			left: 150px;
			font-size: 20px;
			
		}
		form >select{
			outline:none;width: 100px; height: 
			30px;	font-weight: bold;
			position: relative;
			left: 30px;
			top: 30px;border-radius: 40px;
			background-color:#131313;
				border:2px solid #2879ff;
				color: #2879ff;
		}
		
		#file{
			padding: 20 30;	
			background-color:none;
				border:2px solid #2879ff;
				color: #2879ff;
		}
		#b{
			position: relative;
			top: 100px;
			left:80px;
		background-color:none;
				border:2px solid #2879ff;
				color: #2879ff;}
		
		.check{
			width: 20px; height: 20px;display: inline;
			position: relative;top: 5px;
		}
		
		hr{
			position: relative;
		}
		#jf{
			width: 150px;
			position: relative;
			top: -10px;
			left: 10px;		

		}
		#btnf{
			width: 100%;
			position: relative;
			top: -5px;
			left: 0px;
			height: 30px;
			margin-top: 10px;
 			}
		#hf{
			position: relative;
			top: 0px;display: inline;
			left: 10px;top: -10px;
						color: #2879ff !important;

		}
		.b{
			position: relative;
			top: 0px;
		}
		h3 , center>h3{
			color: #2879ff
		}
	</style>
<meta charset="UTF-8">
<?php 
	include("connection/conn.php");
				echo	mysqli_set_charset($con,'UTF-8');
	?></head>

<body>
	
	<a href="adminPanel.php" style="margin:10px;"><img src="icon/home.png"></a>	
<div class="container-fluid">
		<div id="div7" class="col-sm-4">

	<form method="post" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="ناوی فلیم"> 
		<input type="file" name="file" placeholder="ڕه‌سمی فلیم" id="file"> 
		<input type="text" name="time" placeholder="كاتی فلیم"> 
		<input type="text" name="actor" placeholder="ناوی ئه‌كته‌ران"> 
		<input type="date" name="year" placeholder="ساڵی ده‌رچوون">
				<textarea name="des" > ...كورته‌ی فلیم</textarea>
		<input type="url" name="download" placeholder="لینكی داونلۆد">
		<input type="url" name="onv" placeholder="لینكی سێركردنی ڕاسته‌ خۆ">
		<input type="url" name="trailer" placeholder="لینكی تڕایله‌ر">
		
	<button type="submit" name="insert" class="btn btn-primary">داخڵ كردن</button>
		
		
	</form>
		<?php 
		include("connection/conn.php");
		
		
		if(isset($_POST["insert"])){
	
			$id_user=mysqli_query($con,"select id_user from admin where username ='".$_SESSION["username"]."'");
				while($row=mysqli_fetch_assoc($id_user))
				{
								$target="image/".basename($_FILES["file"]["name"]);
			$image=$_FILES["file"]["name"];
			
	$insert=mysqli_query($con,"insert into film (name_film,image_film,time,actors,year,description,id_user,online_v,download,trailer,visitor)  values('".$_POST["name"]."','".$image."','".$_POST["time"]."','".$_POST["actor"]."','".$_POST["year"]."','".$_POST["des"]."','".$row["id_user"]."','".$_POST["onv"]."','".$_POST["download"]."','".$_POST["trailer"]."',0)");
		
			
	if(move_uploaded_file($_FILES["file"]["tmp_name"],$target) and isset($insert)){
		echo '<div style="width:100%;height;30px;background-color:#616F39;color:white;text-align:center;position:relative;top:120px;left:0px;"><h3>insert it</h3></div>';
	}
	
	}

				}
		
			
			
				
		
		
		?>
	</div>
	
	
	<div class="col-sm-4 dw">
	<h2 style="text-align: center;color:#2879ff;">هه‌ڵبژارندی وه‌رگێڕ</h2><hr style="border:1px solid #2879ff;
">
		
			<form method="post">

		<select name="fw" style="position: relative;top: 5px;left: 0px;width: 100%;">
			<?php
						   $select=mysqli_query($con,"select * from film order by id_film desc");
						 while($fm=mysqli_fetch_assoc($select)){
							 
							 echo  "فلیمی ویستراو<option value='".$fm["name_film"]."'> ". $fm["name_film"]." </option>"; 
						 }
			
			
			?>
			
			
		</select>
	
		<select name="warger" style="position: relative;top: 25px;left: 0px;width: 100%;">
			<?php
						   $selectw=mysqli_query($con,"select * from warger");
						 while($fmw=mysqli_fetch_assoc($selectw)){
							 
							 echo  "فلیمی ویستراو<option value='".$fmw["name"]."'> ". $fmw["name"]." </option>"; 
						 }
			
			
			?>
			
			
		</select>
	<button type="submit" class="btn btn-primary" name="insertw" style="position: relative;top: 40px;">داغڵ كردن</button>
			<button type="submit" class="btn btn-danger" name="delete">لابردن</button>

		</form>
	<?php 
		if(isset($_POST["insertw"])){
			$insertw=mysqli_query($con,"insert into w_f values('".$_POST["fw"]."','".$_POST["warger"]."')");
			if(isset($insertw)){
				echo "داغڵ كرا ";
			}
		}
		
		
		if(isset($_POST["delete"])){
			$delte=mysqli_query($con,"delete from w_f where name_film='".$_POST["fw"]."'");
			if(isset($delete)){
				echo "سڕایه‌وه‌ ";
			}
		}
		
		?>
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
		<div id="div2" class="col-sm-4">

	<form method="post" enctype="multipart/form-data">
		<input type="text" name="jf" id="jf" style="width: 95%;" placeholder="جۆری فیلم" >
		<button type="submit" name="btnf" id="btnf" class="btn btn-primary">داغڵ كردن</button>
		<button type="submit" name="dbtnf" id="btnf" class="btn btn-danger">لابردن</button>
		<hr>
		<?php 
		if(isset($_POST["btnf"])){
						$insertJF=mysqli_query($con,"insert into genre (Genre_film)values('".$_POST["jf"]."')");

		}
		 if(isset($_POST["dbtnf"])){
						$delete=mysqli_query($con,"delete from genre where Genre_film='".$_POST["jf"]."'");

		}
		
		?>
		
		
		
		<center><h3>هه‌ڵبژادنی فلیمی ویستراو</h3></center>
		<select name="fm" style="position: relative;top: 5px;left: 0px;width: 100%;">
			<?php
						   $select=mysqli_query($con,"select * from film");
						 while($fm=mysqli_fetch_assoc($select)){
							 
							 echo  "<option value='".$fm["id_film"]."'> ". $fm["name_film"]." </option>";
						 }
			
			
			
			?>
			
			
			
		</select>
	
			<hr>


		
		
		<?php
					  $ch=mysqli_query($con,"select * from genre");
		if(mysqli_num_rows($ch)>0){
					  while($des=mysqli_fetch_array($ch)){
						  ?>
					<br> <input type="checkbox" name="checkbox" class="check" value="<?php echo $des["id_Genre_film"]  ?>">
		<button type="submit" name="insert3" class="btn btn-primary b" >داغڵكردن</button>
					<?php echo "<h4 style='color:white'>".$des["Genre_film"]."<h4><hr>"; 

		
					  } 
		}
		?>

		

		
		
	</form>
		<?php 
		include("connection/conn.php");
		if(isset($_POST["insert3"])){
			$insertf=mysqli_query($con,"insert into f_g (id_film,id_genre_film) values ('".$_POST["fm"]."','".$_POST["checkbox"]."')");
		}	
		
		?>
			
			
			<form method="post">
				<input type="text" name="deletejor" placeholder="ناوی فیلم">
				<input type="submit" class="btn btn-danger" style="width: 100%;position: relative;left: 0px;" name="btndeletejor" value="لابردن">
				<?php
				if(isset($_POST["btndeletejor"])){
					
		$film=mysqli_query($con,"select * from film where name_film='".$_POST["deletejor"]."'");
					while($film2=mysqli_fetch_assoc($film)){
						$labrdn=mysqli_query($con,"delete from f_g where id_film='".$film2["id_film"]."'");
					}
				}
				
					
					
				
				
				
				?>
			</form>
	</div>
	
	
</div>
</body>
</html>