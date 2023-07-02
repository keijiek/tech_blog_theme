<?php
// メニューを追加 (after_setup_theme にフック)
add_action('after_setup_theme', 'register_navigations');
function register_navigations():void {
  register_nav_menu('main-menu', 'Main Menu');
}
