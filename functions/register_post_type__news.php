<?php
add_action('init', 'register_post_type__news');
function register_post_type__news() {
  register_post_type(
    'news',
    array(
      'label' => 'お知らせ',
      'labels' => array(
        'add_new' => '新規追加',
        'edit_item' => '編集',
        'view_item' => '表示',
        'search_items' => '検索',
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'news-cat',
    'news',
    array(
      'label' =>  'カテゴリー',
      'labels' => array(
      'popular_items' => 'よく使うカテゴリー',
      'edit_item' => 'カテゴリーを編集',
      'add_new_item' => 'カテゴリーを追加',
      'search_items' =>  'カテゴリーを検索',
     ),
      'public' => true,
      'hierarchical' => true,
      'rewrite' => array('slug' => 'news-cat')
    )
  );

  register_taxonomy(
    'news-tag',
    'news',
    array(
      'label' => 'タグ',
      'rewrite' => array( 'slug' => 'news-tag' ),
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
}
