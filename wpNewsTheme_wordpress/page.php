<?php get_header(); ?>

<main>

    <div id="pageColumn">



        <?php while(have_posts()) : the_post(); ?>

        <div id="thePost">

            <?php the_post_thumbnail('full'); ?>

            <h2 id="thePageTitle">
                <?php the_title(); ?>
            </h2>

            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php comments_template(); ?>


        </div>
    </div>

    <div class="rightColumnInPost">
        <?php get_sidebar(); ?>
    </div>


</main>



<?php get_footer(); ?>