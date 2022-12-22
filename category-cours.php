<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igc31w
 */

get_header();

?>
<code>category-cours.php</code>
	<main class="site__main">

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				
				<article >

					<h3> <?= the_field( $titre ); ?>< /h3>

					<div class="">
						<span>Cours : <?= the_field($code_cours); ?></span>
						<span>Date : <?= the_field( $date_cours ) ?>h</span>
						<span>Heure : <?= the_field( $heure_cours ) ?>h</span>
					</div>

					<p><?= wp_trim_words( get_the_excerpt(), 35, " ..." ); ?></p>
					<a href="<?= get_the_permalink() ?>">En savoir + </a>


					</article>

					<?php
					endif;
	
				endwhile;
	
			endif;
			?>
	
			</section><!-- /liste -->
	
		</main><!-- /site__main -->
	
	<?php
	get_footer();
