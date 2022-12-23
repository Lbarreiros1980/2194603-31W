<?php
$titre = get_the_title(); 
the_post_thumbnail( 'thumbnail' );
$code_cours = substr($titre,0,7);
$heure_cours = substr($titre,strrpos($titre,'('));
$titre = substr($titre,8);
$titre = substr($titre, 0, strrpos($titre,'('));
$le_permalien = "<a href='" . get_the_permalink() . "'>Suite</a>";
?>
<article class="grille__article">
    <h2><?= the_field("titre"); ?></h2>
    
        <div class="">
            <small><?= the_field("sigle_du_cours"); ?></small>
            <small><?= the_field("duree_du_cours"); ?> </small>
        </div>

    <p><?= wp_trim_words(get_the_excerpt(), 20, "...") ; ?></p>
    <a href="<?= get_the_permalink(); ?>"> En savoir + </a>
    
</article>