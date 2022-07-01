<?php
/**
* Template Name: About Us Template
**/

get_header(); ?>
<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
		$title = get_the_title();
		$content = get_the_content();
	} ?>
	<div class="contentTitle">
		<h1><?php echo $title; ?></h1>
	</div>
	<div class="flex-container">
		<div>
			<h6>div 1:</h6>
			<p><?php echo $content ?></p>
		</div>
		<div>
			<h6>div 2:</h6>
			<p><?php echo $content ?></p>
		</div>
		<div>
			<h6>div 3:</h6>
			<p><?php echo $content ?></p>
		</div>
	</div>
	<?php
} else { 

	// If no content, include the "No posts found" template. ?>
	<p>No Content Found!</p>
<?php
}
?>
<?php get_footer(); ?>
