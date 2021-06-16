<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( is_sticky() ) : ?>
    <div class="pinned">
        <span class="material-icons pin" title="STICKY!">push_pin</span>
    </div>
    <?php endif; ?>
    <div class="pencil">
        <?php edit_post_link( '<span class="material-icons" title="Edit this post">edit</span>' ); ?>
    </div>
    <?php if ( is_home() || is_archive() || is_search() ) : ?>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="thumb">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="texts<?php if ( is_home() || is_archive() || is_search() ) : ?> listing<?php endif; ?>">
        <header class="title">
            <?php if ( is_singular() ) {
                echo '<h1 class="entry-title">';
            } else {
                echo '<h2 class="entry-title">';
            } ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
            <?php if ( is_singular() ) {
                echo '</h1>';
            } else {
                echo '</h2>';
            } ?>
            <?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?>
        </header>
        <?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
        <?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
    </div>
</article>