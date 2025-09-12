<?php
// Define a constant to indicate whether it's a development environment
define('DEV_ENVIRONMENT', true);

// Function to include Livereload script in the functions.php
function liveReload() {
    if (defined('DEV_ENVIRONMENT') && DEV_ENVIRONMENT) {
        echo '<script src="http://' . $_SERVER['HTTP_HOST'] . ':35729/livereload.js?snipver=1"></script>';
    }
}

// Hook the function to the wp_footer action with priority 100
add_action('wp_footer', 'liveReload', 100);



/* Styles */

function enqueue_styles() {
    wp_enqueue_style('styles.css', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

?>

<?php
/* Add WooCommerce Support */

function adv_theme_add_woocommerce_support(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'adv_theme_add_woocommerce_support');

// Remove default block library theme styles 

function adv_theme_remove_block_styles() {
    wp_dequeue_style( 'wp-block-library' ); // WordPress core
    wp_dequeue_style( 'wp-block-library-theme' ); // Theme additions
    wp_dequeue_style( 'global-styles' ); // For FSE themes, often safe to remove
}
add_action( 'wp_enqueue_scripts', 'adv_theme_remove_block_styles', 100 );