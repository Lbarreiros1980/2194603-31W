<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package igc31w
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'igc31w' ); ?></a>
 
	<header id="masthead" class="site__header">
	<?php 
		the_custom_logo();
		wp_nav_menu(array(
			"menu" => "primaire",
			"container"=> "nav",
			"container_class"=> "menu__primaire",
		))

	?>
	
		<div class="site__branding">
			<?php
		
			if ( is_front_page() && is_home() ) :
				 //get_template_part( 'template-parts/header__section', "" );
				?>
				<div class="site__title"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1></div>
				<?php
			else :
				?>
				<p class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$igc31w_description = get_bloginfo( 'description', 'display' );
			if ( $igc31w_description || is_customize_preview() ) :
				?>
				<p class="site__description"><?php echo $igc31w_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- site-branding -->
	</header><!-- #masthead -->

	<aside class="site__menu">
		<div class="site__menu__header">
			<input type="checkbox" id="chkBurger" class="chkBurger">
			<label for="chkBurger" class="burger">
				<code>&#10148;</code>
			</label>
			<h2>Cours</h2>
		</div>
	<?php 
		wp_nav_menu(array(
			"menu" => "aside",
			"container"=> "nav",
			"container_class"=> "menu__aside",
		));
	?>
	</aside> <!-- site__menu -->

	<aside class="site__sidebar">
			<h6>Calendrier</h6>
			<?= get_sidebar( 'calendar' ); ?>
			<?= get_sidebar( 'image' ); ?>
			<?= get_sidebar( 'video' ); ?>
            <?= get_sidebar( 'social-icons' ); ?>

	</aside> <!-- site__sidebar -->