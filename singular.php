<?php

function main_roop_output():void {
  if(have_posts()){
    while(have_posts()){
      the_post();
      if(is_singular('post')){
        get_template_part("./template_parts/content_single_post");
      } else if(is_singular('page')) {
        get_template_part("./template_parts/content_single_page");
      }
    }
  } else {
    header(' ', true, 404);
  }
}


/**
 * 以降が single.php 本編
 */
get_header();
get_template_part("./template_parts/main_start");

/**
 * is_singular(投稿タイプ)で分岐
 * post と page は共通のメインループ
 */
if( is_singular('post') || is_singular('page') ){
  main_roop_output();
} else if(is_singular('custom_post')) {

} else {
  header('single.phpで分岐ミス', true, 404);
}

get_template_part("./template_parts/main_end");
get_footer();
