<?php
/**
 * 
 * @package Carrousel
 * @author  Lidia Barreiros
 * @copyright: Lidia Barreiros
 * @license GPL-2.0-or-later
 * @version 1.0.0
*/
/*
Plugin Name: lb_carrousel
Description: Permet d'afficher une boite modale de l'image selectionnee d'une gallerie. Pour ensuite acceder a toutes les images de la galerie. 
Author: Lidia Barreiros
Author URI: https://github.com/Lbarreiros1980
*/

 


function genere_html(){
    /////////////////////////////////////// HTML
    // Le conteneur d'une boîte
    $contenu = 
    
    "<div class='boite'>"
    . "<code>----------Auteur: " . get_the_author() . "</code>"
    . "<date>----------Date de publication: " . get_the_date() . "</date>"
    . "<code>----------Adresse URL" . get_the_guid() . "</code>"
    . '</div> <!-- fin class="boite" -->';
    
    return $contenu;
   }
   add_shortcode('lb_carrousel', 'genere_html');