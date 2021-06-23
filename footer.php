</div>
<footer id="page-end">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'icx' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<div id="to-top" class="to-top"><a href="#">&#xe25a;</a></div>
<script>
window.onscroll = function () {
    if (pageYOffset >= 36) {
        document.getElementById('to-top').style.visibility = "visible";
    } else {
        document.getElementById('to-top').style.visibility = "hidden";
    }
};
</script>
<?php if ( is_front_page() ) : ?>
<script>
jQuery(window).on("scroll", function($) {
    if (pageYOffset >= 36) {
        jQuery(".clean").addClass("scrolled");
        document.getElementById('scroll-down').style.visibility = "hidden";
    } else {
        jQuery(".clean").removeClass("scrolled");
        document.getElementById('scroll-down').style.visibility = "visible";
    }
});
</script>
<?php endif; ?>
</body>
</html>