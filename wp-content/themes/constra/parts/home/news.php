<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
        <h2 class="section-title">Live from</h2>
        <h3 class="section-sub-title">Our blog</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <?php $loop = new WP_Query( array(
          'post_type' => 'post', // fetch all content type member elems
          'order' => 'DESC',
          'posts_per_page' => 3
      ));?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
                <div class="latest-post-media">
                  <a href="<?php the_permalink() ?>" class="latest-post-img">
                    <?php the_post_thumbnail(
                      'news',
                      ['class' => 'img-fluid']
                    ) ?>
                  </a>
                </div>
                <div class="post-body">
                  <h4 class="post-title">
                      <a href="<?php the_permalink() ?>" class="d-inline-block"><?php the_title() ?></a>
                  </h4>
                  <div class="latest-post-meta">
                      <span class="post-item-date">
                        <i class="fa fa-clock-o"></i> <?php the_time('F d, Y') ?>
                      </span>
                  </div>
                </div>
            </div><!-- Latest post end -->
          </div><!-- post col end -->
        <?php endwhile;
      wp_reset_query(); ?>
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="<?php bloginfo('url') ?>/news">See All Posts</a>
    </div>

  </div>
  <!--/ Container end -->
</section>
<!--/ News end -->