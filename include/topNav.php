<div class="main_section_agile">
	<div class="w3_agile_banner_top">
		<div class="agile_phone_mail">
			<ul>
				<li>
					<a class="active" href="https://www.classmatrix.org/signin/" style='font-size:16px;' target='_blank'><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
					<span style="border-left: 1px solid #cfcfcf;margin-left: 3px;">&nbsp;</span>
					
					<a href="https://www.facebook.com/tsphofficial/" target="_blank" style='margin: 0px 10px;font-size:16px;' onMouseOver="this.style.color='#4267B2'"onMouseOut="this.style.color='#fff'" >
						<i class="fa fa-facebook nopadding" aria-hidden="true" ></i>
					</a>
					<span style="border-left: 1px solid #cfcfcf;margin-left: 3px;">&nbsp;</span>
					
					<a href="https://www.instagram.com/tsph_thescienceprivateshub/" target="_blank" style='margin: 0px 10px;font-size:16px;' onMouseOut="this.style.color='#fff'">
						<i class="fa fa-instagram nopadding" aria-hidden="true"></i>
					</a>
					<span style="border-left: 1px solid #cfcfcf;margin-left: 3px;">&nbsp;</span>
					
					<a href="https://www.youtube.com/channel/UC_hBrnDRNGlle41c-E9uPFw" target="_blank" style='margin: 0px 0px 0px 10px;font-size:16px;' onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#fff'">
						<i class="fa fa-youtube-play nopadding" aria-hidden="true"></i>
					</a>
					<span style="border-left: 1px solid #cfcfcf;margin-left: 3px;">&nbsp;</span>
					
					<a href="https://goo.gl/maps/ZUsWTgWMfEz2qvWh7" target="_blank" style='margin: 0px 0px 0px 10px;font-size:16px;' onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#fff'">
						<i class="fa fa-map-marker nopadding" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="tel:+918652375375" style='font-size:15px;' onMouseOver="this.style.color='cyan'"onMouseOut="this.style.color='#fff'">
						<b class="fa fa-phone" aria-hidden="true"></b> +91 8652-375-375
					</a>
					<span style="border-left: 1px solid #cfcfcf;margin-left: 3px;">&nbsp;</span>
					<a href="tel:+918652373373" style='font-size:15px;' onMouseOver="this.style.color='cyan'"onMouseOut="this.style.color='#fff'">	
						<b class="fa fa-phone" aria-hidden="true"></b> +91 8652-373-373
					</a>
				</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand img-responsive" href="index.php"><img src="images\logo_tran.png" alt="TSPH-Logo" style="height: 100px;position: absolute;z-index: 10000000;background: none;"></a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="menu--iris">
					<ul class="nav navbar-nav menu__list">
						<li class="menu__item <?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'index')?"menu__item--current": "" ?>"><a href="index.php" class="menu__link">Home</a></li>
						<li class="menu__item <?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'faculty')?"menu__item--current": "" ?>"><a href="faculty.php" class="menu__link">Faculty</a></li>
						<li class="menu__item <?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'courses')?"menu__item--current": "" ?>"><a href="courses.php" class="menu__link">Courses</a></li>
						<li class="dropdown menu__item <?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'results')?"menu__item--current": "" ?>"><a href="result_2021.php" class="dropdown-toggle menu__link" data-toggle="dropdown">Results<b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown ">
								<li><a href="result_2021.php">2021 Results</a></li>
								<li><a href="result_2020.php">2020 Results</a></li>
								<li><a href="result_2019.php">2019 Results</a></li>
								<li><a href="result_2018.php">2018 Results</a></li>
							</ul>
						</li>
						
						<li class="menu__item <?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'gallery')?"menu__item--current": "" ?>"><a href="gallery.php" class="menu__link">Gallery</a></li>
						<li class="menu__item <?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'contactus')?"menu__item--current": "" ?>"><a href="contactus.php" class="menu__link">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</nav>
	</div>
</div>

