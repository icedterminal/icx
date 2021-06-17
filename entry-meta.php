<div class="entry-meta">
    <span class="material-icons">date_range</span>
    <span class="entry-date">
        <?php the_time( get_option( 'date_format' ) ); ?>
    </span>
    &nbsp;
    <span class="material-icons">comment</span>
    <?php if ( comments_open() )
        { 
            echo '<span class="comments-link"><a href="' . esc_url( get_comments_link() ) . '">' . get_comments_number($post->ID) . ' ' . sprintf( esc_html__( 'Comments', 'icx' ) ) . '</a></span>';
        }
    ?>
</div>