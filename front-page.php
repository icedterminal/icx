<?php get_header(); ?>
<main id="content" class="full">
    <article id="landing">
        <div class="logo">
        </div>
        <div class="entry-content-full">
            <?php //the_content(); ?>
            <?php if ( is_active_sidebar( 'front-widget-area' ) ) : ?>
                    <div id="widget" class="front-widget-area">
                        <?php dynamic_sidebar( 'front-widget-area' ); ?>
                    </div>
            <?php endif; ?>
        </div>
    </article>
</main>
<?php get_footer(); ?>