<?php
  /**
   * Template Name: Home Page
   **/
   get_header();
   ?>
<div id="slider" class="inspiro-slider slider-halfscreen dots-creative">

<div class="slide kenburns" data-bg-image="<?php echo get_template_directory_uri(); ?>/images/1.jpg">
<div class="bg-overlay"></div>
<div class="container">
<div class="slide-captions text-center text-light">

<span class="strong"><a href="#" class="business"><span class="business">Business</span></a>
</span>
<h1>Explore The New World of Creativity</h1>
<div><button type="button" class="btn">Explore</button>
<button type="button" class="btn btn-light">Purchase</button></div>

</div>
</div>
</div>


<div class="slide kenburns" data-bg-image="<?php echo get_template_directory_uri(); ?>/images/2.jpg">
<div class="bg-overlay"></div>
<div class="container">
<div class="slide-captions text-left text-light">

<span class="strong"><a href="#" class="business"><span class="business">Business</span></a>
</span>
<h1>Polo Gives You Power To Build Beautiful Websites</h1>
<div><button type="button" class="btn">Explore</button>
<button type="button" class="btn btn-light">Purchase</button></div>

</div>
</div>
</div>

</div>


<section>
<div class="container">
<div class="row">
<div class="col-lg-5 m-b-60">
<h4><?php the_field('title'); ?></h4>
<!-- <h2>Set your goals high, and don't stop till you get there.</h2> -->
<p class="lead"><?php the_field('text'); ?></p>
<a href="<?php the_field('button'); ?>" class="btn btn-dark btn-outline btn-rounded">Our Services</a>
 </div>
<div class="col-lg-6 offset-1 m-t-40">
<div class="row">
<?php
if( have_rows('col-two') ):
  while( have_rows('col-two') ) : the_row(); ?>
<div class="col-lg-6">
<h4><?php echo get_sub_field('col-title'); ?></h4>
<p><?php echo get_sub_field('col-text'); ?></p>
</div>
<?php endwhile;
else :
  echo "<marquee class = 'alert alert-warning'>No Content Found!</marquee>";
endif; ?>
</div>
</div>

</div>
</div>
</section>


<section class="background-grey text-center">
<div class="container">
<div class="row">
<div class="col-lg-9">
<h3 style="font-weight: 400;"><?php the_field('purchase_text'); ?></h3>
</div>
<div class="col-lg-3"><a href="<?php echo get_field('purchase_link'); ?>" class="btn btn-rounded"><?php echo get_field('purchase_button_text'); ?></a> </div>
</div>
</div>
</section>


<section class="p-t-100 p-b-100" data-bg-parallax="<?php echo get_template_directory_uri(); ?>/images/4.jpg">
<div class="bg-overlay"></div>
<div class="container xs-text-center sm-text-center text-light">
<div class="row">
<div class="col-lg-5 p-b-60">
<h2>Our Numbers & Smoth parallax</h2>
<p class="lead">Nulla varius consequat magna, id molestie ipsum volutpat quis. A true story,
that never been told!. Fusce id mi diam, non ornare. Fusce id mi diam, non ornare orci.
Pellentesque ipsum erat, id molestie ipsum volutpat quis. facilisis ut venenatis eu.</p>
<a href="#services" class="btn btn-light btn-outline btn-rounded">Our Services</a>
</div>
 <div class="col-lg-7">
