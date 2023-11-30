<?php
get_header();
?>
        <article>
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
            <?php else: ?>
                <p>No Content Found!</p>
                <?php endif; ?>
        </article>
    </section>
    <hr/>
<?php
get_footer();
?>