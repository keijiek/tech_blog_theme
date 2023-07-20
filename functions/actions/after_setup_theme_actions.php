<?php
/**
 * add theme support 群
 *  - title-tag :
 */
function after_setup_theme_actions():void {
  add_theme_support('html5');
  add_theme_support('title-tag');// 必須。
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails', ['post','page']);
  register_nav_menu('main-menu', 'Main Menu');
}
add_action('after_setup_theme', 'after_setup_theme_actions');
