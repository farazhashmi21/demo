<?php get_header(); ?>
        <!-- Content section-->
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <!-- <h2><?php //the_title(); ?></h2> -->
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <?php else: ?>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Write FIRST!</h2>
                        <p class="">Write some Articles.</p>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php get_footer(); ?>