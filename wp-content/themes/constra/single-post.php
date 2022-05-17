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

      <div class="col-lg-8 mb-5 mb-lg-0">

        <div class="post-content post-single">
          <div class="post-media post-image">
            <?php the_post_thumbnail(
                  'news',
                  ['class' => 'img-fluid', 'title' => get_the_title()]
              ) ?>
          </div>

          <div class="post-body">
            <div class="entry-header">
              <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> <?php the_author() ?></a>
                </span>
                <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="<?php bloginfo('url'); ?>/category/<?php echo get_the_category()[0]->slug; ?>"> <?php echo get_the_category()[0]->name ?></a>
                </span>
                <span class="post-meta-date"><i class="far fa-calendar"></i> <?php the_time('F d, Y') ?></span>

              </div>
              <h2 class="entry-title">
              <?php the_title() ?>
              </h2>
            </div><!-- header end -->

            <div class="entry-content">
              <?php the_content() ?>
            </div>

            <div class="tags-area d-flex align-items-center justify-content-between">
              <div class="post-tags">
                <?php the_category(' ') ?>
              </div>
              <div class="share-items">
                <ul class="post-social-icons list-unstyled">
                
                  <li class="social-icons-head">Share:</li>
                  <li><?php echo do_shortcode('[social_warfare]') ?></li>
                </ul>
              </div>
            </div>

          </div><!-- post-body end -->
        </div><!-- post content end -->
        

        <?php comments_template() ?>
        

        <div class="comments-form border-box">
        <?php get_template_part('parts/news/comment-form') ?>

        </div><!-- Comments form end -->
      </div><!-- Content Col end -->

      <div class="col-lg-4">

      <?php get_template_part('parts/sidebar/main') ?>

      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php
// bottom shared content
get_template_part('parts/bottom/subscribe');
get_template_part('parts/bottom/footer');
get_template_part('parts/bottom/bottombar');
get_template_part('parts/bottom/scripts');
?>