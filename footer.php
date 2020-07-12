<!--footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">
					<h3>About US</h3>
					<p align="justify">AGALI AWAMU DISABLED AND VULNERABLE PERSONS ORGANISATION (ADVPO) Is a community based organization, non-profit, non-discriminative politically,ethenically and religiously that was started in the year 2002 with an aim of promoting better living conditions for people with disabilities, vulnerable and less privilaged.
					</p>
					<div class="read">
						<a href="about.php" class="btn btn-primary read-m">Read More</a>
					</div>
				</div>
				<div class="col-lg-4 footer-grid-agileits-w3ls text-left">

					<div class="tech-btm">
						<h3>Popular Posts</h3>
						<?php getpopularposts("page_hits"); ?>
					</div>
				</div>
				<!-- subscribe -->
				<div class="col-lg-4 subscribe-main footer-grid-agileits-w3ls text-left">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-main text-left">
							<div class="subscribe-form">
									<form action="#" method="post" class="subscribe_form">
										<input class="form-control" type="email" placeholder="Enter your email..." required="">
										<button type="submit" class="btn btn-primary submit">Submit</button>
									</form>
									<div class="clearfix"> </div>
						   </div>
						<p>We respect your time!</p>
					</div>
					<!-- //subscribe -->
				</div>
			</div>
			<!-- footer -->
			<div class="footer-cpy text-center">
				<div class="footer-social">
					<div class="copyrighttop">
						<ul>
							<li class="mx-3">
								<a class="facebook"  href="agali awamu disabled and vulnerable persons organization">
									<i class="fab fa-facebook-f"></i>
									<span>Facebook</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="@advpo_ug">
									<i class="fab fa-twitter"></i>
									<span>Twitter</span>
								</a>
							</li>
							<li class="mx-3">
								<a class="facebook" href="agali awamu disabled">
									<i class="fab fa-instagram"></i>
									<span>Instagram</span>
								</a>
							</li>
							<li>
								<a class="facebook" href="agali awamu disabled and vulnerable organization">
									<i class="fab fa-linkedin"></i>
									<span>Linkedin</span>
								</a>
							</li>
						</ul>

					</div>
				</div>
				<div class="w3layouts-agile-copyrightbottom">
					<p> ADVPO Site <?php $current=date("Y"); print_r($current);?> | Design by
						<a href="mailto:kabuyenasif@gmail.com">Kabuye_Nasif WebsiteDevelopment Agency UG</a>
					</p>

				</div>
			</div>
			<!-- //footer -->
		</div>
	</footer>