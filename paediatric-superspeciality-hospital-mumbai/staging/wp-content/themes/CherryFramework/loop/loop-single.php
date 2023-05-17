<?php /* Loop Name: Single */ ?>
<?php if (have_posts()) : while (have_posts()) : the_post();
	// The following determines what the post format is and shows the correct file accordingly
	$format = get_post_format();
	get_template_part( 'includes/post-formats/'.$format );
	if($format == '')
		get_template_part( 'includes/post-formats/standard' );
	get_template_part( 'includes/post-formats/share-buttons' );
	wp_link_pages('before=<div class="pagination">&after=</div>');



?>
<?php /* If a user fills out their bio info, it's included here */ ?>



<!--.post-author-->

<?php
	get_template_part( 'includes/post-formats/related-posts' );
	
	endwhile; endif; 
?>