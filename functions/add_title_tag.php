<?php
add_action('after_setup_theme', 'add_theme_title_tag');
/**
 * title タグを自動的に付加。WordPressでは自分で titie タグを書かず、これに頼ること。
 * after_setup_theme にフック
 */
function add_theme_title_tag():void {
  add_theme_support('title-tag');
}
