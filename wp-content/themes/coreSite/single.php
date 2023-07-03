<?php
$header_file = "header.php";
$footer_file = "footer.php";
require($header_file);
?>
<!-- Main Body Section Start -->
<div class="main-body">
	<div class="body-items">
		<?php
		  if(have_posts()){
		  	while(have_posts()){
		  		the_post(); ?>
		  		<?php the_post_thumbnail(); ?>
		  		<h3><?php the_title(); ?></h3>
		  		<?php the_content(); ?>
		  	</div>
		  <?php } } ?>
</div>
<!-- Main Body Section End -->
<?php
require($footer_file);
?>