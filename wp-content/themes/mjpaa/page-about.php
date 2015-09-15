<?php
/**
Template Name: Page - About
 */
get_header(); ?> 
            
	<header class="entry-header">
	</header><!-- .entry-header -->
	<?php while ( have_posts() ) : the_post(); ?>

<div class="page-about about">
<section class="history">
	<div class="intro row" id="contain">
		<div class="col-sm-8 no-padding quotes">
			<h2 class="section-title animate fadeIn">Our Mission</h2> 
			<div class="mission" id="mission">
			  <p>
				<ul>
				  <li>To provide the highest quality teaching staff and academy environment.</li>
				  <li>To provide proper technical instruction in all curriculum offerings.</li>
				  <li>To provide the technical instruction necessary for anyone desiring a professional career.</li>
				  <li>To provide a variety of performing opportunities for students to utilize their artistic achievements.</li>
				  <li>To promote lifelong learning skills, fitness awareness, and positive self-attitude and self-image.</li>
				  <li>To promote a professional and disciplined attitude in class, rehearsal and performance.</li>
				  <li>To teach the value of all aspects of the arts, incorporating a fun experience.</li>
				</ul>
			  </p>
			</div><!--/.mission-->
			<hr />
			<div class="vision" id="vision">
			  <h2 class="section-title">Our Vision</h2> 
			  <p>**** NEED content</p>
			</div><!--/.vision-->
			<hr />
			<div class="our-history" id="history">
			  <h2 class="section-title">Our History</h2> 
<p>For over 35 years, Mary Jo's Performing Arts Academy (MJPAA) has been a leader in the bay area specializing in Dance, Acting, Voice and Musical Theater education. Our students not only receive an education of excellence, but develop friendships and a lifetime appreciation of the arts. The Academy began in 1978 as Mary Jo's Dance Studio and has grown to include all the performing arts disciplines. Under the tutelage of Artistic Director, Mary Jo Scanio, it is noted on a national level for superior training in the performing arts, and was named one of the top 50 dance schools in the United States in 2004 by Dance Spirit Magazine. Since then, it has continued to remain on the honor roll of Outstanding Dance Schools from 2005 to the present. Currently, the Academy is one of the Federations of Dance Competition's Top 25 schools in the Southeast Region, 2011 FDC People's Choice Award Winner and power ranked with the World Dance Championship Series!</p>

<p>The Academy is the home of <a href="http://tbttt.org" target="_blank">The Tampa Bay Triple Threat Theatre</a>, <a href="<?php bloginfo('url'); ?>/universal-movement">The Universal Movement Performing Arts Company</a> and the Classical Ballet of Tampa. There are a variety of disciplines and levels provided for all ages from recreational to those wanting to pursue the arts as a career. In addition, we have a Competitive Team, Performance Team and Youth Theatre. The faculty is comprised of caring highly trained instructors who hold professional degrees and certification to teach in their specific disciplines. They represent years of professional performing careers that enhances and develops our programs and curriculum. All have had extensive teaching experience and are continually increasing their knowledge through training workshops, clinics and conventions.</p>

<p>MJPAA is dedicated to providing the tools and life lessons necessary for students to effectively perform and compete in the national marketplace. It is our goal to provide excellence in performing arts education while instilling in each individual the confidence and self-esteem necessary to succeed in any field they choose. The physical, mental and emotional discipline and enjoyment derived by studying the arts are unmatched by any other athletic endeavor!</p>
			</div><!--/.our-history-->
			
		</div><!--/.col-->
		<div class="col-sm-4 latest-news sidebar-higher">
			<?php get_sidebar(); ?>
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
									<div class="col-sm-4">
									  <a href="<?php the_permalink() ?>">
									    <img class="faculty" src="<?php the_field('faculty_img'); ?>" />
									    <h6><?php the_title(); ?></h6>
									    <p class="title"><?php the_field('faculty_position'); ?></p>
									    <p class="hidden-xs view">Read Full Bio</p>
									    <a class="visible-xs button mobile">Read Full Bio</p>
									  </a>
									</div><hr class="visible-xs" />
					
						<?php } 
						} else {
							// no posts found
						}
						// Restore original Post Data
						wp_reset_postdata();
						
						?>
				</div><!--/.program-titles-->
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

<div class="footer-contact overlay">
	<div class="grid grid-pad row">
		<div class="col-sm-12">
			<h3>Ready to Discover the Difference?</h3>
			<p>Be touched. Be moved. Be inspired.</p>
			<a class="button gold" href="<?php bloginfo('url'); ?>/classes">Find Classes</a>
		</div>
	</div><!-- grid -->
</div><!-- footer-contact -->



</div><!--/.page-about-->
	<?php endwhile; // end of the loop. ?>
	<?php get_footer(); ?>