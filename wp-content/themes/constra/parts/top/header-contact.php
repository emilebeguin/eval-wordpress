<div class="col-lg-9 header-right">
    <ul class="top-info-box">
        <li>
        <div class="info-box">
            <div class="info-box-content">
                <p class="info-box-title">Call Us</p>
                <p class="info-box-subtitle"><a href="tel:<?php the_field('company_phone', 'option')?>"><?php the_field('company_phone', 'option')?></a></p>
            </div>
        </div>
        </li>
        <li>
        <div class="info-box">
            <div class="info-box-content">
                <p class="info-box-title">Email Us</p>
                <p class="info-box-subtitle"><a href="mailto:<?php the_field('company_email', 'option')?>"><?php the_field('company_email', 'option')?></a></p>
            </div>
        </div>
        </li>
        <li class="last">
        <div class="info-box last">
            <div class="info-box-content">
                <p class="info-box-title">Global Certificate</p>
                <p class="info-box-subtitle"><?php the_field('iso_certificate', 'option')?></p>
            </div>
        </div>
        </li>
        <li class="header-get-a-quote">
        <a class="btn btn-primary" href="<?php bloginfo('url')?>/contact">Get A Quote</a>
        </li>
    </ul><!-- Ul end -->
</div><!-- header right end -->