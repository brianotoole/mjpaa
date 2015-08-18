<?php
/**
 * The template for displaying the footer.
 */
?>
	<div class="testimonials">
	  <div class="footer-contact">
		<div class="grid row">
			<div class="col-sm-12 no-padding">
				<?php get_template_part( 'part', 'testimonials' ); ?>
			</div>
		</div><!--/.grid -->
	  </div><!--/.footer-contact -->
	</div><!--/.testimonials -->

	</section><!--/#content --> 

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
			<div class="site-info col-1-1">
				&copy; Copyright <?php echo date('Y'); ?><em> <br class="visible-xs" /><?php bloginfo('blog_name'); ?></em> &nbsp; <br class="visible-sm visible-xs" /> <a href="<?php bloginfo('url'); ?>/about"> About</a> <a href="<?php bloginfo('url'); ?>/contact"> Contact</a> <a id="top" href="#"> Back To Top</a>
			</div><!-- .site-info -->
        </div><!-- grid --> 
	</footer><!-- #colophon -->

</div><!-- #page --> 

<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<?php wp_footer(); ?>
<script>
//init top-bar search
new UISearch( document.getElementById( 'sb-search' ) );
</script>
</body>
</html>