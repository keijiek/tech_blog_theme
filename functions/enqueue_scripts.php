<?php
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');
function my_enqueue_scripts():void {
  // ress.min.css を読み込み。
  wp_enqueue_style('reset_css', get_template_directory_uri().'/node_modules/ress/dist/ress.min.css');
  // 自作cssを読み込み。ress.min.css より後に。
  wp_enqueue_style('my_style_css', get_template_directory_uri().'/assets/css/style.min.css', ['reset_css']);
  // wordpress が持っている jquery を読む。
  wp_enqueue_script('jquery');
  // 自作 js を読む。jqurry より後に。
  wp_enqueue_script('my_index_js', get_template_directory_uri().'/assets/js/index.js', ['jquery']);
}
