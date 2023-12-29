<?php 
  /*
    Plugin Name: Udigital Block
    Description: Udigital custom block for Guntenberg
  */

  function udigital_custom_block_register_script(){
    wp_enqueue_script('udigital-custom-block', plugin_dir_url(__FILE__).'udigital-custom.js', array('wp-blocks','wp-i18n','wp-editor'),true,false);
  }

  add_action('enqueue_block_editor_assets','udigital_custom_block_register_script');
?>