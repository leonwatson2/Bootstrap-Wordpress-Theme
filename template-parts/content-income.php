<?php 
//Advanced Custom Fields
$income_feature_image	= get_field('income_feature_image');
$income_section_title	= get_field('income_section_title');
$income_section_desc	= get_field('income_section_description');
$reason_1 = array(
				'title' => get_field('reason_1_title'),
				'desc' => get_field('reason_1_description'));
$reason_2 = array(
				'title' => get_field('reason_2_title'),
				'desc' => get_field('reason_2_description'));

 ?>


<!-- BOOST INCOME ###########################-->
		<section id="boost-income">
		<div class="container">
			
			<div class="section-header">
				<?php if( !empty($income_feature_image) )  ?>

				<img src="<?= $income_feature_image['url']; ?>" alt="<?= $income_feature_image['alt']; ?>">
			

				<h2><?= $income_section_title ?></h2>
			</div><!-- section-header -->
			
			<p class="lead"><?= $income_section_desc; ?></p>
		<!-- 	<div class="row">
				<div class="col-sm-6">
					<h3><?= $reason_1['title'];?></h3>
					<p><?= $reason_1['desc'];?></p>
				</div> -->
				<!-- end col -->
				<!-- 
				<div class="col-sm-6">
					<h3><?= $reason_2['title'];?></h3>
					<p><?= $reason_2['desc'];?></p>
				</div> -->
				<!-- end col -->
				
			<!-- </div> -->
			<!-- row -->
		
		</div><!-- container -->
	</section><!-- boost-income -->
	