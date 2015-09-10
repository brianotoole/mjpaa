<?php
/**
Template Name: Page - Classes
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">

		<div id="primary" class="col-9-12 pull-right">
			<main id="main" class="site-main entry-content" role="main">

			<div class="results-total">
				<h3 class="animate fadeIn">Search for Classes</h3>
				<p>Select an option below to filter classes by Program, Class, Session, and age or grade level. Dance Program-Children's Division ages-1-7 years. Upper Division Grades 3-Adult (based on ability first then grade).</p>
			</div>

			<div class="class-list">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'part', 'classes' ); ?>

			<?php endwhile; // end of the loop. ?>
			</div><!--/.class-list-->

			</main><!-- #main -->
		</div><!-- #primary -->
		
	<div id="secondary" class="classes-sidebar widget-area col-3-12 pull-left" role="complementary">
		<h3 class="page-title animate fadeIn">All Classes</h3>
		<!--<p class="info">Select an option below to filter classes by program, session, and/or grade level.</p>-->
		  <?php echo do_shortcode('[ULWPQSF id=49 formtitle="0" button="0" text_position="bottom"]'); ?>
	</div><!-- .sidebar --> 

	</div><!-- grid -->
	<?php get_footer(); ?>