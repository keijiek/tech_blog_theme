<?php
get_header();
if(have_posts())  {
  while(have_posts()) {
    // イテレータ前進
    the_post();
    // 投稿の状態が「公開(publish)」なら表示、そうでないなら404エラー
    if(get_post_status()==='publish') {
      // 投稿を表示する部品はテンプレート・パーツで
      get_template_part("./template_parts/content_single");
    } else {
      header(' ', true, 404);
    }
  }
}
get_footer();
