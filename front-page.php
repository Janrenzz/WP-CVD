<?php get_header(); ?>

     <!-- banner -->
      <section class="banner">
        <div class="container">
            <div class="banner__wrapper">
                <div class="banner__text">
                    <h1><?php echo the_field("title") ?></h1>
                    <p><?php eco the_field("description") ?></p>
                    <a class="btn bg--primary" href="#">EXPLORE MORE</a>
                </div>

                    <?php

                    $banner_image_1 = get_field
                    ("banner_image_1");
                    $banner_image_2 = get_field
                    ("banner_image_2");

                    ?>

                <div class="banner__img">
                    <img src="<?php echo esc_url(wp_get_attachment_image_url) ?>" alt="banner-img">
                </div>
            </div>
        </div>
      </section>

<?php get_footer(); ?>