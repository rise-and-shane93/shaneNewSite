<?php
/**
 * Header for the theme
 * This is the template that displays all of the <head> section and everything up.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since Photoway 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<?php if( !photoway_get_option( 'disable_site_loader' )): ?>
		<div id="site-loader">
			<div class="site-loader-inner">
				<?php
					if( photoway_get_option( 'site_loader_options' ) == 'site_loader_one' ){
						$src = get_theme_file_uri( 'assets/images/placeholder/loader1.gif' );
					}
					echo apply_filters( 'photoway_preloader',
					sprintf( '<img src="%s" alt="%s">',
						esc_url( $src ),
						esc_html__( 'Site Loader', 'photoway' )
					)); 
				?>
			</div>
		</div>
	<?php endif; ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php echo esc_html__( 'Skip to content', 'photoway' ); ?>
		</a>

		<?php
			get_template_part( 'template-parts/header/header', 'layout' );
		?>
		<div class="site-main">