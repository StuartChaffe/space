<?php
/*
Active: true
UUID: 5
Title: Icon list
Description: Displays a row of content with icons
Keywords: link
Post Types: null
Allow Multiple: true
*/
$title	= get_field('links_title');
$bkg	= get_field('links_background');

?>
<section class="icon-block sp">
	<?php if ($title) { ?>
	<div class="icon-list__title">
		<?php echo $title; ?>
	</div>
	<?php } ?>
	<div class="icon-list">
	
	<?php if( have_rows('links') ) { ?>
		<?php while( have_rows('links') ): the_row();
			$icon 		= get_sub_field('link_icon');
			$title 		= get_sub_field('link_title');
			$content 	= get_sub_field('link_content');
			$button 	= get_sub_field('link_link');
		?>

		<div class="icon-list__item<?php if ( $bkg == '1' ) { ?> icon-list__item--bkg bkg--light<?php } ?>">
			<div class="icon-list__content">
				<?php if ( $icon ) { ?><div class="icon-list__image"><img loading="lazy" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" /></div><?php } ?>
				<?php if ($title) { ?>
					<h5><?php echo $title; ?></h5>
				<?php } ?>
				<?php if ($content) { ?>
					<?php echo $content; ?>
				<?php } ?>
				<?php if ($button) { ?>
					<span class="btn" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></span>
				<?php } ?>
			</div>
				</div>
		<?php endwhile; ?>
	<?php } ?>
	</div>
</section>