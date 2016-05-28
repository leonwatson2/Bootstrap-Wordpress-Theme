<?php 
	// Custom Fields
$features_section = array(
			'img' => get_field('features_section_image'),
			'title' => get_field('features_section_title'),
			'body' => get_field('features_section_body')
	);

 ?>


	<!-- COURSE FEATURES -->
	<section id="web-benefits">
		<div class="container">
			<div class="section-header">
				<?php if( !empty($who_section['img']) )  ?>

				<img src="<?= $features_section['img']['url']; ?>" alt="<?= $features_section['img']['alt']; ?>">
		
				
				<h2><?= $features_section['title']; ?></h2>
				
				<?php if( !empty($features_section['body']) )  ?>
				<p class="lead"><?= $features_section['body'];?></p>
			</div>

			<div class="row">
			
			<?php $loop = new WP_Query(array( 'post_type' => 'course_features', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
			
			<?php $i = 0; while($loop->have_posts()) : $loop->the_post(); ?>


			<div class="col-sm-2 wow <?php if($i%2 == 1) echo 'bounceInRight'; else echo 'bounceInLeft'; ?> animated" <?php if($i%2 == 1) echo 'data-wow-delay=".5s"' ?>>
					<i class=" <?php the_field('course_feature_icon') ?>"></i>
					<h4><?php the_title(); ?></h4>
				</div><!--/ end col -->
			<?php $i++;			endwhile; 
			wp_reset_query();
				?>
			</div> <!---/ row -->

		</div>
	</section> <!---/ web-benefits -->
