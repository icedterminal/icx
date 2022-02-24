<footer class="entry-end">
    <span class="cat-links">
        <?php esc_html_e( 'Categories: ', 'icx' ); ?><?php the_category( ', ' ); ?>
    </span>
    <br />
    <span class="tag-links">
        <?php the_tags(); ?>
    </span>
</footer> 