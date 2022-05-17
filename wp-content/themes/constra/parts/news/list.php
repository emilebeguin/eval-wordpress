<div class="col-lg-8 mb-5 mb-lg-0">

<?php
    $loop = new WP_Query( array(
        'post_type' => 'post', // fetch all content type member elems
        'order' => 'DESC',
    ));?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="post">
            <div class="post-media post-image" onclick="location.href='<?php the_permalink() ?>';" style="cursor: pointer">
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
                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h2>
                </div><!-- header end -->

                <div class="entry-content">
                    <p><?php the_excerpt() ?></p>
                </div>

                <div class="post-footer">
                    <a href="<?php the_permalink() ?>" class="btn btn-primary">Continue Reading</a>
                </div>

            </div><!-- post-body end -->
        </div><!-- post end -->
    <?php endwhile;
    wp_reset_query(); ?>

</div><!-- Content Col end -->