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
							<h1><a href="send_mail.php">Secured <span>NetBanking</span></a></h1>
						</div>
					</div>
					
				</nav>
			</div>
			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
							<li ><a href="send_user.php" class="hvr-sweep-to-bottom">Home</a></li>
								<li ><a href="sendmailreport.php" class="hvr-sweep-to-bottom">Deposit</a></li>
								<li ><a href="receivemail.php" class="hvr-sweep-to-bottom">Transfer</a></li>
								<li ><a href="user_report.php" class="hvr-sweep-to-bottom">Report</a></li>
								<li ><a href="index.php" class="hvr-sweep-to-bottom"> Logout</a></li>															
							</ul>
						</nav>
					</div>
	</div>
				<div class="container"> 
          <div class="table-responsive"> 
                <h4>Transaction Report</h4>
				 <?php 
				 include('db.php'); 
				 include('session.php'); 
				 ?>

				<table class="table">
				<tr bgcolor="#ccc">
					<th>From</th>
					<th>To</th>
					<th>Subject</th>
					<th>Message</th>					
					<th>Attachments</th>					
					<th>Date</th>					
				</tr>
				<?php
				$uname=$user_id;
				$select =mysqli_query($con,"SELECT * FROM send_mail where uname_id='$uname'");
				while ($row=mysqli_fetch_array($select)) 
				{
				  ?>
				   <tr>
				   <td><?php echo $row['uname'];?></td>
				   <td><?php echo $row['to_address'];?></td>
				   <td><?php echo $row['subject'];?></td>
				   <td><?php echo $row['message'];?></td>
				   <td><?php echo '<a href="attachment/'.$row["file"].'" target="_blank">'.$row["file"].'</a>'?></td>
				   <td><?php echo $row['date'];?></td>
				   </tr>
				 <?php
					}
					?>

				</table>
					</div>
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