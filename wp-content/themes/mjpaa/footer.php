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
			<div class="award col-sm-3">
				<h6>Academy Hours</h6>
				<p>- Victory Cup Winner </p>
				<p>- Best of N. Tampa, 2014</p>
				<p>- FDC Studio of Excellence</p>
				<p></p>
			</div><!-- .site-info -->
			<div class="links col-sm-3">
				<h6>Links</h6>
				<ul>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/events">News</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/https://www.google.com/maps/dir//15906+Mapledale+Blvd,+Tampa,+FL+33624/@28.098403,-82.505447,14z/data=!4m13!1m4!3m3!1s0x88c2bf63a0c73e1f:0x316ea2b6a463d054!2s15906+Mapledale+Blvd,+Tampa,+FL+33624!3b1!4m7!1m0!1m5!1m1!1s0x88c2bf63a0c73e1f:0x316ea2b6a463d054!2m2!1d-82.504962!2d28.098768?hl=en" target="_blank">Directions</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/contact">Contact US Requests</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/events">Events</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/about">About Us</a></li>
					<li><i class="fa fa-chevron-right"></i><a href="<?php bloginfo('url'); ?>/about">Birthday Parties</a></li>
				</ul>
			</div><!-- .site-info -->
			<div class="family col-sm-3">
				<h6>Stay in Touch</h6>
				<ul>
					<li><i class="fa fa-chevron-right"></i><a href="http://tbttt.org" target="_blank">Sign-Up for our Email Newsletter</a></li>
					<p class="hidden-xs">
						<a href="tel:#">PH: 813-555-5555</a>
					</p>
					<p>
						15906 Mapledale Blvd.<br />
						Tampa, FL 33624
					</p>
					<a class="visible-xs button gold" href="#">Tap to Call Us</a>
			</div><!-- .site-info -->
			<div class="ph col-sm-3">
				<h6>Calendar</h6>
					<p>calendar here</p>
			</div><!-- .site-info -->
        </div><!-- grid --> 
        
    	<div class="footer-bottom grid grid-pad">
			<div class="site-info col-sm-6">
				&copy; <?php echo date('Y'); ?> MJPAA.com | <a id="top" href="#"> Back To Top</a>
			</div><!-- .site-info -->
			<div class="social-media col-sm-6">
				<ul>
					<a href="" target="_blank">
						<li><i class="fa fa-facebook"></i></li>
					</a>
					<a href="" target="_blank">
						<li><i class="fa fa-twitter"></i></li>
					</a>
					<a href="" target="_blank">
						<li><i class="fa fa-instagram"></i></li>
					</a>
					<a href="" target="_blank">
						<li><i class="fa fa-youtube"></i></li>
					</a>
				</ul>
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