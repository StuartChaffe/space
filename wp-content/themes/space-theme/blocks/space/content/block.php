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
	<?php if ( $video ) { ?>
	<div class="content-block--video">
		<?php echo $video; ?>
	</div>
	<?php } ?>
</section>