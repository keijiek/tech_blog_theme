<?php
const FUNCTIONS_DIR = __DIR__."/functions";

// enqueue. head 部で読み込む css や js 等を指定
require_once FUNCTIONS_DIR."/enqueue_scripts.php";

// after_setup_theme で読み込む関数群を読む
require_once FUNCTIONS_DIR."/register_nav_menues.php";
require_once FUNCTIONS_DIR."/add_title_tag.php";
// require_once FUNCTIONS_DIR."/add_theme_thumbnails_support.php";

// init. register_post_type(/) は init 以降で行わねばならない。
// require_once FUNCTIONS_DIR."/register_post_type__news.php";
// require_once FUNCTIONS_DIR."/register_post_type__post02.php";

// カテゴリー一覧取得
