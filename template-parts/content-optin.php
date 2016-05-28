<?php 
	// Custom Fields
$optin_text 		= get_post_meta(7, 'optin_text', true);
$optin_button_text	= get_post_meta(7, 'optin_button_text', true);

 ?>


<!-- OPT-IN ###########################-->
	<section id="optin">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<p class="lead"><?= $optin_text; ?></p>
				</div>
				<div class="col-sm-4"><button class="btn btn-success btn-lrg btn-block" data-toggle="modal" data-target="#myModal"><?=  $optin_button_text;?></button></div>

			</div>
		</div>
	</section>
