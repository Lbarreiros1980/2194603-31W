<?php
/**
 * Template name: Evenement
 * @package igc31w - template
 */

get_header();

?>
<h1>single.php</h1>
	<main class="site__main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>
			<h1><?= get_the_title(); ?></h1>
			<?php the_content();		
			endif;	
		?>
	</main><!-- #main -->
<?php
get_footer();
