<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
        <div class="row align-items-center">
          <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
            <a class="d-block" href="<?php bloginfo('url')?>">
              <img loading="lazy" src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="Constra">
            </a>
          </div><!-- logo end -->

          <?php get_template_part('parts/top/header-contact')?>
        </div><!-- logo area end -->

      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <?php get_template_part('parts/top/nav')?>
</header>