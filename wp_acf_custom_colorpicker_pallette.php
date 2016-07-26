<?php

// function.php

add_action( 'acf/input/admin_enqueue_scripts', function() {
  wp_enqueue_script( 'acf-custom-colors', get_template_directory_uri() . '/js/aw-colors.js', 'acf-input', '1.0', true );
});

// aw-colors.js

jQuery(document).ready(function($) {
  if( acf.fields.color_picker ) {
    // custom colors
    var palette = ['#111111', '#333333', '#555555', '#777777', '#999999', '#cccccc'];

    // when initially loaded find existing colorpickers and set the palette
    acf.add_action('load', function() {
      $('input.wp-color-picker').each(function() {
        $(this).iris('option', 'palettes', palette);
      });
    });

    // if appended element only modify the new element's palette
    acf.add_action('append', function(el) {
      $(el).find('input.wp-color-picker').iris('option', 'palettes', palette);
    });
  }
});

?>
