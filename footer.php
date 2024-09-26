<footer class="footer bg-gray-800 text-white p-4">
    <div class="container mx-auto">
        <!-- Display Footer Widgets -->
        <div class="footer-widgets">
            <?php if ( is_active_sidebar( 'footer-area' ) ) : ?>
                <?php dynamic_sidebar( 'footer-area' ); ?>
            <?php else : ?>
                <p>No footer widgets added yet. Please add some in Appearance > Widgets.</p>
            <?php endif; ?>
        </div>
    </div>

    <p class="text-center mt-4">&copy; <?php echo date('Y'); ?> BoostPress. All rights reserved.</p>
<?php wp_footer(); ?>
</footer>
