<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
            <ul class="top-info text-center text-md-left">
                <li><i class="fas fa-map-marker-alt"></i> <p class="info-text"> <?php the_field('company_address', 'option') ?></p>
                </li>
            </ul>
            </div>
            <!--/ Top info end -->

            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <?php wp_nav_menu([
                    'menu' =>  'Social Menu',
                    'container' =>  false,
                ]); ?>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>