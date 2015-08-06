<?php
/**
 * The template for displaying all single posts.
 *
 */
get_header(); ?> 

	<header class="entry-header">
	</header><!-- .entry-header -->
	<?php while ( have_posts() ) : the_post(); ?>
	

	
	<div class="page-about">
	<section class="history">
		<div class="intro row" id="contain">
			<div class="col-sm-3 visit">
				<?php if ( is_singular( 'class' ) ) :  ?>
				  <p>Program</p>
				    <span>
				    <?php $programs = get_the_terms( $post->ID , 'program' );
						foreach ( $programs as $program ) {		
						echo $program->name; }
					?>
					<span>
				  <hr />
				  <p>Grade Level</p>
				    <span>
				    <?php $grades = get_the_terms( $post->ID , 'grade' );
						foreach ( $grades as $grade ) {		
						echo $grade->name; }
					?>
				    </span>
				<?php endif ; //close if is sinlge post_type 'class' ?>
				
				
				<?php if ( is_singular( 'faculty' ) ) :  ?>
					<img class="faculty" src="<?php the_field('faculty_img'); ?>" />
				<?php endif ; //close if is single post_type 'facutly' ?>
				
				
				
				<?php if ( is_singular( 'post' ) && in_category( 'event' ) ) :?>
				  <p>Date</p>
				    <span><?php the_field('event_start_date'); ?>
				    <?php if( get_field('event_end_date') ): //if end date is entered... ?>
				    - <?php the_field('event_end_date'); ?>
				    <?php endif; ?>
				    </span>
				  <hr />
				  <?php if( get_field('event_location_link') != get_field('event_location_link') ): //if location is entered, but no link is entered... ?>
				    <p>Location</p>
				    <span><?php the_field('event_location_name'); ?></span>
				  <?php endif ; ?>		
				  <?php if( get_field('event_location_link') && get_field('event_location_link') ): //if both location fields are entered... ?>
				  	<p>Location</p>
				  	<a href="<?php the_field('event_location_link'); ?>"><?php the_field('event_location_name'); ?></a>
				  <?php endif ; ?>			    
				    
				<?php endif ; //close if is sinlge post in category event ?>
				
				
				<?php if ( is_singular( 'post' ) && in_category( 'news' ) || in_category() ) :?>
				  <p>Posted on</p>
				    <span>published date</span>
				  <hr />
				  <p>Posted by</p>
				    <span>author username</span>
				<?php endif ; //close if is sinlge post in category news or no category is checked ?>
			</div><!--/.col-->
			<div class="col-sm-9 quotes b-left">
				<h2 class="page-title animate fadeIn"><?php the_title(); ?></h2>
				<?php if ( is_singular( 'faculty' ) ) :  //if "faculty" post_type single ?>
				  <h5>Position:</h5>
				  <p><?php the_field('faculty_position'); ?></p>
				  <h5>Years at MJPAA:</h5>
				  <p><?php the_field('faculty_years'); ?></sp>
				  <h5>Favorite XYZ:</h5>
				  <p><?php the_field('faculty_favorite'); ?></sp>
				<?php endif ; ?>
				
				<?php if ( is_singular( 'post' ) || is_singular('class')) :?>
				<p><?php the_field('interior_callout'); ?></p>
				<?php endif ; ?>
				
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->
	
	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
				<div id="primary">
					<main id="main" class="site-main" role="main">
					  <div class="entry-content">
					    <?php the_content(); ?> 
					  </div>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!--/.col-->
			<div class="col-sm-4 latest-news">
				<?php if ( is_singular( 'post' ) && in_category( 'news' ) || in_category() ) :?>
					<h4 class="latest-title">News &amp; Events</h4>
					<?php get_template_part( 'part', 'latest_news' ); ?>
				<?php endif ; ?>
				<?php get_sidebar(); ?>
				<?php if ( is_singular( 'faculty' ) ) :  //if "faculty" post_type single ?>
					<h4 class="latest-title">Our Faculty</h4>
					<?php
						// WP_Query arguments for custom post type...
						$args = array (
							'post_type'	     => array( 'faculty' ),
							'orderby' 		 => 'menu_order',
							'order'			 => 'ASC',
							'posts_per_page' => -1
						);
						// The Query
						$loop = new WP_Query( $args );
						
						// The Loop
						if ( $loop->have_posts() ) {
							while ( $loop->have_posts() ) {
								$loop->the_post(); ?>
									<a href="<?php the_permalink() ?>">
								    	<h5 class="news-title"><?php the_title(); ?></h5>
									</a>						
						<?php } 
						} else {
							// no posts found
						}
						// Restore original Post Data
						wp_reset_postdata();
						
						?>
				<? endif ; ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->
	
	<?php if ( is_singular( 'class' ) && get_field('class_registration_link') ): //registration link ?>
	<div class="footer-contact">
		<div class="grid grid-pad row">
			<div class="col-sm-12">
				<h3>Sign up for: <strong><?php the_title(); ?></strong></h3>
				<p>To register for this class, click the button below.</p>
				<a class="button green" href="<?php the_field('class_registration_link'); ?>" target="_blank">Register Now</a>
			</div>
		</div><!-- grid -->
	</div><!-- footer-contact -->
	<?php endif ; ?>

	<?php endwhile; // end of the loop. ?>
	<?php get_footer(); ?>