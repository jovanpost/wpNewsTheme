<?php get_header(); ?>

<main>

    <div id="headerGrid">

        <?php // header slider posts loop begins here
                        $$headerGridPosts = new WP_Query('cat=8&posts_per_page=5');
                        

                        if ($$headerGridPosts->have_posts()) :

                                while ($$headerGridPosts->have_posts()) : $$headerGridPosts->the_post(); ?>


        <div class="headerItem">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
            <a href="<?php the_permalink(); ?>"><span class="headline"><?php the_title(); ?></span></a>
        </div>

        <?php endwhile;
                    
                    else :
                        // fallback no content message here
                endif;
                wp_reset_postdata();

                ?>


    </div>


    <div id="featured">

        <?php // featured posts loop begins here
						$featuredPosts = new WP_Query('cat=9&posts_per_page=6');

                        if ($featuredPosts->have_posts()) :

                                while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>

        <div class="featuredItem">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
            <a href="<?php the_permalink(); ?>"><span class="headline"><?php the_title(); ?></span></a>

        </div>

        <?php endwhile;
                    
							else :
								// fallback no content message here
						endif;
						wp_reset_postdata();

						?>

    </div>

    <div id="news">

        <div class="categoriesFrontPage">


            <div class="categoryHeadline">
                <a href="<?php echo home_url() ?>/category/News">
                    <h1>News</h1>
                </a>
            </div>

            <?php // news posts loop begins here
						$newsPosts = new WP_Query('cat=3&posts_per_page=4');

                        if ($newsPosts->have_posts()) :

                                while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>


            <div class="articleCategoryFrontPage">

                <div class="pictureInCategory">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                </div>

                <div class="headlineAndExcerpt">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p> <?php the_excerpt(); ?></p>
                </div>

            </div>

            <?php endwhile;
                    
                    else :
                        // fallback no content message here
                endif;
                wp_reset_postdata();

                ?>


        </div>



    </div>

    <div id="bussines">

        <div class="categoriesFrontPage">


            <div class="categoryHeadline">
                <a href="http://localhost/newsthemewordpress/category/bussines/">
                    <h1>Bussines</h1>
                </a>
            </div>

            <?php // news posts loop begins here
                $bussinesPosts = new WP_Query('cat=4&posts_per_page=4');

                if ($bussinesPosts->have_posts()) :

                        while ($bussinesPosts->have_posts()) : $bussinesPosts->the_post(); ?>


            <div class="articleCategoryFrontPage">

                <div class="pictureInCategory">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                </div>

                <div class="headlineAndExcerpt">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p> <?php the_excerpt(); ?></p>
                </div>

            </div>

            <?php endwhile;
            
            else :
                // fallback no content message here
        endif;
        wp_reset_postdata();

        ?>


        </div>



    </div>

    <div id="оpinion">

        <div class="categoriesFrontPage">


            <div class="categoryHeadline">
                <a href="http://localhost/newsthemewordpress/category/opinion/">
                    <h1>Opinion</h1>
                </a>
            </div>

            <?php // news posts loop begins here
        $оpinionPosts = new WP_Query('cat=5&posts_per_page=4');

        if ($оpinionPosts->have_posts()) :

                while ($оpinionPosts->have_posts()) : $оpinionPosts->the_post(); ?>


            <div class="articleCategoryFrontPage">

                <div class="pictureInCategory">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                </div>

                <div class="headlineAndExcerpt">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p> <?php the_excerpt(); ?></p>
                </div>

            </div>

            <?php endwhile;
    
    else :
        // fallback no content message here
endif;
wp_reset_postdata();

?>


        </div>



    </div>

    <div id="sport">

        <div class="categoriesFrontPage">


            <div class="categoryHeadline">
                <a href="http://localhost/newsthemewordpress/category/sport/">
                    <h1>Sport</h1>
                </a>
            </div>

            <?php // news posts loop begins here
        $sportPosts = new WP_Query('cat=6&posts_per_page=4');

        if ($sportPosts->have_posts()) :

                while ($sportPosts->have_posts()) : $sportPosts->the_post(); ?>


            <div class="articleCategoryFrontPage">

                <div class="pictureInCategory">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                </div>

                <div class="headlineAndExcerpt">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p> <?php the_excerpt(); ?></p>
                </div>

            </div>

            <?php endwhile;
    
    else :
        // fallback no content message here
endif;
wp_reset_postdata();

?>


        </div>



    </div>

    <div id="showbizz">

        <div class="categoriesFrontPage">


            <div class="categoryHeadline">
                <a href="http://localhost/newsthemewordpress/category/showbizz/">
                    <h1>Showbizz</h1>
                </a>
            </div>

            <?php // news posts loop begins here
        $showbizzPosts = new WP_Query('cat=7&posts_per_page=4');

        if ($showbizzPosts->have_posts()) :

                while ($showbizzPosts->have_posts()) : $showbizzPosts->the_post(); ?>


            <div class="articleCategoryFrontPage">

                <div class="pictureInCategory">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                </div>

                <div class="headlineAndExcerpt">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p> <?php the_excerpt(); ?></p>
                </div>

            </div>

            <?php endwhile;
    
    else :
        // fallback no content message here
endif;
wp_reset_postdata();

?>


        </div>



    </div>

    <?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>