<?php
/**
Template Name: Page - About
 */
get_header(); ?> 
            
<?php while ( have_posts() ) : the_post(); ?>

<div class="page-about about">
<section class="history">
	<div class="intro row" id="contain">
	
	

		<div class="pad-fix">
		<div class="col-sm-4 latest-news sidebar-higher pull-right">
		  <?php get_sidebar(); ?>
		</div><!--/.col-->
		<div class="col-sm-8 no-padding">
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
			</div><hr /><!--/.mission-->
			<div class="mission" id="vision">
			  <h2 class="section-title">Our Vision</h2> 
			  <p>**** NEED content</p>
			</div><!--/.vision-->
		</div><!--/.col-->
		
		
	</div><!--/.intro-->
</section><!--/.history-->

<section class="about team">
	<div class="intro row" id="contain">
		<div class="col-sm-12" id="faculty">
		  <div class="our-history" id="history">
			  <h2 class="section-title">Our History</h2> 
				<p>For over 35 years, Mary Jo's Performing Arts Academy (MJPAA) has been a leader in the bay area specializing in Dance, Acting, Voice and Musical Theater education. Our students not only receive an education of excellence, but develop friendships and a lifetime appreciation of the arts. The Academy began in 1978 as Mary Jo's Dance Studio and has grown to include all the performing arts disciplines. Under the tutelage of Artistic Director, Mary Jo Scanio, it is noted on a national level for superior training in the performing arts, and was named one of the top 50 dance schools in the United States in 2004 by Dance Spirit Magazine. Since then, it has continued to remain on the honor roll of Outstanding Dance Schools from 2005 to the present. Currently, the Academy is one of the Federations of Dance Competition's Top 25 schools in the Southeast Region, 2011 FDC People's Choice Award Winner and power ranked with the World Dance Championship Series!</p><br />
				<p>The Academy is the home of <a href="http://tbttt.org" target="_blank">The Tampa Bay Triple Threat Theatre</a>, <a href="<?php bloginfo('url'); ?>/universal-movement">The Universal Movement Performing Arts Company</a> and the Classical Ballet of Tampa. There are a variety of disciplines and levels provided for all ages from recreational to those wanting to pursue the arts as a career. In addition, we have a Competitive Team, Performance Team and Youth Theatre. The faculty is comprised of caring highly trained instructors who hold professional degrees and certification to teach in their specific disciplines. They represent years of professional performing careers that enhances and develops our programs and curriculum. All have had extensive teaching experience and are continually increasing their knowledge through training workshops, clinics and conventions.</p><br />
				<p>MJPAA is dedicated to providing the tools and life lessons necessary for students to effectively perform and compete in the national marketplace. It is our goal to provide excellence in performing arts education while instilling in each individual the confidence and self-esteem necessary to succeed in any field they choose. The physical, mental and emotional discipline and enjoyment derived by studying the arts are unmatched by any other athletic endeavor!</p><br />
			</div><hr /><!--/.our-history-->
			
				<h3 class="section-title">Our Faculty &amp; Staff</h3> 
				
					  <div class="admin">
						<h5>Business Administration Department:</h5>
						 <div class="col-sm-4">
						   <h6>- Bev Menard, Accountant</h6>
						   <p class="title"><a href="tel:813-969-0240 ext. 226"> 813-969-0240 ext. 226</a></p>
						   <h6>- Tammi Godinez, Director of Admissions</h6>
						   <p class="title"><a href="813-969-0240 ext. 231"> 813-969-0240 ext. 231</a></p>
						   <h6>- Kristin Scanio, Assistant to the Director</h6>
						   <p class="title"><a href="813-969-0240 ext. 223"> 813-969-0240 ext. 223</a></p>
						   <h6>- Melinda Yates, Director of Customer Relations</h6>
						   <p class="title"><a href="813-969-0240 ext. 232"> 813-969-0240 ext. 232</a></p>
						   <h6>- Lindsey Brangaccio, Client Specialist</h6>
						   <h6>- Pam Matthews, Client Specialist</h6>
						   <h6>- Sean McDonald, Client Specialist</h6>
						 </div><!--/.col-->
						 <div class="col-sm-7 col-sm-offset-1">
						   <img src="http://placeimg.com/640/480/people" />
						 </div><!--/.col-->
					  </div><!--/.admin-->
				
			
				<div class="program-titles">
				  <h5>Faculty:</h5>
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
									<div class="col-xs-12 col-sm-2 outer">
									  <a href="<?php the_permalink() ?>">
									    <img class="faculty" src="<?php the_field('faculty_img'); ?>" />
									    <div class="meta">
									      <h6><?php the_title(); ?></h6>
									      <p class="title"><?php the_field('faculty_position'); ?></p>
									      <p class="hidden-xs view">Read Full Bio</p>
									      <a class="visible-xs button mobile" href="<?php the_permalink() ?>">Read Full Bio</a>
									    </div>
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



