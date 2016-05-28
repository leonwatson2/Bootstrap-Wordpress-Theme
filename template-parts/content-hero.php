<?php 
	// Custom Fields
$button_text 		= get_post_meta(7, 'button_text', true);
$course_url 		= get_post_meta(7, 'course_url', true);

?>


<!-- HERO ###########################-->
<link rel="stylesheet" href="http://juliequiroz.com/inc/animations/css/animate.min.css">
<script src="http://juliequiroz.com/inc/animations/js/wow.min.js"></script>
<script>
              new WOW().init();
              </script>
<section id="hero" data-type="background" data-speed="2">
	<article class="container clearfix">
			
			<div class="row">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6 hero-text">
					<h1><?php bloginfo('name') ?></h1>
					<p class="lead"><?php bloginfo('description'); ?></p>
				
				</div> <!---/ hero-text -->
			</div>
					<div class="clear-fix"></div>
				<div class="row">
					<div class="col-xs-12">
						<p><a href="/contact" class="btn btn-lrg btn-success" role="button"><?= $button_text; ?></a></p>
					</div>
				</div>
<script>
	function doThis(){
		alert($("#hero").css("background"))
	};
</script>
			<!-- </div> /col-sm-offset-5 -->
	</article>	
</section>
