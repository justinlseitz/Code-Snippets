<!-- Enable the WordPress Admin Bar for admins only-->
<? if ( ! current_user_can('manage_options') ) {
add_filter( 'show_admin_bar', '__return_false' );
}
?>