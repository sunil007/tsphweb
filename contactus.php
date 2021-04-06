<?php include "include/security.php" ?>
<?php $_SESSION['pageName'] = 'contactus' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "include/title.php"; ?>
	<?php include "include/css.php"; ?>
</head>
	
<body>
	<?php include "include/topNav.php"; ?>
	
	<div class="banner1">			
		<div class="w3_agileits_service_banner_info">
			<h2>Contact Us</h2>
		</div>
	</div>
	
	<div class="row">
		<div style="height:50px;"></div>
		<div class="col-md-12 col-sm-12 agileits_mail_grid_left agileinfo_mail_grid_left">
			<div class="agileits_mail_grid_lft_grid wthree_mail_grid_lft_grid">
				<ul class="text-center">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Fill this contact form correctly to receive a callback from our side.</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We will respond to your message within 24 hours.</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> You can get in touch with us on 
						<b><u><a target="_blank" href="https://wa.me/8652375375?text=Hello%20TSPH" >+91 8652-375-375</a></u></b> 
					either over the call or WhatsApp during office hours.</h4></li>
				</ul>
			</div>	
		</div>
	</div>
	
	<div class="col-md-12">
		<div style="height:50px;"></div>
	</div>

	
	<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Contact <span>Info</span></h3>
			<div class="w3layouts_mail_grid">
					<div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form action="#" method="post">
							<span>
								<i>Name</i>
								<input type="text" name="name" placeholder="Name" required="">
							</span>
							<span>
								<i>Mobile</i>
								<input type="tel" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Contact number" required="">
							</span>
							<span>
								<i>Course	</i>
								<select id="course" name="course">
									<option value="-1">Select Course</option>
									<option value="XI + XII + Engineering">XI + XII + Engineering</option>
									<option value="XI + XII + Medical">XI + XII + Medical</option>
									<option value="Eng. Rep.">Eng. Rep.</option>
									<option value="Med. Rep.">Med. Rep.</option>
									<option value="XII + Engineering">XII + Engineering</option>
									<option value="XI + Medical">XI + Medical</option>
									<option value=" XII"> XII</option>
									<option value=" Others"> Others</option>
								</select>
							</span>
							<div class="text-right"><input type="submit" value="SUBMIT"></div>
						</form>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


<?php include "include/footer.php"; ?>
<?php include "include/js.php"; ?>
</body>
</html>