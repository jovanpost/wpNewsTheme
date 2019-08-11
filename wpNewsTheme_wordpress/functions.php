<?php 
//Adds thumbnail to post
add_theme_support('post-thumbnails'); 
//Adds Menus
add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
	register_nav_menus( array(
		'social_menu' => 'Social menu',
		'main_menu' => 'Main menu',
	) );
}
//Register right sidebar
register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div><!-- widget end -->'
));

function wpb_widgets_init() {
    register_sidebar( array(
    'name' => 'Header Widget',
    'id' => 'header-widget',
    'before_widget' => '<div class="hw-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="hw-title">',
    'after_title' => '</h2>',
    ) );
    
    }
    add_action( 'widgets_init', 'wpb_widgets_init' );
    

add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

function hook_css() {
    ?>
        <style>
            html {
                margin-top : 0px !important;
            }
            html {
                margin-top : 0px !important;
            }
        </style>
    <?php
}
add_action('wp_head', 'hook_css');

// function my_theme_scripts_function() {

//     wp_enqueue_script( 'myscript', get_template_directory_uri() . '/js/main.js');
  
//   }
  
//   add_action('wp_enqueue_scripts','my_theme_scripts_function');

// function wpb_adding_scripts() {
//   wp_register_script('my_amazing_script', get_template_directory_uri() . '../newstheme/js/main.js', array('jquery'),'1.1', true);
//   wp_enqueue_script('my_amazing_script');
//   }
    
//   add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );  


  function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}
  
  


?>

