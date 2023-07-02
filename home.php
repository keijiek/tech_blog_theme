<?php get_header(); ?>
    <h2>投稿一覧</h2>

<?php
if (have_posts())  {
?>
    <dl class="post_list">
<?php
  while (have_posts()) {
    the_post();
    if(get_post_status()==='publish') {
?>
        <div class="post_list__item">
          <dt>
            <a href="<?= the_permalink($post) ?>"><?= the_title() ?></a>
          </dt>
          <dd>
            <div class="post_list__item_date">
              <p>category&nbsp;:&nbsp;<?= the_category('/') ?></p>
              <p>posted&nbsp;on<time datetime="<?= get_the_date("Y-m-d") ?>"><?= get_the_date() ?></time></p>
              <p>updated&nbsp;on<time datetime="<?= get_the_modified_date("Y-m-d") ?>"><?= get_the_modified_date()?></time></p>
            </div>
          </dd>
        </div>
<?php
    }
  }
?>
    </dl>
<?php
} else {
?>
    <p>投稿はありません。</p>
<?php
}
get_footer();
