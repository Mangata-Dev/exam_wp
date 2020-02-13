<?php
/*
Plugin Name:  See Also
Description:  Permet d'afficher un lien vers un article
Version:      1.0
Author:       Mangata Tony
*/


if (!defined('WPINC')) {
    die;
}

add_action('init', 'init_seealso_shortcode');


function init_seealso_shortcode(){
    add_shortcode('voiraussi','get_link_seealso') ;
}

function get_link_seealso($attr){
    if(!isset($attr['id']) || empty($attr['id'])){
        return;
    }
    echo "<a href=\"".get_permalink($attr['id'])."\">Voir aussi: ".get_post($attr['id'])->post_name."</a>" ;
}