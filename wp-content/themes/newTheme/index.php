<?php get_header(); ?>
<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		$title = get_the_title();
	} ?>
	<div class="contentTitle">
		<h1 class=""><?php echo $title; ?></h1>
	</div>
	<div class="flex-container">
		<div>
			<h6>div 1:</h6>
			<p><?php the_content(); ?></p>
		</div>
	</div>
	<?php
} else { 

	// If no content, include the "No posts found" template. ?>
	<p class="alert alert-warning text-center"><marquee>No Content Found!</marquee></p>
<?php
}
?>
<?php get_footer(); ?>
