<?php get_header(); ?>

<div class="container mx-auto p-4">
    <div class="flex flex-col md:flex-row"> <!-- Flexbox layout for content and sidebar -->

        <!-- Blog Posts Area -->
        <main class="content-area md:w-3/4 p-4"> <!-- Main content takes 3/4 width -->
            <h1 class="text-3xl font-bold mb-6">Blog Posts</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article class="post bg-white shadow-md p-4">
                            <h2 class="text-2xl font-bold">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="text-blue-500 hover:text-blue-700">Read More</a>
                        </article>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>No posts found.</p>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <?php echo paginate_links(); ?>
            </div>
        </main>

        <!-- Sidebar -->
        <?php get_sidebar(); ?> <!-- Sidebar included here, takes 1/4 width -->

    </div>
</div>

<?php get_footer(); ?>
