<!-- Hide Menu Items for Admin Bar - add page ids to the exclude list-->
<? function my_banned_pages( $exclude_array ) {
return array_merge( $exclude_array, array( 4, 17 ) );
}
add_filter( 'wp_list_pages_excludes', 'my_banned_pages' );
?>
