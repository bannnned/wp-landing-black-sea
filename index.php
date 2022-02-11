<?php
/* 
Template name: Main */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SlickJS -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!--  -->

  <title>New document</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css<?php echo '?' . filemtime(get_stylesheet_directory() . '/style.css'); ?>" />

  <style></style>
</head>

<body>



  <?php get_header(); ?>

  <main class="main">
    <div class="slider">
      <div class="slider__media">
      <?php  
      $image = get_field('feature_image');
      $picture = $image['sizes']['large'];
      $thumb = $image['sizes']['thumbnail'];
      ?>
        <div class="slider__img-container">
        <img
              src="<?php echo $picture;?>"
              alt=""
              class="slider__img"
            />
            </div>

        <div class="slider__img-container">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/img/slider/img-1.jpg"
              alt=""
              class="slider__img"
            />
          </div>
          <div class="slider__img-container">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/img/slider/img-2.jpg"
              alt=""
              class="slider__img"
            />
          </div>
          <div class="slider__img-container">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/img/slider/img-3.jpg"
              alt=""
              class="slider__img"
            />
          </div>
          <div class="slider__img-container">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/img/slider/img-4.jpg"
              alt=""
              class="slider__img"
            />
          </div>
          <div class="slider__img-container">
            <img
              src="<?php echo get_template_directory_uri() ?>/assets/img/slider/img-5.jpg"
              alt=""
              class="slider__img"
            />
          </div>
      </div>
      <div class="slider__content">
        <h1 class="slider__text">We need the tonic of wildness</h1>
        <button class="slider__button">Read More</button>
      </div>
    </div>
    <div class="block-1">
      <div class="block-1__content">
        <h1 class="block-1__title">
          At the same time that we are earnest to explore & learn all things
        </h1>
        <p class="block-1__paragraph">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text
          ever since the 1500s, when an unknown printer took a galley of type
          and scrambled it to make a type specimen book.
        </p>
        <div class="block-1__media">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-basket.svg" alt="" class="block-1__img" /><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-planet.svg" alt="" class="block-1__img" /><img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-case.svg" alt="" class="block-1__img" />
        </div>
      </div>
    </div>
    <div class="block-2">
      <div class="block-2__content">
        <div class="block-2__top">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/avatar.png" alt="" class="block-2__img-avatar" />
          <div class="block-2__title">
            <h1 class="block-2__name">Dhavan</h1>
            <h1 class="block-2__quotes">“</h1>
          </div>
        </div>

        <p class="block-2__paragraph">
          Lorem Ipsum is simply dummy text of the printing and typesetting
          industry. Lorem Ipsum has been the industry's standard dummy text
          ever since the 1500s, when an unknown printer took a galley of type
          and scrambled it to a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting
        </p>
      </div>
    </div>
    <div class="block-3">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d15978.834741386043!2d30.29439768889725!3d59.95944551010021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle%20maps!5e0!3m2!1sen!2sru!4v1643885870595!5m2!1sen!2sru" style="border: 0" allowfullscreen="" loading="lazy" class="block-3__map"></iframe>

      <div class="block-3__content">
        <div class="block-3__content-bg"></div>
        <form action="" class="block-3__form">
          <input class="block-3__input _name _req" placeholder="Name">
          <input class="block-3__input _email _req" placeholder="Email Adress">
          <input class="block-3__input-message block-3__input" placeholder="Message">
          <button class="block-3__button"><img src="<?php echo get_template_directory_uri() ?>/assets/img/big-checkmark.png" alt=""  /></button>
          
        </form>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <!-- Slick Slider -->
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/slick.min.js"></script>
  <!-- Scripts -->
  <script src="<?php echo get_template_directory_uri() ?>/assets/js/script.js <?php echo '?' . filemtime(get_stylesheet_directory() . '/assets/js/script.js'); ?>"></script>
</body>

</html>