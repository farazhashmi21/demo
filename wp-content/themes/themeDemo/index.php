<?php
  get_header();
  ?>
  
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1 class="main-heading"><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) { the_post(); ?>
        <h2><?php echo get_the_title(); ?></h2>
        <p><?php echo get_the_content(); ?></p>
        <?php		} // end while 
        } // end if
        ?>
    </div>
    <div class="col">
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) { the_post(); ?>
        <h2><?php echo get_the_title(); ?></h2>
        <p><?php echo get_the_content(); ?></p>
        <?php		} // end while 
        } // end if
        ?>
    </div>
    <div class="col">
    <?php
      if ( have_posts() ) {
        while ( have_posts() ) { the_post(); ?>
        <h2><?php echo get_the_title(); ?></h2>
        <p><?php echo get_the_content(); ?></p>
        <?php		} // end while 
        } // end if
        ?>
    </div>
  </div>
</div>

<?php
  get_footer();
?>
