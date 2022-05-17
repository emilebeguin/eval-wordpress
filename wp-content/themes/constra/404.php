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

      <div class="col-12">
        <div class="error-page text-center">
          <div class="error-code">
            <h2><strong>404</strong></h2>
          </div>
          <div class="error-message">
            <h3>Oops... Page Not Found!</h3>
          </div>
          <div class="error-body">
            Try using the button below to go to main page of the site <br>
            <a href="<?php bloginfo('url')?>" class="btn btn-primary">Back to Home Page</a>
          </div>
        </div>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php
// bottom shared content
get_template_part('parts/bottom/footer');
get_template_part('parts/bottom/bottombar');
get_template_part('parts/bottom/scripts');
?>