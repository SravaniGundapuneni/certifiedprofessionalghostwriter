<?php
/**
 * Template for fixed audio player.
 * Created by themify
 * @since 1.0.0
 */

$album = get_page_by_path( themify_get( 'setting-audio_player' ), OBJECT, 'album' );
?>
<!--
<div id="footer-player" class="jukebox">
	<div class="footer-player-inner pagewidth clearfix">

		<?php //if( has_post_thumbnail( $album->ID ) ) : ?>
			<?php
//			$album_image = wp_get_attachment_image_src( get_post_thumbnail_id( $album->ID, 'thumbnail' ) );
//			$size = apply_filters( 'themify_theme_audio_player_image_size', array(
//				'w' => 52,
//				'h' => 52,
//			) );
//			$post_image = themify_get_image( 'src=' . $album_image[0] . '&ignore=true&w=' . $size['w'] . '&h=' . $size['h'] ); ?>
			<figure class="post-image clearfix">

				<a href="<?php //echo get_permalink( $album->ID ); ?>"><?php //echo $post_image; ?></a>

			</figure>

		<?php //endif; // if there's a featured image?>

		<div class="tracklist">
			<?php
//			$playlist = '';
//			for ( $track = 1; $track <= apply_filters( 'themify_theme_number_of_tracks', 18 ); $track++ ) {
//				$list = '';
//				if ( $song = get_post_meta( $album->ID, 'track_file_' . $track, true ) ) {
//					$list .= '[themify_trac';
//					if ( $song_title = get_post_meta( $album->ID, 'track_name_' . $track, true ) ) {
//						$list .= ' title="' . $song_title . '"';
//					}
//					$list .= ' src="' . $song . '"]';
//				}
//				if ( '' != $list ) {
//					$playlist .= $list;
//				}
//			}
//			$footer_autoplay = themify_check( 'setting-audio_player_autoplay' ) ? 'preload="auto" autoplay="yes"' : '';
//			echo do_shortcode( '[themify_playlist type="audio" tracklist="no" tracknumbers="no" images="no" artist="no" style="themify" ' . $footer_autoplay . ' ]' . $playlist . '[/themify_playlist]' );
//			?>
		</div>

		<div class="buttons-console-wrap">
			<a href="#" class="button-switch-player"></a>
		</div>

	</div>
</div>-->