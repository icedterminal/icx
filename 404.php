<?php session_start(); ?>
<?php get_header(); ?>
<?php get_sidebar(); ?>
<main id="content">
<article id="post-0" class="post not-found">
<header class="header">
<h1 class="entry-title"><?php esc_html_e( '', 'icx' ); ?></h1>
</header>
<div class="entry-content">
<p><?php esc_html_e( 'Hmmm. Nothing here.', 'icx' ); ?></p>
<p>If you think something should be here you can report this error to the site operater. Be sure to give them this: <code><?php echo( session_id() ); ?></code></p>
</div>
</article>
</main>
<?php get_footer(); ?>