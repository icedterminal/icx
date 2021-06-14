<div class="entry-summary">
    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>
    <?php if ( is_search() ) { ?>
        <div class="entry-links">
            <?php wp_link_pages(); ?>
        </div>
    <?php } ?>
</div>