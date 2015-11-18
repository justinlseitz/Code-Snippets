<!-- Display the WordPress Admin Bar in the Admin Area only-->
<? if ( is_admin() ) {
remove_action( 'init', '_wp_admin_bar_init' );
} ?>