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
	<form method="post" action="" >
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
<div id="content">
	  <div class="aecenter">
	 			<center>
	 			  <FONT color="#993399" size="+1"> WITHDRAW ENTRY </FONT> 
              </center>
		 			<table border="1" align="center" width="50%" height="65%">
							             			
	    		
						<tr>
              				<td align="center" width="90%">
                  						<b><font > Account Number</font> </b> </td>
             					<td width="50"><input type="text" name="accno" /></td>
					  </tr>
                
						<tr>  
             			 		<td align="center" width="90%">
                 						<b> <font>Withdraw Amount </font></b>             				</td>
            			 		<td width="50%" bgcolor="#CCCCCC"><input type="text" name="Amount" /> </td>
           			  </tr>
						<tr>  
              					<td align="center" width="90%" bgcolor="">
					  					<b><font>Date </font></b>                        		</td>
             					<td width="100%" bgcolor="#CCCCCC"><input type="text" name="Date" /></td>
       	    		  </tr>
					   <tr>  
              					<td align="center" width="90%" bgcolor="">
					  					<b><font>To which A/C Number </font></b>                        		</td>
             					<td width="100%" bgcolor="#CCCCCC"><input type="text" name="Transaction_Ac" /></td>
       	    		  </tr>           				
            			
					
  				 		<tr>
      <td height="51"><font ><center> Click >>> </center></font></td>
      <td bgcolor="#CCCCCC"><input class="button3" type="submit" name="s1"   value="SUBMIT !" /></td>
    </tr>
	 <?php
	    include('db.php');
								  if(isset($_POST['s1']))
								  {
										extract($_POST);		
										$insert=mysqli_query($con,"insert into ac_transaction values('','$accno','$Date','Withdraw','$Amount','$Transaction_Ac')")  or die(mysql_error());
											if($insert)
											{
												$insert2=mysqli_query($con,"update account_master set Balance=Balance-$Amount where Ac_No=$accno")  or die(mysql_error());
												if($insert2)
												    $msg="Updated successfully";
												else
													$msg="Not updated";
											}									
											else
				     								$msg="sorry ! not added successfully";
									}
									else
												$msg="SORRY , It is not succcesfully updated !!";
				    		   
					?>		 
    <tr>
      <td height="19" colspan="2" align="center" bgcolor="#CCCCCC"><?php 
	   if(isset($_POST['s1']))
		 {
					echo $msg; }
	  
	  ?>        &nbsp;</td>
      </tr>
       		</table>                                                               	       

              </div>
              

			</div>

  </form>
	
	<script src="js/jarallax.js"></script>
	<script type="text/javascript">
		init Jarallax 
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
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>*/
	
</body>	
</html>