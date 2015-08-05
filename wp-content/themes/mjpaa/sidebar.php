<?php
/**
 * The sidebar containing the main widgets
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
	?>

	<div id="secondary" class="sidebar widget-area col-3-12" role="complementary">
	  <h3 class="page-title animate fadeIn"><?php the_title(); ?></h3>
	  <?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary --> 