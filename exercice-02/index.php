<?php
/*
  Plugin Name: shortcode
  Description: 
  Author: Alexon
  Version: 1.0.0
 */

function shortcode_show_social_network($atts){

  // en mettant les pramaètres dans shortcode, l'utilsateur peut modifier les liens réseaux sociaux
  // ex: [show_social_network fb='https://www.facebook.com/zuck']
  extract(shortcode_atts(
      array(
        'fb' => 'https://facebook.com',
        'instagram' => 'https://instagram.com',
        'linkedin' => 'https://www.linkedin.com',
        'github' => 'https://github.com/honoagency'

  ), $atts));

  return '<ul>' . '<li>'. $fb .'</li>' . '<li>'. $instagram .'</li>' . '<li>'. $linkedin .'</li>' . '<li>'. $github .'</li>'  . '</ul>';
}

add_shortcode('show_social_network', 'shortcode_show_social_network');
