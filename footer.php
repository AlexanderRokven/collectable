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
	</footer><!-- #colophon -->
	</div>

	<div class="colophon">
		
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'collectable' ) ); ?>">
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'collectable' ), 'WordPress' );
			?>
		</a>
		<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'collectable' ), 'collectable', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		
			
	</div>

<?php wp_footer(); ?>

</body>
</html>
