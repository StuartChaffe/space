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
$vimeovideo 	= get_field( 'banner_video_vimeo');
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

<?php if ( $vimeovideo && $banner_type == 'Video' ) { ?>

	
	<!-- Using Vimeo iframe for autoplay -->
	<div class="vimeo-wrapper">
		<iframe src="https://player.vimeo.com/video/<?php echo $vimeovideo; ?>?background=1&muted=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
	</div>
<?php } ?>

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