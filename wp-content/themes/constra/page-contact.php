<?php
// top shared content
get_template_part('parts/top/head');
get_template_part('parts/top/topbar');
get_template_part('parts/top/header');
get_template_part('parts/top/banner');
?>

<section id="main-container" class="main-container">
  <div class="container">

    <?php
    // contact page content
    get_template_part('parts/contact/reach-us');
    get_template_part('parts/contact/map');
    get_template_part('parts/contact/form');
    ?>

  </div><!-- Container end -->
</section><!-- Main container end -->

<?php
// bottom shared content
get_template_part('parts/bottom/footer');
get_template_part('parts/bottom/bottombar');
get_template_part('parts/bottom/scripts');
?>