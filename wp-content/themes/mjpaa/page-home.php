<?php
/**
Template Name: Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
  <div class="img" style="background: url('<?php the_field('home_hero_img'); ?>') 50% center no-repeat;background-size:cover;"></div> 
    <div class="intro row" id="contain">
     	  <div class="col-sm-12 animate fadeIn">                   
            <h2>fasdfads</h2>
            <p>fasdfsdfsdfadsfsd</p>
          </div><!--/.col-->
     </div><!--/.row-->
</section><!--/section.hero-->

<section class="what-we-do">
	<div class="intro row" id="contain">
	  <h2 class="section-title">section</h2> 
		<div class="col-sm-12">
		</div>
	</div><!--/.intro-->
</section><!--/.what-we-do-->

<section class="news">
	<div class="intro row" id="contain">
	  <h2 class="section-title">section</h2> 
		<div class="col-sm-12">
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.news-->

<section class="quotes">
	<div class="intro row" id="contain">
	  <h2 class="section-title">section</h2> 
		<div class="col-sm-12">
		</div>
	</div><!--/.intro-->
</section><!--/.quotes-->

<section class="help-you">
	<div class="intro row" id="contain">
	  <h2 class="section-title">section</h2> 
		<div class="col-sm-12">
		</div>
	</div><!--/.intro-->
</section><!--/.what-we-do-->


   
<div class="footer-contact">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
		    <img src='<?php bloginfo('stylesheet_directory'); ?>/img/logo.png'alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a> 
			<h3>Ready to Discover the Difference?</h3>
			<a class="button green" href="#">Enroll Today</a>
		</div>
		
	</div><!-- grid -->
</div><!-- footer-contact -->


<?php get_footer(); ?>