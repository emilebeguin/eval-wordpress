<?php
// top shared content
get_template_part('parts/top/head');
get_template_part('parts/top/topbar');
get_template_part('parts/top/header');
get_template_part('parts/top/banner');
?>
<section id="main-container" class="main-container pb-2">
  <div class="container">
    <?php
        // page services content
        get_template_part('parts/services/content');
        get_template_part('parts/services/list');
    ?>
  </div><!-- Conatiner end -->
</section><!-- Main container end -->
<?php
// bottom shared content
get_template_part('parts/bottom/subscribe');
get_template_part('parts/bottom/footer');
get_template_part('parts/bottom/bottombar');
get_template_part('parts/bottom/scripts');
?>