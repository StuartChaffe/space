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
		<button class="tab is-active" role="tab" aria-selected="true" aria-controls="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab1-tab" id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab1"><?php echo esc_html( $tab1['tab_title'] ); ?></button>
		<button class="tab" role="tab" aria-selected="false" aria-controls="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab2-tab" id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab2" tabindex="-1"><?php echo esc_html( $tab2['tab_title'] ); ?></button>
		<button class="tab" role="tab" aria-selected="false" aria-controls="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab3-tab" id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab3" tabindex="-1"><?php echo esc_html( $tab3['tab_title'] ); ?></button>
	</div>
	<div id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab1-tab" class="tabbed--item is-active" data-title="<?php echo $tab1['tab_title']; ?>" tabindex="0" role="tabpanel" aria-labelledby="tab1">
		<div class="tabbed--item-container">
			<div class="tabbed--item__inner">
				<div class="tabbed--item__content content">
					<?php echo $tab1['tab_content']; ?>

					<a href="<?php echo esc_url( $tab1['tab_button']['url'] ); ?>" class="btn btn--tertiary"><?php echo esc_html( $tab1['tab_button']['title'] ); ?></a>
				</div>
				<div class="tabbed--item__image">
					<img loading="lazy" src="<?php echo esc_url( $tab1['tab_image']['url'] ); ?>" alt="<?php echo esc_attr( $tab1['tab_image']['alt'] ); ?>" />
				</div>
			</div>
		</div>
	</div>
	<div id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab2-tab" class="tabbed--item" data-title="<?php echo $tab2['tab_title']; ?>" tabindex="-1" role="tabpanel" aria-labelledby="tab2">
		<div class="tabbed--item-container">
			<div class="tabbed--item__inner">
				<div class="tabbed--item__content content">
					<?php echo $tab2['tab_content']; ?>
					<a href="<?php echo esc_url( $tab2['tab_button']['url'] ); ?>" class="btn btn--secondary-light"><?php echo esc_html( $tab2['tab_button']['title'] ); ?></a>
				</div>
				<div class="tabbed--item__image">
					<img loading="lazy" class="tabbed--item__image--bottom" src="<?php echo esc_url( $tab2['tab_image']['url'] ); ?>" alt="<?php echo esc_attr( $tab2['tab_image']['alt'] ); ?>" />
				</div>
			</div>
		</div>
	</div>
	<div id="<?php if ( $id ) { ?><?php echo $id ?>-<?php } ?>tab3-tab" class="tabbed--item" data-title="<?php echo $tab3['tab_title']; ?>" tabindex="-1" role="tabpanel" aria-labelledby="tab3">
		<div class="tabbed--item-container">
			<div class="tabbed--item__inner">
				<div class="tabbed--item__content content">
					<?php echo $tab3['tab_content']; ?>
					<a href="<?php echo esc_url( $tab3['tab_button']['url'] ); ?>" class="btn btn--secondary-dark"><?php echo esc_html( $tab3['tab_button']['title'] ); ?></a>
				</div>
				<div class="tabbed--item__image tabbed--item__image--center">
					<img loading="lazy" src="<?php echo esc_url( $tab3['tab_image']['url'] ); ?>" alt="<?php echo esc_attr( $tab3['tab_image']['alt'] ); ?>" />
				</div>
			</div>
		</div>
	</div>
</section>