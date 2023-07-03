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
		  		<h3>
		  			<a href="<?php the_permalink(); ?>" title="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h3>
		  			<?php the_post_thumbnail(); ?>
		  		<?php the_excerpt(); ?>
		  	</div>
		  <?php } } ?>
</div>
<!-- Main Body Section End -->
<?php
require($footer_file);
?>