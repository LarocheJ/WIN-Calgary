<?php 

include('custom-shortcodes.php');

//Get stylesheets
function load_stylesheets(){

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');

    if(is_front_page()){
        wp_enqueue_style('front-page', get_template_directory_uri().'/assets/css/front-page.css');
    }

    if(is_page('give')){
        wp_enqueue_style('give', get_template_directory_uri().'/assets/css/give.css');
    }

    if(is_page('contact')){
        wp_enqueue_style('contact', get_template_directory_uri().'/assets/css/contact.css');
    }

    if(is_page('small-group')){
        wp_enqueue_style('small-group', get_template_directory_uri().'/assets/css/small-group.css');
    }

    if(is_page('meet-our-team')){
        wp_enqueue_style('team', get_template_directory_uri().'/assets/css/team.css');
    }

    if(is_page('values-beliefs')){
        wp_enqueue_style('values-beliefs', get_template_directory_uri().'/assets/css/values-beliefs.css');
    }

    if(is_page('young-people')){
        wp_enqueue_style('young-people', get_template_directory_uri().'/assets/css/young-people.css');
    }
    
    if(is_page('kids')){
        wp_enqueue_style('kids', get_template_directory_uri().'/assets/css/kids.css');
    }

    if(is_page('prayer-music')){
        wp_enqueue_style('prayer-music', get_template_directory_uri().'/assets/css/prayer-music.css');
    }
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

//Get JavaScript (with WP jQuery)
wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), null, true);

//Get Google font
function add_google_font(){
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,400i,700&display=swap');
}
add_action('wp_enqueue_scripts', 'add_google_font');

//Get FontAwesome
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}

// Get AOS Scroll library
add_action( 'wp_enqueue_scripts', 'enqueue_load_aos' );
function enqueue_load_aos() {
    wp_enqueue_style( 'load-aos', 'https://unpkg.com/aos@next/dist/aos.css' );
}

//Get ScrollOut Library - https://scroll-out.github.io/
wp_register_script('scrollOut', 'https://unpkg.com/scroll-out/dist/scroll-out.min.js', null, null, true);
wp_enqueue_script('scrollOut');

//Register menu locations
register_nav_menus(
    array(
        'main-menu' => __('Main menu', 'theme'),
        'footer-menu' => __('Footer menu', 'theme')
    )
);

//Add functionality
// Menus
add_theme_support('menus');

//Custom logo
function custom_logo() {
    $defaults = array(
    'height'      => 90,
    'width'       => 90,
    'flex-height' => true,
    'flex-width'  => true,
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'custom_logo' );

//Featured Images
add_theme_support('post-thumbnails');

//Add image sizes
add_image_size('small', 300, 300, true);
add_image_size('large', 800, 800, true);

?>