<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sport
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/smy7xiw.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sport' ); ?></a>

	<header id="masthead" class="site-header has-white-background-color">
		<!-- Top nav -->
		<div class="top-nav has-secondary-background-color has-white-color has-small-font-size">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="top-nav-left">
							<a href="#">
								<i class="fa fa-envelope-o"></i> info@sportgear.com
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-center">
						<div class="top-nav-center">Free Shipping on All orders Over $50!</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="top-nav-right">
							<ul class="top-nav-menu">
								<li class="account">
									<a href="#">
									My Account <i class="fa fa-angle-down"></i>
									</a>
									<ul class="account-selection has-white-background-color">
										<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') );?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') );?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>	
			</div>	
		</div>
		<!-- main navigation -->
		<div class="main-nav">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( is_front_page() && is_home() ) :
								?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<?php
							else :
								?>
								
								<?php
							endif;
							$sport_description = get_bloginfo( 'description', 'display' );
							if ( $sport_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $sport_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
							<?php endif; ?>
						</div><!-- .site-branding -->
					</div>
					<div class="col-md-6 col-sm-6 mb-navigation">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle primary-btn has-primary-background-color has-grayish-black-color"><i class="fa fa-bars" aria-hidden="true"></i><?php esc_html_e( 'Menu', 'sport' ); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-primary',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="col-md-3 col-sm-6 mb-search">
					<ul class="navbar-user">
						<li>
							<?php get_search_form(); ?>
						</li>
						<li>
							<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') );?>">
								<i class="fa fa-user" aria-hidden="true"></i>
							</a>
						</li>
						<li class="cart">
							<a class="cart-container" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								<span id="cart-items" class="cart-items"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> </span>
							</a>
						</li>
					</ul>
					</div>			
				</div>
			</div>			
		</div>
	</header><!-- #masthead -->
	
