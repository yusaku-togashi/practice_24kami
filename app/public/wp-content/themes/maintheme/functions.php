<?php 
function sample_widgets(){
 register_sidebar(array(
 'id' => 'result',
 'before_widget' => '<div>',
 'after_widget' => '</div>',
 'before_title' => '<h3>',
 'after_title' => '</h3>'
 ));
}
add_action('widgets_init', 'sample_widgets');


add_theme_support('post-thumbnails');
?>