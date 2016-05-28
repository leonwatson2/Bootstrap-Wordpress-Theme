<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package LW_Designs
 */

get_header(); ?>

<section class="feature-image feature-image-default-alt" data-type="background data-speed=2">
	<h1 class="page-title">Bummer that page can't be found!</h1>
</section>

<div class="container">
	<div id="primary" class="row">
		<div id="content" class="col-sm-8">
			<div class="error-404 not-found">
				<div class="page-content">
					<h2>Don't fret let's get you back on track.</h2>
					<!-- RESOURCES ###########################-->
					<h3>Resources</h3>
					<p>Perhaps you were looking for a certain resource?</p>
					<?php $loop = new WP_Query(array( 'post_type' => 'resource', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
					
					<div class="resource-row clearfix">
						<?php while($loop->have_posts()) : $loop->the_post(); ?>

						<?php 
						$resource = array(
							'img' => get_field('resource_image'),
							'url' => get_field('resource_url'),
							'btn_text' => get_field('button_text')
							);

							?>

							<div class="resource">
								<img src="<?= $resource['img']['url']; ?>" alt="<?= $resource['img']['alt']; ?>">

								<h3><a href="<?= $resource['url'];?>"><?php the_title();?></a></h3>
								<?php the_excerpt(); ?>
								<a href="<?= $resource['url'];?>" class="btn btn-success"><?= $resource['btn_text']; ?></a>
							</div> <!--/ resource -->

							<?php			endwhile; 
							wp_reset_query();
							?>

						</div> <!--/ resource-row -->
						<!-- CATEGORIES ###########################-->
						<h3>Categories</h3>
						<p>&#133; or maybe a popular category?</p>
						<div class="widget widget_categories">
							<h4 class="widget-title">Most Used Categories</h4>
							<ul>
								<?php wp_list_categories( array(
										'orderby' 	=> 'count',
										'order' 		=> 'DESC',
										'show_count' 	=> 1,
										'title_li' 	=> '',
										'number' 		=> 10
									)

								); ?>
							</ul>
						</div>
						<!-- ARCHIVES ###########################-->
						<h3>Archives</h3>
						<p>You can always sort through our achieves</p>
						<?php the_widget('WP_Widget_Archives', 'title=The Archives','before_title=<h4 class="widgettitle">&after_title=</h4>'); ?>
						
						<p>&#133;or, just head back to the <a href="<?php esc_url(home_url('/')); ?>">home page</a>.</p>
					</div> <!---/ page-content -->
				</div> <!---/ error-404 -->
			</div> <!---/ content -->
			<div class="col-sm-4">
				<?php get_sidebar(); ?>
			</div>
		</div> <!---/ primary -->
	</div> <!---/ container -->

	<?php get_footer(); ?>
