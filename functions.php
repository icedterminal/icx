<?php
add_action( 'after_setup_theme', 'icx_setup' );
function icx_setup() {
load_theme_textdomain( 'icx', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'icx' ) ) );
}
add_action( 'wp_enqueue_scripts', 'icx_load_scripts' );
function icx_load_scripts() {
wp_enqueue_style( 'icx-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'icx_footer_scripts' );
function icx_footer_scripts() {
?>
<?php
}
add_filter( 'document_title_separator', 'icx_document_title_separator' );
function icx_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'icx_title' );
function icx_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'icx_read_more_link' );
function icx_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'icx_excerpt_read_more_link' );
function icx_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}

// Image Sizing
add_filter( 'intermediate_image_sizes_advanced', 'icx_image_insert_override' );
function icx_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}

// Sidebar widget
function icx_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'icx' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'widgets_init', 'icx_widgets_init' );

// Full Width Page Widgets ABOVE content
function register_above_widget_area() {
    register_sidebar(
        array(
            'id' => 'above-widget-area',
            'name' => esc_html__( 'Page Widget Above Content', 'icx' ),
            'description' => esc_html__( 'For full width page templates above page content.', 'icx' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>'
        )
    );
}
add_action( 'widgets_init', 'register_above_widget_area' );

// Full Width Page Widgets BELOW content
function register_below_widget_area() {
    register_sidebar(
        array(
            'id' => 'below-widget-area',
            'name' => esc_html__( ' Pages Widget Below Content', 'icx' ),
            'description' => esc_html__( 'For full width page templates below page content.', 'icx' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>'
        )
    );
}
add_action( 'widgets_init', 'register_below_widget_area' );

// Full Width Front Page Widgets
function register_front_widget_area() {
    register_sidebar(
        array(
            'id' => 'front-widget-area',
            'name' => esc_html__( 'Front Page Widget', 'icx' ),
            'description' => esc_html__( 'For full width front page template.', 'icx' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
            'after_title' => '</h3></div>'
        )
    );
}
add_action( 'widgets_init', 'register_front_widget_area' );

// Reset CSS 
add_action( 'wp_head', 'reset_style', 2 );
function reset_style() {
printf( '<link rel="stylesheet" href="%s" />' . "\n", esc_url( get_template_directory_uri( 'url' ) ) . '/css/reset.min.css' );
}
// Google Fonts
add_action( 'wp_head', 'gfonts', 3 );
function gfonts() {
printf( '<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">' . "\n" );
}
// Cascadia Code & Material Icons
add_action( 'wp_head', 'cascode', 4 );
function cascode() {
printf( '<link rel="stylesheet" href="%s" />' . "\n", esc_url( get_template_directory_uri( 'url' ) ) . '/css/fonts.css' );
}
add_action( 'wp_head', 'icx_pingback_header' );
function icx_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'icx_enqueue_comment_reply_script' );
function icx_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function icx_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'icx_comment_count', 0 );
function icx_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

// ************************************************************************************************ my shit is below this.
// Remove all of the emoji
function disable_emoji_feature() {
	
	// Prevent Emoji from loading on the front-end
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove from admin area also
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Remove from RSS feeds also
	remove_filter( 'the_content_feed', 'wp_staticize_emoji');
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji');

	// Remove from Embeds
	remove_filter( 'embed_head', 'print_emoji_detection_script' );

	// Remove from emails
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Disable from TinyMCE editor. Currently disabled in block editor by default
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

	/** Finally, prevent character conversion too
         ** without this, emojis still work 
         ** if it is available on the user's device
	 */

	add_filter( 'option_use_smilies', '__return_false' );

}
function disable_emojis_tinymce( $plugins ) {
	if( is_array($plugins) ) {
		$plugins = array_diff( $plugins, array( 'wpemoji' ) );
	}
	return $plugins;
}
add_action('init', 'disable_emoji_feature');

// remove powered by wp header
remove_action('wp_head', 'wp_generator');

// remove windows live writer
remove_action('wp_head', 'wlwmanifest_link');

// add text to robots.txt
add_filter('robots_txt', 'addToRoboText');

function addToRoboText($robotext) {
    $additions = "
# This file was automatically generated
";
    return $robotext . $additions;
}

// disable json users probing. This shows authors/users.
add_filter( 'rest_endpoints', function( $endpoints ){
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    }
    return $endpoints;
});

// disable json oembed probing. This shows authors/users.
add_filter( 'rest_endpoints', function( $endpoints ){
    if ( isset( $endpoints['/oembed/1.0/embed'] ) ) {
        unset( $endpoints['/oembed/1.0/embed'] );
    }
    if ( isset( $endpoints['/oembed/1.0/embed/(?P<id>[\d]+)'] ) ) {
        unset( $endpoints['/oembed/1.0/embed/(?P<id>[\d]+)'] );
    }
    return $endpoints;
});

// disable rss for now
function itsme_disable_feed() {
 wp_die( __( 'Error. No feed available.' ) );
}
add_action('do_feed', 'itsme_disable_feed', 1);
add_action('do_feed_rdf', 'itsme_disable_feed', 1);
add_action('do_feed_rss', 'itsme_disable_feed', 1);
add_action('do_feed_rss2', 'itsme_disable_feed', 1);
add_action('do_feed_atom', 'itsme_disable_feed', 1);
add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);

// disable wp sitemap for users
add_filter( 'wp_sitemaps_add_provider', function ($provider, $name) {
  return ( $name == 'users' ) ? false : $provider;
}, 10, 2);

// disable injected recent comments widget css
add_filter( 'show_recent_comments_widget_style', '__return_false', 99 );

// if a user doesn't input anything into the search box, instead of outputting all pages and posts, return 404
add_action( 'pre_get_posts', function ( $q )
{
    if(    !is_admin()
        && $q->is_main_query()
        && $q->is_search()
    ) {
        $search_terms = $q->get( 's' );
        if ( !$search_terms ) {
            add_action( 'wp', function () use ( $q )
            {
                $q->set_404();
                status_header(404);
                nocache_headers();
            });
        }
    }
});

// Numeric Pagination
function numeric_pagi_nav() {
 
    if( is_singular() )
        return;
    global $wp_query;
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<nav class="pagi"><ul class="pages">' . "\n";
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="newer">%s</li>' . "\n", get_previous_posts_link( '<span class="material-icons">arrow_back</span> Newer' ) );
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="older">%s</li>' . "\n", get_next_posts_link( 'Older <span class="material-icons">arrow_forward</span>' ) );
    echo '</ul></nav>' . "\n";
}