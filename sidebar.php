<?php
function display_menu_common(string $head_name):void {

}

function display_categories_menu(array $categories):void {
?>
  <section>
    <h2 class="h4">カテゴリー</h2>
    <ul>
      <?php
      foreach ($categories as $elm) {
      ?>
      <li><a href="<?= get_category_link($elm->term_id) ?>"><?= $elm->name ?>(<?= $elm->count?>)</a></li>
      <?php
      }
      ?>
    </ul>
  </section>
<?php
}

/**
 * タグ一覧メニューの表示
 */
function display_tags_menu(array $tags):void {
?>
  <section>
    <h2 class="h4">タグ</h2>
    <ul>
      <?php
      foreach ($tags as $elm) {
        ?>
      <li><a href="<?= get_tag_link($elm->term_id) ?>"><?= $elm->name ?>(<?= $elm->count ?>)</a></li>
        <?php
      }
      ?>
    </ul>
  </section>
<?php
}// タグ一覧メニュー表示の終了

function display_month_list():void {

}

/**
 * アサイド表示の本編
 */
?>
<aside class="container-fluid">
<?php
// カテゴリー一覧の表示
$categories = get_categories([
  'taxonomy' => 'category',
  'orderby ' => 'count',
  'order' => 'ASC',
  'hide_empty' => 'true',
  'pad_counts' => 'true',
  'hierarchical ' => 'true',
]);

if( count($categories) > 0 ) {
  display_categories_menu($categories);
}
// タグ一覧の表示
$tags = get_tags();
if( count($tags) > 0 ) {
  display_tags_menu($tags);
}
?>
</aside>
