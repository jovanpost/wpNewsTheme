<?php get_header(); ?>

<main>

    <div id="postColumn">



        <?php while(have_posts()) : the_post(); ?>

        <div id="thePost">

            <?php the_post_thumbnail('full'); ?>

            <h2 id="thePostTitle">
                <?php the_title(); ?>
            </h2>
            <h6>- <?php the_time('F j, Y - H:i') ?> by <?php the_author(); ?> -</h6>


            <?php the_content(); ?>
            <?php endwhile; ?>
            <?php comments_template(); ?>


        </div>

        <h2 id="similarH2">Similar News</h2>


<div id="similarNews">

    <?php         $categories = wp_get_post_terms( get_the_ID(), 'category');

// Check if there are any categories
if( ! empty( $categories ) ) :

// Get all posts within current category, but exclude current post
$category_posts = new WP_Query( array(
    'cat'          => $categories[0]->term_id,
    'post__not_in' => array( get_the_ID() ),
    'posts_per_page' => 4,
) );

// Check if there are any posts
if( $category_posts->have_posts() ) :
    // Loop trough them
    while( $category_posts->have_posts() ) : $category_posts->the_post();?>





    <div id="similarNews1">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
        <a href="<?php the_permalink(); ?>"><span class="headline"><?php the_title(); ?></span></a>

    </div>

    <?php endwhile; ?>
    <?php endif; ?>
    <?php endif; ?>


</div>

    </div>

    <div id="secondColumnInPost">

        <?php // header slider posts loop begins here
                        $headerSliderPosts = new WP_Query('cat=8&posts_per_page=5');
                        

                        if ($headerSliderPosts->have_posts()) :

                                while ($headerSliderPosts->have_posts()) : $headerSliderPosts->the_post(); ?>


        <div class="secondColumnInPostItem">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
            <a href="<?php the_permalink(); ?>"><span class="headline"><?php the_title(); ?></span></a>
        </div>

        <?php endwhile;
                    
                    else :
                        // fallback no content message here
                endif;
                wp_reset_postdata();

                ?>

        <?php // featured posts loop begins here
						$featuredPosts = new WP_Query('cat=9&posts_per_page=6');

                        if ($featuredPosts->have_posts()) :

                                while ($featuredPosts->have_posts()) : $featuredPosts->the_post(); ?>

        <div class="secondColumnInPostItem">
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





    <div class="rightColumnInPost">
        <?php get_sidebar(); ?>
    </div>





</main>


<?php get_footer(); ?>