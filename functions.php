<?php 
function blog_assets(){
    wp_enqueue_style("styles", get_template_directory_uri(). "/style.css");
    wp_enqueue_script("script-all", get_template_directory_uri(). "/app.js", array(), '20151215', true);
}

add_action("wp_enqueue_scripts", "blog_assets");

add_theme_support('post-thumbnails'); // добавляет поддержку wp справа картинка

?>

