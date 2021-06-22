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
<div id="particles-js"></div>
    <div id="wrapper" class="hfeed">
        <header id="top">
            <div id="branding">
                <div id="site-title">
                    <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
                        <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
                    </a>
                    <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
                </div>
            </div>
            <div class="sub-grid">
                <nav class="menu">
                    <?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                    <?php wp_nav_menu( array( 'name' => 'main-menu', 'container' => 'ul', 'menu_class' => 'links' ) ); ?>
                </nav>
                <div id="search">
                    <form role="search" method="get" class="search-form" action="<?php echo get_site_url(); ?>">
                        <div class="material_input">
                            <input type="text" id="search-field" class="search-field" placeholder="search" name="s">
                            <label for="search-field">Search</label>
                        </div>
                        <button type="submit" class="search-submit mat-btn-outline"><span>Search</span></button>
                    </form>
                </div>
            </div>
        </header>
        <div id="container" <?php if ( is_front_page() ) : ?>class="cover"<?php endif; ?>>