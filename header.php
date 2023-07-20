<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- <header class="bg-secondary text-white container-fluid m-0 pt-3 pb-3 ps-0 pe-0 ps-sm-1 pe-sm-1 ps-lg-3 pe-lg-3"> -->
<header class="bg-secondary text-white <?= const_outer_container_class_values() ?>">
  <div role="presentation none" class="<?= const_inner_container_class_values() ?>">
    <div role="presentation none" class="row">
      <h1 class="col mb-2 p-1">
        <a class="text-light" href="<?= esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
    <div role="presentation none" class="row">
      <p class="col p-1 m-0"><?php bloginfo('description'); ?></p>
    </div>
  </div>
</header>
