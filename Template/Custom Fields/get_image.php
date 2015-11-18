<!--   -->
<?php
$image_id = get_field('service_call_out_image_1', 'option');
$image_size = 'full';
$image_array = wp_get_attachment_image_src($image_id, $image_size);
$image_url = $image_array[0];
?>
<img src="<?php echo $image_url; ?>" alt="">
