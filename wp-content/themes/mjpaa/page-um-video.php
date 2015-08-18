<?php
/**
Template Name: Page - UM, full-width video
 */
get_header(); ?> 
            
<div class="video-overlay"></div>

<video class="sqs-html5-video" poster="<?php bloginfo('stylesheet_directory'); ?>/img/video/mjpaa_screenshot.jpg" autoplay muted loop>
  <source src="<?php bloginfo('stylesheet_directory'); ?>/img/video/mjpaa.webm" type="video/webm">
  <source src="<?php bloginfo('stylesheet_directory'); ?>/img/video/mjpaa.mp4" type="video/mp4">
  <!--[if lt IE 9]>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/video/mjpaa_screenshot.jpg" class="ie8-poster">
  <![endif]-->
</video>

	<div class="page-about default">
	<section class="history">
		<div class="intro row" id="contain">
			<div class="col-sm-12 no-padding">
				<h1 class="section-title"><?php the_title(); ?></h1>
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