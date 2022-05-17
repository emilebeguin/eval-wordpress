<div class="sidebar sidebar-left">
    <div class="widget">
        <h3 class="widget-title">Services</h3>
        <ul class="nav service-menu">
        <?php
            global $post;
            $current_service_id = $post->ID;
            $loop = new WP_Query( array(
              'post_type' => 'service',
          ));
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <li <?php
                if( $current_service_id == get_the_ID() ): echo 'class="active"'; endif;
              ?>>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
              </li>
            <?php endwhile;
          wp_reset_query(); ?>
        </ul>
    </div><!-- Widget end -->
</div><!-- Sidebar end -->