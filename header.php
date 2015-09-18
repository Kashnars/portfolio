<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AccesspressLite
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.min.js"></script>
<![endif]-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
global $accesspresslite_options;
$accesspresslite_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
?>
<div id="page" class="site">

	<header id="masthead" class="site-header">
    <div id="top-header">
		<div class="ak-container">
			<div class="site-branding">
                <div id='logo-container'>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( get_header_image() ) { ?>
                        <img id="logo-a" src="<?php header_image(); ?>" alt="<?php bloginfo('name') ?>">
                    <?php }else{ ?>
                        <h1 class="site-title"><?php echo bloginfo('title'); ?></h1>
                        <div class="tagline site-description"><?php echo bloginfo('description'); ?></div>
                    <?php } ?>
                    <h1>Vincent</br>Blancheton</h1>
                    </a>
                    <div class="cb"></div>
                </div>

			</div><!-- .site-branding -->

		</div><!-- .ak-container -->
  </div><!-- #top-header -->


		<nav id="site-navigation" class="main-navigation <?php do_action( 'accesspresslite_menu_alignment' ); ?>">
			<div class="ak-container">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'accesspresslite' ); ?></h1>

				<?php wp_nav_menu( array(
				'theme_location' => 'primary' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


	<?php
	if((is_home() || is_front_page()) && 'page' == get_option( 'show_on_front' )){
		$accesspresslite_content_id = "content";
	}elseif(is_home() || is_front_page() ){
	$accesspresslite_content_id = "home-content";
	}else{
	$accesspresslite_content_id = "content";
	} ?>
	<div id="<?php echo esc_attr($accesspresslite_content_id); ?>" class="site-content">
