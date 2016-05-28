<?php 
$designer_section = array(
			'title' => get_field('designer_section_title'),
			'name' => get_field('designer_name'),
			'bio_excerpt' => get_field('bio_excerpt'),
			'full_bio' => get_field('full_bio'),
			'twitter' => get_field('twitter_username'),
			'facebook' => get_field('facebook_username'),
			'instagram' => get_field('instagram_username'),
			'students' => get_field('num_of_students'), 
			'reviews' => get_field('num_of_reviews'), 
			'courses' => get_field('num_of_courses') 


	);




 ?>
	
	<!-- WEB DESIGNER ###########################-->
	<section id="designer">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?= $designer_section['title'];?> <small><?= $designer_section['name'];?></small></h2>						
						</div> <!--/col-lg-8 -->
						<div class="col-lg-4">
							
					<?php if( !empty($designer_section['twitter'])) ?>
							<a href="https://twitter.com/<?= $designer_section['twitter']; ?>" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
					<?php if( !empty($designer_section['facebook'])) ?>
							<a href="https://www.facebook.com/<?= $designer_section['facebook'];  ?>" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
					<?php if( !empty($designer_section['instagram'])) ?>
							<a href="https://instagram.com/<?= $designer_section['instagram']; ?>/" target="_blank" class="badge social instagram"><i class="fa fa-instagram"></i></a>					
						</div> <!--/col-ls-4 -->
					</div> <!---/ row -->
					<p class="lead"><?= $designer_section['bio_excerpt']; ?><p>
					
					<?= $designer_section['full_bio']; ?>

					
					<!-- <hr> -->
					<?php if(true == false){ ?>
					<h3>The Numbers <small>They Don't Lie</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?= $designer_section['students'];?> <span>students</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?= $designer_section['reviews'];?><span>reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?= $designer_section['courses'];?> <span>courses</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
											
				</div> <!--/col-sm-8 -->
			</div> <!---/ row -->
			<?php } ?>
		</div>
	</section>