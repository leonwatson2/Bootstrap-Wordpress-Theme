<?php
/**
 * Template Name: Home Page
 * 
 */

//Advanced Custom Fields









get_header(); ?>
	<?php 
	get_template_part('template-parts/content', 'hero'); 
	// get_template_part('template-parts/content', 'optin'); 
	get_template_part('template-parts/content', 'income'); 
	get_template_part('template-parts/content', 'benefits'); 
	get_template_part('template-parts/content', 'features'); 
	get_template_part('template-parts/content', 'projectfeatures'); 
	// get_template_part('template-parts/content', 'featurette'); 
	get_template_part('template-parts/content', 'designer'); 
	get_template_part('template-parts/content', 'testimonials'); 



	?>
	


<?php get_footer(); ?>
