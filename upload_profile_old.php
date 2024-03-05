<!DOCTYPE html>
<html lang="en">
<head>
<title>Two Level Mail_Security</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
</head>
<!-- header-top -->
	<div class="header-top">
		<div class="container">
			<div class="w3layouts-address">
				
			</div>
			<div class="agileinfo-social-grids">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //header-top -->
	<!-- header -->
	<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="w3layouts-logo">
							<h1><a href="index.html">Two Level <span>Mail_Security</span></a></h1>
						</div>
					</div>
					
				</nav>
			</div>
	</div>
<?php 
//include ('top.php');
//include ('session.php');
include ('db.php');
?>
<div class="container">
		<?php	
          $uname=$_GET['uname'];
		   $all_data = mysqli_query($con,"SELECT * FROM my_profiles where username='$uname'");
           $row_query = mysqli_num_rows($all_data);
		   $add= $row_query + 1;	
            $path=$_SERVER['DOCUMENT_ROOT'].'/mail_security/uploads';
			if(isset($_POST['submit']))
			{
			if(empty($row_query))  
			{		    		 
			if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
			if (file_exists("".$path."/" . $_FILES["file"]["name"]))
			{
			echo $_FILES["file"]["name"] . " already exists. ";
			}
			else
			{ 
			if(move_uploaded_file($_FILES["file"]["tmp_name"],"".$path."/" . $_FILES["file"]["name"]))
			{
			$project_file=$_FILES['file']['name'];
			$query_image = "insert into my_profiles (username,file) values ('$uname','$project_file')";
			//var_dump($query_image);
			if(mysqli_query($con,$query_image))
			{
			//echo "Stored in: " . "images/" . $_FILES["file"]["name"];
			echo "<script>alert('1 image uploaded Successfully'); window.location = './upload_profile.php?uname=$uname';</script>";
			}
			else
			{
			echo 'File name not stored in database';
			}
			}
			}
			}						
			}
				
		   if('9'>=$row_query)
			{  
			if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
			if (file_exists("".$path."/" . $_FILES["file"]["name"]))
			{
			echo $_FILES["file"]["name"] . " already exists. ";
			}
			else
			{ 
			if(move_uploaded_file($_FILES["file"]["tmp_name"],"".$path."/" . $_FILES["file"]["name"]))
			{
			$project_file=$_FILES['file']['name'];
		    $query_image = "insert into my_profiles (username,file) values ('$uname','$project_file')";
			if(mysqli_query($con,$query_image))
			{
			//echo "Stored in: " . "images/" . $_FILES["file"]["name"];
			echo "<script>alert('".$add ." images uploaded Successfully'); window.location = './upload_profile.php?uname=$uname';</script>";
			}
			else
			{
			echo 'File name not stored in database';
			}
			}
			}
			}
			}
			else
			{
			echo "<script>alert('Choose your profile picture'); window.location = './verify_my_profiles.php?uname=$uname';</script>";
		    }
	
			}
			?>
<div class="container">
  <h4>Upload images</h4>
 
  <form class="form-horizontal" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="file">Image file</label>
      <div class="col-sm-4">
        <input type="file" class="form-control" name="file" id="file" required>
      </div>
    </div>
	 <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-warning">Upload</button>
      </div>
    </div>

  </form>
</div>
 
<table class="table">
<tr bgcolor="#439ed8">
    <th>Profiles</th>
    <th>Select</th>
	<th>Action</th>
</tr>
<form method="post" action="">
		<?php
		if(isset($_POST['submit1']))
		{
		$uname = $_GET['uname'];;
		$img_id = $_POST['img_id'];		
		$query1=mysqli_query($con,"select * from my_profiles where profiles_id='$img_id'");
		$querry1=mysqli_query($con,"DELETE FROM my_profiles WHERE profiles_id = '$img_id'");
		while($row_img=mysqli_fetch_assoc($query1))
		{
			$del_image=$row_img['file'];
			unlink("uploads/$del_image");
		}
		if($querry1 && $query1)
		{
		echo "<script>alert('Deleted Successfully'); window.location = './upload_profile.php?uname=$uname';</script>";
		}
		}
		$select =mysqli_query($con,"SELECT * FROM my_profiles where username='$uname'");
		while ($row=mysqli_fetch_array($select)) 
		{    ?>
   <tr>
    <td><?php echo '<img alt="" class="img-responsive" src="uploads/'.$row["file"].'" style="width:100px;height:100px;">' ;?></td> 
    <td><input type="radio" name="img_id" value="<?php echo $row["profiles_id"];?>"></td> 
    <td><input type="submit" name="submit1" class="btn-danger" value="remove"></td> 
   </tr>
 <?php  }  ?>
</form>
</table>

</div>
<script src="js/jarallax.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>
</html>