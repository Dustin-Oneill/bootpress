<?php
// Enqueue styles and scripts
if (!function_exists('boostpress_enqueue_styles')) {
    function boostpress_enqueue_styles() {
        wp_enqueue_style('main-styles', get_template_directory_uri() . '/dist/main.css', array(), filemtime(get_template_directory() . '/dist/main.css'));
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/dist/style.css', array(), filemtime(get_template_directory() . '/dist/style.css'));
    }
    add_action('wp_enqueue_scripts', 'boostpress_enqueue_styles');
}

// Register the main navigation menu
if (!function_exists('boostpress_register_menus')) {
    function boostpress_register_menus() {
        register_nav_menu('primary', __( 'Primary Menu', 'boostpress-theme' ));
    }
    add_action('init', 'boostpress_register_menus');
}

// Register widget areas
function boostpress_widgets_init() {
    register_sidebar( array(
        'name'          => 'Primary Sidebar',
        'id'            => 'primary-sidebar',
        'description'   => 'Main sidebar that appears on the right.',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar( array(
        'name'          => 'Footer Area',
        'id'            => 'footer-area',
        'description'   => 'Widget area in the footer',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action( 'widgets_init', 'boostpress_widgets_init' );

// Theme setup for core functionality
function boostpress_theme_setup() {
    // Add support for dynamic title tag
    add_theme_support('title-tag');
    
    // Add support for post thumbnails (featured images)
    add_theme_support('post-thumbnails');

    // Add custom logo support
    add_theme_support('custom-logo');

    // Add HTML5 support for forms and media
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'boostpress_theme_setup');

// Handle contact form submission (optional redirection to thank-you page)
function boostpress_handle_contact_form() {
    if ( isset($_POST['name'], $_POST['email'], $_POST['message']) ) {
        // Sanitize form data
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Send email (adjust as needed)
        $to = get_option('admin_email');
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\nMessage: $message";
        $headers = array('Content-Type: text/html; charset=UTF-8');

        wp_mail($to, $subject, $body, $headers);
        
        // Redirect to a thank-you page
        wp_redirect(home_url('/thank-you'));
        exit;
    }
}
add_action('admin_post_nopriv_submit_contact_form', 'boostpress_handle_contact_form');
add_action('admin_post_submit_contact_form', 'boostpress_handle_contact_form');
