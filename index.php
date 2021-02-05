<?php include "include/security.php" ?>
<?php $_SESSION['pageName'] = 'index' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "include/title.php"; ?>
	<?php include "include/css.php"; ?>
</head>
	
<body>
	<?php include "include/topNav.php"; ?>
		

	<!-- banner -->
	<div class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								 <span>Education.</span>
									<h3>For the Creatives</h3>
									 <p>You can learn anything</p>
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
								<div class="agileits-banner-info">
								 <span>Free</span>
									<h3>Premium Courses</h3>
									 <p>You only have to know one thing</p>
									
								</div>	
							</div>
						</div>
				</li>
				<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								 <span>Education</span>
									<h3>For the Creatives</h3>
									 <p>You can learn anything.</p>
									
								</div>	
								
							</div>
						</div>
					</li>

			</ul>
		</div>
	</div>

<!-- //banner -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
					<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign In</h3>	
							<div class="login-form">
								<form action="#" method="post">
									<input type="text" name="email" placeholder="E-mail" required="">
									<input type="password" name="password" placeholder="Password" required="">
									<div class="tp">
										<input type="submit" value="Sign In">
									</div>
								</form>
							</div>
							<div class="login-social-grids">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<p><a href="#" data-toggle="modal" data-target="#myModal3" > Don't have an account?</a></p>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->	
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
		<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					
					<div class="signin-form profile">
					<h3 class="agileinfo_sign">Sign Up</h3>	
							<div class="login-form">
								<form action="#" method="post">
								   <input type="text" name="name" placeholder="Username" required="">
									<input type="email" name="email" placeholder="Email" required="">
									<input type="password" name="password" placeholder="Password" required="">
									<input type="password" name="password" placeholder="Confirm Password" required="">
									<input type="submit" value="Sign Up">
								</form>
							</div>
							<p><a href="#"> By clicking register, I agree to your terms</a></p>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->	

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<h5>Mastering</h5>
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							e.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
		<!--Mastering 4 images>
			<h3><span class="fixed_w3"> About</span> us</h3>
			<div class="agileits_banner_bottom_grids">
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Mastering</h4>
						   <p>Education</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/2.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Mastering</h4>
						     <p>Education</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/3.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Mastering</h4>
						    <p>Education</p>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits_banner_bottom_grid">
					<div class="hovereffect w3ls_banner_bottom_grid">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<div class="overlay">
						   <h4>Mastering</h4>
						    <p>Education</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<Mastering 4 images-->
			<!-- services -->
	<div class="services two">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header">About <span>Us</span></h3>
			<div class="wthree_services_grids">	
				<div class="col-md-6 wthree_services_grid_left">
					<h3>THE <span>SCIENCE PRIVATE</span> HUB</h3>
					<h4>Challenge your Limits!</h4>
					<p> TSPH, The Science Private’s Hub, is an institution focused on creating a benchmark in the education industry. 
						Concept of Private’s, work extraction and personalized attention are some of the key features which distinguish us from others. 
						Our ideology is “Don’t Limit Your Challenges, Challenge Your Limits”. Rich experience of directors and their passion towards teaching is changing 
						the dynamics of the education industry and shaping the career of youngsters.
						When the passion of the teacher meets with dedication and hard work of students then the miracle happens! 
					</p>
					<p> Since inception in 2013; we are able to put Mira - Bhayandar on Maharashtra State map by producing state-level toppers in entrance examinations.
						Our vision is to do all-round development of youngsters which enables them to pursue further studies from national level renowned engineering and medical institutes.
					</p>
					
				</div>
				<div class="col-md-6 wthree_services_grid_right">
					<div class="col-md-4 agileits_w3layouts_service_grid">
						<div class="agile_service_grd">
							<i class="fa fa-share-alt" aria-hidden="true"></i>
						</div>
						<h4>Social Media</h4>
						<p>Tortor varius augue ut mauris dictum.</p>
					</div>
					<div class="col-md-4 agileits_w3layouts_service_grid">
						<div class="agile_service_grd">
						<i class="fa fa-laptop" aria-hidden="true"></i>
						</div>
						<h4>Business</h4>
						<p>Tortor varius augue ut mauris dictum.</p>
					</div>
					<div class="col-md-4 agileits_w3layouts_service_grid">
						<div class="agile_service_grd">
						<i class="fa fa-camera" aria-hidden="true"></i>
						</div>
						<h4>Photography</h4>
						<p>Tortor varius augue ut mauris dictum.</p>
					</div>
					<div class="col-md-4 agileits_w3layouts_service_grid">
						<div class="agile_service_grd">
							<i class="fa fa-database" aria-hidden="true"></i>
						</div>
						<h4>Software</h4>
						<p>Tortor varius augue ut mauris dictum.</p>
					</div>
					<div class="col-md-4 agileits_w3layouts_service_grid">
						<div class="agile_service_grd">
					<i class="fa fa-microphone" aria-hidden="true"></i>
						</div>
						<h4>Language</h4>
						<p>Tortor varius augue ut mauris dictum.</p>
					</div>
					<div class="col-md-4 agileits_w3layouts_service_grid">
						<div class="agile_service_grd">
						<i class="fa fa-comments-o" aria-hidden="true"></i>
						</div>
						<h4>Communication</h4>
						<p>Tortor varius augue ut mauris dictum.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
				<div class="team-w3ls-row">
				   <h3 class="w3l_header w3_agileits_header">Our <span>Instructors</span></h3>
				   <div class="agileits_banner_bottom_grids">
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="images/HiteshBechra-Physics.png" alt="" height="350px"/>
					<div class="img-caption w3-agileits">
						<div class="img-agileinfo-text">
							<h4>Prof. Hitesh Bechra</h4>
							<p>Physics Instructor</p> 
							<div class="w3social-icons"> 
								<ul>
									<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="images/ParimalPatel-Chemistry.png" alt="" height="350px"/>
					<div class="img-caption">
						<div class="img-agileinfo-text">
							<h4>Prof. Parimal Patel</h4>
							<p>Chemistry Instructor </p>
							<div class="w3social-icons"> 
								<ul>
									<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="images/PranavGandhi-Maths.png" alt="" height="350px"/>
					<div class="img-caption">
						<div class="img-agileinfo-text">
							<h4>Prof. Pranav Gandhi</h4>
							<p>Maths Instructor</p> 
							<div class="w3social-icons"> 
								<ul>
									<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="images/GyanprakashPandey-Biology.png" alt="" height="350px"/>
					<div class="img-caption">
						<div class="img-agileinfo-text">
							<h4>Prof. Gyanprakash Pandey</h4>
							<p>Biology Instructor</p>
							<div class="w3social-icons"> 
								<ul>
									<li><a href="#"><i class="fa fa-google-plus"></i> </a></li>
									<li><a href="#"><i class="fa fa-facebook"></i> </a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> </a></li> 
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div> 
			</div>
			</div>

		</div>
	</div>
