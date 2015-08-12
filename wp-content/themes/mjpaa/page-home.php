<?php
/**
Template Name: Home
 *
 */
get_header(); ?>
<!--hero--> 
<section class="hero">
  <div class="img animate fadeIn" style="background: url('<?php bloginfo('stylesheet_directory'); ?>/img/hero_placeholder.jpg') 50% center no-repeat;background-size:cover;"></div> 
    <div class="intro row" id="contain">
     	  <div class="col-sm-12">                   
            <h4>"When the arts enter a child's world magic happens.</h5>
            <p>- Mary Jo Scanio, Founder &amp; Artistic Director</p>
          </div><!--/.col-->
     </div><!--/.row-->
</section><!--/section.hero-->

<section class="about">
	<div class="intro row" id="contain">
		<div class="col-sm-8">
			<h4 class="section-title">The Academy Offers a Complete Performing Arts Curriculum</h4> 
			<h6>Our program includes...</h6>
			
			<div class="program-titles">
			  <div class="col-sm-2">
				<i class="fa fa-ticket"></i>
			  </div>
			  <div class="col-sm-10">
				<h5>Performing Arts</h5>
				<p>fdsafdsafdsaf sdafsdfdsf dfdsfds dsfsdagsdagsdagdsgdsgsd</p>
			  </div><hr class="visible-xs">
			  <div class="clear"></div>
			  
			  <div class="col-sm-2">
				<i class="fa fa-music"></i>
			  </div>
			  <div class="col-sm-10">
				<h5>Dance &amp; Classical Ballet</h5>
				<p>fdsafdsafdsaf sdafsdfdsf dfdsfds dsfsdagsdagsdagdsgdsgsd</p>
			  </div><hr class="visible-xs">
			  <div class="clear"></div>
			  
			  <div class="col-sm-2">
				<i class="fa fa-quote-left"></i>
			  </div>
			  <div class="col-sm-10">
				<h5>Musical Theater</h5>
				<p>fdsafdsafdsaf sdafsdfdsf dfdsfds dsfsdagsdagsdagdsgdsgsd</p>
			  </div><hr class="visible-xs">
			  <div class="clear"></div>
			  
			  <div class="col-sm-2">
				<i class="fa fa-video-camera"></i>
			  </div>
			  <div class="col-sm-10">
				<h5>Acting</h5>
				<p>fdsafdsafdsaf sdafsdfdsf dfdsfds dsfsdagsdagsdagdsgdsgsd</p>
			  </div><hr class="visible-xs">
			  <div class="clear"></div>
			  
			  <div class="col-sm-2">
				<i class="fa fa-volume-up"></i>
			  </div>
			  <div class="col-sm-10">
				<h5>Voice</h5>
				<p>fdsafdsafdsaf sdafsdfdsf dfdsfds dsfsdagsdagsdagdsgdsgsd</p>
			  </div><hr class="visible-xs">
			  <div class="clear"></div>
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
		  <img src="http://placeimg.com/290/292/nature">
	      <img src="http://placeimg.com/290/292/people">
	      <img src="http://placeimg.com/290/292/any">
		</div>
		<p>Currently one of the Federation of Dance Competition's Top 25 schools in the Southeast Region, FDC People's Choice Award Winner, power ranked with the World Dance Championship Series, Victory Cup Winner and FDC Studio of Excellence.</p>
		<p>Our distinctive combination of performing arts disciplines offered here at Mary Jo's Performing Arts Academy provides students a unique training program for a complete well-rounded performance education. The program and its instructors have trained a number of students who are currently working on Broadway, with professional dance companies, and in television and film. Many of our past students are successful business leaders in our community.</p>
	</div><!--/.intro-->
</section><!--/.memories-images-->


   
<div class="footer-contact">
	<div class="grid grid-pad row">
	
		<div class="col-sm-12">
			<h3>Ready to Discover the Difference?</h3>
			<p>Be touched. Be moved. Be inspired.</p>
			<a class="button green" href="<?php bloginfo('url'); ?>/classes">Enroll Today</a>
		</div>
		
	</div><!-- grid -->
</div><!-- footer-contact -->


<?php get_footer(); ?>