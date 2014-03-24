<?php
add_action('wp_enqueue_scripts', 'ke_enqueue_js');
 
function ke_enqueue_js() {
  wp_enqueue_script('jquery-1.6.3.min', get_template_directory_uri(). '/js/jquery-1.6.3.min.js', array('jquery'));
  wp_enqueue_script('cufon-yui', get_template_directory_uri(). '/js/cufon-yui.js', array('jquery'));
  wp_enqueue_script('cufon-replace', get_template_directory_uri(). '/js/cufon-replace.js', array('jquery'));
  wp_enqueue_script('Vegur_700.font', get_template_directory_uri(). '/js/Vegur_700.font.js', array('jquery'));
  wp_enqueue_script('Vegur_400.font', get_template_directory_uri(). '/js/Vegur_400.font.js', array('jquery'));
  wp_enqueue_script('FF-cash', get_template_directory_uri(). '/js/FF-cash.js', array('jquery'));
  wp_enqueue_script('script', get_template_directory_uri(). '/js/script.js', array('jquery'));
  wp_enqueue_script('easyTooltip', get_template_directory_uri(). '/js/easyTooltip.js', array('jquery'));
  wp_enqueue_script('jquery.easing.1.3', get_template_directory_uri(). '/js/jquery.easing.1.3.js', array('jquery'));
  wp_enqueue_script('hover-image', get_template_directory_uri(). '/js/hover-image.js', array('jquery'));
  wp_enqueue_script('jquery.prettyPhoto', get_template_directory_uri(). '/js/jquery.prettyPhoto.js', array('jquery'));
  wp_enqueue_script('jquery.easing.1.3', get_template_directory_uri(). '/js/jquery.easing.1.3.js', array('jquery'));
  wp_enqueue_script('tms-0.3', get_template_directory_uri(). '/js/tms-0.3.js', array('jquery'));
  wp_enqueue_script('tms_presets', get_template_directory_uri(). '/js/tms_presets.js', array('jquery'));
}

add_theme_support('menus');