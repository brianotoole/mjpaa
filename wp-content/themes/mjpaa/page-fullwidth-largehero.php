<?php
/**
Template Name: Page - Fullwidth, Large hero
 */
get_header(); ?> 
                       
<div class="cover-top">
  <article>
  	   <h4><?php the_title(); ?></h4>
       <?php if( get_field('interior_callout') ): ?> 
		<p><?php the_field('interior_callout'); ?></p>
		<?php endif ; ?>
       <!--<a href="#" class="button transparent" id="learn">Click to View</a>-->
  </article>
</div>
<div class="cover-bottom">
  <header class="entry-header">
  </header><!-- .entry-header -->
</div>


<div class="page-about default">
	<section class="history">
		<div class="intro row" id="contain">
			<div class="col-sm-12 no-padding">
				<h1 class="section-title"><?php the_title(); ?></h1>
				<?php if( get_field('interior_callout') ): ?> 
				  <p><?php the_field('interior_callout'); ?></p>
				<?php endif ; ?>
			</div><!--/.col-->
		</div><!--/.intro-->
</section><!--/.history-->

<section class="memories">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<h2 class="section-title alumni">Awards &amp; Recognitions</h2> 
		</div><!--/.col-->
	</div><!--/.intro-->
</section><!--/.memories-->
<section class="alumni-images">
	<div class="intro row" id="contain">
		<div class="col-sm-12">
			<?php the_content(); ?>
		</div>
	</div><!--/.intro-->
</section><!--/.memories-images-->


	<?php get_footer(); ?>