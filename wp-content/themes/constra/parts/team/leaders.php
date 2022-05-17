<div class="row text-center">
    <div class="col-lg-12">
    <h3 class="section-sub-title">Our Leaderships</h3>
    </div>
</div>
<!--/ Title row end -->

<div class="row justify-content-center">
<?php
    $loop = new WP_Query( array(
        'post_type' => 'member', // fetch all content type member elems
        'order' => 'ASC',
        'orderby' => 'name', // alpha order
    ));?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();
    if (!get_field('team_leader') == 1 ) { continue; } // if member IS a team leader;
    ?>
    <div class="col-lg-3 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
            <div class="team-img-wrapper">
                <?php the_post_thumbnail(
                    'portrait',
                    ['class' => 'img-fluid', 'title' => get_the_title()]
                ) ?>
            </div>
            <div class="ts-team-content-classic">
                <h3 class="ts-name"><?php the_field('member_first_name') ?> <?php the_field('member_last_name') ?></h3>
                <p class="ts-designation"><?php the_field('member_role'); ?></p>
                <p class="ts-description"><?php the_excerpt() ?></p>
                <?php if( have_rows('member_social') ): // if member has social networks ?>
                        <?php while ( have_rows('member_social') ) : the_row(); // loop in social networks ?>
                            <?php if( have_rows('social_network') ): ?>
                                <?php while ( have_rows('social_network') ) : the_row(); // for each social network ?>
                                    <a target="_blank" href="<?php the_sub_field('social_network_url') ?>"><?php the_sub_field('social_network_icon') ?></a>
                                <?php endwhile; ?>
                            <?php endif;?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <!--/ social-icons-->
            </div>
        </div>
    <!--/ Team wrapper end -->
    <?php endwhile;
    wp_reset_query(); ?>
</div><!-- Content row 1 end -->