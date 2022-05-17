<div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <?php wp_nav_menu([
                    'menu' =>  'Header Menu',
                    'container_class' =>  'collapse navbar-collapse',
                    'items_wrap' =>  '<ul id="%1$s" class="%2$s nav navbar-nav mr-auto">%3$s</ul>',
                    'add_li_class'  => 'nav-item',
                    'link_class'   => 'nav-link'
                ]); ?>

              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->