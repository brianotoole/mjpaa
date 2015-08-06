<?php
/**
Template Name: Page - Sidebar Right
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

<div class="page-about sidebar-right">
<section class="history">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h3 class="section-title"><?php the_title(); ?></h3>
			<?php if( get_field('interior_callout') ): ?> 
			  <p><?php the_field('interior_callout'); ?></p>
			<?php endif ; ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->

<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-8">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div><!--/.col-->
		
		<div class="col-sm-4 latest-news">
			<?php get_sidebar(); ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.about-->
</div><!--/.page-about-->

	<?php get_footer(); ?>