<?php
/*
Template Name: Services
*/
get_header(); ?>

<div class="services-page">
    <h1 class="text-3xl font-bold">Our Services</h1>
    <div class="services-list">
        <?php
        // Query all pages that are children of "Services"
        $services = new WP_Query(array(
            'post_type' => 'page',
            'post_parent' => get_the_ID(),
            'order' => 'ASC'
        ));
        if ($services->have_posts()) :
            while ($services->have_posts()) : $services->the_post(); ?>
                <div class="service-item">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>
