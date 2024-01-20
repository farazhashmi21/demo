<?php get_header(); ?>
        <!-- Content section-->
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <a href="<?php the_permalink(); ?>">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <h2 class="card-title text-center"><?php the_title(); ?></h2>
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="text-center text-dark"><?php the_date(); ?>.</p>
                            </div>
                        </div>
                    </a>
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