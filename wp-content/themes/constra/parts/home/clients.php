<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <?php get_template_part('parts/home/testimonials') ?>
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

            <div class="row all-clients">
              <?php if( have_rows('clients_list', 'option') ): ?>
                <?php while( have_rows('clients_list', 'option') ): the_row(); ?>
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="<?php the_sub_field('client_link') ?>"><img loading="lazy" class="img-fluid" src="<?php the_sub_field('client_logo') ?>"  alt="<?php the_sub_field('client_name') ?> Logo" /></a>
                  </figure>
                </div><!-- Client end -->
              <?php endwhile; ?>
            <?php endif; ?>
          </div><!-- Clients row end -->

        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->