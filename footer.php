
<footer class="bg-secondary text-white <?= const_outer_container_class_values() ?>">
  <div role="presentation none" class="<?= const_inner_container_class_values() ?>">
    <div role="presentation none" class="row">
      <h2 class="col h4 p-0">
        <a class="text-light text-decoration-none" href="<?= esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a>
      </h2>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
