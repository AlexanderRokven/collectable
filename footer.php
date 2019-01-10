<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Collectable
 */

?>

	</div><!-- #content -->
</div>
	<div class="social">
		<nav class="social_menu">
			<?php
				wp_nav_menu( array( 
					'theme_location' => 'social_media',
					'menu_id' => 'social_media',
				) );
			?>
			</nav>
	</div> <!-- /social -->
	<footer>
		<div> <!-- Footer Sidebars -->
			<?php
		      	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) :
		      	endif;

			  	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) :
			    endif;

	 			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) :
	      		endif;

	  			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) :
	      		endif;
	      	?>
	    </div> <!-- !Footer Sidebars -->
	</footer>
	</div>

	<div class="colophon">

		<nav class="colophon-menu">
			<?php
				wp_nav_menu( array( 
					'theme_location' => 'colophon_menu',
					'menu_id' => 'colophon_menu',
				) );
			?>
		</nav>

		<div class="copyright">
				<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Website gerealiseerd door %s', 'collectable' ), '<a href="https://alexanderrokven.nl/">Alexander Rokven.</a>' );
				?>
			<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Copyright © %s', 'collectable'), '2019' );
				?>
		</div>
			
	</div>

<?php wp_footer(); ?>

</body>
</html>
