<?php
// GroupOne args
$groupTwo = array (
  'post_type' => 'class',
  'orderby'   => 'title',
  'order'     => 'ASC',
  'meta_query' => array(array(
  			'key' => 'class_group',
            'value' => '2', //change this
            'compare' => 'LIKE'
        )
    ),
  'tax_query' => array(
      'relation' => 'AND',
       array(
           'taxonomy' => 'session',
           'field'    => 'slug',
           'terms'	  => array( 'summer-camps'),
        ),
  )
  
);

$query = new WP_Query($groupOne); 
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<li><a href="<?php the_permalink() ?>"><?php the_field('class_title_summer'); ?></a>
  <span><a href="<?php the_permalink() ?>">View Camp <i class="fa fa-angle-double-right"></i></a></span>
</li>

<?php endwhile; 
 wp_reset_postdata();
 wp_reset_query();
 else :
 endif; ?>  