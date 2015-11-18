<?php
global $post;
$args = array( 'posts_per_page' => 3,
'post_type' => 'testimonial',
'order'=>'ASC' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :    setup_postdata($post); ?>

<p class="blog-ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<p class="blog-date"><?php echo get_the_date(); ?></p>

<?php endforeach; ?>
