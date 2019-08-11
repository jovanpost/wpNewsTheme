<?php get_header(); ?>

<?php while(have_posts()) : the_post(); ?>

                <?php endwhile; ?>

                <?php wpbeginner_numeric_posts_nav(); ?>

                <?php get_sidebar(); ?>


<?php get_footer(); ?>