<aside id="sidebar">
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<div id="branding-small">
<div id="site-title-small">
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
</div>
<div id="site-description-small"><?php bloginfo( 'description' ); ?></div>
</div>
<div id="search">
    <form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
        <div class="material_input">
            <input type="text" id="search-field" class="search-field" placeholder="search" name="s">
            <label for="search-field">Search</label>
        </div>
        <button type="submit" class="search-submit mat-btn-outline"><span>Search</span></button>
    </form>
</div>
<ul class="items">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>