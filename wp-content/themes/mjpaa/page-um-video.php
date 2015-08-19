<?php
/**
Template Name: Page - UM, full-width video
 */
get_header(); ?> 
            
<div class="video-overlay">
  <article>
  		<h4>Universal Movement Performing Arts Company</h4>
       <p>Universal Movement holds auditions for the company on an annual basis.</p>
       <a href="#" class="button gold" id="learn">Learn about us</a>
  </article>
</div>
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
			<blockquote><strong><h2>"When the arts enter a child's world magic happens."</h2></strong>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->
	
	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-12">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; // end of the loop. ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->
	</div><!--/.page-about-->

	<?php get_footer(); ?>