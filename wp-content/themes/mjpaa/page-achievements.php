<?php
/**
Template Name: Page - Achievements
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

<div class="page-about sidebar-right">
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

<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title">Alumni Spotlight</h2> 
			<p></p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->
<section class="memories-images">
	<div class="intro row" id="contain">
		<div class="col-sm-12 images">
		  <img src="http://placeimg.com/290/292/nature">
	      <img src="http://placeimg.com/290/292/people">
	      <img src="http://placeimg.com/290/292/any">
		</div>
	</div><!--/.intro-->
</section><!--/.memories-images-->

<div class="footer-contact">
	<div class="grid grid-pad row">
		<div class="col-sm-12">
			<h3>Attention Alumni</h3>
			<p>Please keep us posted of your latest accomplishments and ventures. <a href="mailto:amanda@mjpaa.com">Email us</a> with any updates and performance photos you may have.</p>
			<a class="button green" href="mailto:amanda@mjpaa.com">Keep in Touch</a>
		</div>
	</div><!-- grid -->
</div><!-- footer-contact -->

	<?php get_footer(); ?>