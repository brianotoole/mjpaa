<?php
/**
Template Name: Page - About
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->
	<?php while ( have_posts() ) : the_post(); ?>

<div class="page-about">
<section class="history">
	<div class="intro row" id="contain">
	 <!-- <h3 class="section-title">Our History</h3> -->
		<div class="col-sm-3 visit no-padding">
			<p>Visit</p>
			  <a href="<?php bloginfo('url'); ?>/about/achievements">Our Achievements</a>
			<hr />
			<p>Visit</p>
			  <a href="<?php bloginfo('url'); ?>/about/achievements/#alumni">Our Alumni Spotlight</a>
		</div><!--/.col-->
		<div class="col-sm-9 quotes b-left">
			<h2 class="section-title animate fadeIn">Celebrating 35 Years as the Most Reputable<br />
			Performing Arts Academy in Tampa Bay
			</h2> 
			<h5 class="breakout">Voted one of the top 50 dance schools in the country.</h5>
			<p>Currently one of the Federation of Dance Competition's Top 25 schools in the Southeast Region, FDC People's Choice Award Winner, power ranked with the World Dance Championship Series, Victory Cup Winner and FDC Studio of Excellence.</p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->

<section class="about team">
	<div class="intro row" id="contain">
		<div class="col-sm-8">
			<h3 class="section-title">Our Faculty &amp; Staff</h3> 
				<div class="program-titles">
					<?php
						// WP_Query arguments for faculty custom post type...
						$args = array (
							'post_type'	     => array( 'faculty' ),
							'orderby' 		 => 'menu_order',
							'order'			 => 'ASC',
							'posts_per_page' => -1
						);
						// The Query
						$loop = new WP_Query( $args );
						
						// The Loop
						if ( $loop->have_posts() ) {
							while ( $loop->have_posts() ) {
								$loop->the_post(); ?>
									<div class="col-sm-3">
									  <a href="<?php the_permalink() ?>">
									    <img class="faculty" src="<?php the_field('faculty_img'); ?>" />
									    <h6><?php the_title(); ?></h6>
									    <p class="title"><?php the_field('faculty_position'); ?></p>
									    <p class="view">Read Full Bio</p>
									  </a>
									</div><hr class="visible-xs" />
					
						<?php } 
						} else {
							// no posts found
						}
						// Restore original Post Data
						wp_reset_postdata();
						
						?>
				</div>
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
	<?php endwhile; // end of the loop. ?>
	<?php get_footer(); ?>