<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>
	<footer  class="site-footer" >
	
		<div class="footer__logo">
			<?= get_sidebar(  'logo' ); ?>
		</div>

		<?= get_sidebar( 'recherche' ); ?>

		
    </footer><!-- end of .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>