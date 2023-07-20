<?php
get_header();
get_template_part("./template_parts/main_start");

// 関数の用意

function get_archive_query(string $post_type="post"):array {
  // 共通のquery用引数
  $common_args=[
    'post_type' => $post_type,
    'post_status' => 'publish',
    'posts_per_page' => -1,
  ];

  // カテゴリによる表示を求められているか、タグによる表示を求められているかで、異なるquery用の引数を追加。
  if(is_category()) {
    $common_args['category_name'] = get_query_var('category_name');
  } else if(is_tag()) {
    $common_args['tag'] = get_query_var('tag');
  } else if(is_author()) {// author ページを要求されている場合
    $common_args['author_name'] = get_the_author();// autor 名で投稿を絞るよう引数を追加。
  }

  // 最後に返す
  return $common_args;
}

// 見出しh2
?>
<h2><?= get_the_archive_title() ?></h2>
<?php
$wp_query = new WP_Query(get_archive_query());
// サブループ
if($wp_query->have_posts()) {
?>
<div class="container" role="none">
  <ul class="row list-unstyled justify-content-start">
<?php
  while($wp_query->have_posts()) {
    // イテレータ前進
    $wp_query->the_post();
?>
    <li>
      <a href="<?= the_permalink($post) ?>"><?= the_title() ?></a>
      <span>
        (更新:&nbsp;<time datetime="<?= get_the_modified_date("Y-m-d") ?>"><?= get_the_modified_date()?></time>
      </span>|
      <span>
        投稿:&nbsp;<time datetime="<?= get_the_date("Y-m-d") ?>"><?= get_the_date() ?></time>)
      </span>
    </li>

<?php
  }
?>
  </ul>
</div>
<?php
}
// 最後に取得したデータを消す
wp_reset_postdata();

get_template_part("./template_parts/main_end");
get_footer();
