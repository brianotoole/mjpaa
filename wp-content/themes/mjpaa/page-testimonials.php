<?php
/**
Template Name: Page - Testimonials
 */
get_header(); ?> 
                       
<div class="cover-top">
  <article>
  	   <h4><?php the_title(); ?></h4>
       <?php if( get_field('interior_callout') ): ?> 
		<p><?php the_field('interior_callout'); ?></p>
		<?php endif ; ?>
       <a href="#" class="button transparent" id="learn">Click to View</a>
  </article>
</div>
<div class="cover-bottom">
  <header class="entry-header">
  </header><!-- .entry-header -->
</div>


<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry-content">
					<?php
					//testimonials, display all "testimonial" post_type
					$args = array( 
					  'post_type' => 'testimonial', 
					  'posts_per_page' => -1,
					  'orderby' => 'rand'
					);
					
					// The Query
					$loop = new WP_Query( $args );
					// The Loop
					if ( $loop->have_posts() ) {
						while ( $loop->have_posts() ) {
							$loop->the_post(); ?>
							
					        <h4>"<?php the_field('testimonial_quote'); ?>" - <span><?php the_field('testimonial_client'); ?></span></h4>
					
					<?php } 
					} else {
						// no testimonials found
					}
					
					// Restore original Post Data
					wp_reset_postdata();
					
					?>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.about-->
</div><!--/.page-about-->

<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title alumni">Awards &amp; Recognitions</h2> 
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->
<section class="alumni-images">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<?php the_content(); ?>
		</div>
	</div><!--/.intro-->
</section><!--/.memories-images-->

<div class="footer-contact overlay">
	<div class="grid grid-pad row">
		<div class="col-sm-12">
			<h3>Want to provide your feedback?</h3>
			<p>If you have a comment to provide to us, please email us using the button below.</p> 
			<a class="button gold" href="mailto:kscanio@mjpaa.com">Send Feedback</a>
		</div>
	</div><!-- grid -->
</div><!-- footer-contact -->

	<?php get_footer(); ?>