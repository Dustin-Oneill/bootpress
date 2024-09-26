<aside class="sidebar p-4 bg-gray-100">
    <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'primary-sidebar' ); ?>
    <?php else : ?>
        <p>No widgets added yet. Please add some in Appearance > Widgets.</p>
    <?php endif; ?>
</aside>
