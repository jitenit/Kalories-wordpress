<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kalorie_Jiten
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site"
>	<header id="masthead" class="site-header">
		<!--<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$kalorie_jiten_description = get_bloginfo( 'description', 'display' );
			if ( $kalorie_jiten_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $kalorie_jiten_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>!--><!-- .site-branding -->



    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <!--<a class="p-2 text-dark" href="#">Features</a>!-->
       <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'        => 'p-2 text-dark',

			) );
			?>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>


	</header><!-- #masthead -->

	<div id="content" class="container">
