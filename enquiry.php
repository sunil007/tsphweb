<?php include "include/security.php" ?>
<?php $_SESSION['pageName'] = 'enquiry' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "include/title.php"; ?>
	<?php include "include/css.php"; ?>
</head>
	
<body>
	<!--?php include "include/topNav.php"; ?-->
	
	<!--div class="banner1">			
		<div class="w3_agileits_service_banner_info">
			<h2>Contact Us</h2>
		</div>
	</div-->
	
	<!--div class="col-md-12">
		<div style="height:50px;"></div>
		<div class="col-md-12 col-sm-12 agileits_mail_grid_left agileinfo_mail_grid_left">
			<div class="agileits_mail_grid_lft_grid wthree_mail_grid_lft_grid">
				<ul class="text-center">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Fill this contact form correctly to receive a callback from our side.</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We will respond to your message within 24 hours.</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> You can get in touch with us on 
						<a href="https://wa.me/8652375375" style="color:43BABA" onMouseOver="this.style.color='green'"onMouseOut="this.style.color='25A3A3'">8652375375</a> either over the call or WhatsApp during office hours.</h4></li>
				</ul>
			</div>	
		</div>
	</div>
	
	<div class="col-md-12">
		<div style="height:50px;"></div>
	</div-->

	
	<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Enquiry <span>Form</span></h3>
			<div class="w3layouts_mail_grid">
					<div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form action="#" method="post">
							<span>
								<i>Name</i>
								<input type="text" name="Name" placeholder=" " required="">
							</span>
							<span>
								<i>Mobile</i>
								<input type="tel" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder=" " required="">
							</span>
							<span>
								<i>Subject</i>
								<!--input type="text" name="Subject" placeholder=" " required=""-->
								<select id="subject" name="Subject">
									<option value="none" selected>Select</option>
									<option value="a">A</option>
									<option value="b">B</option>
									<option value="c">C</option>
								</select>
							</span>
							<input type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


<!--?php include "include/footer.php"; ?-->
<?php include "include/js.php"; ?>
</body>
</html>