<?php
/**
 * The template for displaying the footer.
 */
?>
	<div class="testimonials">
	  <div class="footer-contact">
		<div class="grid row">
			<div class="col-sm-12">
				<?php get_template_part( 'part', 'testimonials' ); ?>
			</div>
		</div><!--/.grid -->
	  </div><!--/.footer-contact -->
	</div><!--/.testimonials -->

	</section><!--/#content --> 

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		<div class="footer-top grid grid-pad">
			<div class="award col-sm-4">
				<h6>Hours of Operation</h6>
				<p><strong>Academy Hours:</strong><br />
				  <em> Mon-Fri: &nbsp; 10am-8:30pm<br />
				   Sat: &nbsp;9am-2pm</em></p><br />
				<p><strong>Business Hours:</strong><br />
				   <em>Mon-Fri: &nbsp;9am-5pm</em></p>
			</div><!-- .site-info -->
			<div class="links col-sm-4">
				<h6>Links</h6>
				<ul>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/events">News</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/https://www.google.com/maps/dir//15906+Mapledale+Blvd,+Tampa,+FL+33624/@28.098403,-82.505447,14z/data=!4m13!1m4!3m3!1s0x88c2bf63a0c73e1f:0x316ea2b6a463d054!2s15906+Mapledale+Blvd,+Tampa,+FL+33624!3b1!4m7!1m0!1m5!1m1!1s0x88c2bf63a0c73e1f:0x316ea2b6a463d054!2m2!1d-82.504962!2d28.098768?hl=en" target="_blank">Directions</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Contact Us</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/events">Events</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/about">About Us</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/general-info/birthday-parties">Birthday Parties</a></li>
				</ul>
			</div><!-- .site-info -->
			<div class="family col-sm-4">
				<h6>Stay in Touch</h6>
				<ul>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/general-info/newsletter">Sign-Up for our Email Newsletter</a></li>
					<p class="hidden-xs">
						<a href="tel:813-969-0240">PH: 813-969-0240</a><br />
						FAX: 813-960-2117
					</p>
					<p>
						15906 Mapledale Blvd.<br />
						Tampa, FL 33624
					</p>
					<a class="visible-xs button gold" href="tel:813-969-0240">Tap to Call Us</a>
					<div class="social-media">
						<ul>
							<a href="https://www.facebook.com/MaryJosPerformingArtsAcademy?fref=ts" target="_blank">
								<li class="no-pad"><i class="fa fa-facebook"></i></li>
							</a>
							<a href="https://twitter.com/MJPAA" target="_blank">
								<li><i class="fa fa-twitter"></i></li>
							</a>
							<a href="https://instagram.com/mjpaa_tampa/" target="_blank">
								<li><i class="fa fa-instagram"></i></li>
							</a>
							<a href="https://www.youtube.com/maryjostampa" target="_blank">
								<li><i class="fa fa-youtube"></i></li>
							</a>
						</ul>
				    </div><!-- .social-media -->
			</div><!-- .site-info -->
			<!--<div class="ph col-sm-3">
				<h6>Calendar</h6>
					<p>calendar here</p>
			</div><!-- .col-->
        </div><!-- grid --> 
        
    	<div class="footer-bottom grid grid-pad">
			<div class="site-info col-sm-12">
				&copy; <?php echo date('Y'); ?> MJPAA.com | <a id="top" href="#"> Back To Top</a>
			</div><!-- .site-info -->
		
        </div><!-- grid --> 
	</footer><!-- #colophon -->

</div><!-- #page --> 

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<?php wp_footer(); ?>
<script>
//init top-bar search
new UISearch( document.getElementById( 'sb-search' ) );
//video modal
jQuery("#modal-btn").click(function(){
  $("#umVideo").modal('show');
});
</script>
</body>
</html>