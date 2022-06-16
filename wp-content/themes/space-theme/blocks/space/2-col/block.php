<?php
/*
Active: true
UUID: 3
Title: 2 Column
Description: Displays 2 columns of content, text and image
Keywords: column, content, image
Post Types: null
Allow Multiple: true
*/
$content		= get_field('twocol_content');
$leftcontent	= $content['left_content_text'];
$rightcontent	= $content['right_content_text'];
$leftimage		= $content['left_content_image'];
$rightimage		= $content['right_content_image'];
$lefttype		= $content['left_content'];
$righttype		= $content['right_content'];
?>
<section class="sm--bottom">
	<div class="two-col">
		<div class="two-col__item<?php if ( $lefttype == 'Text' ) { ?> two-col__item--center<?php } ?>">
		<?php if ($leftcontent) { ?><?php echo $leftcontent; ?><?php } ?>
			<?php if ($leftimage) { ?><img loading="lazy" class="" src="<?php echo $leftimage['url']; ?>" alt="<?php echo $leftimage['alt']; ?>" /><?php } ?>
		</div>
		<div class="two-col__item<?php if ( $righttype == 'Text' ) { ?> two-col__item--center<?php } ?>">
			<?php if ($rightcontent) { ?><?php echo $rightcontent; ?><?php } ?>
			<?php if ($rightimage) { ?><img loading="lazy" class="" src="<?php echo $rightimage['url']; ?>" alt="<?php echo $rightimage['alt']; ?>" /><?php } ?>
		</div>
	</div>
</section>