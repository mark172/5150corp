<!DOCTYPE html>
<html>
<head>
	<title>Our website is coming soon | 5150Corp</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="css/normalize.css"/>
  <link rel="stylesheet" type="text/css" href="css/grid.css">
 	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans|Lato:400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--[if IE 7]>
  		<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!--[if IE 8]>
  		<link rel="stylesheet" type="text/css" href="css/ie8.css">
		<![endif]-->
		<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery.lwtCountdown-1.0.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/misc.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.form.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/jquery.validate.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.cycle.lite.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/script.js" type="text/javascript" charset="utf-8"></script>
    
    <script language="javascript" type="text/javascript">
			jQuery(document).ready(function() {
				$('#countdown_dashboard').countDown({
					targetDate: {
						'day': 		31,
						'month': 	12,
						'year': 	2017,
						'hour': 	22,
						'min': 		0,
						'sec': 		0					}
				});
				
			});
		</script>
		
		
</head>
<body>
    <!-- HEADER -->
	<header>
        <div class="md-logo">
					<img src="../images/5150CorpLogo.png"></img>
        </div>
	</header>
    <!-- /HEADER -->
    <!-- MAIN -->
	<section class="md-main">
		<div class="md-mainimg">
			<div id="cycle-slideshow">
				<div class="slideimg img1"></div>
			</div>
		</div>
		<div class="md-block-center" id="md-content-center">
			<div class="md-content">
				<h2 class="md-intro"><span>OUR WEBSITE IS COMING SOON</span></h2>
				<div class="md-remain-time .md-rt-border">
						<!-- Countdown dashboard start -->
						<div id="countdown_dashboard">
								<div class="dash weeks_dash">
										<div class="digit">2</div>
										<div class="digit">7</div>
										<span class="dash_title">weeks</span>
								</div>
								<div class="dash days_dash">
										<div class="digit">0</div>
										<div class="digit">2</div>
										<span class="dash_title">days</span>
								</div>
								<div class="dash hours_dash">
										<div class="digit">0</div>
										<div class="digit">3</div>
										<span class="dash_title">hours</span>
								</div>
								<div class="dash minutes_dash">
										<div class="digit">0</div>
										<div class="digit">2</div>
										<span class="dash_title">minutes</span>
								</div>
								<div class="dash seconds_dash last">
										<div class="digit">3</div>
										<div class="digit">9</div>
										<span class="dash_title">seconds</span>
								</div>
						</div>
						<!-- //Countdown dashboard start -->
				</div>
			</div>
		</div><!-- /BLOCK CENTER -->
		
		<div class="md-block-bottom">
			<div class="md-btn-group wrap860" id="md-btn-group">
				<div class="container_12 clearfix">
					<a href="#notify" class="grid_4 md-button notify">About Us</a>
					<a href="#contact-us" class="grid_4 md-button contact-us">Contact Us</a>
					<a href="#follow" class="grid_4 md-button follow">Follow Us</a>
				</div>
			</div>
			
			<!-- /BUTTON GROUP -->
			
			<div class="md-dialog contact" id="contact-us">
				<div class="wrap860">
					<div class="container_12">
							<form id="contact-form" class="clearfix" action="processForm.php" method="post">

											<h2 class="md-tilte-box">Contact Us</h2>
											<p class="md-desc-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
											<div class="md-form clearfix" id="contact-content">
													<div class="grid_6">
															<input type="text" name="name" placeholder="Your name">
															<input type="text" name="email" placeholder="Your email">
													</div>
													<div class="grid_6">
															<textarea placeholder="Message" name="message"></textarea>
															<button type="submit" class="md-button omega">
																	<span class="md-btn-text" id="submit-contact">submit</span>
															</button>
													</div>
											</div>
							</form>
							<a href="#" class="btn-close"></a>
					</div>
				</div>
			</div><!-- /CONTACT US -->
			
			<div class="md-dialog follow" id="follow">
				<div class="wrap860">
					<div class="container_12">
									<h2 class="md-tilte-box">Follow Us</h2>
									<p class="md-desc-box">Check us out on social media.</p>
									<div class="md-follow clearfix">
										<a href="#"><i class="icon-facebook-sign"></i></a>
										<a href="#"><i class="icon-twitter"></i></a>
										<a href="#"><i class="icon-linkedin-sign"></i></a>
									</div>
							<a href="#" class="btn-close"></a>
					</div>
				</div>
			</div><!-- /FOLLOW -->
			
			<div class="md-dialog notify" id="notify">
				<div class="wrap860">
					<div class="container_16">
									<h2 class="md-tilte-box">Notify me when its ready</h2>
									<p class="md-desc-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
	
							<a href="#" class="btn-close"></a>
					</div>
				</div>
			</div><!-- /NOTIFY -->
			
		</div><!-- /BLOCK BOTTOM -->
  </section>
	
	<!-- FOOTER -->
	<footer class="md-footer">
		<div class="wrap">
			<div class="container_12 clearfix">
				<div class="grid_6 md-copyright">&copy; Copyright 2016 5150 Corp.</div>
				<div class="grid_6 md-social-group">
					<a href="http://www.facebook.com/megadrupal"><i class="icon-facebook-sign"></i></a>
					<a href="http://www.twitter.com/megadrupal"><i class="icon-twitter"></i></a>
					<a href="#"><i class="icon-linkedin-sign"></i></a>
				</div>
			</div>
		</div>
		
		
	</footer>
	<!-- /FOOTER -->
	

	

<!--
# BuzzComi - June 30, 2013
# Designed & code by MegaDrupal
# Websites:  http://www.megadrupal.com -  Email: info@megadrupal.com
-->

</body>
</html>