<?php

function slider_show_func( $atts ){
    
    $slider = <<<XML
        
XML;
    include youth_space_slider_plugin_dir_path ().'templates/slider.php';
    return $slider;
}
add_shortcode( 'slider_show', 'slider_show_func' );