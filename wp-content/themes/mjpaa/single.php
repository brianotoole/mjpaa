<?php
/**
 * The template for displaying all single posts.
 *
 */
get_header(); ?> 

	<header class="entry-header">
	</header><!-- .entry-header -->
	<?php while ( have_posts() ) : the_post(); ?>
	

	
	<div class="page-about">
	<section class="history">
		<div class="intro row" id="contain">
		 <!-- <h3 class="section-title">Our History</h3> -->
			<div class="col-sm-3 visit">
				<?php if ( is_singular( 'class' ) ) :  ?>
				  <p>Program</p>
				    <span>
				    <?php $programs = get_the_terms( $post->ID , 'program' );
						foreach ( $programs as $program ) {		
						echo $program->name; }
					?>
					<span>
				  <hr />
				  <p>Grade Level</p>
				    <span>level</span>
				<?php endif ; ?>
				<?php if ( is_singular( 'post' ) ) :?>
				  <p>Visit</p>
				    <a href="#">spotlight link 1</a>
				  <hr />
				  <p>Visit</p>
				    <a href="#">spotlight link 2</a>
				<?php endif ; ?>
			</div><!--/.col-->
			<div class="col-sm-9 quotes b-left">
				<h2 class="page-title animate fadeIn"><?php the_title(); ?></h2>
				<p>CLASS TAGLINE / SHORT DESCRIPTION Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet </p>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.history-->
	
	<section class="about">
		<div class="intro row" id="contain">
			<div class="col-sm-8">
				<div id="primary">
					<main id="main" class="site-main" role="main">
					  
					    <?php the_content('<p>'); ?> 
					  
					</main><!-- #main -->
				</div><!-- #primary -->
			</div><!--/.col-->
			<div class="col-sm-4 latest-news">
				<?php get_sidebar(); ?>
			</div><!--/.col-->
		</div><!--/.intro-->
	</section><!--/.about-->

	<?php endwhile; // end of the loop. ?>
	<?php get_footer(); ?>