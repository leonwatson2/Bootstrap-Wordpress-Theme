<?php 
	// Custom Fields
$featurette_section= array(
			'title' => get_field('featurette_title'),
			'url' => get_field('featurette_url')
	);
 ?>



	<!-- FEATURETTE ###########################-->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<h2><?= $features_section['title']; ?></h2>
					<iframe width="100%" height="415" src="<?= $featurette_section['url']; ?>" frameborder="0" allowfullscreen></iframe>
				</div><!--/ end col -->
			</div><!--/ row -->			
		</div><!--/ container -->
	</section><!--/ featurette -->
	