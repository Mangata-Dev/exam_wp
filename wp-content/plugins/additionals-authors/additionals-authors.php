<?php
/*
Plugin Name:  Additionals Post Authors
Description:  Permet d'ajouter des auteurs suplémentaires
Version:      1.0
Author:       Mangata Tony
*/


if (!defined('WPINC')) {
    die;
}

add_action('init', 'init_additionals_authors_shortcode');
add_action('add_meta_boxes','add_meta_boxes', 10, 1);
add_action('save_post','save_form', 10, 1);

 function add_meta_boxes()
{
  add_meta_box('post-meta-box', __('Mon post'),'display_form', 'post','normal');
}

function display_form($post)
{

  $additionals_authors = get_post_meta($post->ID, 'post-additionals-authors', true);

  ?>
  <table class="form-table">
    <tbody>
    <tr>
      <th scope="row"><label for="post-additionals-authors">Autheurs du suplémentaires</label></th>
      <td><input type="text" id="post-additionals-authors" name="post-additionals-authors" value="<?= esc_html($additionals_authors) ?>" class="regular-text">
      </td>
    </tr>
    </tbody>
  </table>
  <?php
}

function save_form($post_id)
{
  if (!isset($_POST['post-additionals-authors'])) {
    return;
  }
  update_post_meta($post_id, 'post-additionals-authors', sanitize_text_field($_POST['post-additionals-authors']));
}

function init_additionals_authors_shortcode(){
    add_shortcode('auteurs','get_additionals_authors') ;
}

function get_additionals_authors($attr){
    if(!isset($attr['post']) || empty($attr['post'])){
        return;
    }
  
    if (is_single() or is_page()) {
        $additionals_authors = get_post_meta($attr['post'], 'post-additionals-authors', true);
       
        $author = get_userdata(get_post($attr['post'])->post_author)->user_login ;
        echo $author.', '.$additionals_authors;
    }
}