<!-- //banner-bottom -->

	<!-- services -->
	<div class="services" id="services">
		<div class="container">
		<h3 class="w3l_header w3_agileits_header two">Why <span> TSPH ?</span></h3>
			<div class="agile_inner_w3ls-grids two">
				<div class="col-md-3 service-box">
					<figure class="icon">
					    <span>1</span>
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</figure>
					<h5>Concept of Private’s</h5>
					<p>Directors themselves take the full responsibility of the subject and execute the plan with the help of small team of teachers. 
					‘Personal Attention’ distinguishes TSPH from others.</p>
				</div>
				<div class="col-md-3 service-box">
				
					<figure class="icon">
					 <span>2</span>
					<i class="fa fa-laptop" aria-hidden="true"></i>
					</figure>
					<h5>Library Study Hall</h5>
					<p>To achieve best conceptual clarity; self-study is must & to promote the same, we have diversified collection of reference books in our library.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>3</span>
						<i class="fa fa-book" aria-hidden="true"></i>
					</figure>
					<h5>Study Material</h5>
				<p>Self-designed, systematic & comprehensive study material is provided for boards & entrance exam preparation. Exhaustive numerical practice sheets, tutorials & challenge rounds are another features of it.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>4</span>
						<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
					</figure>
					<h5>Testing Program</h5>
					<p>To ensure the relentless hard work from students, we, at Hub have designed ‘Unique Testing Program’ for boards as well as entrance. 
					Students are constantly engaged in a monthly testing cycle comprising of small test of 15 minutes to the entrance pattern 6 hours long test.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>5</span>
						<i class="fa fa-question-circle-o" aria-hidden="true"></i>
					</figure>
					<h5>Work Extraction & Rigorous Doubts Solving</h5>
				<p>We ensure timely completion and honesty in homework. At Hub, availability of professors make doubt solving instant and effective.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>6</span>
						<i class="fa fa-users" aria-hidden="true"></i>
					</figure>
					<h5>One on One Counseling</h5>
					<p>Parent – Student - Teacher meetings are conducted on regular basis to discuss the performance of student & role of parent because we believe that all the three must work in coordination to ensure the best progress.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>7</span>
						<i class="fa fa-laptop" aria-hidden="true"></i>
					</figure>
					<h5>TSPH Digital</h5>
				<p>‘TSPH Digital’ is transforming student’s performance in every possible way. Recorded video sessions, online testing, practice session, performance info graphics and digital library are key features of our digital app. 
				Students as well as parents are given access to our online web portal/android app to closely monitor attendance, test performance and progress.</p>
				</div>
				<div class="col-md-3 service-box">
					<figure class="icon">
					 <span>8</span>
						<i class="fa fa-trophy" aria-hidden="true"></i>
					</figure>
					<h5>Consistency in Results</h5>
					<p>We relentlessly work towards each and every student and guide them to reach a step above their potential. For us ‘Every Child Matters’. 
					Year on year our students are taking results to the greater heights and getting selected in state and national level engineering and medical institutes.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- blog -->
	<div class="blog" id="blog">
		<div class="container">
		
		<h3 class="w3l_header w3_agileits_header"> Latest <span>  News & Announcements</span></h3>
		<!-- extra images>
			<div class="agile_inner_w3ls-grids">
	
				<div class="col-sm-6 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img1">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
							<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> 05</li>
								<li><i class="fa fa-heart" aria-hidden="true"></i> 874</li>
								<li><i class="fa fa-share" aria-hidden="true"></i> Share</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quisque a rhoncus</a></h4>
						<ul>
							<li>By <a href="#">Admin</a></li>
							<li>Jan 28th,2017</li>
						</ul>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
				<div class="col-sm-6 w3-agile-post-grids">
					<div class="w3-agile-post-img w3-agile-post-img2">
						<a href="#" data-toggle="modal" data-target="#myModal"> 
							<ul>
								<li><i class="fa fa-comments" aria-hidden="true"></i> 21</li>
								<li><i class="fa fa-heart" aria-hidden="true"></i> 287</li>
								<li><i class="fa fa-share" aria-hidden="true"></i> Share</li>
							</ul>
						</a>
					</div>
					<div class="w3-agile-post-info">
						<h4><a href="#" data-toggle="modal" data-target="#myModal">Quisque a rhoncus</a></h4>
						<ul>
							<li>By <a href="#">Admin</a></li>
							<li>Feb 24th,2017</li>
						</ul>
						<p>Suspendisse in nisl at ipsum molestie dignissim. Pellentesque est nisi, blandit eget aliquam sed, consequat nec risus.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<extra images-->
		<div class="grid_3 grid_5 agile">
				<!--comment><h3>Wells</h3><comment-->
				<div class="well" style="border-color:#c71414;">
					<a href="https://jeemain.nta.nic.in/webinfo2021/Page/Page?PageId=1&LangId=P" style="color:#c71414; font-weight:bold;">JEE Mains 2021Application Form Fill up</a>
				</div>
				<div class="well" style="border-color:#e8be05;">
					<a href="http://result.jeeadv.ac.in/" style="color:#e8be05; font-weight:bold;">Display of JEE Advanced 2020 Results</a>			
				</div>
				<div class="well" style="border-color:#1dcf2f;">
					<a href="http://ntaresults.nic.in/neet20/result/resultneet.htm" style="color:#1dcf2f; font-weight:bold;">Display of NEET 2020 Results</a>
				</div>
				<div class="well" style="border-color:#2076bd;">
					<a href="https://mhtcet2020.mahaonline.gov.in/" style="color:#2076bd; font-weight:bold;">MHCET 2020 Objections Application</a>
				</div>
			</div>
	</div>
	<!-- //blog -->
