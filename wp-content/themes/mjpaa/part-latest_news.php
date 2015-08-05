<?php $query = new WP_Query( 'posts_per_page=4' ); //latest news on homepage: only show 4 recent posts ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 
<div class="col-sm-12 descrip">
  <h5 class="news-title"><?php the_title(); ?></h5>
    <p class="date"><?php echo get_the_date( 'l / F d / Y' ); ?></p>  
	<p><?php the_excerpt() ?></p>
</div>
<div class="clear"></div>

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no news articles at this time.' ); ?></p>
<?php endif; ?>