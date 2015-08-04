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
			<div class="class-list">
				<div class="col-sm-4">
				  <?php if (has_post_thumbnail( $post->ID ) ): //if featured image is uploaded... ?>
				  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
				  <img class="thumbnail" src="<?php echo $image; ?>">
				  <?php else: //if no featured image is uploaded, show default icon img ?>
				  <div class="thumbnail default"><i class="fa fa-music"></i></div>
				  <?php endif; ?>
				</div><!--/.col-->
				<div class="col-sm-8 descrip">
				  <h3 class="class-title"><?php the_title(); ?></h3>
				  <p class="date"><?php the_field('class_start_date'); ?> - <?php the_field('class_end_date'); ?></p>  
				  <p><?php the_excerpt() ?></p>
				</div><!--/.col-->
				<div class="clear"></div><hr />
			</div><!--/.class-list-->
<?php } 
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>