<?php
// top shared content
get_template_part('parts/top/head');
get_template_part('parts/top/topbar');
get_template_part('parts/top/header');
get_template_part('parts/top/banner');
?>

<?php global $wp_query;
    $post_type_object = get_post_type_object( $wp_query->query_vars['post_type'] );
    echo $post_type_object;
    echo $wp_query->query_vars['post_type'];
?>

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <?php if ( have_posts() ) : ?>

                <div class="page-header">
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                    ?>
                </div>

                <?php // boucle dans les archives
        while ( have_posts() ) :
            the_post(); ?>
                <div class="post">
                    <div class="post-media post-image" onclick="location.href='<?php the_permalink() ?>';"
                        style="cursor: pointer">
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
                                    <i class="far fa-folder-open"></i><a
                                        href="<?php bloginfo('url'); ?>/category/<?php echo get_the_category()[0]->slug; ?>">
                                        <?php echo get_the_category()[0]->name ?></a>
                                </span>
                                <span class="post-meta-date"><i class="far fa-calendar"></i>
                                    <?php the_time('F d, Y') ?></span>

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

                <?php
        endwhile;

        // Navigation
        // the_post_navigation();
    else :
        // No Post Found
    endif;
    ?>
            </div><!-- Content Col end -->

            <div class="col-lg-4">
                <?php get_template_part('parts/sidebar/main') ?>
            </div><!-- Sidebar Col end -->


        </div><!-- Main row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->

<?php
// bottom shared content
get_template_part('parts/bottom/subscribe');
get_template_part('parts/bottom/footer');
get_template_part('parts/bottom/bottombar');
get_template_part('parts/bottom/scripts');
?>