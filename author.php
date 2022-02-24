<?php
// Redirect author pages to the homepage with WordPress safe redirect
wp_safe_redirect( get_home_url(), 301 );
exit;
?>