<?php
/**
 * Template for site header
 * @package themify
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php echo themify_get_html_schema(); ?> <?php language_attributes(); ?>>
<head>
<?php
/** Themify Default Variables
 *  @var object */
	global $themify; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<title itemprop="name"><?php wp_title(); ?></title>

<?php
/**
 *  Stylesheets and Javascript files are enqueued in theme-functions.php
 */
?>

<!-- wp_header -->
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php themify_body_start(); // hook ?>
<div id="pagewrap" class="hfeed site">

	<div id="headerwrap" <?php echo themify_theme_maybe_do_animated_bg(); ?>>
    
		<?php themify_header_before(); // hook ?>

		<header id="header" class="pagewidth clearfix">

			<?php themify_header_start(); // hook ?>

			<?php echo themify_logo_image( 'site_logo' ); ?>

			<?php if ( $site_desc = get_bloginfo( 'description' ) ) : ?>
				<?php global $themify_customizer; ?>
				<div id="site-description" class="site-description"><?php echo class_exists( 'Themify_Customizer' ) ? $themify_customizer->site_description( $site_desc ) : $site_desc; ?></div>
			<?php endif; ?>

			<a id="menu-icon" href="#"></a>

			<div id="mobile-menu" class="sidemenu sidemenu-off">

				<?php if ( ! themify_check( 'setting-exclude_search_form' ) ) : ?>
					<div id="searchform-wrap">
						<?php get_search_form(); ?>
					</div>
					<!-- /#searchform-wrap -->
				<?php endif; ?>

				<div class="social-widget">
					<?php dynamic_sidebar('social-widget'); ?>

					<?php if ( ! themify_check('setting-exclude_rss' ) ) : ?>
						<div class="rss"><a href="<?php themify_theme_feed_link(); ?>" class="hs-rss-link"></a></div>
					<?php endif; ?>
				</div>
				<!-- /.social-widget -->

				<nav id="main-nav-wrap" class="clearfix">
					<?php themify_theme_menu_nav(); ?>
					<!-- /#main-nav -->
				</nav>

				<a id="menu-icon-close" href="#sidr"></a>

			</div>
			<!-- /#mobile-menu -->

			<?php themify_header_end(); // hook ?>

		</header>
		<!-- /#header -->

        <?php themify_header_after(); // hook ?>
				
	</div>
	<!-- /#headerwrap -->
	
	<div id="body" class="clearfix">
    <?php themify_layout_before(); //hook ?>