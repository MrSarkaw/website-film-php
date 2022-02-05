<!doctype html>
<html>
<head>
	 	<?php 
	session_start();
	
	
	if(!isset($_SESSION['username'])){
		header("location: adminpanellogin.php");
	}
	?>  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
      <meta name="viewport" content="widt=device-width , initial=1.0">
<meta http-equiz="contetn.type" content="text/html" charset="utf-8">
	<style>
		body{
			background-color: #131313 !important;
		}
		#div7{
			position: relative;
			top:100px;
			height: 400px;
			border-radius: 40px
		}
		div>form>	input{
			width: 100%;
			height: 35px;
			background-color: #131313;
			border:2px solid #2879ff;
			color: #2879ff;
			position: relative;
			top: 30px;
 			margin-top: 30px !important;
			border-radius: 40px;
			text-align: center;
			outline:none;
			font-size: 20px;
				
			
		}	
		#f2{
		border:2px solid #2879ff;
				position: relative;
			top: -127px;width: 600px;
			left: 400px;

		}
		#f2>	input{
			width: 99%;
			height: 35px;
			background-color: #131313;
			border:2px solid #2879ff;
			color: #2879ff;
			position: relative;
			top: -20px;
			margin-top: 30px !important;
			border-radius: 40px;
			text-align: center;
			outline:none;
			font-size: 20px;
				
			
		}
		div>form>textarea{
			width: 99%;
			height: 130px;
			border:none;
			background-color:#131313;
			position: relative;
			top: 50px;
			text-align: center;
			outline:none;
			font-size: 20px;
			border:2px solid #2879ff;
			color: #2879ff;
				
		}
		#f2>textarea{
			width: 100%;
			height: 130px;
			border:none;
			background-color:#131313;
			position: relative;
			top: 0px;
			text-align: center;
			outline:none;
			font-size: 20px;
			border:2px solid #2879ff;
			color: #2879ff;
				
		}
		#b1 {
			position: absolute;
			top: 350px;
			left: 260px !important;
			color: whitesmoke;
			text-align: center;
			width: 50%;
			height: 40px;
			border-radius: 40px;
			border:none; left: 160px;
			position: absolute;
			outline: none;
			font-weight: bold;
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
			background-color:#131313;
			border:1px solid #2879ff;
			color: #2879ff;
			outline: none;
		}
		table{
			width: 200px;
			margin-top: 20px;
			color: #2879ff;
		}
		table tr th {
		padding: 10px;

		}
		
	
	</style>
<meta charset="UTF-8">
<?php 
	include("connection/conn.php");
				echo	mysqli_set_charset($con,'UTF-8');
	?></head>

<body>
	
	
	<a href="adminPanel.php"><img src="icon/home.png" style="margin:10px;"></a>
		<div id="div7" class="container">

	<form method="post" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="ناوی ئه‌كته‌ر"> 
		<input type="file" name="file" placeholder="ڕه‌سمی ئه‌كته‌ر" id="file"> 
				<textarea name="des" > ...باسی ژیانی</textarea>
	<button type="submit" name="insert" id="b1"class="btn btn-primary">داخڵ كردن</button>
		
		
	</form>
		<?php 
		include("connection/conn.php");
		
		
		if(isset($_POST["insert"])){
	
			$id_user=mysqli_query($con,"select id_user from admin where username ='".$_SESSION["username"]."'");
				while($row=mysqli_fetch_assoc($id_user))
				{
			$target="actor/".basename($_FILES["file"]["name"]);
			$image=$_FILES["file"]["name"];
			
	$insert=mysqli_query($con,"insert into actors(actor_name,image_actor,des,id_user)
	values('".$_POST["name"]."','".$image."','".$_POST["des"]."','".$row["id_user"]."')");
		
			
	if(move_uploaded_file($_FILES["file"]["tmp_name"],$target) and isset($insert)){
		echo '<div style="width:100%;height;30px;background-color:#616F39;color:white;text-align:center;position:relative;top:120px;left:0px;"><h3>insert it</h3></div>';
	}
	
	}

				}
	
		?>
			
			
			
			<form style="margin-top: 150px;" method="post">
		<input type="text" name="search" style="width: 140px;position: relative;top: 0px;
			" placeholder="ناوی ئه‌كته‌ر">
				<button type="submit" name="sea" class="btn btn-primary">search</button>

	</form>

			<table>
				<tr><th>name</th><th>edit</th><th>Delete</th></tr>
			
			<?php 
				if (isset($_POST["sea"])){
					$select=mysqli_query($con,"select * from actors where
					actor_name like '%".$_POST["search"]."%'");
			if(isset($select)){
				
			
					while($row=mysqli_fetch_array($select)){
					
					
					echo "<tr><th>".$row["actor_name"]."</th>
		<th><a href='addactor.php?delete=".$row["id_actor"]."' class='btn btn-danger'>delete</a></th>
		<th><a href='addactor.php?edit=".$row["id_actor"]."' class='btn btn-primary'>edit</a></th></tr>";
					
				}
			}
				
				}	
				
				?>
			
			</table>
			
			<?php
			
			if(isset($_GET["delete"])){
				$id=mysqli_real_escape_string($con,$_GET["delete"]);
				$delete=mysqli_query($con,"delete from actors where id_actor='".$id."'");
				
			}
			
			else if(isset($_GET["edit"])){
				$id=mysqli_real_escape_string($con,$_GET["edit"]);
				$se=mysqli_query($con,"select * from actors where id_Actor ='".$id."'");
					
				while($edit=mysqli_fetch_assoc($se)){
					
				
				?>
			
			
			
					<form method="post" id="f2" enctype="multipart/form-data">
				<input type="text" name="name" value="<?php echo $edit['actor_name'] ?>">
				<textarea name="de"><?php echo $edit['des']?></textarea	>
<center>
	<button type="submit" name="insert2" id="b2"class="btn btn-primary">update</button>
</center>
			</form>
				<?php
					if(isset($_POST["insert2"] )){
					
						
						
						$update=mysqli_query($con,"update actors
						set actor_name='".$_POST["name"]."',
						des='".$_POST["de"]."' where id_actor=".$id."");
						
						
								
					}
				}
			}
			
			
			?>
		
</body>
</html>