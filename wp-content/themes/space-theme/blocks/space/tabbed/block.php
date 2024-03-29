<?php
/*
Active: true
UUID: 23
Title: Tabbed content
Description: Displays tabbed content
Keywords: tabs, tabbed
Post Types: null
Allow Multiple: true
*/
$id		= get_field('tabbed_id');
$tab1	= get_field('tab_1');
$tab2	= get_field('tab_2');
$tab3	= get_field('tab_3');
?>

<section class="tabbed sm--bottom">
	<div class="tabbed--buttons" role="tablist" aria-label="TabCordion">
		<button class="tab <?php echo $tab1['tab_colour']; ?> is-active" role="tab" aria-selected="true" aria-controls="<?php echo $block['id']; ?>-tab1-tab" id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab1"><?php echo esc_html( $tab1['tab_title'] ); ?></button>
		<button class="tab <?php echo $tab2['tab_colour']; ?>" role="tab" aria-selected="false" aria-controls="<?php echo $block['id']; ?>-tab2-tab" id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab2" tabindex="-1"><?php echo esc_html( $tab2['tab_title'] ); ?></button>
		<button class="tab <?php echo $tab3['tab_colour']; ?>" role="tab" aria-selected="false" aria-controls="<?php echo $block['id']; ?>-tab3-tab" id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab3" tabindex="-1"><?php echo esc_html( $tab3['tab_title'] ); ?></button>
	</div>
	<div id="<?php echo $block['id']; ?>-tab1-tab" class="tabbed--item is-active" data-title="<?php echo $tab1['tab_title']; ?>" tabindex="0" role="tabpanel" aria-labelledby="tab1">
		<div class="tabbed--item-container">
			<div class="tabbed--item__inner<?php if ( !$tab1['tab_image'] ) { ?> f-col<?php } ?>">
				<div class="tabbed--item__content<?php if ( !$tab1['tab_image'] ) { ?>--full<?php } ?> content">
					<?php echo $tab1['tab_content']; ?>

					<?php if ( $tab1['tab_button'] ) { ?><a href="<?php echo esc_url( $tab1['tab_button']['url'] ); ?>" class="btn btn--tertiary"><?php echo esc_html( $tab1['tab_button']['title'] ); ?></a><?php } ?>
				</div>
				<?php if ( $tab1['tab_image'] ) { ?>
				<div class="tabbed--item__image <?php echo $tab1['image_position']; ?>">
					<img loading="lazy" class="<?php echo $tab1['image_position']; ?>" src="<?php echo esc_url( $tab1['tab_image']['url'] ); ?>" alt="<?php echo esc_attr( $tab1['tab_image']['alt'] ); ?>" />
				</div>
				<?php } ?>

				<?php if ( $tab1['tab_products'] ) { ?>

				<?php if( have_rows('tab_1') ): while ( have_rows('tab_1') ) : the_row(); ?>
				<div class="tabbed-products">
					<?php if( have_rows('tab_products') ): while ( have_rows('tab_products') ) : the_row();
							$content	= get_sub_field('content');
							$bkg		= get_sub_field('bkg_colour');
					?>
						<div class="tabbed-products--item <?php echo $bkg; ?>">
							<?php echo $content; ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<?php endwhile; endif; ?>

				<?php } ?>
			</div>
		</div>
	</div>
	<div id="<?php echo $block['id']; ?>-tab2-tab" class="tabbed--item" data-title="<?php echo $tab2['tab_title']; ?>" tabindex="-1" role="tabpanel" aria-labelledby="tab2">
		<div class="tabbed--item-container">
			<div class="tabbed--item__inner<?php if ( !$tab2['tab_image'] ) { ?> f-col<?php } ?>">
				<div class="tabbed--item__content<?php if ( !$tab2['tab_image'] ) { ?>--full<?php } ?> content">
					<?php echo $tab2['tab_content']; ?>
					<?php if ( $tab2['tab_button'] ) { ?><a href="<?php echo esc_url( $tab2['tab_button']['url'] ); ?>" class="btn btn--secondary-light"><?php echo esc_html( $tab2['tab_button']['title'] ); ?></a><?php } ?>
				</div>
				<?php if ( $tab2['tab_image'] ) { ?>
				<div class="tabbed--item__image <?php echo $tab2['image_position']; ?>">
					<img loading="lazy" class="<?php echo $tab2['image_position']; ?>" src="<?php echo esc_url( $tab2['tab_image']['url'] ); ?>" alt="<?php echo esc_attr( $tab2['tab_image']['alt'] ); ?>" />
				</div>
				<?php } ?>

				<?php if ( $tab2['tab_products'] ) { ?>

				<?php if( have_rows('tab_2') ): while ( have_rows('tab_2') ) : the_row(); ?>
				<div class="tabbed-products">
					<?php if( have_rows('tab_products') ): while ( have_rows('tab_products') ) : the_row();
							$content	= get_sub_field('content');
							$bkg		= get_sub_field('bkg_colour');
					?>
						<div class="tabbed-products--item <?php echo $bkg; ?>">
							<?php echo $content; ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<?php endwhile; endif; ?>

				<?php } ?>
			</div>
		</div>
	</div>
	<div id="<?php echo $block['id']; ?>-tab3-tab" class="tabbed--item" data-title="<?php echo $tab3['tab_title']; ?>" tabindex="-1" role="tabpanel" aria-labelledby="tab3">
		<div class="tabbed--item-container">
			<div class="tabbed--item__inner<?php if ( !$tab3['tab_image'] ) { ?> f-col<?php } ?>">
				<div class="tabbed--item__content<?php if ( !$tab3['tab_image'] ) { ?>--full<?php } ?> content">
					<?php echo $tab3['tab_content']; ?>
					<?php if ( $tab3['tab_button'] ) { ?><a href="<?php echo esc_url( $tab3['tab_button']['url'] ); ?>" class="btn btn--secondary-dark"><?php echo esc_html( $tab3['tab_button']['title'] ); ?></a><?php } ?>
				</div>
				<?php if ( $tab3['tab_image'] ) { ?>
				<div class="tabbed--item__image <?php echo $tab3['image_position']; ?>">
					<img loading="lazy" class="<?php echo $tab3['image_position']; ?>" src="<?php echo esc_url( $tab3['tab_image']['url'] ); ?>" alt="<?php echo esc_attr( $tab3['tab_image']['alt'] ); ?>" />
				</div>
				<?php } ?>

				<?php if ( $tab3['tab_products'] ) { ?>

				<?php if( have_rows('tab_3') ): while ( have_rows('tab_3') ) : the_row(); ?>
				<div class="tabbed-products">
					<?php if( have_rows('tab_products') ): while ( have_rows('tab_products') ) : the_row();
							$content	= get_sub_field('content');
							$bkg		= get_sub_field('bkg_colour');
					?>
						<div class="tabbed-products--item <?php echo $bkg; ?>">
							<?php echo $content; ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<?php endwhile; endif; ?>

				<?php } ?>
			</div>
		</div>
	</div>
</section>