<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php if ( is_single() || is_page() ) : ?>
        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="<?php the_title(); ?>" />
        <meta property="og:description" content="<?php the_excerpt(); ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?php the_permalink(); ?>" />
        <meta property="og:image" content="<?php echo ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'path/to/default-image.jpg'; ?>" />

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="<?php the_title(); ?>">
        <meta name="twitter:description" content="<?php the_excerpt(); ?>">
        <meta name="twitter:image" content="<?php echo ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'path/to/default-image.jpg'; ?>">
    <?php endif; ?>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto max-w-screen-xl flex flex-col md:flex-row justify-between items-center">
        <!-- Site Title / Logo -->
        <a href="<?php echo home_url(); ?>" class="text-lg font-bold">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <?php bloginfo( 'name' ); ?>
            <?php endif; ?>
        </a>

        <!-- Dynamic WordPress Menu -->
        <nav aria-label="Main Menu">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',      // The location registered in functions.php
                'container'      => 'ul',           // Wrap the menu items in a <ul> tag
                'menu_class'     => 'flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4',  // Tailwind classes for layout and spacing
                'fallback_cb'    => 'wp_page_menu', // Fallback to default pages if no menu is set
            ) );
            ?>
        </nav>
    </div>
</header>




