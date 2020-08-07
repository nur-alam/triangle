<?php

define( 'TRIANGLE_CSS', get_template_directory_uri() . '/assets/css/' );
define( 'TRIANGLE_JS',  get_template_directory_uri() . '/assets/js/' );
define( 'TRIANGLE_DIR', get_template_directory_uri() );

if (site_url() == 'http://localhost:8888/wp') {
    define('TRIANGLE_VERSION', time());
} else {
    define('TRIANGLE_VERSION', wp_get_theme()->get('Version'));
}

if(! function_exists('triangle_setup')) {

    function triangle_setup()
    {

        load_theme_textdomain( 'triangle', TRIANGLE_DIR . '/languages' );

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'triangle_top_menu' => esc_html__('Primary Menu', 'triangle'),
            )
        );

    }
    add_action("after_setup_theme", "triangle_setup");

}

/**
 * Register widgets area
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 */
function triangle_widgets() {
    register_sidebar(
        array(
            'name'          => __('Triangle Sidebar One', 'triangle'),
            'id'            => 'triangle_sidebar_one',
            'description'   => __('Triangle sidebar one', 'triangle'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );
}
add_action('widgets_init', "triangle_widgets");

function triangle_scripts() {
    /*wp_enqueue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $version = false, string $media = 'all' )*/
    // css
    wp_enqueue_style('triangle-bootstrap', TRIANGLE_CSS . 'bootstrap.min.css', array(), TRIANGLE_VERSION, 'all' );
    wp_enqueue_style('themeum-font-awesome', TRIANGLE_CSS . 'font-awesome.min.css', array(), TRIANGLE_VERSION, 'all');
    wp_enqueue_style('themeum-animate', TRIANGLE_CSS . 'animate.min.css', array(), TRIANGLE_VERSION, 'all');
    wp_enqueue_style('themeum-lightbox', TRIANGLE_CSS . 'lightbox.css', array(), TRIANGLE_VERSION, 'all');
    wp_enqueue_style('themeum-style', get_stylesheet_uri(), array(), TRIANGLE_CSS, 'all');
    wp_enqueue_style('themeum-responsive', TRIANGLE_CSS . 'responsive.css', array(), TRIANGLE_VERSION, 'all');

    /*wp_enqueue_script( string $handle, string $src = '', string[] $deps = array(), string|bool|null $version = false, bool $in_footer = false )*/
    // js
    wp_enqueue_script('themeum-jquery', TRIANGLE_JS . 'jquery.js', array(), TRIANGLE_VERSION, true);
    wp_enqueue_script('themeum-bootstrap', TRIANGLE_JS . 'bootstrap.min.js', array(), TRIANGLE_VERSION, true);
    wp_enqueue_script('themeum-lightbox', TRIANGLE_JS . 'lightbox.min.js', array(), TRIANGLE_VERSION, true);
    wp_enqueue_script('themeum-wow', TRIANGLE_JS . 'wow.min.js', array(), TRIANGLE_VERSION, true);
    wp_enqueue_script('themeum-main', TRIANGLE_JS . 'main.js', array(), TRIANGLE_VERSION, true);
}

add_action('wp_enqueue_scripts', 'triangle_scripts');


