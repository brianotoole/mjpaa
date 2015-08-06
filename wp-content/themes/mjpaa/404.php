<?php
/**
 * The template for displaying 404 pages (not found).
 */
 
get_header(); ?> 
<META NAME="ROBOTS" CONTENT="NOINDEX, FOLLOW">
<META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<header class="entry-header">
	</header><!-- .entry-header -->

	<div class="page-about default">
	<section class="history">
		<div class="intro row" id="contain">
			<div class="col-sm-12">
				<h3 class="section-title"><span>This Page Does Not Exist - 404</span></h3>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->
	
	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
					<div class="entry-content">
					  <p><a href="<?php bloginfo('url'); ?>">Click here to return to the homepage</a>.</p>
					</div>
			</div><!--/.col-->
			
			<div class="col-sm-4 latest-news">
				<?php get_template_part( 'part', 'latest_news' ); ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->
	</div><!--/.page-about-->

	<?php get_footer(); ?>