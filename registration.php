<?php include('nav.php');  ?>
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
			<div class="signin-form profile">
				<h3>Register</h3>
				
				<div class="login-form">
					<form action="register.php" method="post">
					<input type="text" name="name" placeholder="Enter Name" required="">
						<input type="email" name="email" placeholder="Enter E-mail" required="">
						<input type="text" name="mobile" placeholder="Enter Mobileno" required="">
						<input type="text" name="city" placeholder="Enter Address" required="">	
						<input type="email" name="uname" placeholder="User Email" required="">
						<input type="password" name="password" placeholder="Password" required="">
						<input type="text" name="openingdate" placeholder="Opening Date in yyyy-mm-dd" required=""> 
						<input type="text" name="openingbalance" placeholder="Opening Balance" required=""> 
						<input type="text" name="acctype" placeholder="Enter type of account" required=""> 
						<input type="submit" value="REGISTER">
					</form>
				</div>
				<p><a href="#"> By clicking register, I agree to your terms</a></p>
			</div>
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