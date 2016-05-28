<?php 



/**

 * Template Name: Projects

 * 

 */



get_header();





?>





<section class="feature-image feature-image-default-alt" data-type="background data-speed=2">

	<h1 class="page-title"><?php the_title();?></h1>

</section>



<div class="container">

	<div class="row" id="primary">

		<div id="content" class="col-sm-12">

			<section class="main-content">

				<ul class="thumbs">

					

					<?php $loop = new WP_Query(array( 'post_type' => 'portfolio_projects', 'orderby' => 'post_id', 'order' => 'ASC')); ?>



					<?php while($loop->have_posts()) : $loop->the_post(); $postid = $post->ID;?>





					<li>

						<?php if(has_post_thumbnail()){ ?>

						<a href="#project<?= $postid ?>" class="thumbnail" style="background-image: url('<?php the_post_thumbnail_url() ?>');">

						

					<?php } else {

						?>

						<a href="#project<?= $postid ?>" class="thumbnail" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/assets/img/coming-soon.png');">



						<?php }

						?>

							<h4><?php the_title();?></h4>

							<span class="description"><?php the_field('excerpt'); ?></span>

						</a> <!---/ thumbnail -->

					</li>





					<?php			endwhile; 

					wp_reset_query();

					?>

				</ul> <!---/ .thumbs -->



				<div class="portfolio-content">

					<?php $loop = new WP_Query(array( 'post_type' => 'portfolio_projects', 'orderby' => 'post_id', 'order' => 'ASC')); 





					?>



					<?php while($loop->have_posts()) : $loop->the_post(); $postid = $post->ID; 

						$the_tag = (get_field('the_tag') != "") ? get_field('the_tag') : "Check it out";

					?>

					<div id="project<?= $postid ?>">

						<div class="media">

						

						<?php if(has_post_thumbnail()){ ?>

						

						<img src=" <?php the_post_thumbnail_url();?>" alt="Coffee">

					</div> <!---/ .media -->

						

					<?php } else {

						?>

						

						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/coming-soon.png" alt="Coming Soon">

					</div> <!---/ .media -->



						<?php }

						?>

						<h1><?php the_title(); ?></h1>

						

							<?php the_content(); ?>

						<?php if(get_field('external_url')) { ?>

						

						<a href="http://<?php the_field('ex_url');?>" class="btn btn-success"><?php print $the_tag; ?></a> <!---/ btn -->

					

					<?php }else{ ?>

						

						<a href="http://vlw2.com/example/<?php the_field('url');?>" class="btn btn-success"><?php print $the_tag;?>

						</a> <!---/ btn -->

					<?php } ?>

					</div> <!---/ #project -->

					<?php endwhile; 

						wp_reset_query();

					?>

				</div>  <!---/ portfolio content -->





			</section><!--/ main-content -->

		</div> <!--/ content -->



	</div> <!--/ row -->





</div>

<?php 



get_footer();



$number_of_cols = get_field('number_cols');





?>

<script>$(document).ready(function(){

	$(".thumbs").portfolio({

		cols:<?php the_field('number_cols') ?>,

		transition: 'slideDown'

	});

});



</script>