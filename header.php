<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Collectable
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="<?php echo get_template_directory_uri(); ?>/library/font-awesome/css/all.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

		<div class="logo" >
			<?php
				the_custom_logo();
			?>
		</div>
			
		<?php
			if ( !is_front_page() && !is_home() ) :
		?>	
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			
		<?php
						
			$collectable_description = get_bloginfo( 'description', 'display' );
			if ( $collectable_description || is_customize_preview() ) :
		?>
			<p class="site-description"><?php echo $collectable_description; /* WPCS: xss ok. */ ?></p>
		<?php 
			endif; 
			endif;
		?>

		<div class="search-form">
			<?php 
				get_search_form(); 
			?>
		</div>

		<div class="localisation-menu">
			<?php
				wp_nav_menu( array( 
					'theme_location' => 'localisation_menu',
					'menu_id' => 'localisation_menu',
				) );
			?>
		</div>
	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary_menu',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav><!-- #site-navigation -->
	

	<div id="content" class="site-content">
