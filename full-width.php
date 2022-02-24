<?php
/*
 Template Name: Full Width
 */
?>
<?php get_header(); ?>
<main id="content" class="full">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header-full">
<h1 class="entry-title-full"><?php the_title(); ?></h1>
</header>
<div class="entry-content-full">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>

<?php if ( is_active_sidebar( 'above-widget-area' ) ) : ?>
<div id="widget" class="above-widget-area">
<?php dynamic_sidebar( 'above-widget-area' ); ?>
</div>
<?php endif; ?>

<?php the_content(); ?>

<?php if ( is_active_sidebar( 'below-widget-area' ) ) : ?>
<div id="widget" class="below-widget-area">
<?php dynamic_sidebar( 'below-widget-area' ); ?>
</div>
<?php endif; ?>

<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>