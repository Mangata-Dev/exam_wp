<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
register_nav_menus(array('header'=>'Custom Primary Menu'));

/*
    Charge mes fichiers styles et scripts
 */
function myStyle_enqueue(){

    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('bootstrapCss', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'),'',true);
    wp_enqueue_script('bootstrapJs', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'),'',true);

}
add_action('wp_enqueue_scripts','myStyle_enqueue');

function apotheosis_widgets_init(){
    register_sidebar(array(
        'name' => 'sidebar',
        'id'   => 'sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="ttl">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_inits', 'apotheosis_widgets_init');