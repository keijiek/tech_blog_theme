<?php
const FUNCTIONS_DIR = __DIR__."/functions";

// 定数
function const_outer_container_class_values():string {
  return "container-fluid m-0 pt-3 pb-3 ps-3 pe-3";
}
function const_inner_container_class_values():string {
  return "container p-0 mt-0 mb-0";
}

// enqueue. head 部で読み込む css や js 等を指定
require_once FUNCTIONS_DIR."/actions/wp_enqueue_scripts_actions.php";

// after_setup_theme に引っかける処理
require_once FUNCTIONS_DIR."/actions/after_setup_theme_actions.php";
// require_once FUNCTIONS_DIR."/add_theme_thumbnails_support.php";

// init. register_post_type(/) は init 以降で行わねばならない。
// require_once FUNCTIONS_DIR."/register_post_type__news.php";
// require_once FUNCTIONS_DIR."/register_post_type__post02.php";

// カテゴリー一覧取得

// 投稿日、更新日の文字列
function posted_date_and_updated_date():void {
  $posted_at = new DateTime(get_the_date('Y-m-d'));
  $updated_at = new DateTime(get_the_modified_date('Y-m-d'));
?>
  <p class="text-end m-0">
    <time datetime="<?= get_the_date('Y-m-d');?>"><?= get_the_date();?></time>

<?php
  if($posted_at < $updated_at) {

  }
?>
  </p>
<?php
}
