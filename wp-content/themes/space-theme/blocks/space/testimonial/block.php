<?php
/*
Active: true
UUID: 24
Title: Testimonial
Description: Displays a testimonial carousel
Keywords: testimonial, carousel
Post Types: null
Allow Multiple: true
*/
$title = get_field('testimonials_title');
?>
<section class="testimonials-block sm--bottom">
	<?php if ( $title ) { ?>
		<h3><?php echo $title ?></h3>
	<?php } ?>
	<div class="testimonials--slider">
	<?php while( have_rows('testimonial') ): the_row();
		$quote = get_sub_field('testimonial_quote', false, false);
		$author = get_sub_field('testimonial_author');
		$company = get_sub_field('testimonial_company');
	?>
		<div class="testimonials--item">
			<?php if ($quote) { ?>
			<div class="testimonials--item__quote">
				<p class="lead"><?php echo $quote; ?></p>
			</div>
			<?php } ?>
			<?php if ($author) { ?>
				<p><strong><?php echo $author; ?></strong></p>
			<?php } ?>
			<?php if ($company) { ?>
				<p><?php echo $company; ?></p>
			<?php } ?>
		</div>
	<?php endwhile; ?>
	</div>
</section>