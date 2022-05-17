<footer id="footer" class="footer bg-overlay">
  <div class="footer-main">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-4 col-md-6 footer-widget footer-about">
          <h3 class="widget-title">About Us</h3>
          <img loading="lazy" width="200px" class="footer-logo"
            src="<?php bloginfo('template_directory') ?>/images/footer-logo.png" alt="<?php bloginfo('name') ?>">
          <!-- company intro text here -->
          <?php the_field('intro_text', 'option')?>
          <div class="footer-social">
            <?php wp_nav_menu([
                'menu' =>  'Social Menu',
                'container' =>  false,
            ]); ?>
          </div><!-- Footer social end -->
        </div><!-- Col end -->

        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
          <h3 class="widget-title">Working Hours</h3>
                        <?php 
          // vérifie si des horaires existent, sinon renvoie "no hours found"
          if( have_rows('working_hours', 'option') ):
            while ( have_rows('working_hours', 'option') ) : the_row(); ?>

              <div class="working-hours">
              <?php // texte éditable des horaires
              the_sub_field('working_hours_text', 'option') ?>
                <ul>
                  <?php 
                    // boucle dans chaque ligne d'horaire
                    if( have_rows('schedule', 'option') ):
                    while ( have_rows('schedule', 'option') ) : the_row(); ?>
                    
                      <br> <?php the_sub_field('schedule_week_days', 'option') ?> <span class="text-right"><?php the_sub_field('schedule_hours', 'option') ?> </span>

                    <?php endwhile; ?>
                  <?php else :
                    // si aucun horaire n'a été introduit par l'utilisateur ?>
                    <br>No hours found.
                  <?php endif;?>
                </ul>

          <?php endwhile;
                endif; ?>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
          <h3 class="widget-title">Services</h3>
          <ul class="list-arrow">
          <?php $loop = new WP_Query( array(
              'post_type' => 'service',
          ));
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <li>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </li>
            <?php endwhile;
          wp_reset_query(); ?>
          </ul>
        </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Footer main end -->
</footer>