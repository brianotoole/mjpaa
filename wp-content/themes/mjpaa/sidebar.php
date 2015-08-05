<?php
/**
 * The sidebar containing the main widgets
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
	?>

	<div id="secondary" class="sidebar widget-area col-3-12" role="complementary">
	
	<?php if(is_singular('class') ) { ?>	
	 <p style="font-size:200px;color:red;">fasdfsd</p>
	<?php } else { ?>
	  <?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php } ?>
	
	</div><!-- #secondary --> 