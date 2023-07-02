<?php
// サムネイルの機能を追加する (after_setup_theme にフック)
add_action('after_setup_theme', 'add_theme_thumbnails_support');
function add_theme_thumbnails_support():void {
  add_theme_support('post-thumbnails',['post','page','news']);
  add_image_size('page_eyecatch', 1100, 610, true);
  add_image_size('archive_thumnail', 200, 50, true);
}
