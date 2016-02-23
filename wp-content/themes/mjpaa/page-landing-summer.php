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
        <a href="https://app.jackrabbitclass.com/reg.asp?id=505581" target="_blank">New Student Registration</a>
        <a href="https://app.jackrabbitclass.com/portal/ppLogin.asp?id=505581" target="_blank">Customer Login</a>
      </ul>
    </div>
  </nav>
</header>
<div class="bg-hero-wrap">
<section class="landing-hero clipped">
<div class="sun">
            <div class="sun-face">
                <div class="sun-hlight"></div>

            </div>
            <div class="sun-anime">
            <div class="sun-ball"></div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
            <div class="sun-light">
                <b></b>
                <s></s>
            </div>
        </div>
    </div><!--/.sun-->
  <div class="contain center">
    <h2 class="title">Discover the Difference</h2>
    <h6>Don't miss out on our early bird Summer Registration Discounts.<br />Register for classes today.</span></h6>
    <a href="" class="button border r">Find Summer Classes</a>
    <a href="" class="button border r">View Summer Brochure</a>
  </div>
</section>
</div>

<section class="landing-intro camps">
  <div class="contain center padded">
    <h3 class="title has-emblem">Summer Camps &amp; Workshops</h3>
      <div class="emblem">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon-courses.png">
      </div>
      
<?php
// get all summer classes
$args = array (
  'post_type' => 'class',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'session',
            'field' => 'slug',
            'terms' => array( 'summer-camps'),
            'operator' => 'IN'
        ),
  'order'		   => 'DESC',
  'posts_per_page' => -1, 
  'post_status' => 'publish'
  )
);
// the loop
$query = new WP_Query($args); 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>
<div class="classes-wrapper">
  <div class="class">
    <a href="<?php the_permalink() ?>">
      <h6><?php the_title(); ?></h6>
	</a>
	<a href="<?php the_permalink() ?>">
	  <p>View Class <i class="fa fa-angle-double-right"></i></p>
	</a>
  </div><!--/.class-->
</div><!--/.class-wrapper-->

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no classes posted at this time. Please check back later.' ); ?></p>
<?php endif; ?>      

  </div><!--/.contain-->
</section>

<section class="landing-memories">
    <div class="images-wrapper">
	  <div class="image">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/summer-middle.jpg">
	  </div>
	  <div class="image">
	    <img src="http://mjpaa.com/wp-content/uploads/2015/08/memories3.jpg">
	   </div>
	   <div class="image">
	     <img src="<?php bloginfo('stylesheet_directory'); ?>/img/summer-middle.jpg">
	   </div>

    </div><!--/.images-wrapper-->
</section>

<section class="landing-intro classes">
  <div class="contain center padded">
    <h3 class="title has-emblem">Summer Classes</h3>
      <div class="emblem">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon-courses.png">
      </div>
      
<?php
// get all summer classes
$args = array (
  'post_type' => 'class',
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'session',
            'field' => 'slug',
            'terms' => array( 'summer-classes'),
            'operator' => 'IN'
        ),
  'order'		   => 'DESC',
  'posts_per_page' => -1, 
  'post_status' => 'publish'
  )
);
// the loop
$query = new WP_Query($args); 
  if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>
<div class="classes-wrapper">
  <div class="class">
    <a href="<?php the_permalink() ?>">
      <h6><?php the_title(); ?></h6>
	</a>
	<a href="<?php the_permalink() ?>">
	  <p>View Class <i class="fa fa-angle-double-right"></i></p>
	</a>
  </div><!--/.class-->
</div><!--/.class-wrapper-->

<?php endwhile; 
 wp_reset_postdata();
 else : ?>
<p><?php _e( 'There are no classes posted at this time. Please check back later.' ); ?></p>
<?php endif; ?>      

  </div><!--/.contain-->
</section>

<section class="landing-quote">
  <div class="contain center not-padded">
    <i></i> "When the arts enter a child's world, magic happens." <em>- Mary Jo Scanio, Founder</em>
  </div>
</section>

<section class="landing-callout">
  <div class="contain center padded">
    <h3 class="title has-emblem">Ready to Discover the Difference this Summer?</h3>
      <div class="emblem">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/icon-courses.png">
      </div>
    
    <div class="buttons">
      <a href="https://app.jackrabbitclass.com/reg.asp?id=505581" class="button border" target="_blank">Register Now</a>
    </div>
    
  </div>
</section>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
/**
 * header scroll
 */
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if ( scroll >= 40 && $(window).width() >= 899) { //not on mobile
    	$('.landing-nav').slideDown(300);
        $('.landing-nav').addClass("fixed");
   } else {
	    $('.landing-nav').removeClass("fixed");
   }

});
</script>

<footer class="landing">
  <div class="contain">
    <ul class="left">
    	<li><a href="https://www.facebook.com/MaryJosPerformingArtsAcademy/" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
    	<li><a href="https://twitter.com/mjpaa" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
    	<li><a href="https://www.instagram.com/mjpaa_tampa/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    	<li class="r"><a href="">Summer FAQs</a></li>
    	<li class=""><a href="">Summer Uniform</a></li>
    </ul>
  </div><!--/.contain-->
</footer>

</body>
</html>