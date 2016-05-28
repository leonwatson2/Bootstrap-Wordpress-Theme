<?php 
/**
 * Template Name: Full Width-Video
 * 
 */

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID) );
$intro = get_post_meta(get_the_ID(),'intro',true);
$video = get_post_meta(get_the_ID(),'video',true);
$about = get_post_meta(get_the_ID(),'about',true);
$who = get_post_meta(get_the_ID(),'who',true);
$music = get_post_meta(get_the_ID(),'music',true);
$music_by = get_post_meta(get_the_ID(),'music_by',true);
get_header();


?>
<?php if( has_post_thumbnail()) { ?>

<section class="feature-image" style="background: url('<?= $thumbnail_url; ?>') no-repeat; background-size: cover; "data-type="background data-speed=2">
	<h1 class="page-title"><?php the_title();?></h1>
</section>


<?php } else { ?>

<section class="feature-image feature-image-default-alt" data-type="background data-speed=2">
	<h1 class="page-title "><?=$who ?></h1>
</section>

<?php } ?>
<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			<div class="main-content col-xs-12">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="col-xs-12"><?= $intro ?></div>
					<div class="col-xs-12">
						<i class="typeform p-hand fa fa-hand-o-right fa-4x hidden-xs pull-right" onclick="play()"style="font-size:8em"></i>
					</div>
				</div>
<hr style="width:100%" class="hidden-md hidden-lg" >
				<div  class="video col-md-4 col-sm-6 col-xs-12">
					<video id="the-video" class="col-xs-12" preload style="margin:0 auto;" width="800px" height="400px" onpause="pauseMusic()" onplay="playMusic()" controls>
						<source src="<?= $video ?>" type="video/mp4">
					</video>
				</div>
<hr style="width:100%; margin-top:15px;" class="hidden-md hidden-lg">
				
				<div class="col-xs-12 col-md-4 col-xs-12">
					<?= $about ?>
				</div>
					
			</div> <!--/ main-content -->

			
			<div style="clear:both; margin:10px; height:10px; width:100%">
				<div id="music-by" class="hidden-xs">Music Provided By: <?= $music_by?></div>
			</div>
		</div> <!--/ content -->

	</div><!--/ row -->

</div> <!--/ container -->
<script>
function play(){	
	document.getElementById("the-video").play();
	playMusic();
}

 var gretch = new Audio('<?= $music ?>');
function playMusic(){
	gretch.volume = .1;
	gretch.play();
}
function pauseMusic(){
	gretch.pause();
}
</script>

<?php get_footer(); ?>