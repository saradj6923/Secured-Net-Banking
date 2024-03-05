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
<body>
<form method="post" action="user_deposit" >
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
								<li ><a href="user_deposit.php" class="hvr-sweep-to-bottom">Deposit</a></li>
								<li ><a href="user_withdraw.php" class="hvr-sweep-to-bottom">Transfer</a></li>
								<li ><a href="user_acreport.php" class="hvr-sweep-to-bottom">Report</a></li>
								<li ><a href="index.php" class="hvr-sweep-to-bottom"> Logout</a></li>															
							</ul>
						</nav>
					</div>
	</div>
	<div class="about-heading">
		<h2>USER <span>TRANSACTIONS</span></h2>
		
		
	</div>
	<!-- //about-heading -->
	<!-- about -->
	<div class="about">
	
	<div class="col-md-2 ">
	
	</div>
	<div class="col-md-10 ">
	<br>
	<br>
	<font size="+1">					
	Broadly, the levels of banking services offered through INTERNET can be categorized in to three types: 
	(i) The Basic Level Service is the banks’  websites which disseminate information on different products and services offered to customers and 
	members of public in general. It may receive and reply to customers’ queries through e-mail, 
	(ii) In the next level are Simple Transactional Websites which allow customers to submit their instructions, 
	applications for different services, queries on their account balances, etc, but do not permit any fund-based transactions on their accounts.
	</font>
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
	</form>		
</body>	
</html>