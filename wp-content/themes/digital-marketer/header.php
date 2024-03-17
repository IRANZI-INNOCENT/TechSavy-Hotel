<?php
/**
 * The header for our theme
 *
 * @package Digital Marketer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'digital-marketer' ); ?></a>

	<header id="masthead" class="site-header">

		<?php 
		$top_header = absint(get_theme_mod('digital_marketer_enable_top_header', 1));

		$has_header_image = has_header_image();

		if($top_header == 1){ 
			?>
			<div class="top-header-wrap">
				<div class="container">
					<div class="flex-row">
						<div class="top-header-left">
							<?php $digital_marketer_description = get_bloginfo( 'description', 'display' );
								if ( $digital_marketer_description || is_customize_preview() ) :
								?>
								<?php if( get_theme_mod('digital_marketer_site_tagline_text',false)){ ?>
									<p class="site-description"><?php echo $digital_marketer_description; ?></p>
								<?php } ?>
							<?php endif; ?>
						</div>
						<div class="top-header-right">
							<?php if ( get_theme_mod('digital_marketer_header_link1_option') || get_theme_mod('digital_marketer_header_text1_option') ) : ?><a href="<?php echo esc_url(get_theme_mod('digital_marketer_header_link1_option', '')); ?>"><?php echo esc_html(get_theme_mod('digital_marketer_header_text1_option', '')); ?></a><?php endif; ?>
							<?php if ( get_theme_mod('digital_marketer_header_link2_option') || get_theme_mod('digital_marketer_header_text2_option') ) : ?><a href="<?php echo esc_url(get_theme_mod('digital_marketer_header_link2_option', '')); ?>"><?php echo esc_html(get_theme_mod('digital_marketer_header_text2_option', '')); ?></a><?php endif; ?>
							<?php if ( get_theme_mod('digital_marketer_header_link3_option') || get_theme_mod('digital_marketer_header_text3_option') ) : ?><a href="<?php echo esc_url(get_theme_mod('digital_marketer_header_link3_option', '')); ?>"><?php echo esc_html(get_theme_mod('digital_marketer_header_text3_option', '')); ?></a><?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<div class="main-header-wrap">
			<div class="top-box" <?php if (!empty($has_header_image)) { ?> style="background-image: url(<?php echo header_image(); ?>);" <?php } ?>>
				<div class="header-wrap">
					<div class="container">
						<div class="flex-row">
							<div class="main-header main-header-box">
								<div class="site-branding">
									<?php
									the_custom_logo();
									if ( is_front_page() && is_home() ) :
										?>
										<?php if( get_theme_mod('digital_marketer_site_title_text',true)){ ?>
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										<?php } ?>
										<?php
									else :
										?>
										<?php if( get_theme_mod('digital_marketer_site_title_text',true)){ ?>
											<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
										<?php } ?>
										<?php
									endif; ?>
								</div>
							</div>
							<div class="nav-box-header-left box-header-info">
								<?php if ( get_theme_mod('digital_marketer_location_text_option') ) : ?><span><i class="fas fa-map-marker-alt"></i><?php echo esc_html(get_theme_mod('digital_marketer_location_text_option', '')); ?></span>|<?php endif; ?>
								<?php if ( get_theme_mod('digital_marketer_phone_text_option') ) : ?><span><i class="fas fa-phone"></i><?php echo esc_html(get_theme_mod('digital_marketer_phone_text_option', '')); ?></span>|<?php endif; ?>
								<?php if ( get_theme_mod('digital_marketer_email_text_option') ) : ?><span><i class="fas fa-envelope"></i><?php echo esc_html(get_theme_mod('digital_marketer_email_text_option', '')); ?></span><?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="flex-row">
					<div class="nav-box-header-left nav-box-wrap">
						<div class="section-nav main-header-box">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
								?>
							</nav>
						</div>
					</div>
					<div class="nav-box-header-right">
						<?php if ( get_theme_mod('digital_marketer_quote_link_option') ) : ?><a href="<?php echo esc_url( get_theme_mod('digital_marketer_quote_link_option','') ); ?>"><?php esc_html_e('REQUEST A QUOTE','digital-marketer'); ?></a><?php endif; ?>
					</div>
				</div>
			</div>

		</div>
	</header>