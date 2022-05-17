<div id="banner-area" class="banner-area" style="background-image:url(<?php bloginfo('template_directory') ?>/images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">
                    <?php if (is_404()) {
                            echo 'Lost ?';
                        } 
                        else if (is_archive()) {
                            the_archive_title();
                        }
                        else {
                            the_title();
                        }
                    ?>
                </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="<?php bloginfo('url')?>">Home</a>
                        </li>
                        <?php if ( $post->post_parent->post_parent ): ?>
                                <li class="breadcrumb-item">
                                    <a href="<?php echo get_permalink( $post->post_parent->post_parent ); ?>" >
                                        <?php echo get_the_title( $post->post_parent->post_parent ); ?>
                                    </a>
                                </li>
                        <?php endif; ?>
                        <?php if ( $post->post_parent ): ?>
                                <li class="breadcrumb-item">
                                    <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
                                        <?php echo get_the_title( $post->post_parent ); ?>
                                    </a>
                                </li>
                        <?php endif; ?>
                        <?php if (is_single() || is_singular( 'service' )): ?>
                        <li class="breadcrumb-item">
                            <a href="<?php bloginfo('url')?>">
                                <?php if (get_post_type() == 'post') {
                                    echo 'news';
                                } else if ( get_post_type() == 'service' ) {
                                    echo 'service';
                                }
                                ?>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="breadcrumb-item">
                            <a href="<?php bloginfo('url')?>">
                                <?php if (is_404()) {
                                    echo '404';
                                } 
                                else if (is_archive()) {
                                    the_archive_title();
                                }
                                else {
                                    echo str_replace('-', ' ', get_post_field( 'post_name', $post));
                                }
                                ?>
                            </a>
                        </li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 
