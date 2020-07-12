<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Donate to ADVPO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
	<meta charset="utf-8" name="description" content="we are disability organization based in kampala uganda advocating for rights and well being of people with disability and the elderly">
	<meta name="keywords" content="advpo,disability,disabilities,kampala,uganda, donor, donation, elderly, support, agali awamu disabled and vulnerable persons organization" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
</head>

<body>
	<!--Header-->
	<?php include("header.php");?>
	<!--//header-->
	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">Donate</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">Donate</h3>
			<div class="row inner-sec">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">

						<div class="blog_info_left_grid">
							<a href="single.html">
								<img src="images/d.jpg" class="img-fluid" alt="">
							</a>
						</div>
						
						<p align="justify">AGALI AWAMU DISABLED AND VULNERABLE PERSONS ORGANISATION (ADVPO) welcomes all donations, big or small, we a non-profit organization, so your donation is tax-deductible.
						Because of donors like you, we change lives of people with disabilities and the vulnerable elderly through our projects. It all heralds the beginning of new era in lives of PWD'S 
						in Kampala, Uganda.<br>
						ADVPO, brings together diverse groups i.e. PWD'S and Elderly to provide with education,sanitation,hygiene and nutrition,sustainable household income and health care.
						<br>
						You can <b>donate money</b> through swift code, account number or mobile money number below:</p>
						<h2 align="center">Our Acounts</h2>
						<p>BANK NAME: EQUITY BANK<br>
						ACCOUNT NAME: Agali awamu disabled and vulnerable persons organization.<br>
						ACCOUNT NUMBER: <b style="color:blue">1042201283742</b></p>
						<p>MOBILE MONEY: 0782543449</p>
						
						<p align="justify">Your generous donation to ADVPO will Support Education for children with disability, Will further Support Sanitation, Hygiene and Nutrition, Sustainable Household Income and Health Care. Your donation to ADVPO will give children and families the gift of greater comfort and compassion. Thank you for supporting ADVPO programs.</p>
						
					</div>
					
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<h4><strong>Blog Latest</strong></h4>
						<ul class="list-group single">
							<?php countcategories();?>
						</ul>
						<div class="tech-btm widget_social">
							<h4>Stay Connected</h4>
							<ul>

								<li>
									<a class="twitter" href="@advpo_ug">
										<i class="fab fa-twitter"></i>
										<span class="count"></span> Twitter</a>
									</li>
									<li>
										<a class="facebook" href="agali awamu disabled and vulnerable persons organization">
											<i class="fab fa-facebook-f"></i>
											<span class="count"></span> Facebook</a>
										</li>
										<li>
											<a class="dribble" href="agali awamu disabled">
												<i class="fab fa-instagram"></i>

												<span class="count"></span> Instagram</a>
											</li>
											<li>
												<a class="pin" href="agali awamu disabled and vulnerable organization">
													<i class="fab fa-linkedin"></i>
													<span class="count"></span> Linkedin</a>
												</li>

											</ul>
										</div>
										<div class="tech-btm">
											<h4>Older Posts</h4>
											<?php getolderposts("blogs");?>
											<!--olderpostsendhere-->
										</div>
									</div>
								</aside>
								<!--//right-->
							</div>
						</div>
					</section>
					<!--//main-->

					<!--footer-->
					<?php include("footer.php");?>
					<!---->
					<!-- js -->
					<script src="js/jquery-2.2.3.min.js"></script>
					<!-- //js -->
					<!--/ start-smoth-scrolling -->
					<script src="js/move-top.js"></script>
					<script src="js/easing.js"></script>
					<script>
						jQuery(document).ready(function ($) {
							$(".scroll").click(function (event) {
								event.preventDefault();
								$('html,body').animate({
									scrollTop: $(this.hash).offset().top
								}, 900);
							});
						});
					</script>
					<!--// end-smoth-scrolling -->

					<script>
						$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
							 		*/

							 		$().UItoTop({
							 			easingType: 'easeOutQuart'
							 		});

							 	});
							 </script>
							 <a href="#home" class="scroll" id="toTop" style="display: block;">
							 	<span id="toTopHover" style="opacity: 1;"> </span>
							 </a>

							 <!-- //Custom-JavaScript-File-Links -->
							 <script src="js/bootstrap.js"></script>


							</body>

							</html>