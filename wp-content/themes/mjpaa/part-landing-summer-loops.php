<div class="classes-wrapper">  

<?php
// GroupOne args
$groupOne = array (
  'post_type' => 'class',
  'orderby'   => 'title',
  'order'     => 'ASC',
  'meta_query' => array(array(
  			'key' => 'class_group',
            'value' => '1', //change this
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

// GroupTwo args
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

// GroupThree args
$groupThree = array (
  'post_type' => 'class',
  'orderby'   => 'title',
  'order'     => 'ASC',
  'meta_query' => array(array(
  			'key' => 'class_group',
            'value' => '3', //change this
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

// GroupFour args
$groupFour = array (
  'post_type' => 'class',
  'orderby'   => 'title',
  'order'     => 'ASC',
  'meta_query' => array(array(
  			'key' => 'class_group',
            'value' => '4', //change this
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
?>

<?php //GROUP ONE
$query = new WP_Query($groupOne); 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>

<div class="group col-1">
  <h6><a href="<?php the_permalink() ?>"><?php the_field('class_title_summer'); ?></a></h6>
  <p><a href="<?php the_permalink() ?>">View Camp <i class="fa fa-angle-double-right"></i></a></p>
</div><!--/.group-->

<?php endwhile; 
 wp_reset_postdata();
 wp_reset_query();
 else :
 endif; ?>  


<?php //GROUP TWO
$query = new WP_Query($groupTwo); 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>

<div class="group col-2">
  <h6><a href="<?php the_permalink() ?>"><?php the_field('class_title_summer'); ?></a></h6>
  <p><a href="<?php the_permalink() ?>">View Camp <i class="fa fa-angle-double-right"></i></a></p>
</div><!--/.group-->

<?php endwhile; 
 wp_reset_postdata();
 wp_reset_query();
 else :
 endif; ?>  


<?php //GROUP THREE
$query = new WP_Query($groupThree); 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>

<div class="group col-3">
  <h6><a href="<?php the_permalink() ?>"><?php the_field('class_title_summer'); ?></a></h6>
  <p><a href="<?php the_permalink() ?>">View Camp <i class="fa fa-angle-double-right"></i></a></p>
</div><!--/.group-->

<?php endwhile; 
 wp_reset_postdata();
 wp_reset_query();
 else :
 endif; ?>  


<?php //GROUP FOUR
$query = new WP_Query($groupFour); 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>

<div class="group col-4">
  <h6><a href="<?php the_permalink() ?>"><?php the_field('class_title_summer'); ?></a></h6>
  <p><a href="<?php the_permalink() ?>">View Camp <i class="fa fa-angle-double-right"></i></a></p>
</div><!--/.group-->

<?php endwhile; 
 wp_reset_postdata();
 wp_reset_query();
 else :
 endif; ?>  











</div><!--/.class-wrapper-->