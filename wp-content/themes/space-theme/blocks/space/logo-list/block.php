<?php
/*
Active: true
UUID: 22
Title: Logo list
Description: Displays a block of logos
Keywords: logo
Post Types: null
Allow Multiple: true
*/
$title	= get_field('logos_title');

?>
<section class="logo-block">
	<?php if ($title) { ?>
	<div class="logo-list__title">
		<?php echo $title; ?>
	</div>
	<?php } ?>
	<div class="logo-list sm--bottom">
	
	<?php if( have_rows('logos') ) { ?>
		<?php while( have_rows('logos') ): the_row();
			$icon	= get_sub_field('logo');
		?>
		<?php if ( $icon ) { ?>
		<div class="logo-list__item">
			<img loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
		</div>
		<?php } ?>
		<?php endwhile; ?>
	<?php } ?>
	</div>
</section>