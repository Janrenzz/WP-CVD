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
                <div class="banner__img">
                    <img src="./img/Hero.png" alt="banner-img">
                </div>
            </div>
        </div>
      </section>

<?php get_footer(); ?>