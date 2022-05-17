<h3 class="column-title">Testimonials</h3>

<div id="testimonial-slide" class="testimonial-slide">
  <?php $loop = new WP_Query( array(
      'post_type' => 'testimonial', // fetch all content type member elems
      'order' => 'DESC',
  ));?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="item">
            <div class="quote-item">
                <span class="quote-text">
                  <?php the_excerpt() ?>
                </span>
                <div class="quote-item-footer">
                  <img loading="lazy" class="testimonial-thumb" src="<?php the_field('commentator_profile_picture') ?>" alt="testimonial">
                  <div class="quote-item-info">
                      <h3 class="quote-author"><?php the_field('commentator_name') ?></h3>
                      <span class="quote-subtext"><?php the_field('commentator_job') ?><?php if(get_field('commentator_job') && get_field('commentator_company')) {echo ', ';}; the_field('commentator_company') ?></span>
                  </div>
                </div>
            </div><!-- Quote item end -->
          </div>
        <!--/ Item 1 end -->
      <?php endwhile;
    wp_reset_query(); ?>

</div>