<!-- footer -->
<div class="footer">
	<div class="f-bg-w3l">
		<div class="container">
			<div class='row nomargin'>
				<div class="col-md-3 w3layouts_footer_grid">
					<h2>Follow <span>Us</span></h2>
					<ul class="social_agileinfo">
						<li><a href="https://www.facebook.com/tsphofficial/" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UC_hBrnDRNGlle41c-E9uPFw" class="w3_youtube"><i class="fa fa-youtube-play"></i></a></li>
						<li><a href="https://www.instagram.com/tsph_thescienceprivateshub/" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<!--li><a href="http://tsph.classmatrix.in/" class="w3_google"><i class="fa fa-google-plus"></i></a></li-->
					</ul>
				</div>
				<div class="col-md-9 w3layouts_footer_grid">
					<ul class="w3l_footer_nav">
						<li><a href="index.php" class="<?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'index')?"active": "" ?>">Home</a></li>
						<li><a href="faculty.php" class="<?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'faculty')?"active": "" ?>">Faculty</a></li>
						<li><a href="courses.php" class="<?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'courses')?"active": "" ?>">Courses</a></li>
						<li><a href="digitalguru.php" class="<?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'digitalguru')?"active": "" ?>">Digital Guru</a></li>
						<li><a href="result_2021.php" class="<?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'results')?"active": "" ?>">Results</a></li>
						<li><a href="gallery.php" class="<?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'gallery')?"active": "" ?>">Gallery</a></li>
						<li><a href="blogs.php" class="<?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'blogs')?"active": "" ?>">Blogs</a></li>
						<li><a href="contactus.php" class="<?php echo (isset($_SESSION['pageName']) && $_SESSION['pageName'] == 'contactus')?"active": "" ?>">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-12 col-sm-12" style='height:5px'></div>
			<div class="col-md-12 col-sm-12 w3layouts_footer_grid">
				
				<h2><span>Branch</span> Address</h2>
				<div class="col-md-6 nopadding">
					<p><b> <a class="agile-icon" target="_blank" href="https://goo.gl/maps/PTt6feQ9M98xwtnS9" > <i class="fa fa-map-marker" style="color:#f24141; font-size:3em;"></i></a>&nbsp;<a class="agile-icon" target="_blank" href="https://goo.gl/maps/PTt6feQ9M98xwtnS9" ><span style="font-size:1.5em;">BHAYANDAR BRANCH</span></a></b></p>
					<p>First Floor, Ashoka Shopping Centre, Navghar Road,Near Shani Mandir, Near Railway Station, Bhayandar (E),</p>
					<a href="tel:+918652375375" style="font-size:16px; color:#fe7549;"><i class="fa fa-phone" aria-hidden="true"></i><b> +91 8652-375-375</b></a><a style="color:white;"> |</a>
					<a href="tel:+918652374374" style="font-size:16px; color:#fe7549;"><i class="fa fa-phone" aria-hidden="true"></i><b> +91 8652-374-374</b></a>
					<div style='height:20px'></div>
				</div>
				<div class="col-md-6 nopadding">
					<p><b> <a class="agile-icon" target="_blank" href="https://g.page/TSPH-miraroad?share" > <i class="fa fa-map-marker" style="color:#f24141; font-size:3em;"></i></a>&nbsp;<a class="agile-icon" target="_blank" href="https://g.page/TSPH-miraroad?share" ><span style="font-size:1.5em;">MIRAROAD BRANCH</span></a></b></p>
					<p>D/232, First Floor, Shanti Shopping Centre, Near Railway Station, Mira Road (E),</p>
					<a href="tel:+918652371371" style="font-size:16px; color:#fe7549;"><i class="fa fa-phone" aria-hidden="true"></i><b> +91 8652-371-371</b></a>
					<a style="color:white;"> |</a>
					<a href="tel:+918652373373" style="font-size:16px; color:#fe7549"><i class="fa fa-phone" aria-hidden="true"></i><b>+91 8652-373-373</b></a>
					<div style='height:20px'></div>
					
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div>
			<div style='height:20px'></div>
			<p class="text-center" style="color:white;">&copy; 2021 Mastering. All Rights Reserved.</p>
		</div>
	</div>
