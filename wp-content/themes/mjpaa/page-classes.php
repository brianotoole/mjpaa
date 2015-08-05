<?php
/**
Template Name: Page - Classes
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">
	
	<div id="secondary" class="sidebar widget-area col-3-12" role="complementary">
		<h3>Find Classes</h3>
		  <?php echo do_shortcode('[ULWPQSF id=49 formtitle="0" button=0]'); ?>
	</div><!-- .sidebar --> 
	
		<div id="primary" class="col-9-12">
			<main id="main" class="site-main entry-content" role="main">

			<div class="class-list">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'part', 'classes' ); ?>

			<?php endwhile; // end of the loop. ?>
			</div><!--/.class-list-->

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- grid -->
	<?php get_footer(); ?>