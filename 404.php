<?php session_start(); ?>
<?php get_header(); ?>
<main id="content" class="full">
    <article id="post-0" class="post not-found">
        <header class="header">
            <h1 class="entry-title"><?php esc_html_e( '', 'icx' ); ?></h1>
        </header>
        <div class="entry-content">
            <p><?php esc_html_e( 'insert random not fodun string here for fun.', 'icx' ); ?></p>
            <p>If you think something should be here you can report this error.</p>
        </div>
    </article>
</main>
<?php get_footer(); ?>