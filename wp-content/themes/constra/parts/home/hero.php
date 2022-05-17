<?php // ne fonctionne pas s'il n'y a pas de galerie
    $images = get_field('image_gallery', 'option');
    if( $images ): ?>
    <div class="banner-carousel banner-carousel-1 mb-0">
      <?php foreach( $images as $image ): ?>
        <div class="banner-carousel-item" style="background-image:url(<?php echo esc_url($image['url']); ?>)">
          <div class="slider-content">
              <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                    <?php if(get_field('pre_site_header', 'option')): ?><h2 class="slide-title" data-animation-in="slideInLeft"><?php the_field('pre_site_header', 'option') ?></h2><?php endif; ?>
                      <h3 class="slide-sub-title" data-animation-in="slideInRight"><?php the_field('site_header', 'option') ?></h3>
                      <?php if(get_field('post_site_header', 'option')): ?><h2 class="slide-title" data-animation-in="slideInLeft"><?php the_field('post_site_header', 'option') ?></h2><?php endif; ?>
                      <p data-animation-in="slideInLeft" data-duration-in="1.2">
                          <a href="<?php bloginfo('url') ?>/services" class="slider btn btn-primary">Our Services</a>
                          <a href="<?php bloginfo('url') ?>/contact" class="slider btn btn-primary border">Contact Now</a>
                      </p>
                    </div>
                </div>
              </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
<?php endif; ?>