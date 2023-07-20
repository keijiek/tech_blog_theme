<?php
get_header(null,[]);
get_template_part("./template_parts/main_start");
?>
  <h2>投稿一覧</h2>
<?php
$wp_query = new WP_Query([
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => -1,
]);

// 1件でも投稿があれば表示開始
if( $wp_query->have_posts() ) {
?>
<div class="container" role="none">
  <ul class="row list-unstyled justify-content-start">
<?php
  // 投稿がある限り表示ループ
  while ( $wp_query->have_posts() ) {
    // イテレータ前進
    $wp_query->the_post();
?>
    <li class="col-md-6 mb-2 ps-0 ps-md-1 pe-0 pe-md-1">
      <div class="card p-3 h-100">
        <div class="card_body">
          <h3 class="card_title h4"><a href="<?= esc_url(get_permalink()) ?>"><?= the_title() ?></a></h3>
          <div class="card_text">
            <p class="m-0">categories:&nbsp;<?= the_category(', '); ?></p>
<?php
    if( has_tag() ) { //タグがあるなら表示
?>
            <p class="m-0">tag:&nbsp;<?= the_tags(', '); ?></p>
<?php } ?>
            <p class="m-0">By&nbsp;<?= get_the_author_posts_link() ?></p>
            <p class="m-0">posted:&nbsp;<time datetime="<?= get_the_date("Y-m-d") ?>"><?= get_the_date() ?></time></p>
            <p class="m-0">updated:&nbsp;<time datetime="<?= get_the_modified_date("Y-m-d") ?>"><?= get_the_modified_date() ?></time></p>
      </div>
    </li>
<?php
  }
?>
  </ul><!-- ul.post_list -->
</div>
<?php
// 投稿がなければその旨を表示
} else {
?>
  <p>投稿はありません。</p>
<?php
}
// 最後に取得したデータを消す
wp_reset_postdata();

get_template_part("./template_parts/main_end");
get_footer();
