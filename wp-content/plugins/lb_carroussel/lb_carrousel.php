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

// filemtime() // retourne en milliseconde le temps de la dernière sauvegarde
// plugin_dir_path() // retourne le chemin du répertoire du plugin
// __FILE__ // le fichier en train de s'exécuter
// wp_enqueue_style() // Intègre le link:css dans la page
// wp_enqueue_script() // intègre le script dans la page
// wp_enqueue_scripts // le hoo
//



function em_enqueue()
{
    $version_css = filemtime(plugin_dir_path(__FILE__) . "style.css");
    $version_js =  filemtime(plugin_dir_path(__FILE__) . "js/carrousel.js");

wp_enqueue_style('em_carrousel_css',
                plugin_dir_url(__FILE__) . "style.css",
                array(),
                $version_css,
                false);


wp_enqueue_script('em_carrousel_js',
                plugin_dir_url(__FILE__) . "js/carrousel.js",
                array(),
                $version_js,
                true);                
}

add_action("wp_enqueue_scripts","em_enqueue");



function lb_boite_carrousel(){
    /////////////////////////////////////// HTML
    // Le conteneur d'une boîte
    $contenu = 
    "<button class='bouton'>Ouvrir carrousel</button>"
     .'<div class="carrousel">'
        .'<button class="carrousel__x">X</button>'
        .'<figure class="carrousel__figure"></figure>'
        .'<form class="carrousel__form"></form>'
    . '</div> <!-- fin class="carrousel" -->';
    
    return $contenu;
   }

   add_shortcode('lb_carrousel', 'lb_boite_carrousel');