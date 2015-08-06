<?php
/**
 * The sidebar containing the main widgets
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
	?>

	<div id="secondary" class="sidebar widget-area col-3-12" role="complementary">
	  <?php dynamic_sidebar( 'sidebar-1' ); ?>
	  
	  <!-- Event Single Sidebar -->
	  <?php if ( is_singular( 'post' ) && in_category( 'event' ) && get_field('event_registration_link') ) :?>
	    <a href="<?php the_field('event_registration_link'); ?>" target="_blank">Click to Register</a>
	  <?php endif ; ?>
	  
	   <!-- Class Single Sidebar -->
	  <?php if ( is_singular( 'class' ) && get_field('class_registration_link') ): //registration link ?>
	    <a href="<?php the_field('class_registration_link'); ?>" target="_blank">Click to Register</a>
	  <?php endif ; ?>
	  <hr />
	  <?php if ( is_singular( 'class' ) && get_field('class_start_date') ): //class dates ?>
	    <h5>Date</h5>
		<span><?php the_field('class_start_date'); ?>
			<?php if( get_field('class_end_date') ): //if end date is entered... ?>
			 - <?php the_field('class_end_date'); ?>
			<?php endif; ?>
		</span>
		<hr />
	  <?php endif ; ?>	
	  <?php if ( is_singular( 'class' ) && get_field('class_cost') ): //class cost ?>		
	  	 <h5>Cost</h5>
	  	 <p><?php the_field('class_cost'); ?></p>
	  <?php endif ; ?>	
	  
	</div><!--/#secondary .sidebar--> 