<section class="facility" id="facility">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title">Our Facility</h2> 
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->

<section class="facility-two">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
		
		  <div class="col-sm-3">
		    <img class="faculty" src="<?php bloginfo('stylesheet_directory'); ?>/img/maryjosfacility1.jpg" />
		    <img class="faculty" src="<?php bloginfo('stylesheet_directory'); ?>/img/maryjosfacility3.jpg" />
		    <img class="faculty" src="<?php bloginfo('stylesheet_directory'); ?>/img/maryjosfacility2.jpg" />
		  </div><!--/.col-->
		  <div class="col-sm-9">
		   <p>Our 12,000 plus square foot World Class Performing Arts Academy is not only the ideal facility for instruction in the arts, but can serve as host to a variety of functions and special events including: birthday parties; business meetings; corporate seminars; and even church services. As a performing arts instructional facility, we are always ready to provide rehearsal space to outside organizations such as school dance teams or choral groups, as well as individuals and small groups of performers.</p><br />

		   <p>We have adequate furnishings on hand to provide for small to medium sized gatherings, and can make any arrangements necessary to provide for larger functions. We have a concession area and a partial kitchen with microwave oven, sink, refrigerator and freezer which can be utilized to provide food and drink services, or our party planners can help make arrangements with catering services.</p><br />

		   <p>The black box theatre can seat up to 200 spectators and is an ideal performance venue for small dance performances, theatrical productions and talent showcases. 40 par-can stage lights are pre-installed and ready to be used, and additional lighting and audio equipment can be put in place for more elaborate shows.</p>
		   <hr />
		   <div class="col-sm-6">
		   <h3>Our facility includes:</h3>
		     <ul>
			   <li>7-spacious dance studios with sprung floors for injury prevention.</li>
			   <li>Acoustical music rooms with pianos.</li>
			   <li>Fully equipped tumbling area with aerial spotting apparatus.</li>
			   <li>Black Box Theatre to hold small performances.</li>
			   <li>Healthy Snack Bar with food and drinks.</li>
			   <li>Dancer's Closet Boutique with clothing, shoes and accessories.</li>
			   <li>Student lockers available.</li>
		       <li>Video monitors for a distraction free learning environment.</li>
			</ul>
		   </div>
		   <div class="col-sm-1 video-tour">
		   <video width="480" height="390" style="width:480px;height:390px;" controls>
			  <source src="<?php bloginfo('stylesheet_directory'); ?>/img/video/mjpaatour.mp4" type="video/mp4">
			  <source src="<?php bloginfo('stylesheet_directory'); ?>/img/video/mjpaatour.ogg" type="video/ogg">
		  </video>
		</div>
	  	  </div><!--/.col-->
		</div><!--/.col-->
		<div class="clearfix"></div><hr />

		<div class="col-sm-12 text-center" id="rental">
			<h3>Interested in Renting for Your Private Event?</h3>
			<p>Whatever you need, we have the flexibility to accommodate you!</p>
			<a class="underline" href="<?php bloginfo('url'); ?>/contact">Contact us for rental information</a>
		  </p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.facility-two-->

<div class="footer-contact overlay">
	<div class="grid grid-pad row">
		<div class="col-sm-12">
			<h3>Why Choose Us?</h3>
			<a class="button gold" href="<?php bloginfo('url'); ?>/about/why-mjpaa">Discover the Difference</a>
		</div>
	</div><!-- grid -->
</div><!-- footer-contact -->



</div><!--/.page-about-->
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
	