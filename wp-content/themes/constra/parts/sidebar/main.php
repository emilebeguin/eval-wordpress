<div class="sidebar sidebar-right">

    <div class="widget recent-posts">
        <h3 class="widget-title">Recent Posts</h3>
        <ul class="list-unstyled">

            <?php  $loop = new WP_Query( array(
                'post_type' => 'post', // fetch all content type member elems
                'posts_per_page' => 3,
                'order' => 'DESC',
            ));?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li class="d-flex align-items-center">
                        <div class="posts-thumb">
                            <a href="#">
                            <?php the_post_thumbnail(
                                'thumb',
                                ['title' => get_the_title()]
                            ) ?>
                            </a>
                        </div>
                        <div class="post-info">
                            <h4 class="entry-title">
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </h4>
                        </div>
                    </li><!-- post end-->
                <?php endwhile;
            wp_reset_query(); ?>

        </ul>
    </div><!-- Recent post end -->


    <?php if ( is_active_sidebar( 'right_sidebar_1' ) ) : ?>
        <?php dynamic_sidebar( 'right_sidebar_1' ); ?>
    <?php endif; ?>
    <script type="text/javascript">
        // pour formater les ul dans les widgets, ce que WP ne permet pas
        document.querySelectorAll('.widget:not(.recent-posts) ul').forEach(
            ul => ul.setAttribute('class', 'arrow nav nav-tabs')
        )
    </script>

</div><!-- Sidebar end -->