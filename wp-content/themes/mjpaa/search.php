<?php
/**
Template for displaying search results.
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">
	
		<div id="primary" class="col-9-12 pull-right">
			<main id="main" class="site-main entry-content" role="main">

			<div class="class-list">
			  <div class="results-total">
				<h3><?php printf( __( 'Search results for: "%s"', 'mjpaa' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			  </div><!--/.results-total-->
			  <?php if ( have_posts() ) : ?>
			  <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; // end of the loop. ?>
			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>
			</div><!--/.class-list-->

			</main><!-- #main -->
		</div><!-- #primary -->
		
	<div id="secondary" class="classes-sidebar widget-area col-3-12 pull-left" role="complementary">
		<h3 class="page-title animate fadeIn">Search the Site</h3>
		<p class="info">Select an option below to filter content within the website. Content searched includes news, events &amp; classes.</p>
		  <?php echo do_shortcode('[ULWPQSF id=66 formtitle="0" button=0]'); ?>
	</div><!-- .sidebar --> 

	</div><!-- grid -->
	<?php get_footer(); ?>