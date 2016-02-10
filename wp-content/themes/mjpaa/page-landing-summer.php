<?php
/**
Template Name: Landing, Summer
 *
 */
?>
<!DOCTYPE html>
<html>
<head>
<title>Summer Registration at MJPAA</title>
    <meta charset="utf-8">
    <meta name="keywords" content="dance tampa, summer dance tampa, tampa dance classes summer, tampa fl dance lessons, performing arts tampa, tampa summer camps, summer dance camps, summer activities tampa">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon.png">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/style-landing-summer.css">

</head>
<body>

<header>
  <nav class="landing-nav">
    <div class="contain">
      <a href="<?php bloginfo('siteurl'); ?>" class="logo" rel="logo" title="MJPAA">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png">
      </a>
      <ul class="menu">
        <a class="visit" href="<?php bloginfo('siteurl'); ?>">Visit MJPAA.com</a>
      </ul>
    </div>
  </nav>
</header>

<section class="landing-hero clipped">
  <div class="contain center">
    <h1 class="title">Summer is Coming</h1>
    <h4>Don't miss out on our early bird Summer Registration Discounts.<br />Register for classes today.</span></h4>
    <a href="" class="button border l">Register Now</a>
    <a href="" class="button border r">Find Summer Classes</a>
  </div>
  <!--<div class="page-scroll js-page-scroll">
    <i class="fa fa-arrow-down"></i>
  </div>-->
</section>

<section class="landing-intro">
  <div class="contain center padded">
    <h2 class="title has-emblem">Our Summer curriculum</h2>
      <div class="emblem">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon-courses.png">
      </div>
      <div class="row">
      
      
        <div class="col-sm-4">
          <ul class="course-list">
			<li class="clearfix">
			  <div class="course pull-left">
			    <i class="fa fa-check"></i>
			  </div>
			Dance
			</li>
			<li class="clearfix">
			  <div class="course pull-left">
			    <i class="fa fa-check"></i>
			  </div>
			Classical Ballet
			</li>
		  </ul><!--/.course-list-->
        </div><!--/.col-->
        
        <div class="col-sm-4">
          <ul class="course-list">
			<li class="clearfix">
			  <div class="course pull-left">
			    <i class="fa fa-check"></i>
			  </div>
			Music, Instruments &amp; Voice
			</li>
			<li class="clearfix">
			  <div class="course pull-left">
			    <i class="fa fa-check"></i>
			  </div>
			Acting &amp; Theater
			</li>
		  </ul><!--/.course-list-->
        </div><!--/.col-->
        
        <div class="col-sm-4">
          <ul class="course-list">
			<li class="clearfix">
			  <div class="course pull-left">
			    <i class="fa fa-check"></i>
			  </div>
			Acrobatics
			</li>
			<li class="clearfix">
			  <div class="course pull-left">
			    <i class="fa fa-check"></i>
			  </div>
			... and more!
			</li>
		  </ul><!--/.course-list-->
        </div><!--/.col-->
      </div><!--/.row-->
  </div><!--/.contain-->
</section>

<secion class="landing-memories">
  <div class="contain center padded">
    <!--<h2 class="title has-emblem">Summer Memories</h2>
      <div class="emblem">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon-news.png">
      </div>-->
	<div class="row">
		<div class="col-sm-12 images">
		  <div class="col-sm-2"></div>
		  <div class="col-sm-2 stack rotated-left">
	        	<img src="http://mjpaa.com/wp-content/uploads/2015/08/memories1.jpg">
	      </div>
	      <div class="col-sm-2 stack rotated-middle">
	        	<img src="http://mjpaa.com/wp-content/uploads/2015/08/memories2.jpg">
	      </div>
	      <div class="col-sm-2 stack rotated-right">
	        	<img src="http://mjpaa.com/wp-content/uploads/2015/08/memories3.jpg">
	      </div>
	      <div class="col-sm-2"></div>
		</div>
	</div>
  </div>
</secion>

<section class="landing-quote">
  <div class="contain center not-padded">
    <i></i> "When the arts enter a child's world, magic happens." <em>- Mary Jo Scanio, Founder</em>
  </div>
</section>

<section class="landing-classes">
  <div class="contain center padded">
    <h2 class="title has-emblem">Summer Class List</h2>
      <div class="emblem">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon-other.png">
      </div> 
      
 <?php

// Arguments
$args = array (
  'post_type' => 'class',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'session',
            'field' => 'slug',
            'terms' => array( 'summer-camps', 'summer-classes'),
            'operator' => 'IN'
        ),
  'order'		   => 'DESC',
  'posts_per_page' => 4, 
  'post_status' => 'publish'
  )
);
// The Query
$loop = new WP_Query( $args );

// The Loop
if ( $loop->have_posts() ) {
	while ( $loop->have_posts() ) {
		$loop->the_post(); ?>

  <div class="col-sm-3 summer-list">
    <h6 class="class-title">
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        <span>View Class <i class="fa fa-caret-right"></i></span>
      </a>
    </h6>
  </div>


<?php } 
} else {
	// no posts found
}
// Restore original Post Data
wp_reset_postdata();
?>     
  </div>
</section>

<section class="landing-callout">
  <div class="contain center padded">
    <h2 class="title has-emblem">Ready to Get Started</h2>
      <div class="emblem">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon-courses.png">
      </div>
    
    <div class="buttons">
      <a href="" class="button border new">Find Summer Classes</a>
      <a href="" class="button border current">View Summer Brochure</a>
    </div>
    
  </div>
</section>




</body>
</html>