<?php
  get_header();
  ?>
<main id="main">
		<!-- Title of the page -->
		<h1 id="title">Dwayne Johnson (The Rock)</h1>
		<div id="img">
			<!--Image of the Tribute Person-->
			<a href="<?php echo the_permalink(); ?>">
			<img src="<?php echo get_template_directory_uri().'/images/the_rock.jpg'; ?>" id="image" alt="Error Loading Image"></a>
			<small id="caption">Dwayne Douglas Johnson, also known by his ring name The Rock, is an American actor, businessman, and former professional wrestler.
            Widely regarded as one of the greatest professional wrestlers of all time, he wrestled for WWE for eight years prior to pursuing an acting career.</small>
		</div>

		<div id="tribute-data">

			<!--Achievements and other
				details of the person-->
			<h1 class="title-APJ">About the Legend</h1>
            <h2>Professional wrestling career</h2>
            <h3>Early career (1996)</h3>
            <p>After his football career, Johnson decided to pursue a career as a professional wrestler.<p>
            <p>Veteran wrestler Pat Patterson got Johnson several tryout matches with the World Wrestling Federation (WWF) in 1996.</p>
            <p>Under his real name, he defeated The Brooklyn Brawler at a house show on March 10 and lost matches to Chris Candido and Owen Hart.</p>
            <p>After wrestling at Jerry Lawler's United States Wrestling Association as Flex Kavana and winning the USWA World Tag Team Championship twice with Bart Sawyer in the summer of 1996, Johnson signed a WWF contract. He received additional training from Tom Prichard, alongside Achim Albrecht and Mark Henry.</p>


		</div>
		<br>
		 For more information,
		check out
		<a id="tribute-link" href="#">
            <small>Developed by @<a href="https://about.me/farazhashmi21">
                Developer Faraz Hashmi.</a></small>
	</main>
	<?php
	  get_footer();
	  ?>