<?php
/*
Active: true
UUID: 8
Title: Form
Description: Displays a form block
Keywords: form, email
Post Types: null
Allow Multiple: true
*/
$bkg 				= get_field('bkg');
$content			= get_field('form_content');
$default_body		= get_field('form_content', 'options');
?>
<section class="form-outer sp">
	<div class="form-block">
		<div class="form-block__body">
			<div class="form-block__body-content">
				<?php if ($content) { ?>
					<?php echo $content; ?>
					<?php } else { ?>
					<?php echo $default_body; ?>
				<?php } ?>
			</div>
			<div class="form-block__body-form">
				<?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
			</div>
		</div>
	</div>
</section>