<div class="row">
<div class="col-lg-6">
<div class="text-center">
<div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
<div class="seperator seperator-small"></div>
<p>LINES OF CODE</p>
</div>
</div>
<div class="col-lg-6">
<div class="text-center">
<div class="counter text-lg"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>
<div class="seperator seperator-small"></div>
<p>CUPS OF COFFEE</p>
</div>
</div>
<div class="col-lg-6">
<div class="text-center">
<div class="counter text-lg"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>
<div class="seperator seperator-small"></div>
<p>FINISHED PROJECTS</p>
</div>
</div>
<div class="col-lg-6">
<div class="text-center">
<div class="counter text-lg"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>
<div class="seperator seperator-small"></div>
<p>SATISFIED CLIENTS</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section>
<div class="container">
<div class="row">
<div class="col-lg-10 center text-center">
<h4 class="m-b-10">Know More</h4>
<h2><?php echo get_field('home_company_title'); ?></h2>
<p class="lead m-b-60"><?php echo get_field('home_company_text'); ?></p>
</div>
</div>
</div>
<div class="container">
<div class="row">
  <?php
  // Check rows exists.
  if( have_rows('cols') ):
  // Loop through rows.
    while( have_rows('cols') ) : the_row(); ?>
<div class="col-lg-4">
<h4 class="m-b-20"><?php echo get_sub_field('progress_section'); ?></h4>
</div>
<div class="col-lg-4">
<h4 class="m-b-20"><?php echo get_sub_field('services_around'); ?></h4>
</div>
<div class="col-lg-4">
<h4 class="m-b-20">Latest from Blog</h4>
<div class="post-thumbnail-list">
<div class="post-thumbnail-entry">
<img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" alt="">
<div class="post-thumbnail-content">
<a href="#">Suspendisse consectetur fringilla</a>
<span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Technology</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img src="<?php echo get_template_directory_uri(); ?>/images/6.jpg" alt="">
<div class="post-thumbnail-content">
<a href="#">Beautiful nature, and rare feathers!</a>
<span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img src="<?php echo get_template_directory_uri(); ?>/images/7.jpg" alt="">
<div class="post-thumbnail-content">
<a href="#">The most happiest time of the day!</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
<div class="post-thumbnail-entry">
<img src="<?php echo get_template_directory_uri(); ?>/images/8.jpg" alt="">
<div class="post-thumbnail-content">
<a href="#">Fringilla Lorem ipsum dolor sit amet</a>
<span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
<span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
</div>
</div>
</div>
</div>
<?php
 // End loop.
    endwhile;

// No value.
else :
    // Do something...
  echo "<marquee class='alert alert-warning'>No Content Found!</marquee>";
endif;
?>
</div>
</div>
</section>


<section class="p-t-150 p-b-200" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/background-4.png'); background-position:71% 22%;">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="row">
<div class="col-lg-12">
<h2 class="m-b-10"><?php the_field('contact_heading'); ?></h2>
<p class="lead"><?php the_field('contact_text'); ?></p>
</div>
<div class="col-lg-12 m-b-30">
<h4>We are social</h4>
<div class="social-icons social-icons-light social-icons-colored-hover">
<ul>
<?php

// Check rows exists.
if( have_rows('contact_social') ):

    // Loop through rows.
    while( have_rows('contact_social') ) : the_row();

        // Load sub field value.
    ?>
    <li class="social-facebook"><a href="<?php echo get_sub_field('facebook'); ?>"><i class="fab fa-facebook-f"></i></a></li>
    <li class="social-twitter"><a href="<?php echo get_sub_field('twitter'); ?>"><i class="fab fa-twitter"></i></a></li>
    <li class="social-instagram"><a href="<?php echo get_sub_field('instagram'); ?>"><i class="fab fa-instagram"></i></a></li>
    <?php
    // End loop.
  endwhile;
  // No value.
else :
// Do something...
  echo "<marquee class='alert alert-warning'>No Content found!</marquee>";
endif;
?>
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-5 offset-1">
<?php the_field('contact_form'); ?>
</div>
</div>
</div>
</section>


<section class="background-colored text-center p-t-80  p-b-30">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5">
<div class="widget widget-newsletter">
<h3 class="text-light"><?php the_field('newsletter_title'); ?></h3>
<div class="input-group mb-0">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-paper-plane"></i></span>
</div>
<?php the_field('newsletter'); ?>
</div>
<small class="text-light"><?php the_field('newsletter_content_text'); ?></small>
</div>
</div>
</div>
</div>
</section>
<?php
  get_footer();
  ?>