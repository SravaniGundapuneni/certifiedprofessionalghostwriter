<?php
/**
 * Template to display social share buttons.
 * @since 1.0.0
 */

if ( ( is_singular() && ! themify_check( 'setting-social_share_single_disabled' ) ) || ( ! is_singular() && ! themify_check( 'setting-social_share_archive_disabled' ) ) ) :

// Set up image to be shared
$share_image = '';
if ( has_post_thumbnail() ) {
	$get_social_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
	$share_image = $get_social_image[0];
} elseif ( themify_check('post_image') ) {
	$share_image = themify_get('post_image');
}

// Set up link to be shared
if ( is_multisite() ) {
	if ( ! ( $share_link = get_post_meta( get_the_ID(), 'permalink', true ) ) ) {
		$share_link = get_permalink();
	}
} else {
	$share_link = get_permalink();
}
?>

<div class="post-share msss<?php the_ID(); ?>"
	 data-url="<?php echo $share_link; ?>"
	 data-media="<?php echo $share_image; ?>"
	 data-text="<?php the_title_attribute(); ?>"
	 data-description="<?php the_title_attribute(); ?>">
</div>
<!-- .post-share -->

<?php endif; // archive or single and not disabled ?>