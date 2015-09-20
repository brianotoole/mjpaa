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
	  <?php if ( is_singular() && get_field('event_registration_link') ) :?>
	    <a href="<?php the_field('event_registration_link'); ?>" class="button register" target="_blank"><li>Register</li></a>
	  <?php endif ; ?>
	  
	  <!-- Class Single Sidebar -->
	  <?php if ( is_singular( 'class' ) && get_field('class_registration_link') ): //registration link ?>
	    <a href="<?php the_field('class_registration_link'); ?>" class="hidden-xs button register" target="_blank"><li>Register</li></a>
	    <a href="<?php the_field('class_registration_link'); ?>" class="visible-xs mobile" target="_blank"><li>Register</li></a>
	  <?php endif ; ?>
	  <?php if ( is_singular( 'class' ) && get_field('class_start_date') ): //class dates ?>
	    <div class="class-single">
	   <!-- <h5 class="date">Date</h5>
		<span><?php the_field('class_start_date'); ?>
			<?php if( get_field('class_end_date') ): //if end date is entered... ?>
			 - <?php the_field('class_end_date'); ?>
			<?php endif; ?>
		</span>-->
	  <?php endif ; ?>	
	
	  <?php if ( is_singular( 'class' ) ): //if is class ?>		
	   <div class="class-single">
	   
	  	 <h5 class="cost">Cost</h5>
	  	 <h6><i class="fa fa-usd"></i><?php the_field('class_cost'); ?></h6>
	  
	  <h5 class="program">Program</h5>
		  <h6>
				<?php $programs = get_the_terms( $post->ID , 'program-dance-upper' );
					foreach ( $programs as $program ) {		
					echo " $program->name"; }
				?>
				<?php $programs = get_the_terms( $post->ID , 'program-dance-children' );
					foreach ( $programs as $program ) {		
					echo " $program->name"; }
				?>
				<?php $programs = get_the_terms( $post->ID , 'program-acting' );
					foreach ( $programs as $program ) {		
					echo " $program->name"; }
				?>
				<?php $programs = get_the_terms( $post->ID , 'program-music' );
					foreach ( $programs as $program ) {		
					echo " $program->name"; }
				?>
				<?php $programs = get_the_terms( $post->ID , 'program-voice' );
					foreach ( $programs as $program ) {		
					echo " $program->name"; }
				?>
				<?php $programs = get_the_terms( $post->ID , 'program-acrobatics' );
					foreach ( $programs as $program ) {		
					echo " $program->name"; }
				?>
		<h6>
	  <h5 class="session">Session</h5>
	      <h6>
		 	 <em><?php $sessions = get_the_terms( $post->ID , 'session' );
					foreach ( $sessions as $session ) {		
					  if(count($session) > 1) {
					  	echo "$session->name, "; 
					  } else {
						  echo $session->name;
						 }
					} ?>
			  </em>
			</h6>
		<h5 class="grade">Grade Level</h5>
	      <h6>
		 	 <em><?php $grades = get_the_terms( $post->ID , 'grade' );
					foreach ( $grades as $grade ) {		
					  if(count($grades) > 1) {
					  	echo "$grade->name, "; 
					  } else {
						  echo $grade->name;
						 }
					} ?>
			  </em>
			</h6>
	       <a class="hidden-xs button primary" href="<?php bloginfo('url'); ?>/about/#faculty">Our Faculty</a>
	       <a class="visible-xs button mobile" href="<?php bloginfo('url'); ?>/about/#faculty">Our Faculty</a>
	 
	       <a class="hidden-xs button primary" href="<?php bloginfo('url'); ?>/general-info/uniform-requirements/">Class Uniform</a>
	       <a class="visible-xs button mobile" href="<?php bloginfo('url'); ?>/general-info/uniform-requirements/">Class Uniform</a>

	  <?php endif ; ?>
		</div><!--.class-single-->
	  
	</div><!--/#secondary .sidebar--> 