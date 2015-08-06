<?php
/**
Template Name: Page - Top Banner, Sidebar Right
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->

<div class="page-about sidebar-right">
<section class="history">
	<div class="intro row" id="contain">
	 <!-- <h3 class="section-title">Our History</h3> -->
		<div class="col-sm-12">
			<h3 class="section-title"><?php the_title(); ?></h3> 
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->

<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-8">
			<?php while ( have_posts() ) : the_post(); ?>

				<article>
					<?php the_content('<p>'); ?>
				</article>

			<?php endwhile; // end of the loop. ?>
		</div><!--/.col-->
		
		<div class="col-sm-4 latest-news">
			<h4 class="latest-title">News &amp; Events</h4>
			<?php get_template_part( 'part', 'latest_news' ); ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.about-->



<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title">Our Facility</h2> 
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
		<p>
			<ul>
				<li>7-spacious dance studios with sprung floors for injury prevention.</li>
				<li>2-acoustical music rooms with pianos.</li>
				<li>Black Box Theatre to hold small performances.</li>
				<li>Healthy Snack Bar with food and drinks.</li>
				<li>Dance Boutique with clothing, shoes and accessories.</li>
				<li>Student lockers available.</li>
				<li>Fully equipped tumbling area with aerial spotting apparatus.</li>
			</ul><hr />
			<h3>Interested in Renting for Your Private Event?</h3>
			<p>Whatever you need, we have the flexibility to accommodate you!</p>
			<a class="underline" href="<?php bloginfo('url'); ?>/contact">Contact us for rental information</a>
		</p>
	</div><!--/.intro-->
</section><!--/.memories-images-->

<div class="footer-contact">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
			<h3>Ready to Discover the Difference?</h3>
			<p>Be touched. Be moved. Be inspired.</p>
			<a class="button green" href="<?php bloginfo('url'); ?>/classes">Find Classes</a>
		</div>
		
	</div><!-- grid -->
</div><!-- footer-contact -->







</div><!--/.page-about-->
	<?php get_footer(); ?>