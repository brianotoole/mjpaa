<?php $query = new WP_Query( 'posts_per_page=3' ); //latest news on homepage: only show 3 recent posts ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 
<div class="col-sm-12 descrip">
  <h5 class="news-title"><?php the_title(); ?></h5>
    <p class="date"><span class="cat-title"><?php global $post; $category = get_the_category($post->ID); echo $category[0]->name; ?></span> <?php echo get_the_date( '/ l, F j' ); ?>
    </p>  
	<?php the_excerpt() ?>
	  <a class="view" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">View full article</a>
	</p>
</div>
<div class="clear"></div>

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no news articles at this time.' ); ?></p>
<?php endif; ?>
 
<?php 
  $count_posts = wp_count_posts(); 
  $published_posts = $count_posts->publish;
    if( $published_posts >= 3 ) { //if there are 3 or more published posts, show view more link
        echo '<div class="col-sm-12 text-center no-padding">';
        echo '<a href="' . get_option('home') . '/news" class="view more">' . 'View More News &amp; Events' . '</a>';
        echo '</div>'; 
    }
?>
