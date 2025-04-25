<?php get_header();?>
       <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col mb-5">
                        <div class="card bg-light border-0 h-100">
                            <?php
                            if ( have_posts() ) :
                                while ( have_posts() ) : the_post(); ?>
                                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                        <h2 class="fs-4 fw-bold"><?php the_title(); ?></h2>
                                        <p class="mb-0"><?php the_content(); ?></p>
                                    </div>
                                    <!-- <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-collection"></i></div>
                                <h2 class="fs-4 fw-bold">Fresh new layout</h2>
                                <p class="mb-0">With Bootstrap 5, we've created a fresh new layout for this template!</p>
                            </div> -->

                                <?php endwhile;
                            else :
                                echo '<p>No content found</p>';
                            endif;
                            ?>
                        </div>
                    </div>
                    </div>
            </div>
        </section>
<?php get_footer();?>