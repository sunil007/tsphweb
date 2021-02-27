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
					<div class="w3layouts-banner-top" style="background: url('images/2018EngResults/Slider_Akhil_K.jpg') no-repeat 0px 0px; background-size: cover;">

						<div class="container">
							<div class="agileits-banner-info">
							</div>	
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top" style="background: url('images/2018EngResults/Slider_Khushal_R.jpg') no-repeat 0px 0px; background-size: cover;">
					<div class="container">
							<div class="agileits-banner-info">
							</div>	
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top" style="background: url('images/2018MedResults/Slider_Chandrika_R.jpg') no-repeat 0px 0px; background-size: cover;">
						<div class="container">
							<div class="agileits-banner-info">
							</div>	
							
						</div>
					</div>
				</li>

			</ul>
		</div>
	</div>

<!-- //banner -->

	<div class="banner-bottom">
		<div class="container">
		
			<div class="services two nopadding">
				<div class="container">
					<h3 class="w3l_header w3_agileits_header">Engineering Results <span>2018</span></h3>
						
					<h3 class="w3l_header w3_agileits_header">Medical Results <span>2018</span></h3>
					
						
				</div>
			</div>
		</div>
	</div>

<?php include "include/footer.php"; ?>
<?php include "include/js.php"; ?>
</body>
</html>