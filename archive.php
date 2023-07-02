<?php
get_header();

// h2 の表示を分岐
function head_title():string {
  // カテゴリーの場合
  if(is_category()) {
    // single_cat_title(前置文字列, true=出力処理込み / false=値のみ)
    return single_cat_title('カテゴリー:&nbsp;', false);
  }
  // タグの場合
  if(is_tag()) {
    return single_tag_title('タグ:&nbsp;', false);
  }
  return 'ミス';
}

// 見出しh2
?>
<h2><?= head_title(); ?></h2>
<?php
// メインループ
if(have_posts()) {
  while(have_posts()) {
    the_post();
    if(get_post_status()==='publish') {
?>
  <div>
  <a href="<?= the_permalink($post) ?>"><?= the_title() ?></a>
  </div>
  <div>

  </div>
<?php
    }
  }
}
?>

<?php get_footer();
