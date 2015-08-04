<?php

// WP_Query arguments for custom post type...
$args = array (
	'post_type'	     => array( 'class' ),
	'order'			 => 'DESC',
	'posts_per_page' => -1
);
// The Query
$loop = new WP_Query( $args );

// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
		$loop->the_post(); ?>
			<div class="col-sm-2 no-padding img">
			  <?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
			  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
			  <img class="thumbnail" src="<?php echo $image; ?>">
			  <?php else: //if no featured image is uploaded, show default icon img ?>
			  <div class="thumbnail default"></div>
			  <?php endif; ?>
			</div>
			<div class="col-sm-10 descrip">
			  <h3 class="news-title"><?php the_title(); ?></h3>
			  <p class="date"><?php echo get_the_date( 'l / F d / Y' ); ?></p>  
			  <p><?php the_excerpt() ?></p>
			</div>
<?php } 
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>