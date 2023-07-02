<?php
add_action('init', 'register_post_type__post02');
function register_post_type__post02() {
  register_post_type(
    'post02',
    [
      'label' => '投稿02',
      'labels' => [
        'add_new' => '新規追加',
        'edit_item' => '編集',
        'view_item' => '表示',
        'search_items' => '検索',
      ],
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 6,
      'taxonomies' => ['category'],
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    ],
  );
}
