<?php get_header(); ?>

<main>
   <div id="listedArticlesInCategory">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <div class="listedArticleCategory">
            <div class="listedPictureInCategory">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
    </div>
    <div class="listedHeadlineAndExcerpt">
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <p> <?php the_excerpt(); ?></p>
    </div>
    </div>

            <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

        <?php wpbeginner_numeric_posts_nav(); ?>



    </div>

    <div class="rightColumnInPost">
        <?php get_sidebar(); ?>
    </div>





</main>


<?php get_footer(); ?>