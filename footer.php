<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LW_Designs
 */

?>


<?php wp_footer(); ?>
<!-- SIGN UP ###########################-->
	<section id="signup" data-type="background" data-speed="4">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>Ready to get your website up and out <strong>to the world</strong>?</h2>
					<p><a href="/contact" class="btn btn-lg btn-block btn-success">Contact Me!</a></p>
				</div><!--/ end col -->
			</div><!--/ row -->
		</div><!--/ container -->
	</section> <!---/ signup -->

	<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="col-sm-3 col-xs-6">
				<p><a href="/"><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/LW_Designs.png" alt="LW Designs"></a></p>					
			</div> <!--/col-sm-3 -->
			<div class="col-sm-6 hidden-xs">
			<?php wp_nav_menu( array(
						'theme_location' => 'footer',
						'container' => 'nav',
						'menu_class' => 'list-unstyled list-inline'

						)); ?>
			</div> <!--/col-sm-6 -->
			<div class="col-sm-3 col-xs-6">
				<p class="pull-right">&copy; <?= date("Y") ?> Leon Watson</p>					
			</div> <!--/col-sm-3 -->
		</div><!---/ container -->

	</footer>

	<!-- MODAL ###########################-->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i>Subscribe to Mailing List</h4>
				</div> <!---/ modal-header -->
				<div class="modal-body">
					<p>Simply enter your name and email! As a thank you for joining us, you'll recieve a nice little discount on us, <em>for free!</em></p>

					<form class="form-inline" role="form">
						<div class="form-group">
							
							<label for="subscribe-name" class="sr-only">Your First Name</label>
							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
							
						</div><!---/ form-group -->
						<div class="form-group">
							
							<label for="subscribe-email" class="sr-only">Your Email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">

						</div><!---/ form-group -->

						<input type="submit" class="btn btn-danger" value="Subscribe!">
						<hr>
						<p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. 
							<br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small>
						</p>
					</form> <!---/ form -->
				</div> <!---/ modal-body -->
			</div><!---/ modal-content -->
		</div> <!---/ modal-dialog -->
	</div> <!---/ myModal -->

<!-- Jquery -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery-2.1.1.min.js"></script>

<!-- Custom -->
<script async src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>

<?php if (is_page('projects')): ?>
<!-- Portfolio -->
<script src="<?php bloginfo('template_directory') ?>/assets/js/portfolio.jquery.js"></script>
<?php endif ?>
</body>
</html>
