<?php
/**
 * Firetoss Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Firetoss_Theme
 */

if ( ! function_exists( 'firetoss_seed_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function firetoss_seed_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Firetoss Theme, use a find and replace
         * to change 'firetoss_seed' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'firetoss_seed', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary', 'firetoss_seed' ),
            'footer-1' => esc_html__( 'Footer-1', 'firetoss_seed' ),
            'footer-2' => esc_html__( 'Footer-2', 'firetoss_seed' ),
            'footer-4' => esc_html__( 'Footer-4', 'firetoss_seed' ),
            'dashboard' => esc_html__( 'Dashboard', 'firetoss_seed' ),
        ) );



        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'firetoss_seed_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
    }
endif;
add_action( 'after_setup_theme', 'firetoss_seed_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */


function firetoss_seed_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'firetoss_seed_content_width', 640 );
}
add_action( 'after_setup_theme', 'firetoss_seed_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function firetoss_seed_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'firetoss_seed' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'firetoss_seed' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'firetoss_seed' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'firetoss_seed' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
    ));
    register_sidebar( array(
        'name'          => esc_html__( 'Contact Sidebar', 'firetoss_seed' ),
        'id'            => 'contact',
        'description'   => esc_html__( 'Add widgets here.', 'firetoss_seed' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
    ));

    register_sidebar( array(
        'name'          => esc_html__( 'Region', 'firetoss_seed' ),
        'id'            => 'region',
        'description'   => esc_html__( 'Add widgets here.', 'firetoss_seed' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar( array(
        'name'          => esc_html__( 'Region Popup', 'firetoss_seed' ),
        'id'            => 'region-pop',
        'description'   => esc_html__( 'Add widgets here.', 'firetoss_seed' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init', 'firetoss_seed_widgets_init' );


// Register Custom Post Type

/*
function add_shopify_product() {

    $labels = array(
        'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Products', 'text_domain' ),
        'name_admin_bar'        => __( 'Shopify Products', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'attributes'            => __( 'Item Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Products', 'text_domain' ),
        'add_new_item'          => __( 'Add New Product', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Product', 'text_domain' ),
        'edit_item'             => __( 'Edit Product', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Product', 'text_domain' ),
        'view_items'            => __( 'View Products', 'text_domain' ),
        'search_items'          => __( 'Search Product', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Product', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'capability_type'       => 'page',
        'rewrite' => array('slug' => 'products'),
    );
    register_post_type( 'product', $args );

}
add_action( 'init', 'add_shopify_product', 0 );

*/


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}
//
//// acf options page
//if( function_exists('acf_add_options_page') ) {
//    acf_add_options_page();
//}

function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function new_excerpt_more($more) {
    global $post;
    return '<a class="read-more" href="'. get_permalink($post->ID) . '"> ... Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

///*
// * Checks if page is an Event Calendar Page
// * @return bool
// */
//function is_tribe_calendar() { // detect if we're on an Events Calendar page
//    if (tribe_is_event() || tribe_is_event_category() || tribe_is_in_main_loop() || tribe_is_view() || 'tribe_events' == get_post_type() || is_singular( 'tribe_events' ))
//        return true;
//    else return false;
//}




/**
 * Enqueue scripts and styles.
 */
function firetoss_seed_scripts() {
    wp_enqueue_style( 'firetoss_seed-style', get_stylesheet_uri() );

    wp_enqueue_script( 'firetoss_seed-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'firetoss_seed-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'firetoss_seed_scripts' );

// Register Script
function custom_scripts() {
// Add yours here following the below format

//
    wp_register_script( 'referral',  get_template_directory_uri() . '/js/referral.js', false, false, true );
    wp_enqueue_script( 'referral',  get_template_directory_uri() . '/js/referral.js', false, false, true  );

    wp_register_script( 'featherlight',  get_template_directory_uri() . '/js/featherlight.js', false, false, true );
    wp_enqueue_script( 'featherlight',  get_template_directory_uri() . '/js/featherlight.js', false, false, true  );

    wp_register_script( 'mean-menu',  get_template_directory_uri() . '/js/jquery.meanmenu.js', false, false, true );
    wp_enqueue_script( 'mean-menu',  get_template_directory_uri() . '/js/jquery.meanmenu.js', false, false, true );

    wp_register_script( 'scroll-reveal',  get_template_directory_uri() . '/js/scrollreveal.min.js', false, false, true );
    wp_enqueue_script( 'scroll-reveal',  get_template_directory_uri() . '/js/scrollreveal.min.js', false, false, true  );

    wp_register_script( 'magnific-script',  get_template_directory_uri() . '/js/jquery.magnific-popup.js', false, false, true );
    wp_enqueue_script( 'magnific-script',  get_template_directory_uri() . '/js/jquery.magnific-popup.js', false, false, true  );



    wp_register_script( 'owl-script',  get_template_directory_uri() . '/js/owl.carousel.js', false, false, true );
    wp_enqueue_script( 'owl-script',  get_template_directory_uri() . '/js/owl.carousel.js', false, false, true  );

    wp_register_script( 'firetoss-js',  get_template_directory_uri() . '/js/firetoss.js', false, false, true );
    wp_enqueue_script( 'firetoss-js',  get_template_directory_uri() . '/js/firetoss.js', false, false, true );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );



// Register Style
function custom_styles() {
// Add yours here following the below format
    wp_register_style( 'owl-styles',  get_template_directory_uri() . '/css/owl.carousel.css', false, false );
    wp_enqueue_style( 'owl-styles',  get_template_directory_uri() . '/css/owl.carousel.css', false, false );

    wp_register_style( 'featherlight',  get_template_directory_uri() . '/css/featherlight.css', false, false );
    wp_enqueue_style( 'featherlight',  get_template_directory_uri() . '/css/featherlight.css', false, false );

    wp_register_style( 'mean-styles',  get_template_directory_uri() . '/css/meanmenu.css', false, false, 'all' );
    wp_enqueue_style( 'mean-styles',  get_template_directory_uri() . '/css/meanmenu.css', false, false, 'all' );

    wp_register_style( 'animate',  get_template_directory_uri() . '/css/animate.css', false, false, 'all' );
    wp_enqueue_style( 'animate',  get_template_directory_uri() . '/css/animate.css', false, false, 'all' );

    wp_register_style( 'new',  get_template_directory_uri() . '/new.css', false, false, 'all' );
    wp_enqueue_style( 'new',  get_template_directory_uri() . '/new.css', false, false, 'all' );

    wp_register_style( 'magnific-styles',  get_template_directory_uri() . '/css/magnific-popup.css', false, false, 'all' );
    wp_enqueue_style( 'magnific-styles',  get_template_directory_uri() . '/css/magnific-popup.css', false, false, 'all' );

}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

// woo theme support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );

}




// gravity forms hide labels
add_filter('gform_enable_field_label_visibility_settings', '__return_true' );



class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }

    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "$indent</ul>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . '>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) . '"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) . '"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) . '"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) . '"' : '';


        $item_output = $args->before;

        //HERE IT IS
        $menu_acf = get_field( 'menu_acf', $item->ID );
        $menu_content = get_field( 'menu_content', $item->ID, false );

        if(!($menu_acf)) {
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
            $item_output .= '</a>';
        } else {

            $item_output .= !empty($menu_content) ? '<div class="nav-acf">' . $menu_content . '</div>' : '';
        }

        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el( &$output, $item, $depth = 0, $args = array() ) {
        $output .= "</li>\n";
    }
}



function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="' . home_url( '/' ) . '">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search …" value="' . get_search_query() . '" name="s">
				</label>
				<input type="submit" class="search-submit" value="'. esc_attr__( 'Go' ) .'">
			</form>';

    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//https://generatewp.com/post-type/

//https://generatewp.com/taxonomy/

//https://generatewp.com/register_script/

//https://generatewp.com/register_style/




add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
    echo '<style>
.ui-dialog.ui-widget.ui-widget-content {
    background: #fafafa;
    padding: 20px;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.22);
    border-radius: 3px;
    border: 1px solid #e5e5e5;
}
  </style>';
}



