<?php
/**
 * The template for displaying the footer
 *
 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */
?>
  <footer class="site-footer">

    <div class="footer__logo">
        <h4>WP 31w cours</h4>
        <?= get_sidebar( 'adress' ); ?>
        <?= get_sidebar( 'logo' ); ?>
    </div>

	 <?= get_sidebar( 'search-bar' ); ?>
		
  </footer><!-- end of .site-footer -->
</div><!-- end of page -->

<?php wp_footer(); ?>

</body>
</html>