<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
              <h2 class="into-title">About Us</h2>
              <h3 class="into-sub-title"><?php the_field('motto', 'option') ?></h3>
              <p><?php the_field('intro_text', 'option') ?></p>
          </div><!-- Intro box end -->

          <div class="gap-20"></div>

          <div class="row">
          
          <div class="row">
            <?php if( have_rows('company_highlights', 'option') ): ?>
                <?php while( have_rows('company_highlights', 'option') ): the_row(); ?>
                  <div class="col-md-6">
                    <div class="ts-service-box">
                        <span class="ts-service-icon">
                          <?php the_sub_field('highlight_icon') ?>
                        </span>
                        <div class="ts-service-box-content">
                          <h3 class="service-box-title"><?php the_sub_field('highlight_text') ?></h3>
                        </div>
                    </div><!-- Service 1 end -->
                  </div><!-- col end -->
                <?php endwhile; ?>
              <?php endif; ?>


              </div><!-- col end -->
          </div><!-- Content row 1 end -->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title">Our Values</h3>
          <p><?php the_field('values_intro', 'option') ?></p>
          
          <div class="accordion accordion-group" id="our-values-accordion">

              <?php if( have_rows('value_1', 'option') ): ?>
                <?php while( have_rows('value_1', 'option') ): the_row(); ?>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <?php the_sub_field('name'); ?>
                          </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                        <div class="card-body">
                          <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('value_2', 'option') ): ?>
                <?php while( have_rows('value_2', 'option') ): the_row(); ?>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <?php the_sub_field('name'); ?>
                          </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                        <div class="card-body">
                          <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('value_3', 'option') ): ?>
                <?php while( have_rows('value_3', 'option') ): the_row(); ?>
                  <div class="card">
                    <div class="card-header p-0 bg-transparent" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <?php the_sub_field('name'); ?>
                          </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                        <div class="card-body">
                            <?php the_sub_field('description'); ?>
                        </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->