</div>
<footer id="page-end">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'icx' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<div class="to-top"><a href="#top">&#xe25a;</a></div>
<?php if ( is_front_page() ) : ?>
<?php endif; ?>
</body>
</html>