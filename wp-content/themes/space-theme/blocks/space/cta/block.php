<?php
/*
Active: true
UUID: 4
Title: CTA
Description: Displays a call to action
Keywords: cta, call to action
Post Types: null
Allow Multiple: true
*/
$bkg		= get_field('bkg_colour');
$content	= get_field('cta_content');
?>
<section class="cta sm--bottom">
	<div class="cta__content">
		<?php echo $content['text']; ?>
		<?php if ($content['link']) { ?>
			<a class="btn" href="<?php echo $content['link']['url']; ?>" target="<?php echo $content['link']['target']; ?>"><?php echo $content['link']['title']; ?></a>
		<?php } ?>
	</div>
</section>