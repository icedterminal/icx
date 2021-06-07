<?php get_header(); ?>
<?php get_sidebar(); ?>
<main id="content">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="entry-title"><?php printf( esc_html__( 'Results for <em>%s</em>', 'icx' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'icx' ); ?></h1>
</header>
<div class="entry-content">
<p><?php esc_html_e( 'Nothing found.', 'icx' ); ?></p>
</div>
</article>
<?php endif; ?>
</main>
<?php get_footer(); ?>