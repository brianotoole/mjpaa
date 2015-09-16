<?php
/**
Template Name: Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
  <div class="img" style="background: url('<?php the_field('fadeshow_img1'); ?>') 50% center no-repeat;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img2'); ?>') 50% center no-repeat;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img3'); ?>') 50% center no-repeat;background-size:cover;"></div> 
  <div class="img" style="background: url('<?php the_field('fadeshow_img4'); ?>') 50% center no-repeat;background-size:cover;"></div> 
    <div class="intro row" id="contain">
     	  <div class="col-sm-12">                   
            <h4 class="hidden-xs">"When the arts enter a child's world, magic happens."</h4>
            <p class="hidden-xs">- Mary Jo Scanio, Owner &amp; Artistic Director</p>
          </div><!--/.col-->
     </div><!--/.row-->
</section><!--/section.hero-->

<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-8">
			<h4 class="hidden-xs section-title">The Academy Offers a Complete Performing Arts Curriculum</h4>
			<h6 class="hidden-xs">Our programs include - </h6>
			
			<!--mobile only-->
			<div class="mobile-pad">
			  <h4 class="visible-xs latest-title text-center">How can we help you?</h4> 
			  <div class="service visbile-xs hidden-sm hidden-md hidden-lg">
			    <a class="button mobile" href="#">I need general information</a>
			   <a class="button mobile" href="#">What is MJPAA?</a>
			    <a class="button mobile" href="#">I need class information</a>
			    <a class="button mobile" href="#">I need contact information</a>
			    <a class="button mobile" href="#">I need directions</a>
			    <a class="button mobile" href="#content">I'm not sure. Let me browse.</a>
			  </div>
			
			<h4 class="visible-xs section-title">MJPAA Offers a Complete Performing Arts Curriculum</h4>
			<h6 class="visible-xs section-title">Our program includes the following:</h6>
			</div><!--/.mobile-pad-->
			
			<div class="program-titles">
				
			<div class="service hidden-xs">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="<?php bloginfo('url'); ?>/classes/dance-classical-ballet-of-tampa">
				        <div class="spinner"></div>
						   <div class="img"><img src="http://placeimg.com/100/100/nature" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Dance &amp; Classical Ballet of Tampa</h5>
					<p>Classes are offered in a wide variety of styles and disciplines. The dance program consists of children's division, recreational dance, upper division, intensive training program and adult classes. Placement and advancement in the program is based on each individual student. The Classical Ballet of Tampa is our upper division ballet training program. Students of the Classical Ballet of Tampa have been recognized with awards and scholarships at numerous competitions, workshops, and universities throughout the United States. </p>
				</div><!--/.col-->
			  </div></a><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="<?php bloginfo('url'); ?>/classes/acting-theater">
				        <div class="spinner"></div>
						  <div class="img"><img src="http://placeimg.com/100/100/people" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Acting &amp; Theater</h5>
					<p>Classes are offered in Acting, Drama, Musical Theater, Improvisation, and On-Camera Technique. Adult classes are available. This program is devoted to training students for theatrical and/or commercial productions. Theatrical productions are available by audition throughout the year.</p>
				</div><!--/.col-->
			  </div></a><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="<?php bloginfo('url'); ?>/classes/music-instruments-voice">
				        <div class="spinner"></div>
						  <div class="img"><img src="http://placeimg.com/100/100/tech" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Music, Instruments &amp; Voice</h5>
					<p>Classes are offered in voice and music. Private instrumental instruction are available in Piano, Guitar and Saxophone. Private and semi-private lessons are available in voice.</p>
				</div><!--/.col-->
			  </div></a><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="<?php bloginfo('url'); ?>/classes/acrobatics">
				        <div class="spinner"></div>
						  <div class="img"><img src="http://placeimg.com/100/100/animals" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				            <p>-View Classes-</p>
				          </div>
				      </div></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Acrobatics</h5>
					<p>Acrobatic Classes are offered for students at the beginner, intermediate, and advanced level. Classes are individualized to allow each student to progress at their own pace.</p>
				</div><!--/.col-->
			  </div></a><!--/.service-->
			  
			</div><!--/.program-titles-->
			  
			  
		</div>
		<div class="col-sm-4 latest-news">
			<h4 class="latest-title">News &amp; Events</h4>
			<?php get_template_part( 'part', 'latest_news' ); ?>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.about-->

<section class="history">
	<div class="intro row" id="contain">
		<div class="col-sm-3 visit">
			<p class="hidden-xs">Visit</p>
			<p class="visible-xs">Our Latest News</p>
			  <a class="hidden-xs" href="<?php bloginfo('url'); ?>/events">Recent News</a>
			  <a class="visible-xs button mobile" href="<?php bloginfo('url'); ?>/events">View</a>

			<p class="hidden-xs">Visit</p>
			<p class="visible-xs">Our Alumni Spotlight</p>
			  <a class="hidden-xs" href="<?php bloginfo('url'); ?>/about/#alumni">Our Alumni Spotlight</a>
			  <a class="visible-xs button mobile" href="<?php bloginfo('url'); ?>/about/#alumni">View</a>
			  
			<p class="hidden-xs">Visit</p>
			<p class="visible-xs">Our Birthday Parties</p>
			  <a class="hidden-xs no-border" href="<?php bloginfo('url'); ?>/birthday-parties">Our Birthday Parties</a>
			  <a class="visible-xs button mobile" href="<?php bloginfo('url'); ?>/birthday-parties">View</a>
		</div><!--/.col-->
		<div class="col-sm-9 quotes b-left">
			<h2 class="section-title">Celebrating 35 Years as the Most Reputable<br />
			Performing Arts Academy in Tampa Bay
			</h2> 
			<h5 class="breakout">Voted one of the top 50 dance schools in the country.</h5>
			<p>Currently one of the Federation of Dance Competition's Top 25 schools in the Southeast Region, FDC People's Choice Award Winner, power ranked with the World Dance Championship Series, Victory Cup Winner and FDC Studio of Excellence.</p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.history-->

<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title">Create Lasting Memories</h2> 
			<p>And build friendships for life.</p>
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->

<section class="memories-images">
	<div class="intro row" id="contain">
		<div class="col-sm-12 images">
		  <div class="stack rotated-left">
	        	<img src="<?php the_field('memories_img1'); ?>">
	      </div>
	      <div class="stack rotated-middle">
	        	<img src="<?php the_field('memories_img2'); ?>">
	      </div>
	      <div class="stack rotated-right">
	        	<img src="<?php the_field('memories_img3'); ?>">
	      </div>
		</div>
		<h3>Why Choose Us?</h3>
		<h5 class="breakout">First line of text goes here</h5>
		<p>And so on and so forth. Blah blah blah choose us.</p>
	</div><!--/.intro-->
</section><!--/.memories-images-->




   
<div class="footer-contact overlay">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
			<h3>Ready to Discover the Difference?</h3>
			<a class="button gold" href="<?php bloginfo('url'); ?>/wp-content/uploads/2015/09/Class-Withdrawl-Form_2015-2016.pdf" target="_blank">Try a Free Trial Class Now</a>
		</div>
		
	</div><!-- grid -->
</div><!-- footer-contact -->


<?php get_footer(); ?>