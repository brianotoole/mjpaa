<?php
/**
Template Name: Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
  <div class="img" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/img/hero_placeholder.jpg') 50% center no-repeat;background-size:cover;"></div> 
    <div class="intro row" id="contain">
     	  <div class="col-sm-12">                   
            <h4 class="hidden-xs">"When the arts enter a child's world magic happens.</h4>
            <p class="hidden-xs">- Mary Jo Scanio, Founder &amp; Artistic Director</p>
          </div><!--/.col-->
     </div><!--/.row-->
</section><!--/section.hero-->

<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-8">
			<h4 class="hidden-xs section-title">The Academy Offers a Complete Performing Arts Curriculum</h4>
			<h6 class="hidden-xs">Our programs include - </h6>
			
			<!--mobile only-->
			<h4 class="visible-xs latest-title text-center">How can we help you?</h4> 
			<div class="service visbile-xs hidden-sm hidden-md hidden-lg">
			  <a class="button primary" href="#">I need general information</a>
			  <a class="button primary" href="#">What is MJPAA?</a>
			  <a class="button primary" href="#">I need class information</a>
			  <a class="button primary" href="#">I need contact information</a>
			  <a class="button primary" href="#">I need directions</a>
			  <a class="button primary" href="#content">I'm not sure. Let me browse.</a>
			</div>
			<hr class="visible-xs" />
			
			<h4 class="visible-xs section-title">MJPAA Offers a Complete Performing Arts Curriculum</h4>
			<h6 class="visible-xs">Our program includes the following:</h6>
			
			<div class="program-titles">
				
			<div class="service hidden-xs">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="#">
				        <div class="spinner"></div>
						   <div class="img"><img src="http://placeimg.com/100/100/nature" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></a></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Dance &amp; Classical Ballet of Tampa</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div><!--/.col-->
			  </div><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="#">
				        <div class="spinner"></div>
						  <div class="img"><img src="http://placeimg.com/100/100/people" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></a></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Acting &amp; Theater</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div><!--/.col-->
			  </div><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="#">
				        <div class="spinner"></div>
						  <div class="img"><img src="http://placeimg.com/100/100/tech" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				             <p>-View Classes-</p>
				          </div>
				      </div></a></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Music, Instruments &amp; Voice</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div><!--/.col-->
			  </div><!--/.service-->
			  <hr class="visible-xs" />
			  
			  <div class="service">
			  	<div class="col-sm-2">
					 <div class="hidden-xs ih-item circle"><a href="#">
				        <div class="spinner"></div>
						  <div class="img"><img src="http://placeimg.com/100/100/animals" alt="img"></div>
				        <div class="info">
				          <div class="info-back">
				            <p>-View Classes-</p>
				          </div>
				      </div></a></div><!--/.ih-item-->
				</div><!--/.col-->
				<div class="col-sm-10">
					<h5>Acrobatics</h5>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				</div><!--/.col-->
			  </div><!--/.service-->
			  
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
			<p>Visit</p>
			  <a href="<?php bloginfo('url'); ?>/about/achievements">Our Achievements</a>
			<hr />
			<p>Visit</p>
			  <a href="<?php bloginfo('url'); ?>/about/achievements/#alumni">Our Alumni Spotlight</a>
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
	        	<img src="http://placeimg.com/290/292/nature">
	      </div>
	      <div class="stack rotated-middle">
	        	<img src="http://placeimg.com/290/292/people">
	      </div>
	      <div class="stack rotated-right">
	        	<img src="http://placeimg.com/290/292/art">
	      </div>
		</div>
	</div><!--/.intro-->
</section><!--/.memories-images-->




   
<div class="footer-contact overlay">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
			<h3>Ready to Discover the Difference?</h3>
			<p>Be touched. Be moved. Be inspired.</p>
			<a class="button gold" href="<?php bloginfo('url'); ?>/classes">Enroll Today</a>
		</div>
		
	</div><!-- grid -->
</div><!-- footer-contact -->


<?php get_footer(); ?>