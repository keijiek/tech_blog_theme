<?php
get_header();
get_template_part("./template_parts/main_start");
?>

    <h2>404 Error</h2>
    <p>
    お探しのページはありません。<br>
    <a href="<?= home_url();?>">トップへ戻る</a>
    </p>

<?php
get_template_part("./template_parts/main_end");
get_footer();
