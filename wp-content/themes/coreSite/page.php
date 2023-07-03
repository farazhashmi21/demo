<?php
$header_file = "header.php";
$footer_file = "footer.php";
require($header_file);
?>
<!-- Main Body Section Start -->
<marquee><?php bloginfo('name'); ?></marquee>
<div class="main-body">
	<div class="body-items">
		<?php
		if(have_posts()){
			while(have_posts()){ the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
			<?php } } ?>
	</div>
</div>
<!-- Main Body Section End -->
<?php require($footer_file); ?>
