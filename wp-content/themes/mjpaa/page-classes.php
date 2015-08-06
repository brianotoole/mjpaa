<?php
/**
Template Name: Page - Classes
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">
	
	<div id="secondary" class="classes-sidebar widget-area col-3-12" role="complementary">
		<h3 class="page-title animate fadeIn">Find Classes</h3>
		<p class="info">Select an option below to filter classes by program, session, and/or grade level.</p>
		  <?php echo do_shortcode('[ULWPQSF id=49 formtitle="0" button=0]'); ?>
	</div><!-- .sidebar --> 
	
		<div id="primary" class="col-9-12">
			<main id="main" class="site-main entry-content" role="main">

			<div class="class-list">
			  <div class="results-total">
				<h3>All classes:</h3>
			  </div><!--/.results-total-->
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'part', 'classes' ); ?>

			<?php endwhile; // end of the loop. ?>
			</div><!--/.class-list-->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- grid -->
	<?php get_footer(); ?>