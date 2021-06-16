<div class="entry-summary">
    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>
    <div class="meta-home">
        <span class="cat-links">
            <?php esc_html_e( 'Categories: ', 'icx' ); ?><?php the_category( ', ' ); ?>
        </span>
        <br />
        <span class="tag-links">
            <?php the_tags(); ?>
        </span>
    </div>
    <?php if ( is_search() ) { ?>
        <div class="entry-links">
            <?php wp_link_pages(); ?>
        </div>
    <?php } ?>
</div>