<?php get_header(); ?>
  <h2>投稿一覧</h2>
<?php
$wp_query = new WP_Query([
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1
]);

// 1件でも投稿があれば表示開始
if( $wp_query->have_posts() ) {
?>
  <ul class="post_list">
<?php
  // 投稿がある限り表示ループ
  while ( $wp_query->have_posts() ) {
    // イテレータ前進
    $wp_query->the_post();
?>
    <li class="post_list__item">
      <h3 class="post_list__item_title"><a href="<?= esc_url(get_permalink()) ?>"><?= the_title() ?></a></h3>
      <div class="post_list__item_date_set">
        <div class="post_list__item_date">投稿:<time datetime="<?= get_the_date("Y-m-d") ?>"><?= get_the_date() ?></time><div>
        <div class="post_list__item_date">更新:<time datetime="<?= get_the_modified_date("Y-m-d") ?>"><?= get_the_modified_date() ?></time></div>
      </div>
    </li>
<?php
  }
?>
  </ul><!-- ul.post_list -->
<?php
// 投稿がなければその旨を表示
} else {
?>
  <p>投稿はありません。</p>
<?php
}
// 最後に取得したデータを消す
wp_reset_postdata();

get_footer();
