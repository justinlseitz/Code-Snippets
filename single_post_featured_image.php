<div class="entry-content">
    <?php if (get_post_meta($post->ID, 'displayFeatureImage', true) ) { ?>
    <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'medium', array('class' => 'th postFeaturedImage') ); ?>
    <?php endif; ?>
        <?php the_content(); ?>
    <?php } else { ?>
        <?php the_content(); ?>
    <?php } ?>
</div>
