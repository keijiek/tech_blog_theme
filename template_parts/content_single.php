<article class="ly_post_article">
  <h1 class="ob_post_title"><?= get_the_title(); ?></h1>
  <div class="ly_post_datetimes">
    <p class="ob_post_datetime">公開:<time datetime="<?= get_the_date('Y-m-d');?>"><?= get_the_date();?></time></p>
    <p class="ob_post_datetime">更新:<time datetime="<?= get_the_modified_date('Y-m-d');?>"><?= get_the_modified_date();?></time></p>
  </div>
<?php
// カテゴリーを表示、1つでも存在するなら
if(get_the_category()){
?>
  <div class="ly_post_datetimes">
    <p class="ob_post_datetime">カテゴリー:&nbsp;<?= the_category(', '); ?></p>
  </div>
<?php
}
// タグを表示、1つでも存在するなら
if(get_the_tags()){
?>
  <div class="ly_post_datetimes">
    <p class="ob_post_datetime">タグ:&nbsp;<?= the_tags(', '); ?></p>
  </div>
<?php
}
?>
  <section>
    <?= get_the_content(); ?>
  </section>
  <!-- ページネーション -->
  <div class="more-news">
    <div class="next">
      <!-- <a class="another-link" href="#">NEXT</a> -->
      <?php previous_post_link(); ?>
    </div>
    <div class="prev">
      <!-- <a class="another-link" href="#">PREV</a> -->
      <?php next_post_link(); ?>
    </div>
  </div>
</article>
