<?php 
	// Custom Fields
$who_section = array(
			'img' => get_field('who_section_image'),
			'title' => get_field('who_section_title'),
			'body' => get_field('who_section_body')
	);
 ?>


<!--WHO BENIFITS -->
	<section id="who-benefits">
		<div class="container">
			
			<div class="section-header wow bounceInLeft animated">
				<?php if( !empty($who_section['img']) )  ?>

				<img src="<?= $who_section['img']['url']; ?>" alt="<?= $who_section['img']['alt']; ?>">
		
				<h2><?= $who_section['title']; ?></h2>
			</div><!--/ section-header -->
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
				
				<?= $who_section['body'] ?>
				</div><!--/ end col -->
			</div><!--/ row -->

		</div><!--/ container -->
	</section><!--/ who-benefits -->
