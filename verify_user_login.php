<!DOCTYPE html>
<html lang="en">
<head>
<title>Secured NetBanking</title>
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
							<h1><a href="index.html">Secured<span>NetBanking</span></a></h1>
						</div>
					</div>
					
				</nav>
			</div>
	</div>
<?php 
//include ('top.php');
include ('session.php');
include ('db.php');
?>
<div class="container">

           <h4>Verify your Profile</h4>
		<?php	
          $uname=$user_name;
		 //$acno2=$_REQUEST['acno2'];
		 //echo $acno2;
		   if(isset($_POST['submit']))
			{
				$uname=$user_name;
				$verify_profile=$_POST['verify_profile'];
				$query = mysqli_query($con,"select * from verify_my_profiles where username='$uname'
				AND verify_profile='$verify_profile'");
				$rows = mysqli_num_rows($query);
				$query_data = mysqli_query($con,"select * from register where uname='$uname'");
				$rows_data= mysqli_fetch_assoc($query_data);	
				$acno=$rows_data['Ac_No'];
				echo "$acno";
				if($rows_data['img_valid'] < 2 )
				{
				if ($rows == 1) 
				{ 
				echo "<script>alert('Login Successfull $acno'); window.location = './send_user.php';</script>";
				//location:deposit_entry.php?acno=$t1"
				} 
				else 
				{
				mysqli_query($con,"UPDATE register SET img_valid = img_valid + 1 WHERE uname = '$uname'"); 
				echo "<script>alert('Wrong profile choosed'); window.location = './verify_user_login.php';</script>";
				}				
			    }
				else
				{
				echo "<script>alert('Your account is locked'); window.location = './login.php';</script>";
		    	}				
			}
			?>
<form class="form-horizontal" method="POST" enctype="multipart/form-data">
<div class="row">
<?php
$select =mysqli_query($con,"SELECT * FROM my_profiles where username='$uname'");
while ($row=mysqli_fetch_array($select)) 
{    ?>
   
<div class="col-sm-2">
	<?php echo '<img alt="" src="uploads/'.$row["file"].'" style="width:100px;height:100px;">' ;?>
	<input type="radio" class="form-control" name="verify_profile" value="<?php echo $row["profiles_id"]; ?>" required>
</div>

 <?php  }  ?>
 </div>
<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-warning">Submit</button>
      </div>
    </div>
</form>
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