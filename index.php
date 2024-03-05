<?php include('nav.php');  ?>
	<div class="main">
		<div class="page_container">
			<div id="immersive_slider">
				  <div class="slide">
						<div class="col-md-6 image">
							<img src="images/3a.jpg" alt="Slider 1" />
						</div>
						
						<div class="clearfix"> </div>
				  </div>
				  <div class="slide" >
						<div class="col-md-6 image">
							<img src="images/1a.jpg" alt="Slider 1" />
						</div>
						
						<div class="clearfix"> </div>
				  </div>
				  <div class="slide" >
						<div class="col-md-6 image">
							<img src="images/2a.jpg" alt="Slider 1" />
						</div>
						
						<div class="clearfix"> </div>
				  </div>
				  
				  <a href="#" class="is-prev">&laquo;</a>
				  <a href="#" class="is-next">&raquo;</a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready( function() {
			$("#immersive_slider").immersive_slider({
				  container: ".main"
			});
		});

	</script>
	<div class="footer">
		
			
		<div class="copyright">
			<p>© Secured NetBanking  </p>
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
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- pricing -->
	<script src="js/jquery.flipster.js"></script>
	<script>
	<!--
		
		$(function(){ $(".flipster").flipster({ style: 'carousel', start: 0 }); });

	-->
	</script>
	<!-- //pricing -->
	<!-- slider -->
	<script type="text/javascript" src="js/jquery.immersive-slider.js"></script>
	<!-- //slider -->
</body>	
</html>