<!-- stats -->
	<div class="stats" id="stats">
	    <div class="container"> 
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   <i class="fa fa-laptop" aria-hidden="true"></i>
			<p class="counter">45</p>
			<h3>Courses</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		    <i class="fa fa-smile-o" aria-hidden="true"></i>
			<p class="counter">165</p>
			<h3>Members</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
		<i class="fa fa-trophy" aria-hidden="true"></i>
			<p class="counter">563</p>
			<h3>Awards</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
		<i class="fa fa-user" aria-hidden="true"></i>
			<p class="counter">245</p>
			<h3>Instructors</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>	
</div>
<!-- //stats -->
<!-- testimonials -->		
	<div class="testimonials">
		<div class="col-md-6 w3layouts_event_left">
			<img src="images/test.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 w3layouts_event_right">
			<h3>what people says</h3>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3_event_right_grid">
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi vestibulum turpis.</p>
									<div class="w3layouts_event_right_para_pos">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
									</div>
								</div>
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
										<img src="images/test1.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Williams Stall</h4>
										<p>Graphic & web designer</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="w3_event_right_grid">
								<div class="w3layouts_event_right_para">
									<p>Nam tempus lobortis sem non ornare. Curabitur dignissim interdum sem, et mollis lorem. 
										Mauris hendrerit, mi in aliquet egestas, nisi mi vestibulum turpis.</p>
									<div class="w3layouts_event_right_para_pos">
										<i class="fa fa-quote-left" aria-hidden="true"></i>
									</div>
								</div>
								<div class="w3_agile_event_right_grids">
									<div class="col-xs-4 w3_agile_event_right_grid_left">
											<img src="images/test2.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="col-xs-8 w3_agile_event_right_grid_right">
										<h4>Catherine Mark</h4>
										<p>PHP & web developer</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //testimonials -->	

<?php include "include/footer.php"; ?>
<?php include "include/js.php"; ?>
</body>
</html>