<?php
/**
 * Template for video post type display.
 * @package themify
 * @since 1.0.0
 */
?>
<?php if(!is_singular( 'video' )){ global $more; $more = 0; } //enable more link ?>

<?php
/** Themify Default Variables
 *  @var object */
global $themify; ?>

<?php themify_post_before(); // hook ?>

<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>" <?php post_class('post clearfix video-post'); ?>>

	<?php themify_post_start(); // hook ?>

	<?php if ( ! is_singular( 'video' ) ) : ?>
		<?php get_template_part( 'includes/post-media', get_post_type()); ?>
	<?php endif; ?>

	<div class="post-content">

		<?php if ( ! is_singular( 'video' ) ) : ?>

			<?php if ( $themify->hide_title != 'yes' ): ?>
				<?php themify_before_post_title(); // Hook ?>
				<?php if ( $themify->unlink_title == 'yes' ): ?>
					<h2 class="post-title entry-title" itemprop="name"><?php the_title(); ?></h2>
				<?php else: ?>
					<h2 class="post-title entry-title" itemprop="name">
						<a href="<?php echo themify_get_featured_image_link(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h2>
				<?php endif; //unlink post title ?>
				<?php themify_after_post_title(); // Hook ?>
			<?php endif; //post title ?>

		<?php else : ?>

			<div class="entry-content" itemprop="articleBody">

				<?php if ( 'excerpt' == $themify->display_content && ! is_attachment() ) : ?>

					<?php the_excerpt(); ?>

					<?php if( themify_check('setting-excerpt_more') ) : ?>
						<p><a href="<?php echo themify_get_featured_image_link(); ?>" title="<?php the_title_attribute('echo=0'); ?>" class="more-link"><?php echo themify_check('setting-default_more_text')? themify_get('setting-default_more_text') : __('More &rarr;', 'themify') ?></a></p>
					<?php endif; ?>

				<?php elseif($themify->display_content == 'none'): ?>

				<?php else: ?>

					<?php the_content(themify_check('setting-default_more_text')? themify_get('setting-default_more_text') : __('More &rarr;', 'themify')); ?>

				<?php endif; //display content ?>

			</div><!-- /.entry-content -->

			<?php edit_post_link(__('Edit', 'themify'), '<span class="edit-button">[', ']</span>'); ?>

		<?php endif; // is single ?>

		<?php if ( isset( $themify->is_shortcode ) && $themify->is_shortcode && 'none' != $themify->display_content ) : ?>
			<div class="entry-content" itemprop="articleBody">

				<?php if ( 'excerpt' == $themify->display_content && ! is_attachment() ) : ?>

					<?php the_excerpt(); ?>

					<?php if( themify_check('setting-excerpt_more') ) : ?>
						<p><a href="<?php echo themify_get_featured_image_link(); ?>" title="<?php the_title_attribute('echo=0'); ?>" class="more-link"><?php echo themify_check('setting-default_more_text')? themify_get('setting-default_more_text') : __('More &rarr;', 'themify') ?></a></p>
					<?php endif; ?>

				<?php elseif($themify->display_content == 'none'): ?>

				<?php else: ?>

					<?php the_content(themify_check('setting-default_more_text')? themify_get('setting-default_more_text') : __('More &rarr;', 'themify')); ?>

				<?php endif; //display content ?>

			</div><!-- /.entry-content -->
		<?php endif; ?>

	</div>
	<!-- /.post-content -->
	<?php themify_post_end(); // hook ?>

</article>
<?php themify_post_after(); // hook ?>

<!-- /.post -->