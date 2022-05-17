<div class="row">

<?php
    $loop = new WP_Query( array(
        'post_type' => 'service', // Va rechercher le type de contenu service
        'order' => 'ASC', // Chronologique (par défaut date)
    ));?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>

        <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
                <img loading="lazy" class="w-100" src="<?php the_post_thumbnail_url()?>" alt="service-image">
            </div>
            <div class="d-flex">
                <div class="ts-service-box-img">
                    <img loading="lazy" src="<?php the_field('service_icon') ?>" alt="service-icon">
                </div>
                <div class="ts-service-info">
                    <h3 class="service-box-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                    <p><?php the_excerpt() ?></p>
                    <a class="learn-more d-inline-block" href="<?php the_permalink() ?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                </div>
            </div>
        </div><!-- Service1 end -->
        </div><!-- Col 1 end -->

    <?php endwhile;
wp_reset_query(); ?>

</div><!-- Main row end -->