<?php
/*
Active: true
UUID: 2
Title: Banner
Description: Displays a large banner
Keywords: banner
Post Types: null
Allow Multiple: true
*/

$banner_type	= get_field('banner_type');
$image 			= get_field('banner_image');
$video 			= get_field( 'banner_video');
$poster 		= get_field( 'banner_video_poster');
// $large 		= get_field('banner_image');
$content		= get_field('banner_content');
$title 			= $content['title'];
$button 		= $content['button'];
$overlay 		= get_field('banner_overlay');
?>
<section class="banner" <?php if ( $image ) { ?>style="background-image: url('<?php echo $image['large']['url']; ?>')"<?php } ?>>
<?php if ( $video && $banner_type == 'Video' ) { ?>
	<div class="banner--video">
		<video id="video-desktop" src="<?php echo $video['url']; ?>" loop="false" muted="false" data-poster="" preload="" playsinline="" scrollspy="" autoplay="true" poster="<?php if ( $poster ) { ?><?php echo $poster ?><?php } ?>"></video>
	</div>
<?php } ?>

	<!-- Alternative Vimeo iframe for autoplay -->
	<div class="video-embed" style="display: none">
		<iframe title="Video title" src="https://player.vimeo.com/video/160583881?h=bf08ea74fa&&autoplay=1&dnt=1&app_id=122963" width="100%" height="auto" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen="" controls></iframe>
	</div>
	<!-- Using Vimeo iframe for autoplay -->
	<div class="vimeo-wrapper">
	<iframe src="https://player.vimeo.com/video/43874785?background=1&muted=0&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>

	<div class="banner__content">
		<?php if ( $title ) { ?><h1><?php echo $title; ?></h1><?php } ?>
		<?php if ($button) { ?>
			<a class="btn btn--outline" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
		<?php } ?>
	</div>
	<?php if ( $banner_type == 'Image' ) { ?>
	<?php if ( $image['large'] ) { ?><img loading="lazy" class="banner__image hidemobile" src="<?php echo $image['large']['url']; ?>" alt="<?php echo $image['large']['alt']; ?>" /><?php } ?>
	<?php if ( $image['small'] ) { ?><img loading="lazy" class="banner__image hidedesktop" src="<?php echo $image['small']['url']; ?>" alt="<?php echo $image['small']['alt']; ?>" /><?php } ?>
	<?php } ?>
</section>