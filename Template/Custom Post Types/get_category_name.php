<!--   -->
<?php
$terms = get_field('taxonomy_field_name');
if( $terms ￼ ?>
<ul>
<?php foreach( $terms as $term ￼ ?>
<h2><?php echo $term->name; ?></h2
<p><?php echo $term->description; ?></p>
<a href="<?php echo get_term_link( $term ); ?>">View all '<?php echo $term->name; ?>' posts</a>
<?php endforeach; ?>
</ul>
<?php endif; ?>