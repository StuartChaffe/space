<?php
/*
Active: true
UUID: 20
Title: Content
Description: Displays a content block
Keywords: content, text
Post Types: null
Allow Multiple: true
*/
$content	= get_field('content');
$video		= get_field('content_video');
?>
<section class="content-block sm">
	<?php echo $content; ?>
	<div class="content-block--video">
		<iframe src="https://player.vimeo.com/video/<?php echo $video; ?>?h=91fe92f487&byline=0&title=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
	</div>

	<?php if ( $video ) { ?>

	<?php } ?>
</section>