
<!DOCTYPE html>
<html lang="en">
<head>
<title>Secured Netbanking</title>
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
<body>
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
							<h1><a href="index.php">Secured <span>NetBanking</span></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php" class="hvr-sweep-to-bottom">About</a></li>
								<li><a href="admin.php" class="hvr-sweep-to-bottom">Admin_Login</a></li>
								<li><a href="login.php" class="hvr-sweep-to-bottom">User_Login</a></li>
								
								<li class="active"><a class="hvr-sweep-to-bottom"  href="registration.php">Registration</a></li>
								
								
								
								
								
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
	</div>
	<!-- //header -->
	<!-- about-heading -->
	
	<!-- //about-heading -->
	<!-- about -->
	<div class="about-heading">
		<h2>Registration <span></span></h2>
	</div>
	<!-- //about-heading -->
	<div class="registration">
		<div class="container">
			
			
			
			<?php    include('db.php');
			 $name = $_POST['name'];
			  $email = $_POST['email'];
			   $mobile = $_POST['mobile'];
			    $city = $_POST['city'];
			  $uname = $_POST['uname'];
			   $pass = $_POST['password'];
			   $Balance=$_POST['openingbalance'];
			   $Ac_Type=$_POST['acctype'];
			   
			$qry3=mysqli_query($con,"select max(Ac_No) maxacno from register") or die(mysql_error());
									
			$row3=mysqli_fetch_array($qry3);
			$Ac_No=$row3['maxacno']+1;
			//echo "$Ac_No";
			$opening_date=$_POST['openingdate'];

			   $r = mysqli_query($con,"select * from register where uname ='$uname'") or die(mysql_error()); ;
			   if($row = mysqli_fetch_assoc($r))
			   {
				   echo" user email Already exist.. try another user name";
			   }
			   else
			   {
			   
			   mysqli_query($con,"insert into register values('','$name','$email','$mobile','$city','$uname','$pass','$Ac_No','$opening_date','','') ") or die(mysql_error());
			   mysqli_query($con,"insert into account_master values('$Ac_No','$Ac_Type','$Balance') ") or die(mysql_error());
			   echo "<script>alert('Registration successfully...Upload 10 Profile Images'); window.location = './upload_profile.php?uname=$uname';</script>";
			//   echo " Registration successfully ...    <br>   <br>  Welcome : $name    <b>Click <a href='upload_profile.php?uname=$uname'> Profile Image Upload</a>";
		   }
			?>
		</div>
	</div>
		<!-- about-top -->
		<div class="agileits-about-top">
			<div class="container">
				
				<div>
					<div>
								</div>
					
					
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //about-top -->
		
		<!-- choose -->
		
		</div>
		</div>
		</div>
		
	<!-- //footer -->
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