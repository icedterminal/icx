<div class="entry-summary">

<?php if ( has_post_thumbnail() ) : ?>
<div class="thumb">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
</div>
<?php endif; ?>

<div class="excerpt">
<?php the_excerpt(); ?>
</div>
<?php if ( is_search() ) { ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
<?php } ?>
</div>