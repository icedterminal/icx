<div class="entry-content">
    <?php if ( has_post_thumbnail() ) : ?>
    <!--<a href="<?php //$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); echo esc_url( $src[0] ); ?>" title="<?php the_title_attribute(); ?>">
    <div class="img-feature">
        <div class="cut-out">
            <?php the_post_thumbnail('medium', array('class' => 'medium')); ?>
            <span class="gloss"></span>
        </div>
        <span class="img-caption">
            <?php the_post_thumbnail_caption(); ?>
        </span>
    </div>
    </a>-->
    <?php endif; ?>
    <?php the_content(); ?>
    <div class="entry-links">
        <?php wp_link_pages(); ?>
    </div>
</div>