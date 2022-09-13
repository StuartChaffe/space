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

<?php if ( $vimeovideo && $banner_type == 'Video' ) { ?>
	

	<div style="padding:56.25% 0 0 0;position:relative;  width: 100%;"><iframe src="https://player.vimeo.com/video/729663194?h=ce0b675962&muted=0&autoplay=1&loop=1&amp;badge=0&amp;autopause=0&amp;pl…" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="SPACE Video Introduction"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
<?php } ?>

	<div class="banner__content">
		<?php if ( $title ) { ?><?php echo $title; ?><?php } ?>
		<?php if ($button) { ?>
			<a class="btn btn--outline" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
		<?php } ?>
	</div>
	<?php if ( $banner_type == 'Image' ) { ?>
	<?php if ( $image['large'] ) { ?><img loading="lazy" class="banner__image hidemobile" src="<?php echo $image['large']['url']; ?>" alt="<?php echo $image['large']['alt']; ?>" /><?php } ?>
	<?php if ( $image['small'] ) { ?><img loading="lazy" class="banner__image hidedesktop" src="<?php echo $image['small']['url']; ?>" alt="<?php echo $image['small']['alt']; ?>" /><?php } ?>
	<?php } ?>
</section>

