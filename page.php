<?php get_header(); ?>

<div class="container mx-auto p-4">
    <div class="flex flex-col md:flex-row"> <!-- Flexbox layout for content and sidebar -->
        
        <!-- Main Content Area -->
        <main class="content-area md:w-3/4 p-4"> <!-- Restrict the content width to 3/4 -->
            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    the_content();
                }
            } else {
                echo '<p>No content found.</p>';
            }
            ?>
        </main>
        
        <!-- Sidebar -->
        <?php get_sidebar(); ?> <!-- Sidebar restricted to 1/4 width -->

    </div>
</div>

<?php get_footer(); ?>
