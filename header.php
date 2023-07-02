<!DOCTYPE html>
<html <?php language_attributes('html'); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="ly_header">
  <div class="ly_header_inner">
    <h1 class="global_head">
      <a class="global_head_anchor" href="<?= esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a>
    </h1>
    <p class="global_head_catchphrase"><?php bloginfo('description'); ?></p>
  </div>
</header>

<main class="ly_main">
  <div class="ly_main_inner">
