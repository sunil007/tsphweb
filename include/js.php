<!-- //footer -->
<!-- start-smoth-scrolling -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<!-- //js -->
<script src="js/JiSlider.js"></script>
<script>
	$(window).load(function () {
		if($('#JiSlider').size() > 0){
			var startSize = $("#JiSlider ul li").size();
			if(startSize > 1){
				$('#JiSlider').JiSlider({color: '#fff', start: 1, reverse: false, stay : 7000}).addClass('ff');
			}else{
				$('#JiSlider').JiSlider({color: '#fff', start: startSize, reverse: false, stay : 10000000000}).addClass('ff');
			}
		}
	})
</script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>

<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	  $('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
		  $('body').removeClass('loading');
		}
	  });
	});
</script>

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<script src="js/bootstrap.js"></script>

<script src="js/jquery.swipebox.min.js"></script> 
<script type="text/javascript">
	jQuery(function($) {
		$(".swipebox").swipebox();
	});
</script>
<script src='https://www.google.com/recaptcha/api.js?render=6LeQ334UAAAAAMcpX18gQk-hvLQh74biC2ii-oXI'></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XH2Q6L581X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XH2Q6L581X');
</script>

<!-- ----------------------NEW GMAG--------------------------->
<!-- Global site tag (gtag.js) - Google Ads: 368368883 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-368368883"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-368368883');
</script>
