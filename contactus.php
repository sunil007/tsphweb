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
				<ul class="text-center" >
					<!--li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Fill this contact form correctly to receive a callback from our side.</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> We will respond to your message within 24 hours.</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> You can get in touch with us on 
						<b><u><a target="_blank" href="https://wa.me/8652375375?text=Hello%20TSPH" >+91 8652-375-375</a></u></b> 
					either over the call or WhatsApp during office hours.</h4></li-->
					<p style="font-size:24px;"><b>Namaste !</b></p>
					<div style="height:15px;"></div>					
					<p style="font-size:20px;"><b>Greetings of the day from the team TSPH.</b></p>
					<p style="font-size:20px;">Kindly fillup enquiry form below to receive a callback from our side. We will respond to your message as soon as possible.</p>
					<p style="font-size:20px;">You can get in touch with us on <b><u><a target="_blank" href="https://wa.me/918652375375?text=Hello%20TSPH" >+91 8652-375-375</a></u></b> either on WhatsApp or phone call during office hours.</p>
				</ul>
			</div>	
		</div>
	</div>
	
	<div class="col-md-12">
		<div style="height:50px;"></div>
	</div>

	
	<div class="contact">
		<div class="container">
			<h3 class="w3l_header w3_agileits_header1">Enquire <span>Now</span></h3>
			<div class="w3layouts_mail_grid">
				<div class="agileits_mail_grid_right agileits_w3layouts_mail_grid_right">
					<div class="agileits_mail_grid_right1 agile_mail_grid_right1">
						<form id='contactDataForm' action="#" method="post">
							<span>
								<i>Name</i>
								<input type='text' name='name' placeholder='Student Name'>
							</span>
							<div id='nameError' style='color:red;font-size:0.9em'></div>
							
							<span>
								<i>Mobile</i>
								<input type='tel' name='phone' placeholder='Contact Number'>
							</span>
							<div id='phoneError' style='color:red;font-size:0.9em'></div>
							
							<span>
								<i>Course	</i>
								<select id="course" name="course">
									<option value="-1">Select Course</option>
									<option value="XI + XII + Engineering">XI + XII + Engineering (JEE Mains + MHCET)</option>
									<option value="XI + XII + Engineering">XI + XII + Engineering (JEE Mains + ADV. + MHCET)</option>
									<option value="XI + XII + Medical">XI + XII + Medical(NEET)</option>
									<option value="Eng. Rep.">JEE (Mains & ADV.) Repeater</option>
									<option value="Med. Rep.">NEET Repeater</option>
									<option value="XII + Engineering">XII + Engineering (JEE Mains + MHCET)</option>
									<option value="XI + Medical">XI + Medical (NEET)</option>
									<option value=" Others"> Others</option>
								</select>
							</span>
							<div id='courseError' style='color:red;font-size:0.9em'></div>
							
							<button type="button" class="btn btn-primary" onclick="submitContact()" style="background: #eb5424;border-color: #eb5424;border-radius: 0px;float: right;">Submit</button>
						</form>
						<div id='errorContactMessage' style='color:red;font-size:0.9em'></div>
						<div id='successContactMessage' style='color:green;font-size:0.9em'></div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<script>
		function submitContact(){
			let name = $("#contactDataForm [name='name']").val();
			if(name == ""){
				$("#contactDataForm [name='name']").effect('highlight',2000);
				$("#contactDataForm #nameError").text("Please enter name");
				return false;
			}else{
				$("#contactDataForm #nameError").text("");
			}
			
			let phone = $("#contactDataForm [name='phone']").val();
			if(phone == ""){
				$("#contactDataForm [name='phone']").effect('highlight',2000);
				$("#contactDataForm #phoneError").text("Please enter valid 10 digit name");
				return false;
			}else{
				$("#contactDataForm #phoneError").text("");
			}
			let course = $("#contactDataForm [name='course']").val();
			if(course == "-1"){
				$("#contactDataForm [name='course']").effect('highlight',2000);
				$("#contactDataForm #courseError").text("Please select course");
				return false;
			}else{
				$("#contactDataForm #courseError").text("");
			}
			gtag_report_conversion();
			captchaAction = "newEnquiry";
			grecaptcha.execute('6LeQ334UAAAAAMcpX18gQk-hvLQh74biC2ii-oXI', {action: captchaAction})
			.then(function(token) {
				var dataPoints = $("#contactDataForm").serializeArray();
				data = {};
				data['name'] = name;
				data['phone'] = phone;
				data['cource'] = course;
				if(typeof(token) != "undefined" && token.length > 0)
					data['token']=token;
				
				$("#successContactMessage").text("Please wait...Registring your enquiry with TSPH Experts.");
				$("#errorContactMessage").text("");
				$.post("ajax/newEnquiry.php", data, function(data){
					$("#successContactMessage").text("");
					$("#errorContactMessage").text("");
					try{
						jsonData = JSON.parse(data);
						if(typeof(jsonData['status']) != "undefined" && jsonData['status'] == "success"){
							$("#contactDataForm").hide();
							$("#successContactMessage").html("<h3 class='text-center'><span style='font-size:1.2em'>Thank You</span><br/>&nbsp;<br/>Request is Registered Successfully.<br/>&nbsp;<br/>&nbsp;</h3>");
						}else{
							$("#successContactMessage").text("");
							$("#errorContactMessage").text("Failed to connect to server. Please reload the page and try again.")
						}
					}catch(e){
						console.log(e);
						$("#successContactMessage").text("");
						$("#errorContactMessage").text("Failed to connect to server. Please reload the page and try again.")
						
					}
				});
			});
		}
	</script>
	<script>
		function gtag_report_conversion() {
			url = window.location.href;
		  var callback = function () {
			if (typeof(url) != 'undefined') {
			  //window.location = url;
			}
		  };
		  gtag('event', 'conversion', {
			  'send_to': 'AW-368368883/RH32COn_3NgCEPO5068B',
			  'event_callback': callback
		  });
		  return false;
		}
	</script>

<?php include "include/footer.php"; ?>
<?php include "include/js.php"; ?>
</body>
</html>