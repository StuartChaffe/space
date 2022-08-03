<?php
/*
Active: true
UUID: 24
Title: Quote
Description: Displays a quote carousel
Keywords: quote, carousel, quote
Post Types: null
Allow Multiple: true
*/
$title = get_field('quotes_title');
$quotes = get_field( 'select-quote' );
?>
<section class="quote-block sm--bottom">
	<?php if ( $title ) { ?>
		<h3><?php echo $title ?></h3>
	<?php } ?>
	<div class="quote--slider">
	<?php
	if( $quotes ): ?>
		<?php foreach( $quotes as $quote): ?>
		<?php
			$title = get_field('quote_title', $quote);
			$content = get_field('quote', $quote);
			$author = get_field('quote_author', $quote);
			$company = get_field('quote_company', $quote);
		?>
		<div class="quote--item">
			<?php if ($title) { ?>
				<p class="lead mb-xs"><strong><?php echo $title; ?></strong></p>
			<?php } ?>
			<?php if ($content) { ?>
			<div class="quote--item__quote">
				<p class="lead"><?php echo $content; ?></p>
			</div>
			<?php } ?>
			<?php if ($author) { ?>
				<p><strong><?php echo $author; ?></strong></p>
			<?php } ?>
			<?php if ($company) { ?>
				<p><?php echo $company; ?></p>
			<?php } ?>
		</div>
		<?php endforeach; ?>
	<?php endif; ?>
	</div>
</section>