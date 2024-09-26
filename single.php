<?php get_header(); ?>

<div class="container mx-auto p-4">
    <div class="flex flex-col md:flex-row">
        
        <!-- Main Content Area -->
        <main class="content-area md:w-3/4 p-4">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
                    <div class="post-meta text-gray-500 mb-4">
                        Published on <?php echo get_the_date(); ?> by <?php the_author(); ?>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>

                <!-- Display Comments -->
                <?php
                if ( comments_open() || get_comments_number() ) {
                    comments_template(); // This calls the comments.php file
                }
                ?>

            <?php endwhile; endif; ?>
        </main>

        <!-- Sidebar -->
        <?php get_sidebar(); ?>
        
    </div>
</div>

<?php get_footer(); ?>
