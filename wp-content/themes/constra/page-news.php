<?php
// top shared content
get_template_part('parts/top/head');
get_template_part('parts/top/topbar');
get_template_part('parts/top/header');
get_template_part('parts/top/banner');
?>

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <?php get_template_part('parts/news/list'); ?>

      <div class="col-lg-4">
          <?php get_template_part('parts/sidebar/main') ?>
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

<?php
// bottom shared content
get_template_part('parts/bottom/footer');
get_template_part('parts/bottom/bottombar');
get_template_part('parts/bottom/scripts');
?>