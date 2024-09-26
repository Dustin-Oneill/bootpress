<?php get_header(); ?>

<div class="container mx-auto p-4 text-center"> <!-- Added text-center for global centering -->
    <main class="content-area">
        <!-- Blog Posts or Static Page Content -->
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                echo '<div class="page-content">';
                the_content(); // Displays the content of the page/post
                echo '</div>';
            }
        } else {
            echo '<p>No content found.</p>';
        }
        ?>
    </main>

    <!-- Sidebar -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
