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
								<li ><a href="send_mail.php" class="hvr-sweep-to-bottom">Home</a></li>
								<li ><a href="sendmailreport.php" class="hvr-sweep-to-bottom">Deposit</a></li>
								<li ><a href="receivemail.php" class="hvr-sweep-to-bottom">Transfer</a></li>
								<li ><a href="index.php" class="hvr-sweep-to-bottom"> Logout</a></li>															
							</ul>
						</nav>
					</div>
	</div>
			<?php			   

		include ('session.php');
		include ('db.php');
		            $path=$_SERVER['DOCUMENT_ROOT'].'/mail_security/attachment';
			if(isset($_POST['submit']))
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
			$file=$_FILES['file']['name'];
			$uname=$user_name;
			$uname_id=$user_id;	
			$subject=$_POST['subject'];	
			$to_address=$_POST['to_address'];	
			$message=$_POST['message'];	
			$date=date('d-m-Y');;	
			$query1=mysqli_query($con,"insert into send_mail values('','$uname_id','$uname','$to_address',
			'$subject','$message','$file','$date')");
			$query2=mysqli_query($con,"insert into receive_mail values('','$uname_id','$uname','$to_address',
			'$subject','$message','$file','$date')");
			if($r = $query1 && $query2)
			{
			echo "<script>alert('Message send Succesfully'); window.location = './send_mail.php';</script>";
			}
			else
			{
				echo '<font color="red">Some error found</font>';
			}
			}
			}
			}
            }			
		 ?>
<div class="container">
  <h2>Send mail</h2>
  <form class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="to_address">TO</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="to_address" id="to_address" placeholder="Enter address" required>
        </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="subject">Subject</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject" required>
        </div>
    </div>
	   <div class="form-group">
      <label class="control-label col-sm-2" for="message">Message</label>
      <div class="col-sm-4">
        <textarea type="text" class="form-control" name="message" id="message" placeholder="Enter message" required>
      </textarea>
    </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="file">Attachment</label>
      <div class="col-sm-4">
        <input type="file" name="file" id="file" placeholder="Enter your attachment" required>
      </div>
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
	 //here ends scrolling icon -->
	 ?>
</body>	
</html>