<?php
/**
Template Name: Page - Classes
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="grid">
	<?php get_sidebar(); ?>
		<div id="primary" class="col-9-12">
			<main id="main" class="site-main entry-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'part', 'classes' ); ?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- grid -->
	<?php get_footer(); ?>