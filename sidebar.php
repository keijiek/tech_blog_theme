
<aside class="container-fluid">
  <h2 class="h4">カテゴリー</h2>
  <ul>
<?php
  $categories = get_categories();
  foreach ($categories as $category) {
?>
    <li><a href="<?= get_category_link($category->term_id) ?>"><?= $category->name ?></a></li>
<?php
  }
?>
  </ul>
  <h2 class="h4">タグ</h2>
  <ul>
<?php
  $tags = get_tags();
  foreach ($tags as $tag) {
?>
    <li><a href="<?= get_tag_link($tag->term_id) ?>"><?= $tag->name ?></a></li>
<?php
  }
?>
  </ul>
</aside>