</div>

<div id='enquiryForm' class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Enquiry Form</h3>
		<hr class="nomargin" style="border-bottom: 1px solid #337ab7;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style=' position: absolute;top: -10px;right: -10px;padding: 5px 10px;border: 1px solid #fff;color: #fff;background-color: red;border-radius: 20px;'>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form id="enquiryDataForm">
			<h4>Student Name</h4>
			<div style='height:5px;'></div>
			<div class='input-group nomargin'>
				<span class='input-group-addon'><i class='fa fa-user'></i></span>
				<input type='text' name='name' class='form-control' placeholder='Student Name'>
			</div>
			<div id='nameError' style='color:red;font-size:0.9em'></div>
			
			<div style='height:15px;'></div>
			<h4>Contact Number</h4>
			<div style='height:5px;'></div>
			<div class='input-group nomargin'>
				<span class='input-group-addon'><i class='fa fa-phone'></i></span>
				<input type='number' name='phone' class='form-control' placeholder='Contact Number'>
			</div>
			<div id='phoneError' style='color:red;font-size:0.9em'></div>
			
			<div style='height:15px;'></div>
			<h4>Select Course</h4>
			<div style='height:5px;'></div>
			<div class='input-group nomargin'>
				<span class='input-group-addon'><i class='fa fa-list'></i></span>
				<select id="course" name="course" class='form-control'>
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
			</div>
			<div id='courseError' style='color:red;font-size:0.9em'></div>
		</form>
		<div style='height:15px;'></div>
		<div id='errorMessage' style='color:red;font-size:0.9em'></div>
		<div id='successMessage' style='color:green;font-size:0.9em'></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="submitEnquiry()">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
	function submitEnquiry(){
		let name = $("#enquiryDataForm [name='name']").val();
		if(name == ""){
			$("#enquiryDataForm [name='name']").effect('highlight',2000);
			$("#enquiryDataForm #nameError").text("Please enter name");
			return false;
		}else{
			$("#enquiryDataForm #nameError").text("");
		}
		
		let phone = $("#enquiryDataForm [name='phone']").val();
		if(phone == ""){
			$("#enquiryDataForm [name='phone']").effect('highlight',2000);
			$("#enquiryDataForm #phoneError").text("Please enter valid 10 digit name");
			return false;
		}else{
			$("#enquiryDataForm #phoneError").text("");
		}
		let course = $("#enquiryDataForm [name='course']").val();
		if(course == "-1"){
			$("#enquiryDataForm [name='course']").effect('highlight',2000);
			$("#enquiryDataForm #courseError").text("Please select course");
			return false;
		}else{
			$("#enquiryDataForm #courseError").text("");
		}
		
		captchaAction = "newEnquiry";
		grecaptcha.execute('6LeQ334UAAAAAMcpX18gQk-hvLQh74biC2ii-oXI', {action: captchaAction})
		.then(function(token) {
			var dataPoints = $("#enquiryDataForm").serializeArray();
			data = {};
			data['name'] = name;
			data['phone'] = phone;
			data['cource'] = course;
			if(typeof(token) != "undefined" && token.length > 0)
				data['token']=token;
			
			$("#successMessage").text("Please wait...Registring your enquiry with TSPH Experts.");
			$.post("ajax/newEnquiry.php", data, function(data){
				try{
					$("#successMessage").text();
					$("#errorMessage").text();
					jsonData = JSON.parse(data);
					if(typeof(jsonData['status']) != "undefined" && jsonData['status'] == "success"){
						$("#enquiryDataForm").hide();
						$("#enquiryForm .modal-footer").hide();
						$("#successMessage").html("<h3 class='text-center'><span style='font-size:1.2em'>Thank You</span><br/>&nbsp;<br/>Request is Registered Successfully.<br/>&nbsp;<br/>&nbsp;</h3>");
					}else{
						$("#errorMessage").text("Failed to connect to server. Please reload the page and try again.")
					}
				}catch(e){
					console.log(e);
					$("#successMessage").text();
					$("#errorMessage").text("Failed to connect to server. Please reload the page and try again.")
					
				}
			});
		});
	}
</script>