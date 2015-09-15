<?php
/**
Template Name: Page - UM, Fullwidth, Large video
 */
get_header(); ?> 
            
<div class="video-overlay">
  <article>
  		<h4>Universal Movement Performing Arts Company</h4>
       <p>Universal Movement holds auditions for the company on an annual basis.</p>
       <a class="button transparent" id="modal-btn" data-toggle="modal" href="#full-width">Click to Watch Full Video</a>
  </article>
</div>
<video class="sqs-html5-video" poster="<?php bloginfo('stylesheet_directory'); ?>/img/video/mjpaa_screenshot.jpg" id="heroVideo" autoplay muted loop>
  <source src="<?php bloginfo('stylesheet_directory'); ?>/img/video/um.webm" type="video/webm">
  <source src="<?php bloginfo('stylesheet_directory'); ?>/img/video/um.mp4" type="video/mp4">
  <!--[if lt IE 9]>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/video/mjpaa_screenshot.jpg" class="ie8-poster">
  <![endif]-->
</video>

<div id="umVideo" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <h6 class="modal-title">UM Dance Reel</h6>
          <a class="pull-right modal-close" data-dismiss="modal">&times;</a>
      </div>
      <!-- dialog body -->
      <div class="modal-body">
		<iframe width="100%" height="415" src="https://www.youtube.com/embed/bm87HS4K7jM?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <!-- dialog buttons -->
    </div>
  </div>
</div>

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