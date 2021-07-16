<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<style type="text/css">
    #container, #particles-js {animation:fadein .6s;-moz-animation:fadein .6s;-webkit-animation:fadein .6s;-o-animation:fadein .6s}
    @keyframes fadein{from{opacity:0}to{opacity:1}}
    @-moz-keyframes fadein{from{opacity:0}to{opacity:1}}
    @-webkit-keyframes fadein{from{opacity:0}to{opacity:1}}
    @-o-keyframes fadein{from{opacity:0}to{opacity:1}}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( is_front_page() ) : ?>
<div id="particles-js"></div>
<?php endif; ?>
    <div id="wrapper" class="hfeed">
        <header id="top" class="clean"><!--
            <div id="brand">
                <div id="site-title">
                    <?php if ( ! is_front_page() ) : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                        
                    </a>
                    <?php endif; ?>
                </div>
            </div>-->
            <div class="sub-grid">
                <nav class="menu">
                    <input type="checkbox" /><span></span><span></span><span></span>
                    <?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    <?php wp_nav_menu( array( 'name' => 'main-menu', 'container' => 'ul', 'menu_class' => 'links' ) ); ?>
                </nav><?php if ( is_home() || is_archive() || is_search() || is_singular('post') ) : ?>
                <div id="search">
                    <form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
                        <div class="material_input">
                            <input type="text" id="search-field" class="search-field" placeholder="search" name="s">
                            <label for="search-field">Search</label>
                        </div>
                        <!--<button type="submit" class="search-submit mat-btn-outline"><span>Search</span></button>-->
                    </form>
                </div><?php endif; ?>
            </div>
        </header>
        <div id="container" <?php if ( is_front_page() ) : ?>class="cover"<?php endif; ?>>