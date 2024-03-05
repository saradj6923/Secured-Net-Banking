
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
							<h1><a href="adminmenu.php">Admin Menu<span> Two Level Mail_Security </span></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li><a href="adminmenu.php" class="hvr-sweep-to-bottom">Lock Account</a></li>
								<li><a href="userreport.php" class="hvr-sweep-to-bottom">User Report</a></li>
								<li  class="active" ><a href="mailreport.php" class="hvr-sweep-to-bottom"> Mail Info</a></li>
								<li ><a href="index.php" class="hvr-sweep-to-bottom"> Logout</a></li>
								
								
								
								
								
								
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
	<div class="about">
	
	
	<div class="col-md-2 ">
	
	</div>
	
	<div class="table-responsive">
	
	<div class="col-md-10 ">
	
	<h3>All Mails</h3>
	<?php
	
	 include('db.php');
			   
			   
			   
			   $r = mysqli_query($con,"select * from send_mail "); 
			   
			   echo "<table class='table'><thead>";
			   
			   echo "<tr> <th> Senders </th> 
			   <th> Receivers</th> 
			   <th> Subject </th>
			   <th> Message </th> 
			   <th> Attachemnts </th> 
			   <th> Date </th> 
			    </tr> </thead> <tbody>";
			   
			   while($row = mysqli_fetch_assoc($r))
			   {
				   echo"<tr>";
				   
				   echo "<td>".$row['uname']."</td>";
				    echo "<td>".$row['to_address']."</td>";
					 echo "<td>".$row['subject']."</td>";
					  echo "<td>".$row['message']."</td>";
					echo "<td><a href='attachment/".$row["file"]."' target='_blank'>".$row["file"]."</a></td>";
						  echo "<td>".$row['date']."</td>";
						 echo"</tr>";
					 
			   }
			   
			   echo"</tbody></table>";
			   
			   
			   
			  
	?>
	</div>
		</div>
		<!-- about-top -->
		
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