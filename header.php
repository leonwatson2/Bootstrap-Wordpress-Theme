<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://vlw2.com
 *
 * @package LW_Designs
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="C97y78fFv7vIzItoz6gxz1AaDExCK-tohUWSjcw-ClQ" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico" />
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

	<!-- FontAwesome Icons -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">

	<?php if (is_page('projects')): ?>
	<!-- Portfolio -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/assets/css/portfolio.jquery.min.css"></link>
<?php endif ?>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Akronim|Raleway:400,700' rel='stylesheet' type='text/css'>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69685817-2', 'auto');
  ga('send', 'pageview');

</script>
	
	<?php wp_head(); ?>

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<!-- <div id="loading"></div> -->
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
<!-- HEADER
	================================================== -->
	<header class="site-header" role="banner">
		<!-- NAVBAR -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="/" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/LW_Designs.png" alt="LW Designs"></a>

					</div> <!---/navbar-header -->
					
					<?php 
					/**
					 * Custom Walker Create HTML list of nav menu items.
					 *
					 * @since 3.0.0
					 * @uses Walker
					 */
					class Bootstrap_Walker extends Walker_Nav_Menu {
						public function start_lvl( &$output, $depth = 0, $args = array() ) {
							$indent = str_repeat( "\t", $depth );
							$output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
						}
					}
					wp_nav_menu( array(
						'theme_location' 	=> 'primary',
						'container' 		=> 'nav',
						'container_class' 	=> 'navbar-collapse collapse',
						'container_id'		=> 'navbar-main',
						'menu_class' 		=> 'nav navbar-nav navbar-right',
						'walker'			=> new Bootstrap_Walker()

						)); ?>


					</div> <!--/container-->

				</div>	<!--- navbar -->	

			</div> <!---/navbar-wrapper-->

		</header>
