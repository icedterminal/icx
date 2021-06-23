</div>
<footer id="page-end">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'icx' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<div id="to-top" class="to-top"><a href="#top">&#xe25a;</a></div>
<script>
window.onscroll = function () {
    if (pageYOffset >= 500) {
        document.getElementById('to-top').style.visibility = "visible";
    } else {
 document.getElementById('to-top').style.visibility = "hidden";
    }
};
</script>
</body>
</html>