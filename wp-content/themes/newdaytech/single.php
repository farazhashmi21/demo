<?php get_header(); ?>
        <!-- Content section-->
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2><?php the_title(); ?></h2>
                        <p class="lead"><?php the_date(); ?>.</p>
                        <?php the_content(); ?>
                    </div>
                    </div>
                </div>
        </section>
        <hr/>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <?php
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                        ?>
                        </div>
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